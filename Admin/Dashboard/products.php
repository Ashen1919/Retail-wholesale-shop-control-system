<?php
include('db_con.php');

//fetch categories
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);

$sql_name = "SELECT name FROM categories";
$result_name = mysqli_query($conn, $sql_name);

//generate auto-generated ID
$auto_sql = "SELECT product_id FROM products ORDER BY product_id DESC LIMIT 1";
$result_auto = mysqli_query($conn, $auto_sql);

if (mysqli_num_rows($result_auto) > 0) {
  $rows = $result_auto->fetch_assoc();
  $lastid = $rows['product_id'];
  $num = (int) substr($lastid, 2);
  $new_id = 'P-' . str_pad($num + 1, 5, '0', STR_PAD_LEFT);
} else {
  $new_id = 'P-00001';
}

//add a product
if (isset($_POST['add_product_btn'])) {
  $p_id = $_POST['proID'];
  $p_name = $_POST['name'];
  $p_category = $_POST['category'];
  $p_units = $_POST['units'];
  $p_quantity = $_POST['quantity'];
  $p_supplier = $_POST['supplier'];
  $p_purPrice = $_POST['purPrice'];
  $p_retPrice = $_POST['retPrice'];
  $p_retProfit = $_POST['retProfit'];
  $p_whoPrice = $_POST['whoPrice'];
  $p_whoProfit = $_POST['whoProfit'];
  $p_description = $_POST['categoryDescription'];

  $image_name = $_FILES['productImage']['name'];
  $tmp = explode(".", $image_name);
  $newFileName = round(microtime(true)) . '.' . end($tmp);
  $uploadPath = "../Assets/images/products/" . $newFileName;

  if (move_uploaded_file($_FILES['productImage']["tmp_name"], $uploadPath)) {
    $add_sql = "INSERT INTO products(product_id, product_name, product_category, units, quantity, supplier, image, description, purchased_price, retail_price, retail_profit, whole_price, whole_profit) 
              VALUES ('$p_id', '$p_name', '$p_category', '$p_units', '$p_quantity', '$p_supplier', '$newFileName', '$p_description', '$p_purPrice', '$p_retPrice', '$p_retProfit', '$p_whoPrice', '$p_whoProfit') ";
    $data = mysqli_query($conn, $add_sql);

    if ($data) {
      header("location:products.php");
      exit();
    } else {
      echo "Some error occured";
    }
  } else {
    echo "Error!";
  }
}

//fetch all products
$sql_pro = "SELECT * FROM products";
$all_pro = mysqli_query($conn, $sql_pro);

