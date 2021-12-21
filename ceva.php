<?php
//include auth_session.php file on all user panel pages
$file_name = 'home';
include("src/includes/auth_session.php");
include("src/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="website-menu-07/fonts/icomoon/style.css">

    <link rel="stylesheet" href="website-menu-07/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="website-menu-07/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="website-menu-07/css/style.css">

    <title>Home</title>
    <style>
        a {
            -webkit-transition: color 2s;
            transition: color 2s;
        }

        a:hover {
            color: green;
        }

        .border-choose {
            background: url(website-menu-07/images/bg-border-choose.png) repeat-x scroll center;
            margin: auto;
            max-width: 480px;
            text-align: center;
            margin-top: 30px;
        }

        .images {
            display: inline-block;
            width: 45px;
            text-align: center;
            background: #fff;
        }

        .align-center {
            text-align: center;
        }

        .shipping-v2.home3-shiping.home2-shipping {
            box-shadow: none;
            margin-top: 30px;
            padding: 0px;
            background: none;
        }

        .bg-slider-one-item.bg-home2-slider {
            padding: 30px 0px;
            background: url(website-menu-07/images/7.jpg) no-repeat;
        }

        .bg-slider-one-item.bg-home2-slider .brand-content {
            margin-top: 30px;
        }
        .title-text-v2 {
            text-align: center;
        }
        ul.tabs.tabs-title {
            width: 100%;
            display: inline-block;
            text-align: center;
            margin-bottom: 30px;
        }
        ul.tabs.tabs-title li {
            display: inline-block;
            text-align: center;
            text-transform: uppercase;
            padding: 0 17px;
            cursor: pointer;
            font: 400 16px "Roboto Slab";
            color: #2b2b2b;
        }
        ul.tabs.tabs-title li.active, ul.tabs.tabs-title li:hover {
            color: #80b435;
        }
    </style>
</head>
<body>


<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->
<div class="site-navbar-wrap">
    <div class="site-navbar-top">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="d-flex mr-auto">
                        <a href="#" class="d-flex align-items-center mr-4">
                            <span class="icon-envelope mr-2"></span>
                            <span class="d-none d-md-inline-block">info@domain.com</span>
                        </a>
                        <a href="#" class="d-flex align-items-center mr-auto">
                            <span class="icon-phone mr-2"></span>
                            <span class="d-none d-md-inline-block">+1 234 4567 8910</span>
                        </a>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <div class="mr-auto container">
                        <a class="btn" href="index.php">
                            <i class="bi bi-person">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>
                            </i>
                            My cont </a>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <h1 class="my-0 site-logo position-absolute"><a href="index.php"><span>Fresh</span>&nbspFood</a>
                    </h1>

                </div>
                <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                <a href="#" class="site-menu-toggle js-menu-toggle text-white">
                      <span class="icon-menu h3">
                      </span>
                                </a>
                            </div>
                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                <li class="active"><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#classes-section" class="nav-link">About us</a></li>
                                <!--                                <li class="has-children">-->
                                <!--                                    <a href="#" class="nav-link">Pages</a>-->
                                <!--                                    <ul class="dropdown arrow-top">-->
                                <!--                                        <li><a href="#" class="nav-link">Team</a></li>-->
                                <!--                                        <li><a href="#" class="nav-link">Pricing</a></li>-->
                                <!--                                        <li><a href="#" class="nav-link">FAQ</a></li>-->
                                <!--                                        <li class="has-children">-->
                                <!--                                            <a href="#">More Links</a>-->
                                <!--                                            <ul class="dropdown">-->
                                <!--                                                <li><a href="#">Menu One</a></li>-->
                                <!--                                                <li><a href="#">Menu Two</a></li>-->
                                <!--                                                <li><a href="#">Menu Three</a></li>-->
                                <!--                                            </ul>-->
                                <!--                                        </li>-->
                                <!--                                    </ul>-->
                                <!--                                </li>-->
                                <li><a href="store.php" class="nav-link">Store</a></li>
                                <li><a href="#events-section" class="nav-link">Blog</a></li>
                                <!--                                <li><a href="#gallery-section" class="nav-link">Gallery</a></li>-->
                                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="website-menu-07/images/1.jpg" width="700" height="700"
                     alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="margin-top: -35%">Fresh Organic Food</h1>
                    <p>We get you Organic Fruits And Vegetable from our fields to your home </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="website-menu-07/images/2.jpg" width="700" height="700"
                     alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="website-menu-07/images/3.jpg" width="700" height="700"
                     alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p>...</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container marketing" style="margin-top: -65px">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <a class="hover-images" href="#" title="images">
                    <img class="img-responsive" src="website-menu-07/images/4.jpg" alt="banner">
                </a>
            </div>

            <div class="col-md-4 col-sm-4">
                <a class="hover-images" href="#" title="images">
                    <img class="img-responsive" src="website-menu-07/images/sus1.jpg" alt="banner">
                </a>
            </div>

            <div class="col-md-4 col-sm-4">
                <a class="hover-images" href="#" title="images">
                    <img class="img-responsive" src="website-menu-07/images/sus2.jpg" alt="banner">
                </a>
            </div>

        </div>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="farmer info container">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <blockquote class="blockquote text-center">
                    <div class="title-choose align-center">
                        <h3><span>We are </span>FRESH FOOD</h3>
                        <footer class="blockquote footer">Nature <cite title="Source Title">Inspired</cite></footer>
                        <p>The fact of the matter is that you really know something's organic when you find bugs! they
                            obviously wouldn't&nbsp;have made it that far in a non-organic growing environment, so
                            better than any certification or seal on a package,&nbsp;the presence of creatures let you
                            know the plant was healthy and</p>
                    </div>
                    <div class="align-center border-choose">
                        <div class="images">
                            <img src="website-menu-07/images/bg-border-center.png" alt="icon">
                        </div>
                    </div>
                </blockquote>
                <div class="shipping-v2 home3-shiping home2-shipping row justify-content-around">
                    <div class="col-md-3 col-sm-5">
                        <div class="border container" style="width: 140%">
                            <img src="website-menu-07/images/icon-shipping-2.png" alt="images">
                            <h3>Support</h3>
                            <p>LIFE TIME SUPPORT 24/7</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="border container" style="width: 140%">
                            <img src="website-menu-07/images/icon-shipping-3.png" alt="images">
                            <h3>Help Partner</h3>
                            <p>HELP ALL ASPECTS</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="border container" style="width: 140%">
                            <img src="website-menu-07/images/icon-shipping-4.png" alt="images">
                            <h3>Contact With Us</h3>
                            <p>+07 (0) 7782 9137</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="website-menu-07/images/Hnet.com-image.jpg">
            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide bg-slider-one-item space-100 bg-home2-slider " data-ride="carousel">
        <div class="title-text-v2 align-center p4">
            <p4>Our Suppliers</p4>
            <br><br>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-5.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-6.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-1.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-2.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-3.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-5.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-6.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-1.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-2.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-3.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-5.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-6.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-1.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-2.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-3.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="container">
    <div class="title-text-v2">
        <h3>Lastest Products</h3>
    </div>
    <ul class="tabs tabs-title">
        <li class="item active" rel="tab_1">All Product</li>
        <li class="item" rel="tab_2">Fruits</li>
        <li class="item" rel="tab_3">Vegetables</li>
        <li class="item" rel="tab_4">Nuts</li>
        <li class="item" rel="tab_5">Other ProDucts</li>
    </ul>
    <div class="container">
        <div class="tab-container space-10">
            <div id="tab_1" class="tab-content active">
                <div class="products hover-shadow ver2 border-space-product">
                    <div class="product">
                        <div class="product-images">
                            <a href="#" title="product-images">
                                <img class="primary_image" src="website-menu-07/images/prune.jpg" alt="">
                            </a>
                            <div class="action">
                                <a class="add-cart" href="#" title="Add to cart"></a>
                                <a class="wish" href="#" title="Wishlist"></a>
                                <a class="zoom" href="#" title="Quick view"></a>
                            </div>
                            <!-- End action -->
                        </div>
                        <a href="#" title="Union Bed"><p class="product-title">BlueBerry</p></a>
                        <p class="product-price-old">$700.00</p>
                        <p class="product-price">$350.00</p>

                    </div>
                </div>
                <!-- End product-tab-content products -->
            </div>
            <!-- End tab-content -->
        </div>
    </div>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <a href="#" title="product-images">
                <img class="primary_image" src="website-menu-07/images/prune.jpg" alt="">
            </a>
            <div class="action">
                <a class="add-cart" href="#" title="Add to cart"></a>
                <a class="wish" href="#" title="Wishlist"></a>
                <a class="zoom" href="#" title="Quick view"></a>
            </div>
            <div class="card-body">
                <p class="card-text">BlueBerry
                    $700.00</p>
            </div>
        </div>
    </div>

</div>


<!-- Footer -->
<footer class="text-center text-lg-start bg-gray-  text-dark ">
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Fresh Food
                    </h6>
                    <p>
                        The best online site for you to buy organic and products 100% bio, and for those
                        who want to sell them fast and at a resonable price
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->

                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-info">About us</a>
                    </p>
                    <p>
                        <a href="#!" class="text-info">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-info">Store</a>
                    </p>
                    <p>
                        <a href="#!" class="text-info">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <div class="container">

                        <!-- Call to action -->
                        <ul class="list-unstyled list-inline text-center py-2">
                            <li class="list-inline-item">
                                <h5 class="mb-1">Register for free</h5>
                            </li>
                            <li class="list-inline-item">
                                <a href="registration.php" class="btn btn-outline-white btn-rounded">Sign up!</a>
                            </li>
                        </ul>
                        <!-- Call to action -->

                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <!--    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">-->
    <!--        © 2021 Copyright:-->
    <!--        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>-->
    <!--    </div>-->
    <!-- Copyright -->
</footer>
<!-- Footer -->


<script src="website-menu-07/js/jquery-3.3.1.min.js"></script>
<script src="website-menu-07/js/popper.min.js"></script>
<script src="website-menu-07/js/bootstrap.min.js"></script>
<script src="website-menu-07/js/jquery.sticky.js"></script>
<script src="website-menu-07/js/main.js"></script>
</body>
</html>