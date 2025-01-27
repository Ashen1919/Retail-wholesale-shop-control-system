<?php
//Database connection
include('db_con.php');

//generate auto-generated ID
$auto_sql = "SELECT promo_id FROM promotions ORDER BY promo_id DESC LIMIT 1";
$result_auto = mysqli_query($conn, $auto_sql);

if (mysqli_num_rows($result_auto) > 0) {
    $rows = $result_auto->fetch_assoc();
    $lastid = $rows['promoId'];
    $num = (int) substr($lastid, 2);
    $new_id = 'PR-' . str_pad($num + 1, 5, '0', STR_PAD_LEFT);
} else {
    $new_id = 'PR-00001';
}

//Add a promotion
if (isset($_POST['submit'])) {
    $promo_id = $_POST['promoId'];
    $promo_title = $_POST['promoTitle'];
    $description = $_POST['promoDescription'];

    $image_name = $_FILES['promoImage']['name'];
    $tmp = explode(".", $image_name);
    $newFileName = round(microtime(true)) . '.' . end($tmp);
    $uploadPath = "../Assets/images/promotions/" . $newFileName;

    if (move_uploaded_file($_FILES['promoImage']['tmp_name'], $uploadPath)) {
        $add_sql = "INSERT INTO promotions(promo_id, promo_title, description, image) VALUES ('$promo_id', '$promo_title', '$description', '$$newFileName',)";
        $data = mysqli_query($conn, $add_sql);

        if ($data) {
            $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Promotions is being added",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
        }else{
            $message = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Oops! Something went wrong.",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>';
        }
    }
}
?>

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="../Assets/css/promotion.css" rel="stylesheet">

</head>

<body>
    <!--Top Bar-->
    <div class="top-bar">
        <div class="left">
            <div class="search-bar">
                <input type="search" name="search" id="search" style="color: black;" placeholder="Search">
                <button><i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="right">
            <div class="profile">
                <img src="../Assets/images/profile_default.jpg" alt="Default profile" class="pro-avatar">
                <p>Admin</p>
            </div>
            <div class="log-out">
                <button class="logout-button">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </div>

        </div>
    </div>
    <!--End of top Bar-->

    <!--Main body-->
    <div class="main-content">
        <!--Left side-->
        <div class="left-side">
            <div class="title">
                <p>Admin Dashboard</p>
            </div>
            <a href="index.php">
                <div class="dashboard">
                    <i class="bi bi-house-door"></i>Dashboard
                </div>
            </a>
            <a href="categories.php">
                <div class="dashboard">
                    <i class="bi bi-bookmark"></i>Categories
                </div>
            </a>
            <a href="products.php">
                <div class="dashboard">
                    <i class="bi bi-basket2"></i>Products/Items
                </div>
            </a>
            <a href="customers.php">
                <div class="dashboard">
                    <i class="bi bi-people"></i>Customers
                </div>
            </a>
            <a href="orders.php">
                <div class="dashboard">
                    <i class="bi bi-cart4"></i>Order Management
                </div>
            </a>
            <a href="reviews.php">
                <div class="dashboard">
                    <i class="bi bi-star-half"></i>Reviews
                </div>
            </a>
            <a href="contact.php">
                <div class="dashboard">
                    <i class="bi bi-telephone"></i>Contact
                </div>
            </a>
            <a href="lendings.php">
                <div class="dashboard">
                    <i class="bi bi-cash-stack"></i>Lendings
                </div>
            </a>
            <a href="cashier.php">
                <div class="dashboard">
                    <i class="bi bi-person"></i>Cashier
                </div>
            </a>
            <a href="promotion.php">
                <div class="dashboard">
                    <i class="bi bi-percent"></i>Promotions
                </div>
            </a>
            <a href="settings.php">
                <div class="dashboard">
                    <i class="bi bi-gear-wide-connected"></i>Settings
                </div>
            </a>

        </div>
        <!--End of left side-->

        <!--Right side-->
        <div class="right-side">
            <h2>Promotions</h2>
            <div class="table-section">
                <table>
                    <thead>
                        <tr>
                            <th>Promo ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>p001</td>
                            <td>Summer Sale</td>
                            <td>Enjoy up to 50% off on select items during our Summer Sale!</td>
                            <td><img src="../Assets/images/promotions/Summer Sale.png" alt="Promo Image" width="50">
                            </td>
                            <td>
                                <div class="action">
                                    <button onclick="openModal('updatePromoModal')" class="edit"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button class="delete"><i class="bi bi-trash-fill"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <button onclick="openModal('addPromoModal')">
                <i class="bi bi-plus fs-3"></i>
                Add Promo
            </button>
        </div>
        <!--End of right side-->
    </div>
    <!--End of main body-->

    <!-- Add Promo Modal -->
    <div id="addPromoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('addPromoModal')">&times;</span>
            <h3>Add Promo</h3>
            <form id="addPromoForm" method="post" action="" enctype="multipart/form-data">
                <label for="promoId">Promo ID:</label>
                <input type="text" id="promoId" name="promoId" value="<?php echo $new_id ?>" required readonly>

                <label for="promoTitle">Title:</label>
                <input type="text" id="promoTitle" name="promoTitle" required>

                <label for="promoDescription">Description:</label>
                <textarea id="promoDescription" name="promoDescription" required></textarea>

                <label for="promoImage">Image:</label>
                <input type="file" id="promoImage" name="promoImage" accept="image/*" onchange="previewImage(event)"
                    required>

                <button type="submit" name="submit">Add Promo</button>
            </form>
        </div>
    </div>

    <!-- Update Promo Modal -->
    <div id="updatePromoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('updatePromoModal')">&times;</span>
            <h3>Update Promo</h3>
            <form id="updatePromoForm">
                <label for="promoId">Promo ID:</label>
                <input type="text" id="promoId" name="promoId" disabled>

                <label for="promoTitle">Title:</label>
                <input type="text" id="promoTitle" name="promoTitle" required>

                <label for="promoDescription">Description:</label>
                <textarea id="promoDescription" name="promoDescription" required></textarea>

                <label for="promoImage">Image:</label>
                <input type="file" id="promoImage" name="promoImage" accept="image/*" onchange="upreviewImage(event)"
                    required>

                <div id="u_imagePreviewContainer" style="display: none;">
                    <img id="u_imagePreview" src="" alt="Image Preview" />
                </div>

                <button type="submit">Update Promo</button>
            </form>
        </div>
    </div>

    <!--Sweet alert js import-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../Assets/js/script.js"></script>
    <script src="../Assets/js/promotion.js"></script>

</body>

</html>