<?php
//include auth_session.php file on all user panel pages
include("src/includes/auth_session.php");
$product_id = $_GET['id'];
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
          integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="website-menu-07/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="website-menu-07/css/style.css">
    <link rel="stylesheet" href="website-menu-07/css/style_shoppage.css">

    <title>Home</title>
    <style>
        a {
            -webkit-transition: color 2s;
            transition: color 2s;
        }

        a:hover {
            color: green;
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

        .avatar {
            vertical-align: middle;
            width: 90px;
            height: 90px;
            border-radius: 90%;
        }

        .date {
            font-size: 11px
        }

        .comment-text {
            font-size: 12px
        }



        .name {
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
<div class="banner-header banner-lbook3">
    <img src="website-menu-07/images/banner-catalog1.jpg" alt="Banner-header">

</div>

<div class="main-content">
    <div class="container">
        <div class="product-details-content row justify-content-between">
            <div class="col-md-5">
                <div class="card mb-lg-3">
                    <?php

                    $query = $con->query("SELECT * FROM images,anunturi where  images.id=anunturi.image_id and anunturi.id=".$product_id);

                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {
                            $imageURL = 'uploads/' . $row["file_name"];
                            ?>
                            <img src="<?php echo $imageURL; ?>" style="height: 325px;"/>
                        <?php }
                    } else { ?>
                        <p>No image(s) found...</p>
                    <?php } ?>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <?php
                                    $query = $con->query("SELECT * FROM images,users where users.image_id=image_id and images.id=users.image_id limit 1");

                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {
                                            $imageURL = 'uploads/' . $row["file_name"];
                                            ?>
                                            <img class=" avatar" src="<?php echo $imageURL; ?>"
                                                 data-holder-rendered="true"/>
                                        <?php }
                                    } else { ?>
                                        <p>No image(s) found...</p>
                                    <?php } ?>
                                </div>
                                <div class="col">
                                    <?php $id_anunt = $_GET['id']; ?>
                                    <?php
                                    $sql = "SELECT * FROM anunturi,users where anunturi.id='$id_anunt' and users.id=anunturi.user_id";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <?php echo $row["username"]; ?>
                                    <p class="card-text"><small
                                                class="text-muted"> <?php echo "Pe Fresh Food din " . $row["created_at"]; ?></small>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <?php
                }
                ?>

            </div>
            <!-- End col-md-6 -->
            <div class="col-md-6 ">
                <div class="box-details-info">
                    <div class="product-name">
                        <?php

                        $sql = "SELECT * FROM anunturi where status='Activ' and id=".$product_id;
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                        <h1><?php echo $row['titlu']; ?></h1>
                    </div>
                    <!-- End product-name -->

                    <div class="wrap-price">
                        <p class="price"><?php echo $row['pret']; ?></p>
                    </div>
                    <!-- End Price -->
                </div>
                <!-- End box details info -->
                <div class="options">
                    <p><?php echo $row['descriere']; ?></p>

                    <!-- End action -->
                    <div class="description-lits">
                        <h3><?php echo $row['adresa']; ?></h3>
                        google maps aici

                    </div>
                    <!--End Description-->
                    <div class="box space-30">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="title">
                                    <h3><?php echo $row['telefon']; ?></h3>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                    </div>

                    <!-- End row -->
                    <div class="action">

                        <a class="link-v1 wish" title="Wishlist" href="#"><i class="icon icon-heart"></i></a>

                    </div>
                    <!-- End share -->
                </div>
                <!-- End Options -->
            </div>
        </div>
        <!-- End product-details-content -->
        <div class="hoz-tab-container ver2 space-padding-tb-30">
            <ul class="tabs center">
                <li class="item active" rel="description">Description</li>

            </ul>
            <div class="tab-container">
                <div id="description" class="tab-content active" style="display: block;">
                    <div class="text center">
                        <p><?php echo $row['descriere']; ?></p>
                    </div>
                </div>
                <?php
                }
                ?>
                <ul class="tabs center">

                    <li class="item active" rel="customer">Customer Reviews</li>

                </ul>

                <div id="customer" class="tab-content" style="display: block;">
                    <div class="box border">
                        <div class="container mt-5">
                            <div class="d-flex justify-content row">
                                <div class="col-md-8">
                                    <div class="d-flex flex-column comment-section">
                                        <?php
                                        $sql = "SELECT * FROM anunturi,product_rating  where anunturi.id=".$product_id;
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <div class="bg-white p-2">


                                            <div class="d-flex flex-row user-info">
                                                <div class="d-flex flex-column justify-content-start ml-2">
                                                    <span class="d-block font-weight-bold name"><?php echo $row['name']; ?></span>
                                                    <span class="date text-black-50"><?php echo $row['email']; ?></span>
                                                </div>
                                                <div class="rateyo" id="rating"
                                                     data-rateyo-rating="<?php echo $row['rate']; ?>">
                                                </div>
                                                <!--                                                <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">-->

                                            </div>
                                            <div class="mt-2">
                                                <p class="comment-text"><?php echo $row['review']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="container">

                        <form action="src/actions/review.php" method="post">
                            <div class="rateyo" id="rating"
                                 data-rateyo-rating="0"
                                 data-rateyo-num-stars="5"
                                 data-rateyo-score="3">
                            </div>

                            <span class='result'>Rating: 0</span>
                            <input type="hidden" name="rating">
                            <input type="hidden" name="product_id" value="<?php echo $product_id ?>">

                            <div class="row">
                                <div class="col">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="col">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <br><br>
                            <div>
                                <textarea class="form-control" type="text" name="review"
                                          id="exampleFormControlTextarea1" placeholder="Review" rows="3"></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" name="add">Post review</button>
                        </form>
                    </div>


                    </form>
                </div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

            <script>


                $(function () {
                    $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                        var rating = data.rating;
                        $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
                        $(this).parent().find('.result').text('rating :' + rating);
                        $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
                    });
                });

            </script>



        </div>
    </div>
</div>
<!-- tab-container -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="title-text-v2 space-60">
    <h3>Related Products</h3>
</div>
<!-- End title -->
<div class="col-xs-12 col-sm-6 col-md-3 container">
    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
        <div class="mainflip">
            <div class="frontside">
                <div class="card">
                    <div class="card-body text-center">
                        <p> <?php
                            //            $user_id = $_GET['id'];
                            $query = $con->query("SELECT * FROM images,anunturi where anunturi.image_id=image_id and images.id=anunturi.image_id ");

                            if ($query->num_rows > 0) {
                                while ($row = $query->fetch_assoc()) {
                                    $imageURL = 'uploads/' . $row["file_name"];
                                    ?>
                                    <img src="<?php echo $imageURL; ?>"/>
                                <?php }
                            } else { ?>
                        <p>No image(s) found...</p>
                        <?php } ?>
                        </p>
                        <?php
                        $sql = "SELECT * FROM anunturi where status='Activ'";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                        <h4 class="card-title"><?php echo $row['titlu']; ?></h4>
                        <p class="card-text"><?php echo $row['adresa']; ?></p>
                        <!--                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>-->
                        <p>aici pun categoria</p>
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
                        <a href="view_anunt.php?id=<?php echo $row['id'] ?>" role="button">View details</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>