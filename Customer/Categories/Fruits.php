<?php 
//Database connection
$conn = mysqli_connect("localhost", "root", "", "sandaru1_retail_shop");

//Fetch all fruits category products
$sql = "SELECT * FROM products WHERE product_category = 'Fruits'";

// Handle sorting
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'newest';
switch($sort) {
    case 'price-low':
        $sql .= " ORDER BY retail_price ASC";
        break;
    case 'price-high':
        $sql .= " ORDER BY retail_price DESC";
        break;
    case 'best-sellers':
        $sql .= " ORDER BY quantity DESC";
        break;
    default:
        $sql .= " ORDER BY id DESC"; // newest first
}

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits - Sandaru Food Mart</title>

    <!-- Favicons -->
    <link
        href="../Assets/images/logo.png"
        rel="icon">
    <link
        href="../Assets/images/logo.png"
        rel="apple-touch-icon">
        
    <!-- CSS Files -->
    <link href="../Assets/css/styles.css" rel="stylesheet">
    <link href="../Assets/css/Categories.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        
        <li class="breadcrumb-item">Categories</li>
        <li class="breadcrumb-item active" aria-current="page">Fruits</li>
    </ol>
</nav>

    <main class="category-main">
        <div class="category-header">
            <h2 style="font-family: poppins;">..Fruits..</h2>
        </div>

        <div class="category-description">
            <p><i>Get fresh fruits delivered to your home</i></p>
        </div>

        <div class="sort-section">
            <label for="sort">Sort by:</label>
            <select name="sort" id="sort" onchange="window.location.href='?sort='+this.value">
                <option value="best-sellers"<?php echo $sort == 'best-sellers' ? 'selected' : ''; ?>>Best Sellers</option>
                <option value="price-low"<?php echo $sort == 'price-low' ? 'selected' : ''; ?>>Price: Low to High</option>
                <option value="price-high"<?php echo $sort == 'price-high' ? 'selected' : ''; ?>>Price: High to Low</option>
                <option value="newest"<?php echo $sort == 'newest' ? 'selected' : ''; ?>>Newest First</option>
            </select>
        </div>

        <div class="products-grid">
            <?php

            while ($row = mysqli_fetch_assoc($result)) 
            {
              ?>  

            <div class="product-card">
                <div class="product-image">
                    <img src="../../Admin/Assets/images/products/<?php echo $row['image'] ?>" alt="Product images">
                </div>
                <div class="product-details">
                    <h3><?php echo $row['product_name'] ?></h3>
                    <p class="price">Rs. <?php echo $row['retail_price'] ?>.00</p>
                    <p class="weight">(<?php echo $row['units'] ?>)</p>
                    <button onclick="location.href='../Cart/productview.php?id=<?php echo $row['product_id']; ?>';" class="add-to-cart">
                        View Product
                    </button>
                </div>
            </div>
              <?php
            }

            ?>

            
        </div>

        <!-- Pagination -->
        <div class="pagination-container">
            <div class="pagination">
                <a href="#">
                    <button class="control" id="prev" title="Previous page">< Prev</button>
                </a>
                <div class="pageNumbers">
                    <!-- Page Numbers will be generated by JavaScript -->
                </div>
                <a href="#">
                    <button class="control" id="next" title="Next page">Next ></button>
                </a>
            </div>
        </div>
    </main>
    <!-- Include Footer -->
    <?php include '../includes/footer.php'; ?>
    

    <script src="../Assets/js/script.js"></script>

    <!-- Pagination Script -->
    <script>
        const pageNumbers = document.querySelector(".pageNumbers");
        const listItems = document.querySelectorAll(".product-card");
        const prevButton = document.getElementById("prev");
        const nextButton = document.getElementById("next");

        const contentLimit = 20; // Show 20 products per page
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

            // Add click listeners for dynamically created page numbers
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