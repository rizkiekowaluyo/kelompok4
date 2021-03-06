<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?php echo base_url().'asset/login/images/icons/favicon.ico'?>"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/animate/animate.css'?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/css/util.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/css/main.css'?>">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" method="post">
                    <span class="login100-form-title p-b-33">
                        Account Registration
                    </span>
                    <?php echo form_open_multipart('home/registerpage'); ?>
                    <?php if (isset($_SESSION['success'])) {?>
                    <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
                    <?php } ?>
                    <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

                    <div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100" type="text" name="name" placeholder="Name">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Address is required">
                        <input class="input100" type="text" name="address" placeholder="Address">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Telp is required">
                        <input class="input100" type="text" name="telp" placeholder="Phone Number">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="E-mail is required">
                        <input class="input100" type="text" name="email" placeholder="E-mail">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input">
                        <input class="input100" type="file" name="photo">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-20">
                        <button type="submit" id="submit" name="submit" value="submit" class="login100-form-btn">
                            Register
                        </button>
                    </div>

                    <div class="text-center">
                        <span class="txt1">
                            Already Have an Account?
                        </span>

                        <a href="<?php echo site_url('home/loginpage')?>" class="txt2 hov1">
                            Log In
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/bootstrap/js/popper.js'?>"></script>
    <script src="<?php echo base_url().'asset/login/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/select2/select2.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/daterangepicker/moment.min.js'?>"></script>
    <script src="<?php echo base_url().'asset/login/vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/js/main.js'?>"></script>

</body>
</html>