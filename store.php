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
        .footer-inner {
            height: 150px;
            width: 100%;
            background: url(website-menu-07/images/bg-footer.jpg);
        }

        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        #team {
            background: white !important;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #108d6f;
            border-color: #108d6f;
            box-shadow: none;
            outline: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #007b5e;
            border-color: #007b5e;
        }

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #team .card {
            border: none;
            background: #ffffff;
        }

        .image-flip:hover .backside,
        .image-flip.hover .backside {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            transform: rotateY(0deg);
            border-radius: .25rem;
        }

        .image-flip:hover .frontside,
        .image-flip.hover .frontside {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .mainflip {
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -ms-transition: 1s;
            -moz-transition: 1s;
            -moz-transform: perspective(1000px);
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
            position: relative;
        }

        .frontside {
            position: relative;
            -webkit-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            z-index: 2;
            margin-bottom: 30px;
        }

        .backside {
            position: absolute;
            top: 0;
            left: 0;
            background: white;
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -o-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }

        .frontside,
        .backside {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -moz-transition: 1s;
            -moz-transform-style: preserve-3d;
            -o-transition: 1s;
            -o-transform-style: preserve-3d;
            -ms-transition: 1s;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
        }

        .frontside .card,
        .backside .card {
            min-height: 312px;
        }

        .backside .card a {
            font-size: 18px;
            color: #007b5e !important;
        }

        .frontside .card .card-title,
        .backside .card .card-title {
            color: #007b5e !important;
        }

        .frontside .card .card-body img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }

        a {
            -webkit-transition: color 2s;
            transition: color 2s;
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
    <br><br>
    <div class="container">
        <div class="row">

            <div id="secondary" class="widget-area col-xs-12 col-md-3">
                <aside class="widget widget_product_categories">
                    <h3 class="widget-title">Categories</h3>


                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Home
                            </button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">Profile
                            </button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false">Messages
                            </button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false">Settings
                            </button>
                        </div>

                    </div>


                    <!--                    <ul class="product-categories">-->
                    <!--                        <li class="hassub"><a href="#" title="Men">Men</a>-->
                    <!--                        </li>-->
                    <!--                        <li class="hassub"><a href="#" title="woment">woment</a>-->
                    <!--                        </li>-->
                    <!--                        <li><a href="#" title="kids">kids</a></li>-->
                    <!--                        <li><a href="#" title="All Product">All Product</a></li>-->
                    <!--                    </ul>-->

                </aside>
                <aside class="widget widget_by_price">
                    <h3 class="widget-title">By Price</h3>
                    <section class="mb-4">

                        <h6 class="font-weight-bold mb-3">Price</h6>

                        <div class="slider-price d-flex align-items-center my-4">
                            <span class="font-weight-normal small text-muted mr-2">$0</span>
                            <form class="multi-range-field w-100 mb-1">
                                <input id="multi" class="multi-range" type="range"/>
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
                                <?php
                                //            $user_id = $_GET['id'];
                                $query = $con->query("SELECT * FROM images,anunturi where anunturi.image_id=image_id and images.id=anunturi.image_id ");

                                if ($query->num_rows > 0) {
                                    while ($row = $query->fetch_assoc()) {
                                        $imageURL = 'uploads/' . $row["file_name"];
                                        ?>
                                        <img src="<?php echo $imageURL; ?>" class="img-fluid "/>
                                    <?php }
                                } else { ?>
                                    <p>No image(s) found...</p>
                                <?php } ?>
                            </a>
                            <div class="text">
                                <?php
                                $sql = "SELECT * FROM anunturi where status='Activ'";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                <h2>
                                    <a href="#" title="Butterfly Bar Stool"><?php echo $row['titlu']; ?></a>
                                </h2>
                                <p class="align-right">
                                    <span><?php echo $row['pret']; ?></span>
                                </p>

                            </div>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                </aside>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">...
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab">...
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                         aria-labelledby="v-pills-messages-tab">...
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                         aria-labelledby="v-pills-settings-tab">...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>
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
                        <a href="#!" class="text-reset">Fruits</a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="website-menu-07/js/jquery-3.3.1.min.js"></script>
<script src="website-menu-07/js/popper.min.js"></script>
<script src="website-menu-07/js/bootstrap.min.js"></script>
<script src="website-menu-07/js/jquery.sticky.js"></script>
<script src="website-menu-07/js/main.js"></script>
</body>
</html>