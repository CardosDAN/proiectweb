<?php
//include auth_session.php file on all user panel pages
$file_name = 'home';
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
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
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

        a:hover {
            color: green;
        }

        .border-choose {
            background: url(../../website-menu-07/images/bg-border-choose.png) repeat-x scroll center;
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
            background: url(../../website-menu-07/images/7.jpg) no-repeat;
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

        element.style {
            background-image: url(../../website-menu-07/images/home1-banner1.jpg);
            background-repeat: no-repeat;
        }

        .special.special-v2 {
            padding-top: 75px;
        }

        .box {
            display: inline-block;
            width: 100%;
        }

        .special.special-v2 .special-content {
            text-align: center;
            max-width: 500px;
            padding-top: 0px;
        }

        .p1 {
            font-family: "Garamond", serif;
            font-size: 350%;
        }

        .special-content h3 {
            font: 300 42px/50px "Roboto Slab";
            color: #80b435;
            text-transform: uppercase;
            vertical-align: bottom;
            display: inline-block;
            margin-left: 10px;
        }

        .special .images-logo {
            position: relative;
            z-index: 999;
        }


    </style>
</head>
<body>

<?php include "../includes/nav_front.php"?>

<div class="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../../website-menu-07/images/home1-slideshow2.jpg"
                     alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="margin-top: -35%">Fresh Organic Food</h1>
                    <p>We get you Organic Fruits And Vegetable from our fields to your home </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../website-menu-07/images/2.jpg"
                     alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../website-menu-07/images/3.jpg"
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
                    <img class="img-responsive" src="../../website-menu-07/images/4.jpg" alt="banner">
                </a>
            </div>

            <div class="col-md-4 col-sm-4">
                <a class="hover-images" href="#" title="images">
                    <img class="img-responsive" src="../../website-menu-07/images/sus1.jpg" alt="banner">
                </a>
            </div>

            <div class="col-md-4 col-sm-4">
                <a class="hover-images" href="#" title="images">
                    <img class="img-responsive" src="../../website-menu-07/images/sus2.jpg" alt="banner">
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
                            <img src="../../website-menu-07/images/bg-border-center.png" alt="icon">
                        </div>
                    </div>
                </blockquote>
                <div class="shipping-v2 home3-shiping home2-shipping row justify-content-around">
                    <div class="col-md-3 col-sm-5">
                        <div class="border container" style="width: 140%">
                            <img src="../../website-menu-07/images/icon-shipping-2.png" alt="images">
                            <h3>Support</h3>
                            <p>SUPPORT 24/7</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="border container" style="width: 140%">
                            <img src="../../website-menu-07/images/icon-shipping-3.png" alt="images">
                            <h3>Help Partner</h3>
                            <p>HELP ALL ASPECTS</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="border container" style="width: 140%">
                            <img src="../../website-menu-07/images/icon-shipping-4.png" alt="images">
                            <h3>Contact With Us</h3>
                            <p>+07 (0) 7782 9137</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="../../website-menu-07/images/Hnet.com-image.jpg">
            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide bg-slider-one-item space-100 bg-home2-slider "
         data-ride="carousel">
        <div class="title-text-v2 align-center p4">
            <p4>Our Suppliers</p4>
            <br><br>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-5.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-6.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-1.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-2.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-3.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-3.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-5.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-6.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-1.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-2.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-3.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-3.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-5.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-6.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-1.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-2.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-3.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-4.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-3.png" alt="Brand"></a>
                </div>
                <div class="items">
                    <a href="#" title="brand"><img class="img-responsive"
                                                   src="../../website-menu-07/images/brand-4.png" alt="Brand"></a>
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
    <ul class="nav nav-tabs tabs tabs-title" id="myTab" role="tablist" >
        <li class="nav-item" rel="tab_1" role="presentation">
            <a class="nav-link  active" id="home-tab" data-bs-toggle="tab" href="#vegetables" role="tab"
               aria-controls="vegetables" aria-selected="true">Vegetables</a>
        </li>
        <li class="nav-item" rel="tab_2" role="presentation">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#fruits" role="tab" aria-controls="fruits"
               aria-selected="false">Fruits</a>
        </li>
        <li class="nav-item" rel="tab_3" role="presentation">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#nuts" role="tab" aria-controls="nuts"
               aria-selected="false">Nuts</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="vegetables" role="tabpanel" aria-labelledby="vegetables-tab">
            <div class="row">
                <?php
                $query = $con->query("SELECT * FROM images,anunturi where images.id=anunturi.image_id and anunturi.status='Activ' and anunturi.category_id=1 limit 4");
                while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p>
                                                <?php
                                                $imageURL = '../../uploads/' . $row["file_name"];
                                                ?>
                                                <img src="<?php echo $imageURL; ?>"/>

                                            </p>
                                            <h4 class="card-title"><?php echo $row['titlu']; ?></h4>
                                            <p class="card-text"><?php echo $row['adresa']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title"><?php echo $row['telefon']; ?></h4>
                                            <p class="card-text"><?php echo $row['descriere']; ?></p>
                                            <ul class="list-inline">
                                                <p class="card-text"><?php echo $row['pret']; ?></p>
                                            </ul>
                                            <a href="view_anunt.php?id=<?php echo $row['id'] ?>" role="button">View
                                                details</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade" id="fruits" role="tabpanel" aria-labelledby="fruits-tab">
            <div class="row">
                <?php
                $query = $con->query("SELECT * FROM images,anunturi where images.id=anunturi.image_id and anunturi.status='Activ' and anunturi.category_id=2 limit 4");
                while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p>
                                                <?php
                                                $imageURL = 'uploads/' . $row["file_name"];
                                                ?>
                                                <img src="<?php echo $imageURL; ?>"/>

                                            </p>
                                            <h4 class="card-title"><?php echo $row['titlu']; ?></h4>
                                            <p class="card-text"><?php echo $row['adresa']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title"><?php echo $row['telefon']; ?></h4>
                                            <p class="card-text"><?php echo $row['descriere']; ?></p>
                                            <ul class="list-inline">
                                                <p class="card-text"><?php echo $row['pret']; ?></p>
                                            </ul>
                                            <a href="view_anunt.php?id=<?php echo $row['id'] ?>" role="button">View
                                                details</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade" id="nuts" role="tabpanel" aria-labelledby="nuts-tab">
            <div class="row">
                <?php
                $query = $con->query("SELECT * FROM images,anunturi where images.id=anunturi.image_id and anunturi.status='Activ' and anunturi.category_id=3 limit 4");
                while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p>
                                                <?php
                                                $imageURL = 'uploads/' . $row["file_name"];
                                                ?>
                                                <img src="<?php echo $imageURL; ?>"/>

                                            </p>
                                            <h4 class="card-title"><?php echo $row['titlu']; ?></h4>
                                            <p class="card-text"><?php echo $row['adresa']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title"><?php echo $row['telefon']; ?></h4>
                                            <p class="card-text"><?php echo $row['descriere']; ?></p>
                                            <ul class="list-inline">
                                                <p class="card-text"><?php echo $row['pret']; ?></p>
                                            </ul>
                                            <a href="view_anunt.php?id=<?php echo $row['id'] ?>" role="button">View
                                                details</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <br><br>
    <div class="special bg-images special-v2 box container-fluid"
         style="background-image:url('../../website-menu-07/images/home1-banner1.jpg');background-repeat: no-repeat;">
        <div class="col-md-7 float-left align-right">
            <img class="images-logo container" src="../../website-menu-07/images/home1-images-banner1-2.png" alt="images">
        </div>
        <!-- End col-md-7 -->
        <div class="col-md-5 float-right">
            <div class="special-content align-center">
                <div class="p1">
                    <p>Special Offers</p>
                </div>

                <h3>Get 30% off</h3>
                <h3>your order of $100 or more</h3>
                <a class="btn btn-outline-success" href="#" title="shopnow">Shop Now</a>
            </div>
        </div>
        <!-- End col-md-5 -->
    </div>
</div>

<br><br><br>
<!-- Footer -->
<?php  include "../includes/footer_front.php"?>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../website-menu-07/js/jquery-3.3.1.min.js"></script>
<script src="../../website-menu-07/js/popper.min.js"></script>
<script src="../../website-menu-07/js/bootstrap.min.js"></script>
<script src="../../website-menu-07/js/jquery.sticky.js"></script>
<script src="../../website-menu-07/js/main.js"></script>
</body>
</html>