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
        
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- CSS Files -->
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
        .styled-link {
            display: inline-block;
            font-size: 20px;
            font-weight: bold;
            color: rgb(0, 0, 0);
            text-decoration: none;
            padding: 5px 25px;
            background: linear-gradient(135deg, #2196f3, rgb(117, 184, 255), #007bff);
            border-radius: 50px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
}

.styled-link i {
  margin-right: 8px;
  font-size: 22px;
}

.styled-link::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 300%;
  height: 300%;
  background: rgba(255, 255, 255, 0.1);
  transform: rotate(45deg);
  transition: left 0.4s ease;
}
.styled-link:hover::before {
  left: 100%;
}

.styled-link:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
  background: linear-gradient(135deg, #007bff, #75b8ff, #2196f3);
  color: rgb(235, 226, 226);
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