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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
  </head>

  <body>
    <!--Top Bar-->
    <div class="top-bar">
      <div class="left">
        <div class="search-bar">
          <input type="search" name="search" id="search" placeholder="Search" />
          <button><i class="bi bi-search"></i></button>
        </div>
      </div>
      <div class="right">
        <div class="profile">
          <img
            src="../Assets/images/profile_default.jpg"
            alt="Default profile"
            class="pro-avatar"
          />
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
      <div class="right-side">
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
                  <p>Grocery</p>
                  <p>Vegetables</p>
                  <p>Fruits</p>
                  <p>Household</p>
                  <p>Beverages</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-details">
          <!--Product details-->
          <div class="products-content">
            <div class="product-img">
              <h4>Samba 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Samba 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Samba 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Samba 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Nadu 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Dhal 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Sugar 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Miris 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Samba 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Samba 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Samba 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Samba 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Nadu 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Dhal 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Sugar 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
          <div class="products-content">
            <div class="product-img">
              <h4>Miris 5kg</h4>
              <img src="../Assets/images/products/samba.jpg" alt="" />
            </div>
            <div class="general-details">
              <h5 class="general-topic">General Details</h5>
              <div class="id">
                <p style="font-weight: 700">Product ID :</p>
                <p style="opacity: 70%">p001</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Description:</p>
                <p style="opacity: 70%">
                  Samba rice is a premium, short-grain variety known for its
                  unique aroma and slightly sticky texture when cooked, making
                  it ideal for dishes like biryani and fried rice.
                </p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Product Category :</p>
                <p style="opacity: 70%">Grocery</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Quantity :</p>
                <p style="opacity: 70%">100</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Supplier :</p>
                <p style="opacity: 70%">Araliya</p>
              </div>
            </div>
            <div class="price-details">
              <h5 class="general-topic">Price Details</h5>
              <div class="id">
                <p style="font-weight: 700">Purchased Price :</p>
                <p style="opacity: 70%">1,200</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Price :</p>
                <p style="opacity: 70%">1,500</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Retail Profit :</p>
                <p style="opacity: 70%">300</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Price :</p>
                <p style="opacity: 70%">1,350</p>
              </div>
              <div class="id">
                <p style="font-weight: 700">Wholesale Profit :</p>
                <p style="opacity: 70%">150</p>
              </div>
              <div class="action">
                <button onclick="openModal('updatePromoModal')" class="edit">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="delete"><i class="bi bi-trash-fill"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="pagination-container">
            <div class="pagination">
              <a href="#">
                <button class="control" id="prev" title="Previous page">
                  < Prev
                </button>
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
      <!--End of right side-->
    </div>
    <!--End of main body-->

    <!-- Add Product Modal -->
    <div id="addPromoModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="closeModal('addPromoModal')">&times;</span>
        <h3>Add Product</h3>
        <form id="addPromoForm">
          <div class="full-row">
            <div class="head-row">
              <div class="left-row">
                <label for="proID">Product ID:</label>
                <input type="text" id="proID" name="proID" required />

                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" required />

                <label style="margin-top: 3px" for="category"
                  >Product Category:</label
                >
                <select name="category" id="Category" required>
                  <option value="grocery">Grocery</option>
                  <option value="vegetable">Vegetables</option>
                  <option value="fruits">Fruits</option>
                  <option value="household">Household</option>
                  <option value="beverages">Beverages</option>
                </select>

                <label style="margin-top: 9px" for="quantity"
                  >Product Quantity:</label
                >
                <input type="number" id="quantity" name="quantity" required />

                <label for="supplier">Supplier:</label>
                <input type="text" id="supplier" name="supplier" required />

                <label for="categoryImage">Image:</label>
                <input
                  type="file"
                  id="categoryImage"
                  name="categoryImage"
                  accept="image/*"
                  onchange="previewImage(event)"
                  required
                />
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
              <textarea
                id="categoryDescription"
                name="categoryDescription"
                required
              ></textarea>

              <button class="addPro" type="submit">Add Product</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Update Promo Modal -->
    <div id="updatePromoModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="closeModal('updatePromoModal')"
          >&times;</span
        >
        <h3>Update Product</h3>
        <form id="addPromoForm">
          <div class="full-row">
            <div class="head-row">
              <div class="left-row">
                <label for="proID">Product ID:</label>
                <input type="text" id="proID" name="proID" required />

                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" required />

                <label style="margin-top: 3px" for="category"
                  >Product Category:</label
                >
                <select name="category" id="Category" required>
                  <option value="grocery">Grocery</option>
                  <option value="vegetable">Vegetables</option>
                  <option value="fruits">Fruits</option>
                  <option value="household">Household</option>
                  <option value="beverages">Beverages</option>
                </select>

                <label style="margin-top: 9px" for="quantity"
                  >Product Quantity:</label
                >
                <input type="number" id="quantity" name="quantity" required />

                <label for="supplier">Supplier:</label>
                <input type="text" id="supplier" name="supplier" required />

                <label for="categoryImage">Image:</label>
                <input
                  type="file"
                  id="categoryImage"
                  name="categoryImage"
                  accept="image/*"
                  onchange="previewImage(event)"
                  required
                />
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
              <textarea
                id="categoryDescription"
                name="categoryDescription"
                required
              ></textarea>

              <button class="addPro" type="submit">Add Product</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script src="../Assets/js/products.js"></script>
    <script src="../Assets/js/script.js"></script>
  </body>
</html>
