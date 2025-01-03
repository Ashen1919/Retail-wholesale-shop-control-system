<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
    <link href="./Assets/css/counter.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header-section">
            <div>
                <label for="bill-number">Bill Number : </label>
                <select>
                    <option></option>
                </select>
            </div>
            <div>
            <label for="customer">Customer : </label>
                <input type="text">
                <button>Search</button>
            </div>
            <div>
            <label for="date">Date : </label>
                <input type="text" disabled>
            </div>
            <div>
            <label for="time">Time : </label>
                <input type="text" disabled>
            </div>
        </div>

        <div class="secondary-header">
            <div class="input-section">
                <div>
                    <label for="product ID/barcode">Product ID/Barcode</label>
                    <input type="text">
                </div>
                <div>
                    <label for="name of item">Name of item</label>
                    <input type="text" disabled>
                </div>
                <div>
                    <label for="quantity">Quantity</label>
                    <input type="number">
                </div>
                <div> 
                    <label for="selling price">Selling Price</label>   
                    <input type="number" disabled>
                </div>
                <div>
                    <label for="discount">Discount</label>
                    <input type="number">
                </div>
                <div>
                    <label for="our price">Our Price</label>
                    <input type="number"disabled>
                </div>
                <div>
                    <label for="amount">Amount</label>
                    <input type="number" disabled>
                </div>
            </div>
            <div class="secondary-header-btn">
                <button class="clear-btn">Clear</button>
                <button class="add-btn">Add</button>
            </div>
        </div>

        <div class="table-div">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Unit</th>
                        <th>Selling Price</th>
                        <th>Discount</th>
                        <th>Our Price</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <div class="footer-section">
            <div class="four-btns">
                <div class="upper-btns">
                    <button class="continue-btn">Continue</button>
                    <button class="new-btn">New</button>
                </div>
                <div class="lower-btns"> 
                    <button class="register-btn">Register</button>
                    <button class="reset-btn">Reset</button>
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
                    <input type="number" placeholder="0.00">
                </div>
                <div class="styled-input-box">
                    <label>Given Amount</label>
                    <input type="number" placeholder="0.00">
                </div>
                <div class="styled-input-box">
                    <label>Balance</label>
                    <input type="number" placeholder="0.00">
                </div>
            </div>
            <div class="final-action">
                <button class="save-btn">Save</button>
                <button class="print-btn">Print</button>
            </div>
        </div>
    </div>
</body>
</html>
