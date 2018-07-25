<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home 02</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?php echo base_url().'asset/user/images/icons/favicon.png'?>"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/fonts/iconic/css/material-design-iconic-font.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/fonts/linearicons-v1.0.0/icon-font.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/vendor/animate/animate.css'?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/vendor/slick/slick.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/vendor/MagnificPopup/magnific-popup.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/vendor/perfect-scrollbar/perfect-scrollbar.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/css/util.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/user/css/main.css'?>">
<!--===============================================================================================-->
</head>

<body class="animsition">
    
    <!-- Header -->
    <header class="header-v2">
        <!-- Header desktop -->
        <div class="container-menu-desktop trans-03">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop p-l-45">
                    
                    <!-- Logo desktop -->       
                    

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="<?php echo base_url()?>">Home</a>
                            </li>

                            <li>
                                <a href="<?php echo site_url('home/aboutus')?>">About</a>
                            </li>

                            <li>
                                <a href="<?php echo site_url('home/contact')?>">Contact</a>
                            </li>
                        </ul>
                    </div>  

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m h-full">
                        
                            
                        
                            
                        <div class="flex-c-m h-full p-lr-19">
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                                <i class="zmdi zmdi-menu"></i>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>  
        </div>

    </header>

        <!-- Sidebar -->
    <aside class="wrap-sidebar js-sidebar">
        <div class="s-full js-hide-sidebar"></div>

        <div class="sidebar flex-col-l p-t-22 p-b-25">
            <div class="flex-r w-full p-b-30 p-r-27">
                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
                <ul class="sidebar-link w-full">
                    <li class="p-b-13">
                        <a href="index.html" class="stext-102 cl2 hov-cl1 trans-04">
                            Home
                        </a>
                    </li>

                    <li class="p-b-13">
                        <a href="<?php echo site_url('home/loginpage')?>" class="stext-102 cl2 hov-cl1 trans-04">
                            Login
                        </a>
                    </li>

                </ul>

                

                <div class="sidebar-gallery w-full">
                    <span class="mtext-101 cl5">
                        About Us
                    </span>

                    <p class="stext-108 cl6 p-t-27">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus vulputate hendrerit. Praesent faucibus erat vitae rutrum gravida. Vestibulum tempus mi enim, in molestie sem fermentum quis. 
                    </p>
                </div>
            </div>
        </div>
    </aside>


    


    <!--===============================================================================================-->  
    <script src="<?php echo base_url().'asset/user/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/user/vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/user/vendor/bootstrap/js/popper.js'?>"></script>
    <script src="<?php echo base_url().'asset/user/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/user/vendor/select2/select2.min.js'?>"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/user/vendor/daterangepicker/moment.min.js'?>"></script>
    <script src="<?php echo base_url().'asset/user/vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/user/vendor/slick/slick.min.js'?>"></script>
    <script src="<?php echo base_url().'asset/user/js/slick-custom.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/user/vendor/parallax100/parallax100.js'?>"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/user/vendor/MagnificPopup/jquery.magnific-popup.min.js'?>"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/user/vendor/isotope/isotope.pkgd.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/user/vendor/sweetalert/sweetalert.min.js'?>"></script>
<script>
        $('.js-addwish-b2').on('click', function(e){
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function(){
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/user/vendor/perfect-scrollbar/perfect-scrollbar.min.js'?>"></script>
    <script>
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/user/js/main.js'?>"></script>

</body>
</html>