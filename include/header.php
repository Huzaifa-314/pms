<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Shop</title>
    <!-- style sheet -->
    <link rel="stylesheet" href="style.css">

    <!-- font awesome 4 link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- javascript -->
    <script src="main.js"></script>
</head>

<body>
    <!-- Header serction start -->
    <!-- --------------------- -->
    <header>

        <!-- top header -->
        <div class="top-header bg-light">
            <div class="container-fluid">
                <div class="top-header-items">
                    <div class="pharmacy-info">
                        <div class="email d-none d-sm-block">
                            <i class="fa fa-envelope"></i>
                            <span>pharmacy@email.com</span>
                        </div>
                        <div class="phone">
                            <i class="fa fa-phone"></i>
                            <span>+8801xxxxxxxxx</span>
                        </div>
                        <div class="address d-none d-md-block">
                            <i class="fa fa-map-marker"></i>
                            <span>pharmacy address(House, Road, City)</span>
                        </div>
                    </div>
                    <div class="social d-none d-md-block">
                        <a href="#"><i class="fa fa-facebook-square fa-2x" style="color:#3b5998;"></i></a>
                        <a href="#"><i class="fa fa-whatsapp fa-2x" style="color:#075E54;"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <!-- middle header -->
        <div class="middle-header">
            <div class="container-fluid">
                <div class="middle-header-items d-flex align-items-center justify-content-between">
                    <a href="index.php">
                        <div class="logo"><img src="img/logo.png" alt=""></div>
                    </a>
                    <div class="search d-none d-md-block">
                        <input type="text" class="header-search-input" placeholder="Search Medicine">
                        <button type="submit" class="header-search-button" value="Submit"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="right navbar navbar-expand-md">
                        <ul class="d-flex align-items-center">
                            <li><a href="user.php" class="d-none d-md-block">
                                    <button class="upload-prescription">Prescription</button>
                                </a></li>

                            <!-- cart start -->
                            <li id="open-cart"><a href="#" class="cart">
                                    <i class="fa fa-shopping-cart fa-lg"> Cart</i>
                                    <div class="cart-counter text-center text-white">0</div>
                                </a></li>
                            <!-- cart end -->


                            <li>
                                <a href="user.php" class="sign-in">
                                    <i class="fa fa-user fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- bottom header -->
        <nav class="bottom-header navbar navbar-expand-md navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="search-extra d-block d-md-none d-flex justify-content-center">
                <input type="text" class="header-search-extra-input" placeholder="Search Medicine">
                <button type="submit" class="header-search-extra-button" value="Submit"><i class="fa fa-search"></i></button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="location.php">Location</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Catagory
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="catagory_template.php">Prescribed Medicine</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="catagory_template.php">OTC</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="catagory_template.php">Health Product</a>
                            <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signinup.php">Sign in/Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/Huzaifa109837/Pharmacy-Management-System">Github Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dbdesign.php">Database design image</a>
                    </li>
                    <li class="d-block d-md-none"><a href="" class="">
                            <button class="upload-prescription">Prescription</button>
                        </a></li>

                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form> -->
            </div>
        </nav>

    </header>
    <!-- Header serction end -->
    <!-- --------------------- -->