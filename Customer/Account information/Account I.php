<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link
        href="../Assets/images/logo.png"
        rel="icon">
    <link
        href="../Assets/images/logo.png"
        rel="apple-touch-icon">

    <!-- Css Stylesheets -->
    <link href="../Assets/css/Customer/Assets/css/AccountI.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="account-info">
        <h1>Account Information</h1>
        
             "<p><strong>Full Name:   </strong> " . htmlspecialchars($row['fullName']) 
            "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) 
             "<p><strong>Phone Number:</strong> " . htmlspecialchars($row['phone']) 
             "<p><strong>Address:</strong> " . htmlspecialchars($row['address']) 
             "<p><strong>Gender:</strong> " . htmlspecialchars($row['gender']) 
             "<p><strong>Password:</strong> *********
     
             "<p>No account information found.</p>
        

        
        <div class="actions">
            <a href="edit_account.php" class="btn">Edit</a>
            <a href="logout.php" class="btn">Log Out</a>
            <a href="delete_account.php" class="btn danger">Delete Account</a>
        </div>
    </div>
</body>
</html>
