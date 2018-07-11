<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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