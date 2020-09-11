<?php 
include_once('header.php');
include('connection.php');
include('functions.php');
?>

<!-- Hero section -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <style type="text/css">
       .hero-section{
        display:;
       }
        .carousel-item {
  transition: -webkit-transform 0.5s ease;
  transition: transform 0.5s ease;
  transition: transform 0.5s ease, -webkit-transform 0.5s ease;
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
  

}
.carousel-inner img
{
    height:40vh;
    width: 100%;
}
@media (min-width: 683px){
        .carousel-inner{display: none;}
        .carousel-indicators{display: none;}
    }
@media (min-width: 320px) and (max-width: 683px){
        .hero-section{display: none;}
    }
    </style>
</head>
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/12.jpg">
                
            </div>
            <div class="hs-item set-bg" data-setbg="img/3.jpg">
                
            </div>
            <div class="hs-item set-bg" data-setbg="img/5.jpg">
                
            </div>
            <div class="hs-item set-bg" data-setbg="img/44.jpg">
                
            </div>
            <div class="hs-item set-bg" data-setbg="img/6.png">
                
            </div>
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <!-- Hero section end -->
     

    <div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
        <li data-target="#slides" data-slide-to="3"></li>
        <li data-target="#slides" data-slide-to="4"></li>
    </ul>
   
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/12.jpg">
        </div>
        <div class="carousel-item">
            <img src="img/3.jpg">
        </div>
        <div class="carousel-item">
            <img src="img/5.jpg">
        </div>
        <div class="carousel-item">
            <img src="img/44.jpg">
        </div>
        <div class="carousel-item">
            <img src="img/6.png">
        </div>
    </div>
</div>

    <!-- Features section -->
    <section class="features-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/1.png" alt="#">
                        </div>
                        <h2>Fast Secure Payments</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/2.png" alt="#">
                        </div>
                        <h2>Premium Products</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/3.png" alt="#">
                        </div>
                        <h2>Free & fast Service</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features section end -->


    <!-- letest product section -->
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>PREMIUM</h2>
            </div>
            <div class="product-slider owl-carousel">
                
                  <?php
               getPremium();
               ?>
                
              
                
            </div>
        </div>
    </section>
    <!-- letest product section end -->



    <!-- Product filter section -->
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>PRIMARY</h2>
            </div>
            <!-- <ul class="product-filter-menu">
                <li><a href="#">TOPS</a></li>
                <li><a href="#">JUMPSUITS</a></li>
                <li><a href="#">LINGERIE</a></li>
                <li><a href="#">JEANS</a></li>
                <li><a href="#">DRESSES</a></li>
                <li><a href="#">COATS</a></li>
                <li><a href="#">JUMPERS</a></li>
                <li><a href="#">LEGGINGS</a></li>
            </ul> -->
            <div class="row">
               <?php
               getPro();
               ?>
                
                   

                
            </div>
            <div class="text-center pt-5">
                <button class="site-btn sb-line sb-dark"><a href="job.php" style="color:black ">LOAD MORE</a></button>
            </div>
        </div>
    </section>
    <!-- Product filter section end -->


    <!-- Banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="banner set-bg" data-setbg="img/banner-bg.jpg">
                <div class="tag-new">PRE</div>
                <span>New Arrivals</span>
                <h2>PREMIUM ADS</h2>
                <a href="post.php" class="site-btn">POST AN AD</a>
            </div>
        </div>
    </section>
    <!-- Banner section end  -->
    

    <?php include_once('footer.php');?>