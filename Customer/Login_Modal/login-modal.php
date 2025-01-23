<div id="loginFormModal" class="form-background modal-wrapper">
    <div class="formBackground">
        <button type="button" class="close-btn" onclick="closeModal()">X</button>
        <div class="background-image">
            <img src="./Customer/Assets/images/logo.png" alt="logo">
            <div class="shop-name">
                <h1>Sandaru Food</h1>
                <h1 id="mart">Mart<h1>
            </div>
            <div class="bch-img">
                <img src="./Customer/Assets/images/Register_page/Register background.png" alt="logo">
            </div>
        </div>
        <div class="form-container">
            <form>
                <h1 id="loginH1">Login</h1>

                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Enter your Email" required>
                <div class="password-section">
                    <label for="password">Password</label>
                    <input type="password" id="loginPassword" placeholder="Enter your password">
                    <i id="loginTogglePassword" class="fas fa-eye-slash toggle-icon"></i>
                </div>

                <a id="fp" href="#">Forgot Password?</a><br>

                <button id="submitLogin" type="submit">Login</button>

                <p>Don't have an account?<a href="#" id="openModalAgain">Sign up now</a></p>
            </form>
        </div>
    </div>
</div>