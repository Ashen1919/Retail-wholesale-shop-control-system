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
    <link href="../Assets/css/Account.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="account-container">
  <h1>Account Information</h1>
  <form>
    <div class="form-group">
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" value="<?= htmlspecialchars($row['fullName']) ?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" value="<?= htmlspecialchars($row['email']) ?>" readonly>
    </div>
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="text" id="phone" value="<?= htmlspecialchars($row['phone']) ?>" readonly>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" id="address" value="<?= htmlspecialchars($row['address']) ?>" readonly>
    </div>
    <div class="form-group">
      <label for="gender">Gender:</label>
      <input type="text" id="gender" value="<?= htmlspecialchars($row['gender']) ?>" readonly>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" value="********" readonly>
    </div>
    <div class="buttons">
      <button type="button" class="edit">Edit</button>
</div>
<div class="Log Out">
            <a href="logout.php">Log Out</a>
            </div>
<div class="detete">
            <a href="delete_account">Detete Account</a>
            </div>
  </form>
</div>

</body>
</html>
