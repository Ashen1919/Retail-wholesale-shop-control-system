

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
    <link href="../Assets/css/style.css" rel="stylesheet">
    <link href="../Assets/css/Account.css" rel="stylesheet">
    <link href="../Assets/css/UpdateAccount.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>

    <body>


        <div class="right-side">
            <div class="logout-button">
                <button class="btn-dlt">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </div>



            <div class="profile-container">

                <!-- Profile Section -->
                <div class="profile-header">
                    <div class="profile-avatar">
                        <img src="../Assets/images/profile_default.jpg" alt="Profile Picture">
                        <button onclick="openModal('updatePictureModal')"><i class="bi bi-camera-fill"></i></button>
                    </div>
                    <div class="profile-info">
                        <h3>Customer Name</h3>

                    </div>
                </div>

                <!-- Personal Information Section -->
                <h4>Personal Information</h4>
                <div class="personal-info">

                    <div class="info-fields">
                        <div class="left-fields">
                                <div class="one_line">
                                <label for="first-name">Full Name:</label>
                                <div class="details_box1">
                                <input type="text" id="first-name" value="S.S.M.Chathuranganee" disabled>
                                </div>
                                </div>
                                <div class="one_line">  
                                <label for="email">Email:</label>
                                <div class="details_box2">
                                <input type="text" id="first-name" value="san@gmail.com" disabled>
                          </div>
                          </div>
                          <div class="one_line">
                                <label for="phone">Phone Number:</label>
                                <div class="details_box3">
                                <input type="text" id="first-name" value="0764578541" disabled>
                            </div>
                            </div>
                            <div class="one_line">
                                <label for="last-name">Address:</label>
                                <div class="details_box4">
                                <input type="text" id="first-name" value="Kekirawa/Anuradhapura" disabled>
                            </div>
                            </div>
                            <div class="one_line">
                                <label for="password">Password:</label>
                                <div class="details_box5">
                                <input type="password" id="first-name" value="sandubb" disabled>
                                </div>
                        </div>
                    </div>
                        <a href="../Update Account Page/UpdateAccount.php" rel="stylesheet">
                        <i class="bi bi-pencil-square"></i> Edit 
                  
           
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

                    <script src="../Assets/js/script.js"></script>
                    <script src="../Assets/js/AccountI.js"></script>
                    <script src="../Assets/js/UpdateAccount.js"></script>

    </body>

</html>