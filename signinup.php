
    <?php include 'include/header.php'; 
        include 'include/connection.php';
    ?>

    <!-- SignIn  & signUp Section  start-->
    <!-- ------------------------- -->

    <?php 
    if(isset($_GET["error"])){
        $error = $_GET["error"];
    }
    ?>

    <section class="Sign-in-up">
        <div class="container-md container-tab">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 tab-side">
                    <div class="tab-button d-flex">
                        <div id="defaultOpen" class="sign-in-b tablinks" onclick="openTab(event,'logintab')">
                            <span class="in-btn">Sign In</span>
                        </div>
                        <div class="sign-up-b tablinks" onclick="openTab(event,'signuptab')">
                            <span class="up-btn">Sign Up</span>
                        </div>
                    </div>
                    <!-- signin -->
                    <div class="signupin">
                        <div id="logintab" class="logintab tabcontent">
                            <h2>Sign In</h2>
                            <div class="login-form">
                                <form action="core/login_func.php" method="post">
                                    <?php
                                        if(isset($error) && $error=="invalid_login"){
                                            ?>
                                                <div class="alert alert-danger" role="alert">
                                                    Invalid email or password
                                                </div>
                                            <?php
                                        }
                                    ?>
                                    <div class="form-group ">
                                        <label for="login_email">Email Address</label>
                                        <input type="email" name="email" class="form-control" id="login_email" placeholder="Email Address" required="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="login_pwd">Password</label>
                                        <input type="password" name="password" class="form-control" id="login_pwd" placeholder="Password" required="">
                                    </div>
                                    <button type="submit" class="btn btn-default btn-block">LOGIN</button>
                                    <div style="margin-bottom:20px;" class="forgot-area text-right">
                                        <a href="">Forgot your Password?</a>
                                    </div>
                                </form>

                            </div>
                        </div>


                        <!-- signup -->

                        <div id="signuptab" class="signuptab tabcontent">
                            <h2>Sign Up</h2>
                            <div class="signup-form">
                                <form action="core/signin_func.php" method="post">
                                    <div class="form-group ">
                                        <label for="reg_email">Email Address <span>*</span></label>
                                        <input class="form-control" placeholder="Email Address" type="email" name="email" id="reg_email" required="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="reg_name">Full Name <span>*</span></label>
                                        <input class="form-control" placeholder="Full Name" type="text" name="full_name" id="reg_name" required="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="reg_Pnumber">Phone Number <span>*</span></label>
                                        <input class="form-control" placeholder="Phone Number" type="text" name="phone" id="reg_Pnumber" required="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="reg_Padd">Address <span>*</span></label>
                                        <input class="form-control" placeholder="Address" type="text" name="address" id="reg_Padd" required="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="reg_password">Password <span>*</span></label>
                                        <input class="form-control" placeholder="Password" type="password" name="password" id="reg_password" required="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="confirm_password">Confirm Password <span>*</span></label>
                                        <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" id="confirm_password" required="">
                                    </div>
                                    <button type="submit" class="btn btn-default btn-block">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>









    <?php include 'include/footer.php'; ?>


</html>