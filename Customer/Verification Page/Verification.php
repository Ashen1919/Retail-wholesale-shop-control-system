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
    <link href="../Assets/css/Verification.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="verification-form">
        <h1>Verification</h1>
        <form action="verify.php" method="POST">
            <div class="option">
                <label>
                    <input type="radio" name="verificationType" value="email" required>
                    Email Verification
                </label>
            </div>
            <div class="option">
                <label>
                    <input type="radio" name="verificationType" value="mobile" required>
                    Mobile Verification
                </label>
            </div>
            <div class="code">
            <a href="Get code">Get code</a>
            </div>
           <div class="ETC">
                <label for="verificationCode">Enter the Code:</label>
            </div>
            <div class="code-inputs">
                <input type="text" maxlength="1" class="code-box" required>
                <input type="text" maxlength="1" class="code-box" required>
                <input type="text" maxlength="1" class="code-box" required>
                <input type="text" maxlength="1" class="code-box" required>
                <input type="text" maxlength="1" class="code-box" required>
                <input type="text" maxlength="1" class="code-box" required>
            </div>
            <button type="submit">Verify Code</button>
        </form>
    </div>
    <script src="Verification.js"></script>
</body>
</html>
