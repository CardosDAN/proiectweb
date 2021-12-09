<?php
//include auth_session.php file on all user panel pages
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

    <title>Home</title>
    <style>
        a {
            -webkit-transition: color 2s;
            transition: color 2s;
        }

        a:hover {
            color: green;
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
                        <div style="width: 100%;">
                            <div style="width: 50%; height: 1px; float: right;">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="website-menu-07/images/palm.png" width="25" height="25">
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="p3">Nature inspired</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="website-menu-07/images/palm.png" width="25" height="25">
                                    </div>
                                </div>
                                <!--                                <p class="p3">Nature inspired</p>-->
                            </div>

                        </div>

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
                                <li><a href="#classes-section" class="nav-link">About us</a></li>
                                <li class="has-children">
                                    <a href="#" class="nav-link">Pages</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="#" class="nav-link">Team</a></li>
                                        <li><a href="#" class="nav-link">Pricing</a></li>
                                        <li><a href="#" class="nav-link">FAQ</a></li>
                                        <li class="has-children">
                                            <a href="#">More Links</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Menu One</a></li>
                                                <li><a href="#">Menu Two</a></li>
                                                <li><a href="#">Menu Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="store.php" class="nav-link">Store</a></li>
                                <li><a href="#events-section" class="nav-link">Events</a></li>
                                <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
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
    <div id="carouselExampleSlidesOnly" class="hero carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="website-menu-07/images/orange.jpg" width="700" height="700"
                     alt="First slide">
            </div>
        </div>
    </div>

    <div class="container text-center " style="margin-top: -20%">
        <div class="p1">
            <p style="color: orange ">Fresh Food</p>
        </div>
    </div>
    <br><br><br><br><br><br>

    <div class="container" style="margin-top: -4%">
        <blockquote class="blockquote text-center">
            <p style="color: black" class="mb-0 p2">Latest products</p>
            <footer class="blockquote footer"><a href="#">All products</a>
                <a class="blockquote footer" href="#">Fruits</a>
                <a class="blockquote footer" href="#">Vegetable</a>
            </footer>
        </blockquote>
        <div class="card-deck">
            <div class="card">
                <?php

                // Get images from the database
                $query = $con->query("SELECT * FROM images ORDER BY uploaded_on DESC");

                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                        $imageURL = 'uploads/'.$row["file_name"];
                        ?>
                        <img src="<?php echo $imageURL; ?>" alt="" width="100" height="100" />
                    <?php }
                }else{ ?>
                    <p>No image(s) found...</p>
                <?php } ?>
                <div class="card-body">
                    <?php
                    $sql = "SELECT id, titlu FROM anunturi where status='Activ'";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($result)) { ?>
                    <p class="card-text"><?php echo $row['titlu']; ?></p>
<!--                    <a href="pag2.php?id=--><?php //echo $row['id']?><!--" class="btn btn-info" role="button">View</a>-->
                </div>
            </div>
            <?php
            }
            ?>
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

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
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
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