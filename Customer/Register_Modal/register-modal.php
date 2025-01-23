<div id="registerFormModal" class="form-background modal-wrapper" style="display:none;">
  <div class="back">  
    <button type="button" class="close-btn" onclick="closeModal()">X</button>
    <div class="background-image">
        <img src="./Customer/Assets/images/logo.png" alt="logo">
        <div class="shop-name">
            <h1>Sandaru Food</h1>
            <h1 id="mart">Mart</h1>
        </div>
        <div class="bch-img">
            <img src="./Customer/Assets/images/Register_page/Register background.png" alt="background">
        </div>
    </div>
    <div class="form-container">
        <h1>Register</h1>
        <form id="registerForm" action="process_register.php" method="POST">

            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="first_name" placeholder="Enter your first name" required>

            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="last_name" placeholder="Enter your last name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phoneNumber">Phone Number</label>
            <input type="tel" id="phoneNumber" name="phone_number" placeholder="Enter your phone number" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter your address">

            <div class="password-section">
                <label for="password">Password</label>
                <input type="password" id="registerPassword" placeholder="Enter your password" required>
                <i id="registerTogglePassword" class="fas fa-eye-slash toggle-icon"></i>
            </div>
            <div class="button">
                <button type="submit">Sign Up</button>
            </div>
            <div class="login-link">
                <p>Do you have an account? <a href="#" id="openLoginModal">Login Here</a></p>
            </div>
        </form>
    </div>
    </div>
</div>