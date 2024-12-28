<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="account-info">
        <h1>Account Information</h1>
        <form id="accountForm" method="POST" action="save_account.php">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <div class="actions">
                <button type="submit">Save</button>
                <button type="button" id="logout">Log Out</button>
                <button type="button" id="deleteAccount">Delete Account</button>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
