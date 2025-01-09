document.getElementById('addCashierForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const cashierName = document.getElementById('cashierName').value;
    const cashierEmail = document.getElementById('cashierEmail').value;
    const cashierPassword = document.getElementById('cashierPassword').value;

    const cashierData = {
        name: cashierName,
        email: cashierEmail,
        password: cashierPassword
    };

    console.log('Cashier Data:', cashierData);

    // Example: Sending data to backend
    // fetch('/api/cashiers', {
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/json'
    //     },
    //     body: JSON.stringify(cashierData)
    // })
    // .then(response => response.json())
    // .then(data => console.log('Success:', data))
    // .catch(error => console.error('Error:', error));
});
