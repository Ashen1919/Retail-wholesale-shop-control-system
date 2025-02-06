// Add event listener for given amount input and initialize event handlers
function initializeEventHandlers() {
    const givenAmountInput = document.querySelector('.amount-section .styled-input-box:nth-child(2) input');
    
    if (givenAmountInput) {
        // Remove any existing event listeners
        givenAmountInput.removeEventListener('input', handleGivenAmountChange);
        // Add new event listener
        givenAmountInput.addEventListener('input', handleGivenAmountChange);
    }
}

// Handler for given amount changes
function handleGivenAmountChange(event) {
    updateBalance();
}

// Call initializeEventHandlers when the page loads
window.addEventListener('load', initializeEventHandlers);

// Also call it when the DOM is ready
document.addEventListener('DOMContentLoaded', initializeEventHandlers);

// Add this at the beginning of your JavaScript file to ensure it runs when the page loads
document.addEventListener('DOMContentLoaded', function() {
    // Get the given amount input element
    const givenAmountInput = document.querySelector('.amount-section .styled-input-box:nth-child(2) input');
    
    // Add event listener for input changes
    if (givenAmountInput) {
        givenAmountInput.addEventListener('input', updateBalance);
        console.log('Event listener added to given amount input');
    }
});

window.onload = function() {
    console.log("Window loaded! Fetching in-progress orders...");
    populateBillNumberDropdown();  // Fetch in-progress orders to populate the dropdown
};

function populateBillNumberDropdown() {
    console.log("Fetching in-progress orders...");

    const xhr = new XMLHttpRequest();
    xhr.open("GET", "handleCounter.php?get_in_progress_orders=true", true);

    xhr.onload = function() {
        console.log("AJAX request finished!");
        if (xhr.status === 200) {
            try {
                console.log("Response received:", xhr.responseText);
                const response = JSON.parse(xhr.responseText);

                if (response.success) {
                    console.log("In-progress orders found:", response.orders);

                    const savedBillsDropdown = document.getElementById("savedBills");
                    savedBillsDropdown.innerHTML = '';  // Clear previous options

                    const defaultOption = document.createElement("option");
                    defaultOption.value = "";
                    defaultOption.textContent = "Saved";
                    defaultOption.disabled = true;
                    defaultOption.selected = true;
                    savedBillsDropdown.appendChild(defaultOption);

                    // Add each in-progress order to the dropdown
                    response.orders.forEach(orderId => {
                        console.log("Adding order:", orderId);
                        const option = document.createElement("option");
                        option.value = orderId;
                        option.textContent = orderId;
                        savedBillsDropdown.appendChild(option);
                    });
                } else {
                    console.error("No in-progress orders found.");
                }
            } catch (error) {
                console.error("Error parsing JSON response:", error);
            }
        } else {
            console.error("Failed to fetch data. HTTP Status:", xhr.status);
        }
    };

    xhr.send();
}

// Function to update the bill number input when an order is selected
function updateBillNumberInput() {
    const savedBillsDropdown = document.getElementById("savedBills");
    const billNumberInput = document.getElementById("billNumber");

    // Get the selected order ID from the dropdown
    const selectedOrderId = savedBillsDropdown.value;

    // Update the input field with the selected order ID
    billNumberInput.value = selectedOrderId;
}







function newBill() {
    // Step 1: Create an AJAX request to fetch the last order ID from the backend
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "handleCounter.php?get_last_id=true", true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            try {
                // Parse JSON response
                const response = JSON.parse(xhr.responseText);
                
                if (response.success) {
                    const lastOrderId = response.last_order_id.trim();  // The last order ID returned from the backend
                    console.log(lastOrderId);

                    // Step 2: Increment the order ID to generate the new one
                    const orderId = generateNextId(lastOrderId);

                    // Step 3: Get the current date and time
                    const now = new Date();

                    // Get the current date in local format (YYYY-MM-DD)
                    const currentDate = now.getFullYear() + '-' + 
                                        String(now.getMonth() + 1).padStart(2, '0') + '-' + 
                                        String(now.getDate()).padStart(2, '0');

                    // Get the current time in local format (HH:MM:SS)
                    const currentTime = now.toLocaleTimeString([], { hour12: false });

                    // Add the Order ID to the dropdown
                    const billNumberDropdown = document.getElementById("billNumber");
                    const newOption = document.createElement("option");
                    newOption.value = orderId;
                    newOption.textContent = orderId;
                    billNumberDropdown.appendChild(newOption);

                    // Automatically select the newly added Order ID
                    billNumberDropdown.value = orderId;

                    // Update the Date and Time input fields
                    document.getElementById("orderDate").value = currentDate;
                    document.getElementById("orderTime").value = currentTime;

                    // Set "Retail" radio button as default
                    document.getElementById("retail").checked = true;

                    // Optionally log the details
                    console.log(`Order ID: ${orderId}, Date: ${currentDate}, Time: ${currentTime}`);
                } else {
                    console.error("Failed to fetch order ID:", response.message);
                }
            } catch (error) {
                console.error("Error parsing JSON response:", error);
            }
        } else {
            console.error("Failed to fetch data. HTTP Status:", xhr.status);
        }
    };
    xhr.send();
}


