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
    <link href="./Assets/css/repaymentsModal.css" rel="stylesheet">
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
                    <button onclick="openRepayModal('repaymentModal')" class="continue-btn">Repayments</button>
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
                <button onclick="handleRegularSave()" class="save-btn">Save</button>
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

    <!-- Repayments Modal-->
    <div id="repaymentModal" class="modal">
        <div class="modal-content">
            <button class="close" onclick="closeModal('repaymentModal')"><i class="bi bi-x"></i></button>
            <h2>Repayments</h2>
            <form id="repaymentForm" action="path_to_php_script.php" method="POST" onsubmit="submitRepaymentForm(event)">
                <div>
                    <label for="name">Name : </label>
                    <input type="text" id="repayCustomer" oninput="repaySearchCustomer()" placeholder="Search by name" autocomplete="off">
                    <select id="repayCustomerDropdown" size="5" style="display:none;" onclick="repaySelectCustomer()">
                    </select>
                    <div id="repayCustomerDisplay"></div>
                    <input type="hidden" id="repayPhone" name="customerPhone">
                    <input type="hidden" id="data-nic" name="customerNIC">
                </div>

                <label for="date">Date:</label>
                <input type="date" id="crntDate" name="date" readonly>

                <label for="amount">Amount:</label>
                <input type="number" id="repayAmount" name="amount" required>
                
                <button type="submit">Pay</button>
            </form>
        </div>
    </div>

    <script src="./Assets/js/counter.js"></script>
    <script src="./Assets/js/repaymentsForm.js"></script>

</body>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Regular page styles */
        .print-only {
            display: none;
        }

        /* Print-specific styles */
        @media print {
            /* Hide everything except the bill */
            body * {
                visibility: hidden;
            }

            .print-only, .print-only * {
                visibility: visible;
                display: block;
            }

            .print-only {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }

            /* Bill styles */
            .bill-container {
                font-family: 'Courier New', monospace;
                width: 80mm; /* Standard receipt width */
                margin: 0 auto;
                padding: 10px;
            }

            .bill-header {
                text-align: center;
                margin-bottom: 15px;
            }

            .bill-header h1 {
                font-size: 30px;
                margin: 15px 0;
            }

            .bill-info {
                font-size: 12px;
                margin-bottom: 10px;
            }

            .bill-info div {
                display: flex;
                justify-content: space-between;
            }

            .bill-table {
                width: 100%;
                border-collapse: collapse;
                margin: 10px 0;
                font-size: 12px;
            }

            .bill-table tr{
                display: flex;
            }

            .bill-table th,
            .bill-table td {
                text-align: left;
                padding: 3px 0;
            }

            /* Define specific column widths */
            .bill-table th:nth-child(1),
            .bill-table td:nth-child(1) {
                width: 55%;  /* Product name */
            }

            .bill-table th:nth-child(2),
            .bill-table td:nth-child(2) {
                width: 10%;  /* Quantity */
            }

            .bill-table th:nth-child(3),
            .bill-table td:nth-child(3) {
                width: 15%;  /* Unit price */
            }

            .bill-table th:nth-child(4),
            .bill-table td:nth-child(4) {
                width: 20%;  /* Amount */
            }

            .bill-table .amount {
                text-align: right;
            }

            .bill-totals {
                margin-top: 10px;
                border-top: 1px dashed #000;
                padding-top: 5px;
            }

            .bill-totals div {
                display: flex;
                justify-content: space-between;
                font-size: 12px;
                margin: 3px 0;
            }

            .bill-footer {
                text-align: center;
                margin-top: 15px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Print-only bill layout -->
    <div class="print-only">
        <div class="bill-container">
            <div class="bill-header">
                <h1>Sandaru Food Mart</h1>
                <p>No: 328/1/D, Kokiskade Junction, Kirillawala, Kandy Road</p>
                <p>Phone: +94 33 267 8970</p>
                <p>Email: sandarufoodmart@gmail.com</p>
            </div>

            <div class="bill-info">
                <div>Bill No: <span id="print-bill-number"></span></div>
                <div>Cashier: <span id="print-cashier"></span></div>
                <div>Date: <span id="print-date"></span></div>
                <div>Time: <span id="print-time"></span></div>
                <div>Customer: <span id="print-customer"></span></div>
            </div>

            <table class="bill-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th class="amount">Amount</th>
                    </tr>
                </thead>
                <tbody id="print-items">
                    <!-- Items will be populated dynamically -->
                </tbody>
            </table>

            <div class="bill-totals">
                <div>
                    <span>Total:</span>
                    <span id="print-total"></span>
                </div>
                <div>
                    <span>Given Amount:</span>
                    <span id="print-given"></span>
                </div>
                <div>
                    <span>Balance:</span>
                    <span id="print-balance"></span>
                </div>
                <div id="print-lending-container" style="display: none;">
                    <span>Lending Amount:</span>
                    <span id="print-lending"></span>
                </div>
            </div>

            <div class="bill-footer">
                <p>Thank you very much!</p>
                <p>Come again...</p>
            </div>
        </div>
    </div>
</body>
</html>
</html>