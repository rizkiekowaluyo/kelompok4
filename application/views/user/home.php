<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bengkelin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
            margin-bottom: 0;
            border-radius: 0;
            }
            
            /* Add a gray background color and some padding to the footer */
            footer {
            background-color: #f2f2f2;
            padding: 5px;
            }
            
        .carousel-inner img {
            width: 100%; /* Set width to 100% */
            margin: auto;
            min-height:200px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
            .carousel-caption {
            display: none; 
            }
        }
        </style>
</head>
<body>
<!-- navigasi bar menu diatas  -->
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Bengkelin</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="<?php echo site_url('home/aboutus')?>">About Us</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="<?php echo site_url('home/registerpage')?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="<?php echo site_url('home/loginpage')?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        </div>
    </div>
    </nav>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="asset/motor.jpg" alt="Image">
                <div class="carousel-caption">
                    <h3>Bengkel</h3>
                    <p>Its Funny if you dont know about machine</p>
                </div>      
            </div>

            <div class="item">
                <img src="asset/motor1.jpg" alt="Image">
                <div class="carousel-caption">
                    <h3>Bengkel</h3>
                    <p>man is stell</p>
                </div>      
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div><br><br><br><br></br>

<!-- memabagi div menjadi 4 kolom dengan bootstrap -->
    <div class="container text-left">    
    <h3>Highly Recommended Item</h3><br>
    <div class="row">
        <div class="col-sm-3">
            <img src="asset/imgitem/download.jpg" class="img-responsive" style="width:50%" alt="Image">
            <p>Oli fastfron Formula</p>
            <button type="button" class="btn btn-primary">View Full Page</button>
        </div>
        <div class="col-sm-3"> 
            <img src="asset/imgitem/download.jpg" class="img-responsive" style="width:50%" alt="Image">
            <p>Oli fastfron Formula</p>   
            <button type="button" class="btn btn-primary">View Full Page</button> 
        </div>
        <div class="col-sm-3">
            <img src="asset/imgitem/download.jpg" class="img-responsive" style="width:50%" alt="Image">
            <p>Oli fastfron Formula</p>    
            <button type="button" class="btn btn-primary">View Full Page</button>
        </div>
        <div class="col-sm-3">
            <img src="asset/imgitem/download.jpg" class="img-responsive" style="width:50%" alt="Image">
            <p>Oli fastfron Formula</p>    
            <button type="button" class="btn btn-primary">View Full Page</button>
        </div>
    </div>
    </div><br>

<!-- Footer syntax -->
<!-- mengambil glyphicon dari coourasel -->
    <div class="footer-copyright py-3 text-center">
        <p>&copy; Bengkelin</p>
        <div class="text-center">
            <a target="_blank" href="https://www.facebook.com/RizkiNF" onclick="" class="btn btn-social-icon btn-lg btn-facebook"><i class="fa fa-facebook"></i></a>
            <a onclick="" class="btn btn-social-icon btn-lg btn-twitter"><i class="fa fa-twitter"></i></a>
            <a onclick="" class="btn btn-social-icon btn-lg btn-instagram"><i class="fa fa-instagram"></i></a>
            <a onclick="" class="btn btn-social-icon btn-lg btn-google"><i class="fa fa-google"></i></a>
        </div>
    </div>
</body>
</html>