<?php
//include auth_session.php file on all user panel pages
include "../includes/auth_session.php";
$product_id = $_GET['id'];
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
          integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../website-menu-07/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../../website-menu-07/css/style.css">
    <link rel="stylesheet" href="../../website-menu-07/css/style_shoppage.css">

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


<?php include "../includes/nav_front.php"?>
<div class="banner-header banner-lbook3">
    <img src="../../website-menu-07/images/banner-catalog1.jpg" alt="Banner-header">

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
                            $imageURL = '../../../uploads/' . $row["file_name"];
                            $user_id = $row["user_id"];
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
                                    $query = $con->query("SELECT * FROM images,users where users.id='{$user_id}' and images.id=users.image_id ");

                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {
                                            $imageURL = '../../../uploads/' . $row["file_name"];
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

                        $sql = "SELECT * FROM anunturi where status='Activ' and id=" . $product_id;
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        $product_category_id = $row['category_id'];
                        ?>
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
                        <?php
                        $address = $row['adresa'];;
                        echo '<iframe frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>'; ?>

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
                <div id="customer" class=" container-fluid" style="display: block;">
                    <div class="box border">
                        <div class="container mt-5">
                            <div class="d-flex justify-content row">
                                <div class="col-md-8">
                                    <div class="d-flex flex-column comment-section">
                                        <?php
                                        $sql = "SELECT * FROM anunturi,product_rating  where anunturi.id=product_rating.product_id and product_rating.product_id=" . $product_id;
                                        //                                        ;
                                        //                                        SELECT * FROM anunturi,product_rating  where anunturi.id=".$product_id." LIMIT 6
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

                    <div class="container ">
                        <form action="../actions/review.php" method="post">
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

<div class="title-text-v2 space-60">
    <h3>Related Products</h3>
</div>


<div class="container">
    <div class="row">
        <?php
        $query = $con->query("SELECT * FROM images,anunturi where images.id=anunturi.image_id and anunturi.status='Activ' and anunturi.category_id=". $product_category_id);
        while ($row = $query->fetch_assoc()) { ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                        <?php
                                        $imageURL = '../../../uploads/' . $row["file_name"];
                                        ?>
                                        <img src="<?php echo $imageURL; ?>"/>

                                    </p>
                                    <h4 class="card-title"><?php echo $row['titlu']; ?></h4>
                                    <p class="card-text"><?php echo $row['adresa']; ?></p>
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

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


</body>
</html>