//delete product
if(isset($_GET['id'])){
  $p_id = $_GET['id'];

  $del_sql = "DELETE FROM products WHERE id = '$p_id'";
  $data_del = mysqli_query($conn, $del_sql);

  if($data_del){
      header("location:products.php");
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sandaru Food Mart</title>

  <!-- Favicons -->
  <link href="../Assets/images/logo.png" rel="icon" />
  <link href="../Assets/images/logo.png" rel="apple-touch-icon" />

  <!-- Css Stylesheets -->
  <link href="../Assets/css/style.css" rel="stylesheet" />
  <link href="../Assets/css/products.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body>
  <!--Top Bar-->
  <div class="top-bar">
    <div class="left">
      <div class="search-bar">
        <input type="search" name="search" id="search" style="color: black;" placeholder="Search" />
        <button><i class="bi bi-search"></i></button>
      </div>
    </div>
    <div class="right">
      <div class="profile">
        <img src="../Assets/images/profile_default.jpg" alt="Default profile" class="pro-avatar" />
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
        <div class="dashboard"><i class="bi bi-house-door"></i>Dashboard</div>
      </a>
      <a href="categories.php">
        <div class="dashboard"><i class="bi bi-bookmark"></i>Categories</div>
      </a>
      <a href="products.php">
        <div class="dashboard">
          <i class="bi bi-basket2"></i>Products/Items
        </div>
      </a>
      <a href="customers.php">
        <div class="dashboard"><i class="bi bi-people"></i>Customers</div>
      </a>
      <a href="orders.php">
        <div class="dashboard">
          <i class="bi bi-cart4"></i>Order Management
        </div>
      </a>
      <a href="reviews.php">
        <div class="dashboard"><i class="bi bi-star-half"></i>Reviews</div>
      </a>
      <a href="contact.php">
        <div class="dashboard"><i class="bi bi-telephone"></i>Contact</div>
      </a>
      <a href="lendings.php">
        <div class="dashboard"><i class="bi bi-cash-stack"></i>Lendings</div>
      </a>
      <a href="cashier.php">
        <div class="dashboard"><i class="bi bi-person"></i>Cashier</div>
      </a>
      <a href="promotion.php">
        <div class="dashboard"><i class="bi bi-percent"></i>Promotions</div>
      </a>
      <a href="settings.php">
        <div class="dashboard">
          <i class="bi bi-gear-wide-connected"></i>Settings
        </div>
      </a>
    </div>
    <!--End of left side-->

    <!--Right side-->
    <div class="right-side-product">
      <div class="head-section">
        <div class="topic">
          <h2 style="color: white; margin-bottom: 20px">Products</h2>
        </div>
        <div class="button-section">
          <button class="addbtn" onclick="openModal('addPromoModal')">
            <i class="bi bi-plus fs-3"></i>
            Add Product
          </button>
          <div class="catFilter">
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">
                <i class="bi bi-funnel"></i> Filter by category
                <i class="bi bi-chevron-down"></i>
              </button>
              <div id="myDropdown" class="dropdown-content">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <p><?php echo $row['name']; ?></p>
                  <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product-details">
        <!--Product details-->
        <?php
        while ($row = mysqli_fetch_assoc($all_pro)) {
          ?>
          <div class="products-content">
            <div class="product-img">
              <h4><?php echo $row['product_name']; ?></h4>
              <img src="../Assets/images/products/<?php echo $row['image']; ?>" alt="Product Image" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%"><?php echo $row['product_id']; ?></p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  <?php echo $row['description']; ?>
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%"><?php echo $row['product_category']; ?></p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Units :</p>
                <p style="opacity: 70%"><?php echo $row['units']; ?></p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%"><?php echo $row['quantity']; ?></p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%"><?php echo $row['supplier']; ?></p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%"><?php echo $row['purchased_price']; ?></p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%"><?php echo $row['retail_price']; ?></p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%"><?php echo $row['retail_profit']; ?></p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%"><?php echo $row['whole_price']; ?></p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%"><?php echo $row['whole_profit']; ?></p>
              </div>
              <div class="action">
                <a href="update_product.php?id=<?php echo $row['id']; ?>">
                  <button class="edit">
                    <i class="bi bi-pencil-square"></i>
                  </button>
                </a>
                <a onclick="confirm ('Are you sure, Do you want to delete this category? ')" href="products.php?id=<?php echo $row['id'] ?>"><button class="delete"><i class="bi bi-trash-fill"></i></button></a>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
        <div class="pagination-container">
          <div class="pagination">
            <a href="#">
              <button class="control" id="prev" title="Previous page">
                < Prev </button>
            </a>
            <div class="pageNumbers">
              <!--Page Numbers-->
            </div>
            <a href="#">
              <button class="control" id="next" title="Next page">
                Next >
              </button>
            </a>
          </div>
        </div>
      </div>

    </div>
    <!--End of right side-->
  </div>
  <!--End of main body-->

  <!-- Add Product Modal -->
  <div id="addPromoModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('addPromoModal')">&times;</span>
      <h3>Add Product</h3>
      <form id="addPromoForm" action="" method="post" enctype="multipart/form-data">
        <div class="full-row">
          <div class="head-row">
            <div class="left-row">
              <label for="proID">Product ID:</label>
              <input type="text" id="proID" name="proID" value="<?php echo $new_id; ?>" required readonly />

              <label for="name">Product Name:</label>
              <input type="text" id="name" name="name" required />

              <label style="margin-top: 3px" for="category">Product Category:</label>
              <select name="category" id="Category" required>
                <option value="" disabled selected>Select a category</option>
                <?php 
                while($row = mysqli_fetch_assoc($result_name)){
                ?>
                  <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                <?php 
                }
                ?>
              </select>

              <label style="margin-top: 9px" for="units"> Units:</label>
              <input type="number" id="units" name="units" required />

              <label style="margin-top: 9px" for="quantity">Product Quantity:</label>
              <input type="number" id="quantity" name="quantity" required />

              <label for="supplier">Supplier:</label>
              <input type="text" id="supplier" name="supplier" required />

              <label for="productImage">Image:</label>
              <input type="file" id="productImage" name="productImage" accept="image/*" required />
            </div>
            <div class="right-row">
              <label for="purPrice">Purchased Price:</label>
              <input type="text" id="purPrice" name="purPrice" required />

              <label for="retPrice">Retail Price:</label>
              <input type="text" id="retPrice" name="retPrice" required />

              <label for="retProfit">Retail Profit:</label>
              <input type="text" id="retProfit" name="retProfit" required />

              <label for="whoPrice">Wholesale Price:</label>
              <input type="text" id="whoPrice" name="whoPrice" required />

              <label for="whoProfit">Wholesale Profit:</label>
              <input type="text" id="whoProfit" name="whoProfit" required />
            </div>
          </div>
          <div class="bottom-row">
            <label for="categoryDescription">Description:</label>
            <textarea id="categoryDescription" name="categoryDescription" required></textarea>

            <button class="addPro" name="add_product_btn" style="justify-content:center;" type="submit">Add
              Product</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!--Sweet alert js import-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../Assets/js/products.js"></script>
  <script>
    // Pagination Script
    const pageNumbers = document.querySelector(".pageNumbers");
    const listItems = document.querySelectorAll(".products-content");
    const prevButton = document.getElementById("prev");
    const nextButton = document.getElementById("next");

    const contentLimit = 10;
    const pageCount = Math.ceil(listItems.length / contentLimit);
    let currentPage = 1;

    const displayPageNumbers = (index) => {
      const pageNumber = document.createElement("a");
      pageNumber.innerText = index;
      pageNumber.setAttribute("href", "#");
      pageNumber.setAttribute("index", index);
      pageNumber.classList.add("page-number");
      pageNumbers.appendChild(pageNumber);
    };

    const getPageNumbers = () => {
      for (let i = 1; i <= pageCount; i++) {
        displayPageNumbers(i);
      }
    };

    const disableButton = (button) => {
      button.classList.add("disabled");
      button.setAttribute("disabled", true);
    };

    const enableButton = (button) => {
      button.classList.remove("disabled");
      button.removeAttribute("disabled");
    };

    const controlButtonsStatus = () => {
      if (currentPage === 1) {
        disableButton(prevButton);
      } else {
        enableButton(prevButton);
      }
      if (pageCount === currentPage) {
        disableButton(nextButton);
      } else {
        enableButton(nextButton);
      }
    };

    const handleActivePageNumber = () => {
      document.querySelectorAll(".page-number").forEach((button) => {
        button.classList.remove("active");
        const pageIndex = Number(button.getAttribute("index"));
        if (pageIndex === currentPage) {
          button.classList.add("active");
        }
      });
    };

    const setCurrentPage = (pageNum) => {
      currentPage = pageNum;

      handleActivePageNumber();
      controlButtonsStatus();

      const prevRange = (pageNum - 1) * contentLimit;
      const currRange = pageNum * contentLimit;

      listItems.forEach((item, index) => {
        if (index >= prevRange && index < currRange) {
          item.classList.remove("hidden");
        } else {
          item.classList.add("hidden");
        }
      });
    };

    window.addEventListener("load", () => {
      getPageNumbers();
      setCurrentPage(1);

      prevButton.addEventListener("click", () => {
        setCurrentPage(currentPage - 1);
      });

      nextButton.addEventListener("click", () => {
        setCurrentPage(currentPage + 1);
      });

      // Re-adding click listeners for dynamically created page numbers
      document.querySelector(".pageNumbers").addEventListener("click", (event) => {
        if (event.target.classList.contains("page-number")) {
          const pageIndex = Number(event.target.getAttribute("index"));
          setCurrentPage(pageIndex);
        }
      });
    });
  </script>
</body>

</html>