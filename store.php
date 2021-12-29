<?php

include("src/includes/auth_session.php");
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
    <link rel="stylesheet" href="website-menu-07/css/style_shoppage.css">

    <title>Store</title>
<style>
    .footer-inner{
        height: 150px;
        width: 100%;
        background: url(website-menu-07/images/bg-footer.jpg);
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
                                <li class="active"><a href="home.php" class="nav-link">Home</a></li>
                                <li><a href="about_us.html" class="nav-link">About us</a></li>
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
                                <li><a href="contact_us.html" class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="website-menu-07/images/banner-catalog1.jpg" alt="First slide">
            </div>
        </div>
    </div>
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
        <div id="secondary" class="widget-area col-xs-12 col-md-3">
            <aside class="widget widget_product_categories">
                <h3 class="widget-title">Categories</h3>
                <ul class="product-categories">
                    <li class="hassub"><a href="#" title="Men">Men</a><i class="fa fa-caret-right"></i>
                        <ul class="children" style="display: none;">
                            <li><a href="#" title="Bag &amp; Luggage">Bag &amp; Luggage</a><i
                                        class="fa fa-caret-right"></i></li>
                            <li><a href="#" title="Eyewear">Eyewear</a><i class="fa fa-caret-right"></i></li>
                            <li><a href="#" title="Jewelry">Jewelry</a><i class="fa fa-caret-right"></i></li>
                            <li><a href="#" title="Shoes">Shoes</a><i class="fa fa-caret-right"></i></li>
                            <li><a href="#" title="Skyrts">Skyrts</a><i class="fa fa-caret-right"></i></li>
                        </ul>
                    </li>
                    <li class="hassub"><a href="#" title="woment">woment</a><i class="fa fa-caret-right"></i>
                        <ul style="display: none;">
                            <li><a href="#" title="Bag">Bag</a><i class="fa fa-caret-right"></i></li>
                            <li><a href="#" title="Bed &amp; Bath">Bed &amp; Bath</a><i class="fa fa-caret-right"></i>
                            </li>
                            <li><a href="#" title="Sport tops &amp; Vest">Sport tops &amp; Vest</a><i
                                        class="fa fa-caret-right"></i></li>
                            <li><a href="#" title="Sport undewear">Sport undewear</a><i class="fa fa-caret-right"></i>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#" title="kids">kids</a></li>
                    <li><a href="#" title="All Product">All Product</a></li>
                </ul>
            </aside>
            <aside class="widget widget_by_price">
                <h3 class="widget-title">By Price</h3>
                <section class="mb-4">

                    <h6 class="font-weight-bold mb-3">Price</h6>

                    <div class="slider-price d-flex align-items-center my-4">
                        <span class="font-weight-normal small text-muted mr-2">$0</span>
                        <form class="multi-range-field w-100 mb-1">
                            <input id="multi" class="multi-range" type="range" />
                        </form>
                        <span class="font-weight-normal small text-muted ml-2">$100</span>
                    </div>

                </section>
                <a class="link-v1 space-30" href="#" title="fillter">fillter</a>
            </aside>
            <aside class="widget widget_link">
                <h3 class="widget-title">By Brand</h3>
                <ul>
                    <li><a href="#" title="Aeccaft">Aeccaft</a><span class="count">(15)</span></li>
                    <li><a href="#" title="Artek">Artek</a><span class="count">(09)</span></li>
                    <li><a href="#" title="Bower">Bower</a><span class="count">(12)</span></li>
                    <li><a href="#" title="Culinarium">Culinarium</a><span class="count">(16)</span></li>
                    <li><a href="#" title="Desu">Desu</a><span class="count">(16)</span></li>
                </ul>
            </aside>
            <aside class="widget widget_feature">
                <h3 class="widget-title">Feature Products</h3>
                <ul>
                    <li>
                        <a class="images" href="#" title="images">
                            <!--                            <img class="img-responsive" src="assets/images/products/furniture/1.jpg" alt="images">-->
                        </a>
                        <div class="text">
                            <h2>
                                <a href="#" title="Butterfly Bar Stool">Butterfly Bar Stool</a>
                            </h2>
                            <p><span class="price-old">$700</span><span>$350</span></p>
                            <p class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="images" href="#" title="images">
                            <!--                            <img class="img-responsive" src="assets/images/products/furniture/2.jpg" alt="">-->
                        </a>
                        <div class="text">
                            <h2>
                                <a href="#" title="Butterfly Bar Stool">Butterfly Bar Stool</a>
                            </h2>
                            <p><span class="price-old">$700</span><span>$350</span></p>
                            <p class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="images" href="#" title="images">
                            <!--                            <img class="img-responsive" src="assets/images/products/furniture/3.jpg" alt="">-->
                        </a>
                        <div class="text">
                            <h2>
                                <a href="#" title="Butterfly Bar Stool">Butterfly Bar Stool</a>
                            </h2>
                            <p><span class="price-old">$700</span><span>$350</span></p>
                            <p class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="images" href="#" title="images">
                            <!--                            <img class="img-responsive" src="assets/images/products/furniture/4.jpg" alt="">-->
                        </a>
                        <div class="text">
                            <h2>
                                <a href="#" title="Butterfly Bar Stool">Butterfly Bar Stool</a>
                            </h2>
                            <p><span class="price-old">$700</span><span>$350</span></p>
                            <p class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </p>
                        </div>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
da
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Footer -->
<footer style="background: gray" class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="footer-inner">
    </section>
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3" style="color: limegreen">Fresh Food</i>
                    </h6>
                    <p>
                        The best online site for you to buy organic and products 100% bio, and for those
                        who want to sell them fast and at a resonable price
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4" style="color: limegreen">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset" >Fruits</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vegetable</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Nuts</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">OTHER PRODUCTS</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4" style="color: limegreen">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">About us</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Store</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4" style="color: limegreen">
                        Contact
                    </h6>
                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

</footer>

    <script src="website-menu-07/js/jquery-3.3.1.min.js"></script>
    <script src="website-menu-07/js/popper.min.js"></script>
    <script src="website-menu-07/js/bootstrap.min.js"></script>
    <script src="website-menu-07/js/jquery.sticky.js"></script>
    <script src="website-menu-07/js/main.js"></script>
</body>
</html>