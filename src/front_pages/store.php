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

    <link href = "../../assets/app/css/jquery-ui.css" rel = "stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="../../website-menu-07/css/style.css">
    <link rel="stylesheet" href="../../website-menu-07/css/style_shoppage.css">

    <title>Store</title>

</head>

<body>
<?php include "../includes/nav_front.php";?>
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
                    <input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
                    <p id="price_show">0 - 65000</p>
                    <div id="price_range"></div>
                </aside>

            </div>
            <div class="list-group">
                <aside class="widget widget_product_categories">
                    <h3 class="widget-title">Categories</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                        <?php

                        $query = "SELECT DISTINCT(brand) FROM anunturi WHERE status = 'Activ' ORDER BY id DESC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach($result as $row)
                        {
                            ?>
                            <div class="list-group-item checkbox overflow-control-input">
                                <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['brand']; ?>"  > <?php echo $row['brand']; ?></label>
                            </div>
                            <?php
                        }

                        ?>
                    </div>
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
            <!--                        <label><input type="checkbox" class="common_selector ram" value="--><?php //echo $row['product_ram']; ?><!--" > --><?php //echo $row['product_ram']; ?><!-- GB</label>-->
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
            <!--                        <label><input type="checkbox" class="common_selector storage" value="--><?php //echo $row['product_storage']; ?><!--"  > --><?php //echo $row['product_storage']; ?><!-- GB</label>-->
            <!--                    </div>-->
            <!--                    --><?php
            //                    }
            //                    ?><!--	-->
            <!--                </div>-->
        </div>

        <div class="col-md-9">
            <div class="row filter_data">
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
<?php  include "../includes/footer_front.php"?>
<!-- Footer -->
<style>
    #loading
    {
        text-align:center;
        background: url('loader.gif') no-repeat center;
        height: 150px;
    }
</style>

<script>
    $(document).ready(function(){

        filter_data();

        function filter_data()
        {
            $('.filter_data').html('<div id="loading" style="" ></div>');
            var action = 'fetch_data';
            var minimum_price = $('#hidden_minimum_price').val();
            var maximum_price = $('#hidden_maximum_price').val();
            var brand = get_filter('brand');
            // var ram = get_filter('ram');
            // var storage = get_filter('storage');
            $.ajax({
                url:"../actions/fetch_data.php",
                method:"POST",
                data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand}, //, ram:ram, storage:storage
                success:function(data){
                    $('.filter_data').html(data);
                }
            });
        }

        function get_filter(class_name)
        {
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }

        $('.common_selector').click(function(){
            filter_data();
        });

        $('#price_range').slider({
            range:true,
            min:0,
            max:65000,
            values:[0, 65000],
            step:5,
            stop:function(event, ui)
            {
                $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                $('#hidden_minimum_price').val(ui.values[0]);
                $('#hidden_maximum_price').val(ui.values[1]);
                filter_data();
            }
        });

    });
</script>
</body>
</html>
