<?php
//include auth_session.php file on all user panel pages
include "../includes/auth_session.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../website-menu-07/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../website-menu-07/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../website-menu-07/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../../website-menu-07/css/style.css">

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


<?php include "../includes/nav_front.php"?>
<div class="main">
    <div id="carouselExampleSlidesOnly" class="hero carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../../website-menu-07/images/1.jpg" width="700" height="700"
                     alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../website-menu-07/images/2.jpg" width="700" height="700"
                     alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../website-menu-07/images/3.jpg" width="700" height="700"
                     alt="Third slide">
            </div>
        </div>
    </div>
<div class="container">
    <h6 class="css-nnbf1n-Text eu5v0x0">Dă cât mai multe detalii!</h6>
    <form action="../actions/adaugareanunt.php" method="post" enctype="multipart/form-data">
        <div class="col-md-6 form-group">
            <input type="text" name="titlu" placeholder="Titlu....">
        </div>
        <div class="col-md-6 form-group">
            <input type="number" name="telefon" placeholder="07********">
        </div>
        <div class="col-md-6 form-group">
            <input type="number" name="pret" placeholder="Pret">
        </div>
        <div class="col-md-6 form-group">
            <input type="text" name="adresa" placeholder="Adresa...">
        </div>
        <div class="col-md-6 form-group">
            <textarea name="descriere" placeholder="Scrie ceva...." ></textarea>
        </div>
        <input type="file" name="file">
        <button  type="submit"  class="btn btn-primary">Adauga</button>
        <a type="button" class="btn btn-danger" href="home.php">Anulează</a>
    </form>
<!--    <form action="upload.php" method="post" enctype="multipart/form-data">-->
<!--        Select Image File to Upload:-->
<!--        <input type="file" name="file">-->
<!--        <input type="submit" name="submit" value="Upload">-->
<!--    </form>-->
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
                                <a href="../../registration.php" class="btn btn-outline-white btn-rounded">Sign up!</a>
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


<script src="../../website-menu-07/js/jquery-3.3.1.min.js"></script>
<script src="../../website-menu-07/js/popper.min.js"></script>
<script src="../../website-menu-07/js/bootstrap.min.js"></script>
<script src="../../website-menu-07/js/jquery.sticky.js"></script>
<script src="../../website-menu-07/js/main.js"></script>
</body>
</html>