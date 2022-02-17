<?php
include('../actions/database_connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="../../assets/app/js/jquery-1.10.2.min.js"></script>
    <script src="../../assets/app/js/jquery-ui.js"></script>
    <script src="../../assets/app/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../website-menu-07/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../website-menu-07/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../website-menu-07/css/bootstrap.min.css">

    <link href="../../assets/app/css/jquery-ui.css" rel="stylesheet">
    <link href="../../assets/app/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="../../website-menu-07/css/style.css">
    <link rel="stylesheet" href="../../website-menu-07/css/style_shoppage.css">

    <title>Store</title>

</head>
<style>
    .img-responsive {
        display: block;
        max-width: 100%;
        height: auto;
    }

    .widget ul li {
        position: relative;
        line-height: 30px;
        padding: 5px 0px;
    }

    img {
        vertical-align: middle;
    }

    .widget.widget_feature .text {
        padding-top: 18px;
    }
    .ui-slider-handle{
        background: limegreen !important;
    }
    .ui-slider-range{
        background: lawngreen !important;
    }
</style>
<body>
<?php include "../includes/nav_front.php"; ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../../website-menu-07/images/banner-catalog1.jpg" alt="First slide">
        </div>
    </div>
</div>
<!-- Page Content -->
<br><br>
<div class="container">
    <div class="row">
        <div id="secondary" class="widget-area col-xs-12 col-md-3">
            <div class="list-group">
                <aside class="widget widget_by_price">
                    <h3 class="widget-title">By Price</h3>
                    <input type="hidden" id="hidden_minimum_price" value="0"/>
                    <input type="hidden" id="hidden_maximum_price" value="65000"/>
                    <p id="price_show">0 - 650</p>
                    <div style="color: #1e7e34" id="price_range"></div>
                </aside>

            </div>
            <div class="list-group">
                <aside class="widget widget_product_categories">
                    <h3 class="widget-title">Categories</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                        <?php

                        $query = "SELECT DISTINCT(anunturi.category_id), product_categories.name FROM anunturi,product_categories WHERE anunturi.status = 'Activ' and product_categories.id=anunturi.category_id  ORDER BY anunturi.id DESC;";
                        $statement = $con->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                            ?>
                            <div class="list-group-item checkbox overflow-control-input">
                                <label><input type="checkbox" class="common_selector category_id"
                                              value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></label>
                            </div>
                            <?php
                        }

                        ?>
                    </div>
                </aside>
                <aside class="widget widget_feature">
                    <h3 class="widget-title">Other Products</h3>
                    <ul>
                        <?php include "../includes/db.php"; ?>
                        <?php
                        $query = $con->query("SELECT * FROM images,anunturi where images.id=anunturi.image_id and anunturi.status='Activ' limit 4");
                        while ($row = $query->fetch_assoc()) { ?>
                            <li>
                                <a class="images" href="#" title="images">
                                    <?php $imageURL = '../../uploads/' . $row["file_name"]; ?>
                                    <img class="img-responsive" src="<?php echo $imageURL; ?>" alt="images">
                                </a>
                                <div class=" align-right">
                                    <h2>
                                        <a href="view_anunt.php?id=<?php echo $row['id'] ?>"><?php echo $row['titlu']; ?></a>
                                    </h2>
                                    <p><span><?php echo $row['pret']; ?></span></p>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>

                </aside>
            </div>

            <!--				<div class="list-group">-->
            <!--					<h3>RAM</h3>-->
            <!--                    --><?php
            //
            //                    $query = "
            //                    SELECT DISTINCT(product_ram) FROM product WHERE product_status = '1' ORDER BY product_ram DESC
            //                    ";
            //                    $statement = $connect->prepare($query);
            //                    $statement->execute();
            //                    $result = $statement->fetchAll();
            //                    foreach($result as $row)
            //                    {
            //                    ?>
            <!--                    <div class="list-group-item checkbox">-->
            <!--                        <label><input type="checkbox" class="common_selector ram" value="-->
            <?php //echo $row['product_ram']; ?><!--" > --><?php //echo $row['product_ram']; ?><!-- GB</label>-->
            <!--                    </div>-->
            <!--                    --><?php //
            //                    }
            //
            //                    ?>
            <!--                </div>-->
            <!--				-->
            <!--				<div class="list-group">-->
            <!--					<h3>Internal Storage</h3>-->
            <!--					--><?php
            //                    $query = "
            //                    SELECT DISTINCT(product_storage) FROM product WHERE product_status = '1' ORDER BY product_storage DESC
            //                    ";
            //                    $statement = $connect->prepare($query);
            //                    $statement->execute();
            //                    $result = $statement->fetchAll();
            //                    foreach($result as $row)
            //                    {
            //                    ?>
            <!--                    <div class="list-group-item checkbox">-->
            <!--                        <label><input type="checkbox" class="common_selector storage" value="-->
            <?php //echo $row['product_storage']; ?><!--"  > -->
            <?php //echo $row['product_storage']; ?><!-- GB</label>-->
            <!--                    </div>-->
            <!--                    --><?php
            //                    }
            //                    ?><!--	-->
            <!--                </div>-->
        </div>

        <div class="col-md-9">
            <div class="row filter_data">
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php // include "../includes/footer_front.php"?>
        <!-- Footer -->
        <style>
            #loading {
                text-align: center;
                background: url('loader.gif') no-repeat center;
                height: 150px;
            }
        </style>

        <script>
            $(document).ready(function () {

                filter_data();

                function filter_data() {
                    $('.filter_data').html('<div id="loading" style="" ></div>');
                    var action = 'fetch_data';
                    var minimum_price = $('#hidden_minimum_price').val();
                    var maximum_price = $('#hidden_maximum_price').val();
                    var category_id = get_filter('category_id');
                    // var ram = get_filter('ram');
                    // var storage = get_filter('storage');
                    $.ajax({
                        url: "../actions/fetch_data.php",
                        method: "POST",
                        data: {
                            action: action,
                            minimum_price: minimum_price,
                            maximum_price: maximum_price,
                            category_id: category_id
                        }, //, ram:ram, storage:storage
                        success: function (data) {
                            $('.filter_data').html(data);
                        }
                    });
                }

                function get_filter(class_name) {
                    var filter = [];
                    $('.' + class_name + ':checked').each(function () {
                        filter.push($(this).val());
                    });
                    return filter;
                }

                $('.common_selector').click(function () {
                    filter_data();
                });

                $('#price_range').slider({
                    range: true,
                    min: 0,
                    max: 650,
                    values: [0, 650],
                    step: 5,
                    stop: function (event, ui) {
                        $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                        $('#hidden_minimum_price').val(ui.values[0]);
                        $('#hidden_maximum_price').val(ui.values[1]);
                        filter_data();
                    }
                });

            });
        </script>
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
</body>
</html>
