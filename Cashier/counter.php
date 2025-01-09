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
</head>

<body>
    <!--Counter Section-->
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

        <!--Table-->
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
                    <tr>
                        <td>1</td>
                        <td>PRD001</td>
                        <td>Chocolate Cupcake</td>
                        <td>Piece</td>
                        <td>$3.00</td>
                        <td>10%</td>
                        <td>$2.70</td>
                        <td>50</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PRD002</td>
                        <td>Vanilla Cupcake</td>
                        <td>Piece</td>
                        <td>$2.50</td>
                        <td>5%</td>
                        <td>$2.38</td>
                        <td>100</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PRD003</td>
                        <td>Red Velvet Cupcake</td>
                        <td>Piece</td>
                        <td>$3.50</td>
                        <td>15%</td>
                        <td>$2.98</td>
                        <td>30</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>PRD004</td>
                        <td>Lemon Cupcake</td>
                        <td>Piece</td>
                        <td>$2.75</td>
                        <td>0%</td>
                        <td>$2.75</td>
                        <td>80</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>PRD005</td>
                        <td>Strawberry Cupcake</td>
                        <td>Piece</td>
                        <td>$3.25</td>
                        <td>20%</td>
                        <td>$2.60</td>
                        <td>60</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>PRD006</td>
                        <td>Carrot Cupcake</td>
                        <td>Piece</td>
                        <td>$2.80</td>
                        <td>5%</td>
                        <td>$2.66</td>
                        <td>40</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>PRD007</td>
                        <td>Peanut Butter Cupcake</td>
                        <td>Piece</td>
                        <td>$3.40</td>
                        <td>10%</td>
                        <td>$3.06</td>
                        <td>35</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>PRD008</td>
                        <td>Coconut Cupcake</td>
                        <td>Piece</td>
                        <td>$2.90</td>
                        <td>12%</td>
                        <td>$2.55</td>
                        <td>25</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>PRD009</td>
                        <td>Banana Cupcake</td>
                        <td>Piece</td>
                        <td>$3.10</td>
                        <td>8%</td>
                        <td>$2.85</td>
                        <td>45</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>PRD010</td>
                        <td>Almond Cupcake</td>
                        <td>Piece</td>
                        <td>$3.60</td>
                        <td>15%</td>
                        <td>$3.06</td>
                        <td>20</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>                    
                        <td>11</td>
                        <td>PRD011</td>
                        <td>Coffee Cupcake</td>
                        <td>Piece</td>
                        <td>$3.50</td>
                        <td>10%</td>
                        <td>$3.15</td>
                        <td>75</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>PRD012</td>
                        <td>Blueberry Cupcake</td>
                        <td>Piece</td>
                        <td>$3.75</td>
                        <td>20%</td>
                        <td>$3.00</td>
                        <td>50</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>PRD013</td>
                        <td>Matcha Cupcake</td>
                        <td>Piece</td>
                        <td>$4.00</td>
                        <td>25%</td>
                        <td>$3.00</td>
                        <td>30</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>PRD014</td>
                        <td>Mocha Cupcake</td>
                        <td>Piece</td>
                        <td>$3.45</td>
                        <td>10%</td>
                        <td>$3.10</td>
                        <td>60</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>PRD015</td>
                        <td>Mint Chocolate Cupcake</td>
                        <td>Piece</td>
                        <td>$3.25</td>
                        <td>5%</td>
                        <td>$3.09</td>
                        <td>55</td>
                        <td>
                            <div class="action">
                                <button class="edit"><i class="bi bi-pencil-square"></i></button> 
                                <button class="delete"><i class="bi bi-trash-fill"></i></button>
                            </div>
                        </td>
                    </tr>
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
                <button class="save-btn">Save</button>
                <button class="print-btn">Print</button>
            </div>
        </div>
    </div>
</body>
</html>
