function repaySearchCustomer() {
    var input = document.getElementById("repayCustomer");
    var filter = input.value.toLowerCase(); // Convert the input to lowercase
    var select = document.getElementById("repayCustomerDropdown");

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
                    option.value = customer.nic; // Use NIC as value for selection
                    option.textContent = customer.name;  // Display the customer's name
                    option.setAttribute("data-phone", customer.phone); // Store the phone number as a data attribute
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

function repaySelectCustomer() {
    var select = document.getElementById("repayCustomerDropdown");
    var selectedOption = select.options[select.selectedIndex];

    var selectedName = selectedOption.textContent;
    var selectedPhone = selectedOption.getAttribute("data-phone");
    var selectedNIC = selectedOption.value; // NIC is stored in the option value

    // Set the value of the input to the selected customer's name
    document.getElementById("repayCustomer").value = selectedName;

    // Display the phone number
    document.getElementById("repayCustomerDisplay").textContent = selectedPhone;

    // Store NIC in the hidden field (without displaying it)
    document.getElementById("repayPhone").setAttribute("data-nic", selectedNIC);

    // Hide the dropdown after selection
    select.style.display = "none";
}


function getCurrentDate() {
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const day = String(today.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
}

// Open modal and set current date in the date input
function openRepayModal(modalId) {
    const modal = document.getElementById(modalId);
    const dateInput = modal.querySelector("#crntDate"); // Find date input inside modal
    modal.style.display = "block";
    dateInput.value = getCurrentDate(); // Set current date
}

function submitRepaymentForm(event) {
    event.preventDefault(); // Prevent default form submission

    // Get values from form
    const nic = document.getElementById("repayPhone").getAttribute("data-nic"); // Get NIC stored in hidden field
    const date = document.getElementById("crntDate").value;
    const amount = document.getElementById("repayAmount").value;

    console.log("NIC:", nic);  // Debugging - Check if NIC is being stored
    console.log("Date:", date);
    console.log("Amount:", amount);

    // Validate input
    if (!nic || !date || !amount) {
        alert("Please select a customer and enter amount!");
        return;
    }

    // Send data to server using AJAX
    fetch("submitRepaymentsForm.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `nic=${nic}&date=${date}&amount=${amount}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Payment saved successfully!");
            document.getElementById("repaymentForm").reset(); // Reset form
            closeModal("repaymentModal"); // Close modal
        } else {
            alert("Error: " + data.message);
        }
    })
    .catch(error => {
        console.error("Error:", error);
    });
}

