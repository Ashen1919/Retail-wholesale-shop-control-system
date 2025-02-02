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

                    // Step 2: Increment the order ID to generate the new one
                    const orderId = generateNextId(lastOrderId);

                    // Step 3: Get the current date and time
                    const now = new Date();
                    const currentDate = now.toISOString().split("T")[0]; // Format: YYYY-MM-DD
                    const currentTime = now.toLocaleTimeString([], { hour12: false }); // Format: HH:MM:SS

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

        // Check if both fields are available
        if (quantityInput && unitPriceInput) {
            console.log("Quantity and Unit Price fields found");

            // Get the quantity and unit price values
            var quantity = parseFloat(quantityInput.value) || 0; // Default to 0 if empty or invalid
            var unitPrice = parseFloat(unitPriceInput.value) || 0; // Default to 0 if empty or invalid

            // Calculate the amount
            var amount = quantity * unitPrice;

            // Dynamically update the amount input field
            var amountInput = document.getElementById("amount");
            if (amountInput) {
                amountInput.value = amount.toFixed(2); // Display with 2 decimal places
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

        // Only proceed if both fields are available
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
    }, 100); // Check every 100ms
});


document.addEventListener('DOMContentLoaded', function () {
    // Add event listener for "Given Amount" input to update balance in real-time
    const givenAmountInput = document.querySelector('input[placeholder="0.00"]:not([disabled])');
    if (givenAmountInput) {
        givenAmountInput.addEventListener('input', updateBalance);
    }

    // Add button functionality
    const addButton = document.querySelector('.add-btn');
    addButton.addEventListener('click', addRow);
});

// Function to update balance based on Given Amount
function updateBalance() {
    const totalAmount = parseFloat(document.querySelector('input[placeholder="0.00"]:disabled').value) || 0;
    const givenAmount = parseFloat(document.querySelector('input[placeholder="0.00"]:not([disabled])').value) || 0;

    const balance = givenAmount - totalAmount;

    // Update the Balance field in real-time
    const balanceInput = document.querySelector('input[placeholder="0.00"]:disabled');
    if (balanceInput) {
        balanceInput.value = balance.toFixed(2); // Show the balance with 2 decimal points
    }
}

// Function to add a row to the table
function addRow() {
    const productID = document.getElementById("productID").value;
    const name = document.getElementById("name").value;
    const quantity = document.getElementById("quantity").value;
    const unitPrice = document.getElementById("sellingPrice").value;
    const amount = document.getElementById("amount").value;

    // Ensure the amount is a valid number before adding
    if (productID && name && quantity && unitPrice && !isNaN(amount) && amount > 0) {
        const tableBody = document.getElementById("tableBody");

        // Create a new row
        const row = document.createElement("tr");

        // Add cells to the row
        const noCell = document.createElement("td");
        const productIDCell = document.createElement("td");
        const nameCell = document.createElement("td");
        const quantityCell = document.createElement("td");
        const unitPriceCell = document.createElement("td");
        const amountCell = document.createElement("td");
        const actionCell = document.createElement("td");

        noCell.textContent = tableBody.rows.length + 1; // Auto-increment row number
        productIDCell.textContent = productID;
        nameCell.textContent = name;
        quantityCell.textContent = quantity;
        unitPriceCell.textContent = unitPrice;
        amountCell.textContent = amount;

        // Add action buttons with icons (using Bootstrap Icons)
        const editButton = document.createElement("button");
        editButton.innerHTML = '<i class="bi bi-pencil"></i>'; // Pencil icon for editing
        editButton.onclick = function () {
            editRow(row);
        };

        const deleteButton = document.createElement("button");
        deleteButton.innerHTML = '<i class="bi bi-trash"></i>'; // Trash icon for deletion
        deleteButton.onclick = function () {
            deleteRow(row);
        };

        // Add buttons to the action cell
        actionCell.appendChild(editButton);
        actionCell.appendChild(deleteButton);

        // Append all cells to the row
        row.appendChild(noCell);
        row.appendChild(productIDCell);
        row.appendChild(nameCell);
        row.appendChild(quantityCell);
        row.appendChild(unitPriceCell);
        row.appendChild(amountCell);
        row.appendChild(actionCell);

        // Append the row to the table body
        tableBody.appendChild(row);

        // Reset secondary header fields after adding
        clearForm();

        // Update total amount after adding the row
        updateTotalAmount();
    } else {
        alert("Please fill in all the fields with valid data.");
    }

    // Update row numbers after adding a new row
    updateRowNumbers();
}

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

// Function to update the total amount
function updateTotalAmount() {
    const tableBody = document.getElementById("tableBody");
    let totalAmount = 0;

    // Loop through the rows and sum up the amounts
    const rows = tableBody.querySelectorAll("tr");
    rows.forEach(row => {
        const amountCell = row.cells[5]; // The "Amount" cell is the 6th cell in each row
        const amount = parseFloat(amountCell.textContent);

        // Only add valid numeric amounts
        if (!isNaN(amount) && amount > 0) {
            totalAmount += amount;
        }
    });

    // Update the Total Amount field
    const totalAmountInput = document.querySelector('input[placeholder="0.00"]:disabled');  // Assuming this is the "Total Amount" input field
    if (totalAmountInput) {
        totalAmountInput.value = totalAmount.toFixed(2); // Update total amount
    }

    // Update balance when the given amount changes
    updateBalance();
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