<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cashier Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Add Cashier</h2>
        <form id="addCashierForm">
            <div class="form-group">
                <label for="cashierName">Cashier Name</label>
                <input type="text" id="cashierName" name="cashierName" required>
            </div>
            <div class="form-group">
                <label for="cashierEmail">Email</label>
                <input type="email" id="cashierEmail" name="cashierEmail" required>
            </div>
            <div class="form-group">
                <label for="cashierPassword">Password</label>
                <input type="password" id="cashierPassword" name="cashierPassword" required>
            </div>
            <div class="form-group">
                <button type="submit">Add Cashier</button>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
