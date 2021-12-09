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

    <div class="container text-center " style="margin-top: -12%">
        <div class="p1">
            <p style="color: white ">Product details</p>
            <h3 style="margin-top: -4%">Home > Product details</h3>
        </div>
    </div>
    <br><br><br><br><br><br>
    <div class="row container">
        <div class="col-lg-12">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                     class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?php echo $_SESSION['username']; ?></h4>
                                    <p class="text-secondary mb-1"> <?php
                                        $sql = "SELECT id, create_datetime FROM users";
                                        $result = mysqli_query($con, $sql);
                                        while($row = mysqli_fetch_assoc($result)) { ?>
                                    <p class="card-text">Pe Fresh Food din <?php echo $row['create_datetime']; ?></p>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <?php

                                        // Get images from the database
                                        $query = $con->query("SELECT * FROM images ORDER BY uploaded_on DESC");

                                        if ($query->num_rows > 0) {
                                            while ($row = $query->fetch_assoc()) {
                                                $imageURL = 'uploads/' . $row["file_name"];
                                                ?>
                                                <img src="<?php echo $imageURL; ?>" alt=""/>
                                            <?php }
                                        } else { ?>
                                            <p>No image(s) found...</p>
                                        <?php } ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <br>
<!--            --><?php //$user_id = $_GET['id'];?>
            <?php
//            $sql = "SELECT * FROM anunturi where id='$user_id'";
            $sql = "SELECT * FROM anunturi";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)) { ?>
                <div class="descriere">
                    <text>
                        <div class="row">
                            <div class="col-75">
                                <div class="css-sg1fy9"><h1 data-cy="ad_title" class="css-1oarkq2-Text eu5v0x0"><?php echo $row['titlu']; ?></h1></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                                <div data-cy="ad_description" class="css-1m8mzwg"><h3 class="css-emnwzw-Text eu5v0x0">Descriere</h3>
                                    <div class="css-g5mtbi-Text">
                                        <?php echo $row['descriere']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                                <div data-cy="ad_description" class="css-1m8mzwg"><h3 class="css-emnwzw-Text eu5v0x0">Alte informati</h3>
                                    <div class="css-g5mtbi-Text">
                                        <label >Telefon: <?php echo $row['telefon']; ?> <br>
                                            <label >Adresa: <?php echo $row['adresa']; ?> <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </text>
                </div>
                <br>
                <?php
            }
            ?>
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