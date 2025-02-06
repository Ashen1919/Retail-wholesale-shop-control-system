<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link href="./Assets/images/logo.png" rel="icon">
    <link href="./Assets/images/logo.png" rel="apple-touch-icon">

    <!-- Css Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="./Assets/css/counter.css" rel="stylesheet">
    <link href="./Assets/css/registerCustomer.css" rel="stylesheet">
</head>

<body>
    <!--Counter Section-->
    <div class="container">
        <div class="header-section">
            <div>
                <label for="bill-number">Bill Number : </label>
                <input type="text" id="billNumber">
                <select id="savedBills" onclick="populateBillNumberDropdown()" onchange="updateBillNumberInput()">
                </select>
            </div>
            <div>
                <label for="customer">Customer : </label>
                <input type="text" id="customer" oninput="searchCustomer()" placeholder="Search by name" autocomplete="off">
                <select id="customerDropdown" size="5" style="display:none;" onclick="selectCustomer()">
                </select>
                <div id="customerPhoneDisplay"></div>
                <input type="hidden" id="customerPhone" name="customerPhone">
            </div>
            <div class="radio">
                <label>
                    <input id="retail" value="retail" type="radio" name="type" onclick="updatePrice()">
                    <span>Retail</span>
                </label>
                <label>
                    <input id="wholesale" value="wholesale" type="radio" name="type" onclick="updatePrice()">
                    <span>Wholesale</span>
                </label>
            </div>
            <div>
                <label for="date">Date : </label>
                <input type="text" id="orderDate" disabled>
            </div>
            <div>
                <label for="time">Time : </label>
                <input type="text" id="orderTime" disabled>
            </div>
        </div>

        <div class="secondary-header">
            <div class="input-section">
                <div>
                    <label for="productID">Product ID/Barcode</label>
                    <input type="text" id="productID" oninput="searchProduct()"> <!-- Now allows typing to search -->
                    <select id="productIDDropdown" size="5" style="display:none;" onchange="selectProduct()">
                        <!-- Options will be dynamically populated from the database -->
                    </select>
                </div>
                <div>
                    <label for="name">Name of item</label>
                    <input type="text" id="name" readonly>
                </div>
                <div>
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity">
                </div>
                <div>
                    <label for="sellingPrice">Unit Price</label>   
                    <input type="number" id="sellingPrice" readonly>
                </div>
                <div>
                    <label for="amount">Amount</label>
                    <input type="number" id="amount" readonly>
                </div>
            </div>
            <div class="secondary-header-btm">
                <button type="button" class="clear-btn" onclick="clearForm()">Clear</button>
                <button type="button" class="add-btn" onclick="addRow()">Add</button>
            </div>
        </div>

        <!--Table-->
        <div class="table-div">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Amount</th>
                        <th style="width: 120px;">Action</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                </tbody>
            </table>
        </div>

        <div class="footer-section">
            <div class="four-btns">
                <div class="upper-btns">
                    <button class="continue-btn">Continue</button>
                    <button onclick="newBill()" class="new-btn">New</button>
                </div>
                <div class="lower-btns"> 
                    <button onclick="openModal('registerCustomerModal')" class="register-btn">Register</button>
                    <button onclick="resetPage()" class="reset-btn">Reset</button>
                </div>
            </div>
            <div class="lending-section">
                <label><input type="checkbox" name="payment" value="lending"> Lending</label>
                <div id="styled-input-box" class="styled-input-box">
                    <label>Amount</label>
                    <input type="number" placeholder="0.00">
                </div>
                <label><input type="checkbox" name="payment" value="full"> Full Amount</label>
            </div>
            <div class="amount-section">
                <div class="styled-input-box">
                    <label>Total Amount</label>
                    <input type="number" placeholder="0.00" disabled>
                </div>
                <div class="styled-input-box">
                    <label>Given Amount</label>
                    <input type="number" placeholder="0.00">
                </div>
                <div class="styled-input-box">
                    <label>Balance</label>
                    <input type="number" placeholder="0.00" disabled>
                </div>
            </div>
            <div class="final-action">
                <button onclick="handleSave()" class="save-btn">Save</button>
                <button onclick="handlePrint()" class="print-btn">Print</button>
            </div>
        </div>
    </div>

    <!-- Register Wholesale Customer Modal-->
    <div id="registerCustomerModal" class="modal">
        <div class="modal-content">
            <button class="close" onclick="closeModal('registerCustomerModal')"><i class="bi bi-x"></i></button>
            <h2>Register Wholesale Customer</h2>
            <form id="registerCustomerForm" action="path_to_php_script.php" method="POST" onsubmit="submitCustomerForm(event)">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="nic">NIC:</label>
                <input type="text" id="nic" name="nic" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">email:</label>
                <input type="email" id="email" name="email" required>
                
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <script src="./Assets/js/counter.js"></script>

</body>
</html>