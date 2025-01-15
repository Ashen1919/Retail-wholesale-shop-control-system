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
                            <div class="field">
                                <label for="first-name">Full Name</label>
                                <input type="text" id="first-name" disabled>
                            </div>
                           
                            <div class="field">
                                <label for="email">Email</label>
                                <input type="text" id="email" disabled>
                            </div>
                            <div class="field">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" disabled>
                            </div>
                        </div>
                        <div class="right-fields">
                            <div class="field">
                                <label for="last-name">Address</label>
                                <input type="text" id="last-name" disabled>
                            </div>
                            <div class="field">
                                <label for="gen">Gender</label>
                                <input type="text" id="dob" disabled>
                            </div>
                           
                            <div class="field">
                                <label for="postal-code">Password</label>
                                <input type="text" id="postal-code" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="edit-button">
                        <button onclick="openModal('updateAccount')" class="btn btn-primary">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                        
                    </div>
                </div>
</div>
                <div class="dlt-button">   
                    <button class="btn-dlt">
                         <i class="bi bi-pencil-square"></i>Delete
                        </button>
</div>

                    
    <!-- Update Admin Modal -->
    <div id="updateAccount" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('updateAccount')">&times;</span>
<div class="form-container">


<h1>Update Account</h1>
<form id="registerForm" action="process_register.php" method="POST">

    <label for="firstName">First Name</label>
    <input type="text" id="firstName" name="first_name" required>

    <label for="lastName">Last Name</label>
    <input type="text" id="lastName" name="last_name" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="phoneNumber">Phone Number</label>
    <input type="tel" id="phoneNumber" name="phone_number" required>

    <label for="address">Address</label>
    <input type="text" id="address" name="address" required>

    <label for="gender">Gender</label>
    <select id="gender" name="gender" required>
        <option value="" disabled selected>Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
<div class="password-section">
    <label for="N password">New Password</label>
    <input type="password" id="password" placeholder="Enter your New password">
    <i id="togglePassword" class="fas fa-eye-slash toggle-icon"></i>
</div>
    <div class="password-section1">
      <label for="retype-password">Retype Password:</label>
      <input type="password" id="rt-password" placeholder="Enter your Retype password">
      <i id="rt-togglePassword" class="fas fa-eye-slash toggle-icon"></i>
    </div>
    <button type="submit">Update</button>
</form>

</div>


    <!-- Update Profile Picture Modal -->
    <div id="updatePictureModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('updatePictureModal')">&times;</span>
            <h3>Update Profile Picture</h3>
            <form id="updatePictureForm">
                <label for="profilePicture"></label>
                <input type="file" id="profilePicture" name="profilePicture" accept="image/*" onchange="previewImage(event)" required>
                
                <div id="imagePreviewContainer" style="display: none;">
                    <img id="imagePreview" src="" alt="Image Preview"/>
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