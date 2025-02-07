<?php
// Include your database connection
include("../Admin/Dashboard/db_con.php");

// Query for sales data
$salesQuery = "SELECT b.bill_number, b.nic, b.total_amount, b.date, b.time, b.product_details, wc.name 
               FROM bills b
               JOIN wholesale_customers wc ON b.nic = wc.nic 
               WHERE b.status = 'completed'";

$salesResult = mysqli_query($conn, $salesQuery);
if (!$salesResult) {
    die("Error in sales query: " . mysqli_error($conn));
}

// Query to count distinct NICs for daily customer count, where status is 'completed'
$customerCountQuery = "SELECT COUNT(DISTINCT nic) AS daily_customers 
                       FROM bills 
                       WHERE date = CURDATE() AND status = 'completed'";

$incomeQuery = "SELECT SUM(total_amount) AS daily_income 
                FROM bills 
                WHERE date = CURDATE() AND status = 'completed'";

// Execute queries
$customerCountResult = mysqli_query($conn, $customerCountQuery);
$incomeResult = mysqli_query($conn, $incomeQuery);

if (!$customerCountResult) {
    die("Error in customer count query: " . mysqli_error($conn));
}

if (!$incomeResult) {
    die("Error in daily income query: " . mysqli_error($conn));
}

// Fetch values
$dailyCustomerCount = mysqli_fetch_assoc($customerCountResult)['daily_customers'];
$dailyIncomeRow = mysqli_fetch_assoc($incomeResult);
$dailyIncome = $dailyIncomeRow['daily_income'];

// Debugging Output
echo "<script>console.log('Calculated Daily Customers: " . $dailyCustomerCount . "');</script>";
echo "<script>console.log('Calculated Daily Income: " . $dailyIncome . "');</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link href="./Assets/images/logo.png" rel="icon">
    <link href="./Assets/images/logo.png" rel="apple-touch-icon">

    <!-- CSS Stylesheets -->
    <link href="./Assets/css/statistics.css" rel="stylesheet">
</head>
<body>
    <div class="tables">
        <div class="sales-table">
            <table>
                <caption>Daily Sales</caption>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Bill Number</th>
                        <th>Customer</th>
                        <th>Num of Items</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop through sales result and display in the table
                    $counter = 1;
                    while ($row = mysqli_fetch_assoc($salesResult)) {
                        // Get number of items from product_details
                        $productDetails = explode(',', $row['product_details']);
                        $numItems = count($productDetails);

                        echo "<tr>
                                <td>{$counter}</td>
                                <td>{$row['bill_number']}</td>
                                <td>{$row['name']}</td>
                                <td>{$numItems}</td>
                                <td>{$row['total_amount']}</td>
                              </tr>";
                        $counter++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="cashier-table">
            <table>
                <caption>Cashier Time</caption>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Hours</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <div class="inputs">
        <div>
            <label for="daily-customer-count">Daily Customers:</label>
            <input type="number" value="<?php echo $dailyCustomerCount; ?>" disabled>
        </div>
        <div>
            <label for="daily-income">Daily Income:</label>
            <input type="number" value="<?php echo $dailyIncome; ?>" disabled>
        </div>
    </div>
</body>
</html>
