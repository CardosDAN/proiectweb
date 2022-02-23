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
                    <h1 style="margin-top: -35%">Alimente organice proaspete</h1>
                    <p>Vă aducem fructe și legume organice de pe câmpurile noastre până acasă </p>
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
                        <h3><span>Noi suntem </span>FRESH FOOD</h3>
                        <footer class="blockquote footer">Inspirat  <cite title="Source Title">în natură</cite></footer>
                        <p>Adevărul este că știi cu adevărat că ceva este organic atunci când găsești bug-uri! evident că nu ar fi ajuns atât de departe într-un mediu de creștere non-organic, așa că mai bine decât orice certificare sau sigiliu pe un ambalaj, prezența unor creaturi vă permite să știți că planta este sănătoasă și 100% bio.
                           </p>
                    </div>
                    <div class="align-center border-choose">
                        <div class="images">
                            <img src="../../website-menu-07/images/bg-border-center.png" alt="icon">
                        </div>
                    </div>
                </blockquote>
                <div class="shipping-v2 home3-shiping home2-shipping row justify-content-around">
                    <div class="col-md-3 ">
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
            <p4>Furnizorii noștri</p4>
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
        <h3>Cele mai recente produse</h3>
    </div>
    <ul class="nav nav-tabs tabs tabs-title" id="myTab" role="tablist" >
        <li class="nav-item" rel="tab_1" role="presentation">
            <a class="nav-link  active" id="home-tab" data-bs-toggle="tab" href="#vegetables" role="tab"
               aria-controls="vegetables" aria-selected="true">Legume</a>
        </li>
        <li class="nav-item" rel="tab_2" role="presentation">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#fruits" role="tab" aria-controls="fruits"
               aria-selected="false">Fructe</a>
        </li>
        <li class="nav-item" rel="tab_3" role="presentation">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#nuts" role="tab" aria-controls="nuts"
               aria-selected="false">Lactate</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="vegetables" role="tabpanel" aria-labelledby="vegetables-tab">
            <link rel="stylesheet" href="../../assets/app/css/card.css">
            <div class="row">
                <?php
                $query = $con->query("SELECT * FROM images,anunturi where images.id=anunturi.image_id and anunturi.categorie='Legume' and anunturi.status='Activ' limit 6");
                while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-xl-4 py-1">
                        <div class="card h-100 shadow-sm">
                            <?php
                            $imageURL = '../../../uploads/' . $row["file_name"];?>
                            <img src="<?php echo $imageURL; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="clearfix mb-3"><span
                                            class="float-start badge rounded-pill bg-success"><?php echo $row['titlu']?></span> <span
                                            class="float-end price-hp"><?php echo $row['pret']?></span></div>
                                <h5 class="card-title"><?php echo $row['descriere']?></h5>
                                <div class="container">
                                    <a href="../front_pages/view_anunt.php?id=<?php echo $row['id']?>" class="btn btn-warning ">Check offer</a>
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
                $query = $con->query("SELECT * FROM images,anunturi where images.id=anunturi.image_id and anunturi.categorie='Fructe' and anunturi.status='Activ' limit 6");
                while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-xl-4 py-1">
                        <div class="card h-100 shadow-sm">
                            <?php
                            $imageURL = '../../../uploads/' . $row["file_name"];?>
                            <img src="<?php echo $imageURL; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="clearfix mb-3"><span
                                            class="float-start badge rounded-pill bg-success"><?php echo $row['titlu']?></span> <span
                                            class="float-end price-hp"><?php echo $row['pret']?></span></div>
                                <h5 class="card-title"><?php echo $row['descriere']?></h5>
                                <div class="container">
                                    <a href="../front_pages/view_anunt.php?id=<?php echo $row['id']?>" class="btn btn-warning ">Check offer</a>
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
                $query = $con->query("SELECT * FROM images,anunturi where images.id=anunturi.image_id and anunturi.categorie='Lactate' and anunturi.status='Activ' limit 6");
                while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-xl-4 py-1">
                        <div class="card h-100 shadow-sm">
                            <?php
                            $imageURL = '../../../uploads/' . $row["file_name"];?>
                            <img src="<?php echo $imageURL; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="clearfix mb-3"><span
                                            class="float-start badge rounded-pill bg-success"><?php echo $row['titlu']?></span> <span
                                            class="float-end price-hp"><?php echo $row['pret']?></span></div>
                                <h5 class="card-title"><?php echo $row['descriere']?></h5>
                                <div class="container">
                                    <a href="../front_pages/view_anunt.php?id=<?php echo $row['id']?>" class="btn btn-warning ">Check offer</a>
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
                    <p>Oferte speciale</p>
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