<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Sandaru Food Mart</title>
    <!-- Favicons -->
    <link
        href="../Assets/images/logo.png"
        rel="icon">
    <link
        href="../Assets/images/logo.png"
        rel="apple-touch-icon">
        
    <!-- CSS Files -->
    <link href="../Assets/css/checkout.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        
        .payment-form {
            background:rgb(209, 239, 250);
            padding: 20px;
            max-width: 1000px;
            border-radius: 10px;
            margin: 70px auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .payment-form .form-label {
            font-weight: bold;
        }
        .payment-form .btn {
            width: 100%;
        }
    </style>
    
    
</head>
<body>
    <!-- Include Header -->
   <?php include '../includes/header.php'; ?> 
   <body>
    <div class="payment-form">
        <h4 class="text-center mb-4">Payment Information</h4>
        <form>
            <div class="text-center mb-3">
                <img src="..\Assets\images\cart images\visa.png" alt="Visa" height="30">
                <img src="..\Assets\images\cart images\mastercard-4.svg" alt="MasterCard" height="30">
    
            </div>
            <div class="mb-3">
                <label for="cardNumber" class="form-label">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" placeholder="Card number" required>
            </div>
            <div class="mb-3">
                <label for="cardName" class="form-label">Name on Card</label>
                <input type="text" class="form-control" id="cardName" placeholder="Name on card" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="expiryDate" class="form-label">Expiry Date</label>
                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cvv" placeholder="CVV" required>
                </div>
            </div>
            <p class="text-muted text-center mb-3" style="font-size: 0.9rem;">
                We will save this card for your convenience. If required, you can remove the card in the "Payment Options" section in the "Account" menu.
            </p>
            <button type="submit" class="btn btn-primary">Pay Now</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Payment submitted!');
        });
    </script>

   
   <!-- <script src="../Assets/js/checkout.js"></script> -->




</body>
</html>