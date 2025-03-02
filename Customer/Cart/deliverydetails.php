<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Details - Sandaru Food Mart</title>
    <!-- Favicons -->
    <link href="../Assets/images/logo.png" rel="icon">
    <link href="../Assets/images/logo.png" rel="apple-touch-icon">
    <!-- CSS Files -->
    <link href="../Assets/css/cart_style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .delivery-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 70px auto;
            width: 100%;
            max-width: 900px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            
        }
       
        .form-section {
            background-color: #2c2c6c;
            padding: 20px;
            border-radius: 10px;
            color: white;
            width: 50%;
        }
        .form-section .cancel-btn{
            padding: 10px;
            border-radius: 20px;
            background-color: #f8f9fa;
            font-weight: bold;
            border: none;
        }
        .form-control {
            background-color: #dcdcdc;
            border: none;
            border-radius: 5px;
        }
        .progress-section {
            text-align: center;
            width: 40%;
        }
        .progress-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ddd;
            display: inline-block;
            line-height: 50px;
            color: #000;
            font-size: 12px;
            margin-bottom: 10px;
        }
        .btn-cancel {
            background-color:rgb(231, 84, 21);
            border: none;
            color: white;
        }
        .btn-confirm {
            background-color: #00ff00;
            border: none;
            color: black;
        }
        .track-button {
            background-color: #57e37c;
            border: none;
            border-radius: 10px;
            color: black;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;
        }
        .track-button img {
            margin-left: 10px;
        }
        @media(max-width:481px){
            .delivery-container{
                display: block;
                max-width: 100%;
                margin: 10px 10px;
            }
            .form-section{
                width: 100%;
            }
            .progress-section{
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>
    <div class="delivery-container">
        <div class="form-section">
            <h4 class="text-center">Delivery Details</h4>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name:</label>
                    <input type="text" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" id="address" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City:</label>
                    <input type="text" id="city" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="postalCode" class="form-label">Postal Code:</label>
                    <input type="text" id="postalCode" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="contactNumber" class="form-label">Contact Number:</label>
                    <input type="text" id="contactNumber" class="form-control" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-cancel cancel-btn">Cancel</button>
                    <button type="submit" class="btn btn-confirm cancel-btn">Confirm Order</button>
                </div>
            </form>
        </div>

        <div class="progress-section">
            <div>
                <span class="progress-circle">1</span>
                <p>Prepare Order</p>
            </div>
            <div>
                <span class="progress-circle">2</span>
                <p>Ready Order</p>
            </div>
            <div>
                <span class="progress-circle">3</span>
                <p>Order Delivery</p>
            </div>
            <a href="#" class="track-button">
                <h4 style="font-weight:600; margin-top: 10px;">Track Your Order</h4>
                <img src="..\Assets\images\cart images\truck-d.png" alt="Delivery Icon" height="35">
            </a>
        </div>
    </div>
    
    <script src="../Assets/js/script.js"></script>

    
    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>
    

</body>
</html>