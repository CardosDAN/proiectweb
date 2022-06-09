<?php


include "../includes/auth_session.php";

?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/sty/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../assets/sty/css/owl.carousel.min.css">


    <link rel="stylesheet" href="../../assets/sty/css/bootstrap.min.css">


    <link rel="stylesheet" href="../../assets/sty/css/style.css">
    <title>Home</title>
    <style>
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


        a:hover {
            color: green;
        }

        .border-choose {
            background: url(../../assets/sty/images/bg-border-choose.png) repeat-x scroll center;
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
                <img class="d-block w-100" src="../../assets/sty/images/home1-slideshow2.jpg"
                     alt="First slide">

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../assets/sty/images/2.jpg"
                     alt="Second slide">

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../assets/sty/images/3.jpg"
                     alt="Third slide">

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
                    <img class="img-responsive" src="../../assets/sty/images/mere-rosii.jpg" alt="banner">
                </a>
            </div>

            <div class="col-md-4 col-sm-4">
                <a class="hover-images" href="#" title="images">
                    <img class="img-responsive" src="../../assets/sty/images/morcovi_332x200.jpeg" alt="banner">
                </a>
            </div>

            <div class="col-md-4 col-sm-4">
                <a class="hover-images" href="#" title="images">
                    <img class="img-responsive" src="../../assets/sty/images/iStock_61749842_MEDIUM_650_433_300x200.jpeg" alt="banner">
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
                        <h3><span>Noi suntem </span>Market</h3>
                        <footer class="blockquote footer">Inspirat  <cite title="Source Title">în natură</cite></footer>
                        <p>Adevărul este că știi cu adevărat că ceva este organic atunci când găsești bug-uri! evident că nu ar fi ajuns atât de departe într-un mediu de creștere non-organic, așa că mai bine decât orice certificare sau sigiliu pe un ambalaj, prezența unor creaturi vă permite să știți că planta este sănătoasă și 100% bio.
                           </p>
                    </div>
                    <div class="align-center border-choose">
                        <div class="images">
                            <img src="../../assets/sty/images/bg-border-center.png" alt="icon">
                        </div>
                    </div>
                </blockquote>

            </div>
            <div class="col-md-5 order-md-1">
                <img src="../../assets/sty/images/Hnet.com-image.jpg">
            </div>
        </div>
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
                $query = $con->query("SELECT * FROM imagini,anunturi where imagini.id=anunturi.image_id and anunturi.categorie_id='2' and anunturi.status=1 limit 6");
                while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-xl-4 py-1">
                        <div class="card h-100 shadow-sm">
                            <?php
                            $imageURL = '../../../uploads/' . $row["nume_fisier"];?>
                            <img src="<?php echo $imageURL; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="clearfix mb-3"><span
                                            class="float-start badge rounded-pill bg-success"><?php echo $row['titlu']?></span> <span
                                            class="float-end price-hp"><?php echo $row['pret']?></span></div>
                                <h5 class="card-title"><?php echo $row['descriere']?></h5>
                                <div class="container text-center">
                                    <a href="../front_pages/view_anunt.php?id=<?php echo $row['id']?>" class="btn btn-warning ">Vezi oferta</a>
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
                $query = $con->query("SELECT * FROM imagini,anunturi where imagini.id=anunturi.image_id and anunturi.categorie_id='1' and anunturi.status=1 limit 6");
                while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-xl-4 py-1">
                        <div class="card h-100 shadow-sm">
                            <?php
                            $imageURL = '../../../uploads/' . $row["nume_fisier"];?>
                            <img src="<?php echo $imageURL; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="clearfix mb-3"><span
                                            class="float-start badge rounded-pill bg-success"><?php echo $row['titlu']?></span> <span
                                            class="float-end price-hp"><?php echo $row['pret']?></span></div>
                                <h5 class="card-title"><?php echo $row['descriere']?></h5>
                                <div class="container text-center">
                                    <a href="../front_pages/view_anunt.php?id=<?php echo $row['id']?>" class="btn btn-warning ">Vezi oferta</a>
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
                $query = $con->query("SELECT * FROM imagini,anunturi where imagini.id=anunturi.image_id and anunturi.categorie_id='3' and anunturi.status=1 limit 6");
                while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-xl-4 py-1">
                        <div class="card h-100 shadow-sm">
                            <?php
                            $imageURL = '../../../uploads/' . $row["nume_fisier"];?>
                            <img src="<?php echo $imageURL; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="clearfix mb-3"><span
                                            class="float-start badge rounded-pill bg-success"><?php echo $row['titlu']?></span> <span
                                            class="float-end price-hp"><?php echo $row['pret']?></span></div>
                                <h5 class="card-title"><?php echo $row['descriere']?></h5>
                                <div class="container text-center">
                                    <a href="../front_pages/view_anunt.php?id=<?php echo $row['id']?>" class="btn btn-warning ">Vezi oferta</a>
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
         style="background-image:url('../../assets/sty/images/home1-banner1.jpg');background-repeat: no-repeat;">
        <div class="col-md-7 float-left align-right">
            <img class="images-logo container" src="../../assets/sty/images/home1-images-banner1-2.png" alt="images">
        </div>
        <!-- End col-md-7 -->
        <div class="col-md-5 float-right">
            <div class="special-content align-center">
                <div class="p1">
                    <p>Produse 100% bio</p>
                </div>

                <h3>Aduse chiar de la sursă</h3>

                <a class="btn btn-outline-success" href="#" title="shopnow">Vezi acum</a>
            </div>
        </div>

    </div>
</div>

<br><br><br>
<!-- Footer -->
<?php  include "../includes/footer_front.php"?>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/sty/js/jquery-3.3.1.min.js"></script>
<script src="../../assets/sty/js/popper.min.js"></script>
<script src="../../assets/sty/js/bootstrap.min.js"></script>
<script src="../../assets/sty/js/jquery.sticky.js"></script>
<script src="../../assets/sty/js/main.js"></script>
</body>
</html>