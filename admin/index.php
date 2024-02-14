<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Management System Admin Dashboard</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- left panel -->
    <?php include 'include/left-panel.php'; ?>

    <div class="panel-area">

        <!-- top navbar -->
        <?php include 'include/top-nav.php'; ?>


        <div class="main-area">
            <div id="add-product" class="tab-content">
                <div class="add-product p-1 box">
                    <h5 class="box-title">Add Product</h5>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="left">
                            <div class="input-field box-content">
                                <div class="input-item">
                                    <div>Brand Name:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Generic Name:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Type:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Manufacturer:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Short description:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Big description:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Retail Price:</div>
                                    <input type="add-product">
                                </div>
                                <button class="">Add</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-table p-1 box">

                    <h5 class="box-title">All Products</h5>
                    <div class="dropdown-divider"></div>
                    <div class="tbl-scroll">
                        <table class="table box-content">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Generic</th>
                                    <th scope="col">Manufacturer</th>
                                    <th scope="col">Strength</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Retail Price</th>
                                    <th scope="col">In stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="brand">Nimocon 500</td>
                                    <td class="generic">Azithromycin</td>
                                    <td class="manufacturer">ACI HealthCare Limited</td>
                                    <td class="strength">500 mg</td>
                                    <td class="type">Tablet</td>
                                    <td class="retail-price"></td>
                                    <td class="in-stock"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td class="brand">Adbon</td>
                                    <td class="generic">Calcium + Vitamin D3</td>
                                    <td class="manufacturer">ACI HealthCare Limited</td>
                                    <td class="strength">500 mg + 200 IU</td>
                                    <td class="type">Tablet</td>
                                    <td class="retail-price"></td>
                                    <td class="in-stock"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td class="brand">Opental 50</td>
                                    <td class="generic">Tramadol Hydrochloride </td>
                                    <td class="manufacturer">ACI HealthCare Limited</td>
                                    <td class="strength">50 mg</td>
                                    <td class="type">Tablet</td>
                                    <td class="retail-price"></td>
                                    <td class="in-stock"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="sale-product" class="tab-content">
                <div class="p-1 box">
                    <h5 class="box-title">Sale Product</h5>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="left">
                            <div class="input-field box-content">
                                <div class="input-item">
                                    <div>Brand Name:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Generic Name:</div>
                                    <input type="add-product">
                                </div>
                                <!-- <div class="input-item">
                                        <div>Type:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Manufacturer:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Short description:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Big description:</div>
                                        <input type="add-product">
                                    </div> -->
                                <div class="input-item">
                                    <div>Quantity(pice):</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Retail Price:</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Discount(%):</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Total Price:</div>
                                    <input type="">
                                </div>
                                <button class="">sale</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-table p-1 box">

                    <h5 class="box-title">Sale History</h5>
                    <div class="dropdown-divider"></div>
                    <div class="tbl-scroll">
                        <table class="table box-content">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Generic</th>
                                    <th scope="col">Quantity(pice)</th>
                                    <th scope="col">Retail Price</th>
                                    <th scope="col">Discount(%)</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="brand">Nimocon 500</td>
                                    <td class="generic">Azithromycin</td>
                                    <td class="quantity">10</td>
                                    <td class="retail-price">5</td>
                                    <td class="discount">0</td>
                                    <td class="total">50</td>
                                    <td class="status">Paid</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td class="brand">Nimocon 500</td>
                                    <td class="generic">Azithromycin</td>
                                    <td class="quantity">10</td>
                                    <td class="retail-price">5</td>
                                    <td class="discount">0</td>
                                    <td class="total">50</td>
                                    <td class="status">Baki rakhse</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td class="brand">Nimocon 500</td>
                                    <td class="generic">Azithromycin</td>
                                    <td class="quantity">10</td>
                                    <td class="retail-price">5</td>
                                    <td class="discount">0</td>
                                    <td class="total">50</td>
                                    <td class="status">Paid</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="stock" class="tab-content">
                <div class="p-1 box">
                    <h5 class="box-title">Purchase Product</h5>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="left">
                            <div class="input-field box-content">
                                <div class="input-item">
                                    <div>Brand Name:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Generic Name:</div>
                                    <input type="add-product">
                                </div>
                                <!-- <div class="input-item">
                                        <div>Type:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Manufacturer:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Short description:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Big description:</div>
                                        <input type="add-product">
                                    </div> -->
                                <div class="input-item">
                                    <div>Quantity(pice):</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Production Date:</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Expiry Date:</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Unit Price:</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Discount(%):</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Total Price:</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Purchase Date:</div>
                                    <input type="">
                                </div>
                                <button class="">Purchase</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-table p-1 box">

                    <h5 class="box-title">Purchase History</h5>
                    <div class="dropdown-divider"></div>
                    <div class="tbl-scroll">
                        <table class="table box-content">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Generic</th>
                                    <th scope="col">Quantity(pice)</th>
                                    <th scope="col">Production Date</th>
                                    <th scope="col">Expiry Date</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Discount(%)</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Purchase Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="brand">Nimocon 500</td>
                                    <td class="generic">Azithromycin</td>
                                    <td class="quantity">1000</td>
                                    <td class="production-date">01/01/2021</td>
                                    <td class="expiry-date">01/01/2024</td>
                                    <td class="unit-price">5</td>
                                    <td class="discount">0</td>
                                    <td class="total">5000</td>
                                    <td class="purchase-date">29/12/2022</td>
                                    <td class="status">Paid</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="brand">Nimocon 500</td>
                                    <td class="generic">Azithromycin</td>
                                    <td class="quantity">1000</td>
                                    <td class="production-date">01/01/2021</td>
                                    <td class="expiry-date">01/01/2024</td>
                                    <td class="unit-price">5</td>
                                    <td class="discount">0</td>
                                    <td class="total">5000</td>
                                    <td class="purchase-date">29/12/2022</td>
                                    <td class="status">Paid</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="brand">Nimocon 500</td>
                                    <td class="generic">Azithromycin</td>
                                    <td class="quantity">1000</td>
                                    <td class="production-date">01/01/2021</td>
                                    <td class="expiry-date">01/01/2024</td>
                                    <td class="unit-price">5</td>
                                    <td class="discount">0</td>
                                    <td class="total">5000</td>
                                    <td class="purchase-date">29/12/2022</td>
                                    <td class="status">Paid</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="reports" class="tab-content">
                <div class="row">
                    <div class="col-md-7">
                        <div class="box">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="report-status p-3" style="background-image: var(--report-success);">
                                        <div>Frequently Selling</div>
                                        <strong>4 Product</strong>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="report-status-body p-2">
                                        <div class="px-2"><strong>Napa</strong>
                                            <div>paracitamol</div>
                                            <div>5tk</div>
                                        </div>
                                        <div class="px-2"><strong>Napa</strong>
                                            <div>paracitamol</div>
                                            <div>5tk</div>
                                        </div>
                                        <div class="px-2"><strong>Napa</strong>
                                            <div>paracitamol</div>
                                            <div>5tk</div>
                                        </div>
                                        <div class="px-2"><strong>Napa</strong>
                                            <div>paracitamol</div>
                                            <div>5tk</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="box">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="report-status p-3" style="background-color: var(--report-danger) !important;">
                                        <div>Expiring</div>
                                        <Strong>2 Product</Strong>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="report-status-body p-2">
                                        <div class="px-2"><strong>Napa</strong>
                                            <div>paracitamol</div>
                                            <div>5tk</div>
                                        </div>
                                        <div class="px-2"><strong>Napa</strong>
                                            <div>paracitamol</div>
                                            <div>5tk</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="box">
                            <div id="piechart" style="height: 300px;"></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="box">
                            <div id="myChart" style="width:100%; height:300px">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>
                <div class="row">
                    <div class="product-table p-1 box">

                        <h5 class="box-title">Products in Stock</h5>
                        <div class="dropdown-divider"></div>
                        <div class="tbl-scroll">
                            <table class="table box-content">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Generic</th>
                                        <th scope="col">Manufacturer</th>
                                        <th scope="col">Strength</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Retail Price</th>
                                        <th scope="col">In stock</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="brand">Nimocon 500</td>
                                        <td class="generic">Azithromycin</td>
                                        <td class="manufacturer">ACI HealthCare Limited</td>
                                        <td class="strength">500 mg</td>
                                        <td class="type">Tablet</td>
                                        <td class="retail-price"></td>
                                        <td class="in-stock">500</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="brand">Adbon</td>
                                        <td class="generic">Calcium + Vitamin D3</td>
                                        <td class="manufacturer">ACI HealthCare Limited</td>
                                        <td class="strength">500 mg + 200 IU</td>
                                        <td class="type">Tablet</td>
                                        <td class="retail-price"></td>
                                        <td class="in-stock">220</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="brand">Opental 50</td>
                                        <td class="generic">Tramadol Hydrochloride </td>
                                        <td class="manufacturer">ACI HealthCare Limited</td>
                                        <td class="strength">50 mg</td>
                                        <td class="type">Tablet</td>
                                        <td class="retail-price"></td>
                                        <td class="in-stock">320</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="user-management" class="tab-content">
                <div class="p-1 box">
                    <h5 class="box-title">Add users</h5>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="left">
                            <div class="input-field box-content">
                                <div class="input-item">
                                    <div>Username:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Email:</div>
                                    <input type="add-product">
                                </div>
                                <!-- <div class="input-item">
                                        <div>Type:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Manufacturer:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Short description:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Big description:</div>
                                        <input type="add-product">
                                    </div> -->
                                <div class="input-item">
                                    <div>Password:</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Phone:</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Address:</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>User Role:</div>
                                    <input type="">
                                </div>
                                <button class="">Add</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-table p-1 box">

                    <h5 class="box-title">All Users</h5>
                    <div class="dropdown-divider"></div>
                    <div class="tbl-scroll">
                        <table class="table box-content">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">User Role</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="username">Huzaifa</td>
                                    <td class="Email">contact.mdhuzaifa@gmail.com</td>
                                    <td class="Phone">01813016898</td>
                                    <td class="Address">Mirpur-12,Dhaka-1216</td>
                                    <td class="User Role">Admin</td>
                                    <td class="Status">Active</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




        <!-- chart js -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/3471a30cd8.js" crossorigin="anonymous"></script>
        <!-- bootstrap jquery and js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- custom jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- custom js-->
        <script src="main.js"></script>
</body>

</html>