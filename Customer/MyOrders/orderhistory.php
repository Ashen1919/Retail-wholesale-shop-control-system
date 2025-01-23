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
    <!-- <link href="../Assets/css/cart_style.css" rel="stylesheet"> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .order-history {
            max-width: 600px;
            margin: auto;
        }
        .order-card {
            background-color:rgb(232, 240, 168);
            border-radius: 8px;
            margin-bottom: 10px;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .status-delivered {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .status-cancelled {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .keep-shopping {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
    </style>
</head>
<body>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    <div class="order-history">
        <h4 style="font-weight:600; margin-bottom:20px;">Order History</h4>
        <div class="mb-3">
            <label for="filter" class="form-label">Show:</label>
            <select id="filter" class="form-select">
                <option value="all">All</option>
                <option value="delivered">Delivered</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>

        <div class="order-card">
            <div>
                <strong>Order 001</strong><br>
                Rs. 2700.00
            </div>
            <div class="status-delivered">Delivered</div>
        </div>

        <div class="order-card">
            <div>
                <strong>Order 002</strong><br>
                Rs. 8900.00
            </div>
            <div class="status-cancelled">Cancelled</div>
        </div>

        <div class="order-card">
            <div>
                <strong>Order 003</strong><br>
                Rs. 980.00
            </div>
            <div class="status-delivered">Delivered</div>
        </div>

        <div class="order-card">
            <div>
                <strong>Order 004</strong><br>
                Rs. 1350.00
            </div>
            <div class="status-delivered">Delivered</div>
        </div>
        
        <!-- <div class="keep-shopping">
            <button a href="../../index.php" class="btn btn-primary">
            <h3 style="font-weight:600; margin-bottom:10px;">Keep Shopping</h3>
            </button>
        </div> -->

        <div class="keep-shopping">
                    <a href="../../index.php" class="styled-link">
                        <i class="btn btn-primary"></i> Keep Shopping
                    </a>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const filter = document.getElementById('filter');
        const orders = document.querySelectorAll('.order-card');

        filter.addEventListener('change', () => {
            const value = filter.value;

            orders.forEach(order => {
                if (value === 'all') {
                    order.style.display = 'flex';
                } else if (value === 'delivered' && order.querySelector('.status-delivered')) {
                    order.style.display = 'flex';
                } else if (value === 'cancelled' && order.querySelector('.status-cancelled')) {
                    order.style.display = 'flex';
                } else {
                    order.style.display = 'none';
                }
            });
        });
    </script>

    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>

</body>
</html>