function generateNextId(lastOrderId) {
    if (!lastOrderId || !/^O-\d{5}$/.test(lastOrderId)) {
        return "O-00001"; // Default if the format is incorrect
    }

    // Extract the number part of the last ID (e.g., 'O-00001' -> '00001')
    const numberPart = lastOrderId.substring(2); // Get the number after "O-"

    // Increment the number safely
    const nextNumber = parseInt(numberPart, 10) + 1;

    // Format the new ID (e.g., O-00002)
    return "O-" + String(nextNumber).padStart(5, "0");
}


function searchCustomer() {
    var input = document.getElementById("customer");
    var filter = input.value.toLowerCase(); // Convert the input to lowercase
    var select = document.getElementById("customerDropdown");
    var options = select.getElementsByTagName("option");

    // Show the dropdown if the input is not empty, hide it if empty
    if (filter === "") {
        select.style.display = "none"; // Hide dropdown if input is empty
    } else {
        select.style.display = "block"; // Show dropdown if input is not empty
    }

    // Clear the dropdown before repopulating it
    select.innerHTML = "";

    // If the input field is not empty, call the server to fetch matching customers
    if (filter !== "") {
        fetch('handleCounter.php', {
            method: 'POST',
            body: JSON.stringify({ searchCustomer: filter }),
            headers: { 'Content-Type': 'application/json' },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Populate the dropdown with matching customers
                data.customers.forEach(customer => {
                    var option = document.createElement("option");
                    option.value = customer.id;
                    option.textContent = `${customer.first_name} ${customer.last_name}`;  // Concatenate first and last name
                    select.appendChild(option);
                });
            } else {
                console.error("No customers found.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
}


function selectCustomer() {
    var select = document.getElementById("customerDropdown");
    var selectedValue = select.options[select.selectedIndex].value;
    var selectedText = select.options[select.selectedIndex].textContent;

    // Set the value of the input to the selected customer's name
    document.getElementById("customer").value = selectedText;

    // Optionally, store the customer ID in a hidden field or handle it as needed
    // document.getElementById("customerId").value = selectedValue;

    // Hide the dropdown after selection
    select.style.display = "none";
}


function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

function resetPage() {
    // Reload the page to reset everything
    location.reload();
}

function submitCustomerForm(event) {
    event.preventDefault(); // Prevent normal form submission

    // Get form data
    const form = document.getElementById('registerCustomerForm');
    const formData = new FormData(form);

    // Use AJAX to send form data
    fetch('submitCustomerForm.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            closeModal('registerCustomerModal');
        } else {
            alert("Error: " + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

window.onload = function() {
    const defaultProductId = document.getElementById("productID").value;
    if (defaultProductId) {
        fetchProductDetails(defaultProductId); // Show details based on default selection
    }
};

function searchProduct() {
    var input = document.getElementById("productID");
    var filter = input.value.toLowerCase(); // Convert the input to lowercase
    var select = document.getElementById("productIDDropdown");
    var options = select.getElementsByTagName("option");

    // Show the dropdown if the input is not empty, hide it if empty
    if (filter === "") {
        select.style.display = "none"; // Hide dropdown if input is empty
    } else {
        select.style.display = "block"; // Show dropdown if input is not empty
    }

    // Clear the dropdown before repopulating it
    select.innerHTML = "";

    // If the input field is not empty, call the server to fetch matching product IDs
    if (filter !== "") {
        fetch('handleCounter.php', {
            method: 'POST',
            body: JSON.stringify({ search: filter }),
            headers: { 'Content-Type': 'application/json' },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Populate the dropdown with matching product IDs
                data.products.forEach(product => {
                    var option = document.createElement("option");
                    option.value = product.product_id;
                    option.textContent = product.product_id;
                    select.appendChild(option);
                });
            } else {
                console.error("No products found.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
}



function selectProduct() {
    var select = document.getElementById("productIDDropdown");
    var selectedValue = select.value;

    if (selectedValue) {
        // Set the value of the input field
        document.getElementById("productID").value = selectedValue;

        // Fetch product details
        fetchProductDetails(selectedValue);
        
        // Hide the dropdown
        select.style.display = "none";
    }
}

function fetchProductDetails(productId) {
    var type = document.querySelector('input[name="type"]:checked')?.value; // Get selected radio button (retail or wholesale)

    if (!type) {
        alert("Please select Retail or Wholesale.");
        return;
    }

    console.log("Selected type:", type); // Debug: Check which type is selected

    fetch('handleCounter.php', {
        method: 'POST',
        body: JSON.stringify({ product_id: productId, type: type }),
        headers: { 'Content-Type': 'application/json' },
    })
    .then(response => response.json())  // Assuming response is JSON
    .then(data => {
        if (data.success) {
            document.getElementById("name").value = data.product.name;
            var price = data.price; // Use the price from the response
            document.getElementById("sellingPrice").value = price; // Update unit price based on type
        } else {
            alert("Product not found.");
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


// Call fetchProductDetails when radio button value changes
const radioButtons = document.getElementsByName("type");

radioButtons.forEach(radio => {
    radio.addEventListener("change", function() {
        var productId = document.getElementById("productID").value;
        if (productId) {
            fetchProductDetails(productId); // Update unit price based on selected type
        }
    });
});



document.addEventListener('DOMContentLoaded', function () {
    console.log("DOM fully loaded and parsed");

    // Function to update the amount based on quantity and unit price
    function updateAmount() {
        var quantityInput = document.getElementById("quantity");
        var unitPriceInput = document.getElementById("sellingPrice");

        if (quantityInput && unitPriceInput) {
            console.log("Quantity and Unit Price fields found");

            var quantity = parseFloat(quantityInput.value) || 0;
            var unitPrice = parseFloat(unitPriceInput.value) || 0;

            var amount = quantity * unitPrice;

            var amountInput = document.getElementById("amount");
            if (amountInput) {
                amountInput.value = amount.toFixed(2);
            } else {
                console.log("Amount input field not found!");
            }
        } else {
            console.log("One or both input fields (quantity, unit price) not found.");
        }
    }

    // Wait until the necessary fields are rendered
    var intervalId = setInterval(function() {
        var quantityInput = document.getElementById("quantity");
        var unitPriceInput = document.getElementById("sellingPrice");

        if (quantityInput && unitPriceInput) {
            console.log("Both quantity and unit price fields are ready.");

            // Add event listeners for input changes
            quantityInput.addEventListener('input', updateAmount);
            unitPriceInput.addEventListener('input', updateAmount);

            // Clear the interval once fields are found and event listeners are attached
            clearInterval(intervalId);
        } else {
            console.log("Waiting for quantity and unit price fields...");
        }
    }, 100);

    // Modified fetchProductDetails function to update amount after price change
    window.fetchProductDetails = function(productId) {
        var type = document.querySelector('input[name="type"]:checked')?.value;

        if (!type) {
            alert("Please select Retail or Wholesale.");
            return;
        }

        console.log("Selected type:", type);

        fetch('handleCounter.php', {
            method: 'POST',
            body: JSON.stringify({ product_id: productId, type: type }),
            headers: { 'Content-Type': 'application/json' },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById("name").value = data.product.name;
                var price = data.price;
                document.getElementById("sellingPrice").value = price;
                // After updating the price, recalculate the amount
                updateAmount();
            } else {
                alert("Product not found.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    // Modified radio button event listeners to update amount when type changes
    const radioButtons = document.getElementsByName("type");
    radioButtons.forEach(radio => {
        radio.addEventListener("change", function() {
            var productId = document.getElementById("productID").value;
            if (productId) {
                fetchProductDetails(productId);
            }
        });
    });

    // Add event listener for given amount input
    const givenAmountInput = document.querySelector('.amount-section .styled-input-box:nth-child(2) input');
    if (givenAmountInput) {
        givenAmountInput.addEventListener('input', function() {
            updateBalance();
        });
    }
});




// Update the existing updateBalance function
function updateBalance() {
    const totalAmountInput = document.querySelector('.amount-section .styled-input-box:first-child input');
    const givenAmountInput = document.querySelector('.amount-section .styled-input-box:nth-child(2) input');
    const balanceInput = document.querySelector('.amount-section .styled-input-box:last-child input');
    const lendingAmountInput = document.querySelector('#styled-input-box input');
    const lendingCheckbox = document.querySelector('input[value="lending"]');

    const totalAmount = parseFloat(totalAmountInput.value) || 0;
    const givenAmount = parseFloat(givenAmountInput.value) || 0;
    const lendingAmount = (lendingCheckbox && lendingCheckbox.checked) ? (parseFloat(lendingAmountInput.value) || 0) : 0;

    // Calculate amount to be paid after lending
    const amountAfterLending = totalAmount - lendingAmount;

    // Calculate balance based on given amount and amount after lending
    const balance = givenAmount - amountAfterLending;

    // Update balance display
    balanceInput.value = balance.toFixed(2);
    console.log('Balance updated:', balance.toFixed(2));
}

// Function to update the total amount
function updateTotalAmount() {
    const tableBody = document.getElementById("tableBody");
    let totalAmount = 0;

    // Loop through the rows and sum up the amounts
    const rows = tableBody.querySelectorAll("tr");
    rows.forEach(row => {
        const amountCell = row.cells[5];
        const amount = Math.abs(parseFloat(amountCell.textContent)) || 0; // Use Math.abs to ensure positive value

        if (amount > 0) {
            totalAmount += amount;
        }
    });

    // Update the Total Amount field
    const totalAmountInput = document.querySelector('.amount-section .styled-input-box:first-child input');
    if (totalAmountInput) {
        totalAmountInput.value = Math.abs(totalAmount).toFixed(2); // Ensure positive value with Math.abs
    }

    // Update balance when the total amount changes
    updateBalance();
}

// Function to add a row to the table
function addRow() {
    const productID = document.getElementById("productID").value;
    const name = document.getElementById("name").value;
    const quantity = document.getElementById("quantity").value;
    const unitPrice = document.getElementById("sellingPrice").value;
    const amount = Math.abs(parseFloat(document.getElementById("amount").value)) || 0; // Use Math.abs for amount

    if (productID && name && quantity && unitPrice && amount > 0) {
        const tableBody = document.getElementById("tableBody");

        // Create a new row
        const row = document.createElement("tr");

        // Add cells to the row
        const cells = [
            tableBody.rows.length + 1,
            productID,
            name,
            quantity,
            unitPrice,
            amount.toFixed(2)  // Ensure positive value is displayed
        ].map(value => {
            const cell = document.createElement("td");
            cell.textContent = value;
            return cell;
        });

        // Create action cell with edit and delete buttons
        const actionCell = document.createElement("td");
        
        const editButton = document.createElement("button");
        editButton.innerHTML = '<i class="bi bi-pencil"></i>';
        editButton.onclick = () => editRow(row);

        const deleteButton = document.createElement("button");
        deleteButton.innerHTML = '<i class="bi bi-trash"></i>';
        deleteButton.onclick = () => deleteRow(row);

        actionCell.appendChild(editButton);
        actionCell.appendChild(deleteButton);

        // Append all cells to the row
        [...cells, actionCell].forEach(cell => row.appendChild(cell));

        // Append the row to the table body
        tableBody.appendChild(row);

        // Reset form and update totals
        clearForm();
        updateRowNumbers();
        updateTotalAmount();
    } else {
        alert("Please fill in all the fields with valid data.");
    }
}

// Keep other existing functions (clearForm, editRow, deleteRow, updateRowNumbers) as they are
// Just ensure they call updateTotalAmount() after making any changes

// Function to reset the fields in the secondary header
function clearForm() {
    document.getElementById("productID").value = "";
    document.getElementById("name").value = "";
    document.getElementById("quantity").value = "";
    document.getElementById("sellingPrice").value = "";
    document.getElementById("amount").value = "";
}

// Function to handle editing a row
function editRow(row) {
    const cells = row.children;
    document.getElementById("productID").value = cells[1].textContent;
    document.getElementById("name").value = cells[2].textContent;
    document.getElementById("quantity").value = cells[3].textContent;
    document.getElementById("sellingPrice").value = cells[4].textContent;
    document.getElementById("amount").value = cells[5].textContent;

    // Remove the row after editing so the user can update it
    row.remove();

    // Update row numbers after removing the row
    updateRowNumbers();

    // Update total amount after editing
    updateTotalAmount();
}

// Function to handle deleting a row
function deleteRow(row) {
    row.remove();
    // Update row numbers after deletion
    updateRowNumbers();
    // Update total amount after deletion
    updateTotalAmount();
}

// Function to update row numbers
function updateRowNumbers() {
    const tableBody = document.getElementById("tableBody");
    const rows = tableBody.querySelectorAll("tr");

    rows.forEach((row, index) => {
        const noCell = row.cells[0]; // The "No" cell is the first cell in each row
        noCell.textContent = index + 1; // Update the "No" value
    });
}












function getProductDetails(productId) {
    var radioButtons = document.getElementsByName("type");
    var selectedType = "retail"; // Default to retail

    // Check which radio button is selected
    for (var i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
            selectedType = radioButtons[i].value; // "retail" or "wholesale"
        }
    }

    // Use fetch to call handleCounter.php with productId and selectedType
    fetch('handleCounter.php', {
        method: 'POST',
        body: JSON.stringify({ productId: productId, type: selectedType }),
        headers: { 'Content-Type': 'application/json' },
    })
    .then(response => response.json())
    .then(data => {
        // Update product name and unit price in the form
        if (data.success) {
            document.getElementById("name").value = data.product.name;  // Set product name
            document.getElementById("sellingPrice").value = data.product[selectedType + '_price'];  // Set the appropriate price
            document.getElementById("amount").value = "";  // Reset amount field
        } else {
            alert("Error: " + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function updatePrice() {
    var productId = document.getElementById("productID").value;
    if (productId) {
        fetchProductDetails(productId);
    }
}

// Initialize event handlers for lending functionality
function initializeLendingHandlers() {
    const lendingCheckbox = document.querySelector('input[value="lending"]');
    const fullAmountCheckbox = document.querySelector('input[value="full"]');
    const lendingAmountInput = document.querySelector('#styled-input-box input');
    const givenAmountInput = document.querySelector('.amount-section .styled-input-box:nth-child(2) input');
    const totalAmountInput = document.querySelector('.amount-section .styled-input-box:first-child input');
    
    if (lendingCheckbox && fullAmountCheckbox && lendingAmountInput) {
        // Handle lending checkbox changes
        lendingCheckbox.addEventListener('change', function() {
            if (!this.checked) {
                // If unchecked, clear lending amount and full amount checkbox
                lendingAmountInput.value = '';
                fullAmountCheckbox.checked = false;
                lendingAmountInput.disabled = true;
            } else {
                lendingAmountInput.disabled = false;
            }
            updateAmounts();
        });

        // Handle full amount checkbox changes
        fullAmountCheckbox.addEventListener('change', function() {
            if (this.checked) {
                // If checked, automatically check lending checkbox
                lendingCheckbox.checked = true;
                lendingAmountInput.disabled = false;
                // Set lending amount to total amount
                const totalAmount = parseFloat(totalAmountInput.value) || 0;
                lendingAmountInput.value = totalAmount.toFixed(2);
            }
            updateAmounts();
        });

        // Handle lending amount input changes
        lendingAmountInput.addEventListener('input', function() {
            const totalAmount = parseFloat(totalAmountInput.value) || 0;
            const lendingAmount = parseFloat(this.value) || 0;

            // Ensure lending amount doesn't exceed total amount
            if (lendingAmount > totalAmount) {
                this.value = totalAmount.toFixed(2);
            }
            
            // If lending amount equals total amount, check full amount box
            fullAmountCheckbox.checked = parseFloat(this.value) === totalAmount;
            
            updateAmounts();
        });

        // Handle given amount input changes
        givenAmountInput.addEventListener('input', updateAmounts);
    }
}

// Function to update all amounts and balance
function updateAmounts() {
    const totalAmountInput = document.querySelector('.amount-section .styled-input-box:first-child input');
    const givenAmountInput = document.querySelector('.amount-section .styled-input-box:nth-child(2) input');
    const balanceInput = document.querySelector('.amount-section .styled-input-box:last-child input');
    const lendingAmountInput = document.querySelector('#styled-input-box input');
    const lendingCheckbox = document.querySelector('input[value="lending"]');

    const totalAmount = parseFloat(totalAmountInput.value) || 0;
    const givenAmount = parseFloat(givenAmountInput.value) || 0;
    const lendingAmount = (lendingCheckbox && lendingCheckbox.checked) ? (parseFloat(lendingAmountInput.value) || 0) : 0;

    // Calculate amount to be paid after lending
    const amountAfterLending = totalAmount - lendingAmount;

    // Calculate balance based on given amount and amount after lending
    const balance = givenAmount - amountAfterLending;

    // Update balance display
    balanceInput.value = balance.toFixed(2);
}

// Initialize all event handlers when the page loads
window.addEventListener('load', function() {
    initializeLendingHandlers();
    initializeEventHandlers(); // Keep existing event handlers
});

