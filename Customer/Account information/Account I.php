<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link href="../Assets/images/logo.png" rel="icon">
    <link href="../Assets/images/logo.png" rel="apple-touch-icon">

    <!-- Css Stylesheets -->
    <link href="../Assets/css/Account.css" rel="stylesheet">
    <link href="../Assets/css/UpdateAccount.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    <div class="profile-container">

        <!--Information Section -->
        <form action="" method="post">
            <div class="information-section">
                
                <div class="personal-info-section">
                    <!-- Profile Section -->
                    <div class="profile-header">
                        <div class="profile-avatar">
                            <img src="../Assets/images/profile_default.jpg" alt="Profile Picture">
                            <button onclick="openModal('updatePictureModal')"><i class="bi bi-camera-fill"></i></button>
                        </div>
                        <div class="profile-info">
                            <h3>Welcome Customer</h3>

                        </div>
                    </div>
                    <!--Personal info-->
                    <div class="info-section">
                        <h4 style="margin-bottom: 10px;">Personal Information</h4>
                        <div class="info-fields">
                            <div class="info">
                                <label for="">Name :</label>
                                <input type="text" name="name" id="name" value="Customer name">
                            </div>
                            <div class="info">
                                <label for="">Email :</label>
                                <input type="text" name="Email" id="Email" value="Customer Email" readonly>
                            </div>
                            <div class="info">
                                <label for="">Contact :</label>
                                <input type="text" name="Contact" id="Contact" value="Customer Contact">
                            </div>
                            <div class="info">
                                <label for="">Account Status :</label>
                                <p>Active</p>
                            </div>
                        </div>

                        <button class="per-submit">Update</button>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <!-- Update Profile Picture Modal -->
    <div id="updatePictureModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('updatePictureModal')">&times;</span>
            <h3>Update Profile Picture</h3>
            <form id="updatePictureForm">
                <label for="profilePicture"></label>
                <input type="file" id="profilePicture" name="profilePicture" accept="image/*"
                    onchange="previewImage(event)" required>

                <div id="imagePreviewContainer" style="display: none;">
                    <img id="imagePreview" src="" alt="Image Preview" />
                </div>

                <button type="submit">Upload</button>
            </form>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>

    <!--Script files-->
    <script src="../Assets/js/script.js"></script>
    <script src="../Assets/js/AccountI.js"></script>
    <script src="../Assets/js/UpdateAccount.js"></script>

</body>

</html>