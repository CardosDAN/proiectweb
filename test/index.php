<?php
include ("../src/includes/auth_session.php");
include('../src/actions/database_connection.php');

// Set session
//session_start();
if(isset($_POST['records-limit'])){
    $_SESSION['records-limit'] = $_POST['records-limit'];
}

$limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 5;
$page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limit;
$students = $con->query("SELECT * FROM anunturi LIMIT $paginationStart, $limit")->fetchAll();

// Get total records
$sql = $con->query("SELECT count(id) AS id FROM anunturi")->fetchAll();
$allRecrods = $sql[0]['id'];

// Calculate total pages
$totoalPages = ceil($allRecrods / $limit);

// Prev + Next
$prev = $page - 1;
$next = $page + 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="../assets/app/js/jquery-1.10.2.min.js"></script>
    <script src="../assets/app/js/jquery-ui.js"></script>
    <script src="../assets/app/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/sty/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../assets/sty/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/sty/css/bootstrap.min.css">

    <link href="../assets/app/css/jquery-ui.css" rel="stylesheet">
    <link href="../assets/app/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="../assets/sty/css/style.css">
    <link rel="stylesheet" href="../assets/sty/css/style_shoppage.css">

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

    .ui-slider-handle {
        background: limegreen !important;
    }

    .ui-slider-range {
        background: lawngreen !important;
    }
</style>
<body>
<?php include "../src/includes/nav_front.php"; ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../assets/sty/images/banner-catalog1.jpg" alt="First slide">
        </div>
    </div>
</div>
<!-- Page Content -->
<br><br>
<div class="container">
    <!-- Select dropdown -->
    <div class="d-flex flex-row-reverse bd-highlight mb-3">
        <form action="index.php" method="post">
            <select name="records-limit" id="records-limit" class="custom-select">
                <option disabled selected>Records Limit</option>
                <?php foreach([2,4,5,12] as $limit) : ?>
                    <option
                        <?php if(isset($_SESSION['records-limit']) && $_SESSION['records-limit'] == $limit) echo 'selected'; ?>
                            value="<?= $limit; ?>">
                        <?= $limit; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </form>
    </div>

    <div class="row">
        <div id="secondary" class="widget-area col-xs-12 col-md-3">
            <div class="list-group">
                <aside class="widget widget_by_price">
                    <h3 class="widget-title">După preț</h3>
                    <input type="hidden" id="hidden_minimum_price" value="0"/>
                    <input type="hidden" id="hidden_maximum_price" value="65000"/>
                    <p id="price_show">0 - 650</p>
                    <div style="color: #1e7e34" id="price_range"></div>
                </aside>

            </div>
            <div class="list-group">
                <aside class="widget widget_product_categories">
                    <h3 class="widget-title">Categorii</h3>
                    <div>
                        <?php

                        $query = "SELECT DISTINCT(categorie) FROM anunturi WHERE status = 'Activ' ORDER BY id DESC";
                        $statement = $con->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                            ?>
                            <div class="p3">
                                <label><input type="checkbox" class="common_selector categorie"
                                              value="<?php echo $row['categorie']; ?>"> <?php echo $row['categorie']; ?>
                                </label>
                            </div>
                            <?php
                        }

                        ?>
                    </div>
                </aside>
                <aside class="widget widget_product_categories">
                    <h3 class="widget-title">Sub Categorii</h3>
                    <div>
                        <?php

                        $query = "SELECT DISTINCT(sub_categorie) FROM anunturi WHERE status = 'Activ' ORDER BY id DESC";
                        $statement = $con->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                            ?>
                            <div class="p3">
                                <label><input type="checkbox" class="common_selector sub_categorie"
                                              value="<?php echo $row['sub_categorie']; ?>"> <?php echo $row['sub_categorie']; ?>
                                </label>
                            </div>
                            <?php
                        }

                        ?>
                    </div>
                </aside>
                <aside class="widget widget_feature">
                    <h3 class="widget-title">Alte produse</h3>
                    <ul>
                        <?php include "../src/includes/db.php"; ?>
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
        </div>

        <div class="col-md-9">
            <div class="row filter_data">
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <nav aria-label="Page navigation example mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>">
                    <a class="page-link"
                       href="<?php if($page <= 1){ echo '#'; } else { echo "?page=" . $prev; } ?>">Previous</a>
                </li>

                <?php for($i = 1; $i <= $totoalPages; $i++ ): ?>
                    <li class="page-item <?php if($page == $i) {echo 'active'; } ?>">
                        <a class="page-link" href="index.php?page=<?= $i; ?>"> <?= $i; ?> </a>
                    </li>
                <?php endfor; ?>

                <li class="page-item <?php if($page >= $totoalPages) { echo 'disabled'; } ?>">
                    <a class="page-link"
                       href="<?php if($page >= $totoalPages){ echo '#'; } else {echo "?page=". $next; } ?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

<script>
    $(document).ready(function () {
        $('#records-limit').change(function () {
            $('form').submit();
        })
    });
</script>
<style>
    #loading {
        text-align: center;
        background: url('../src/front_pages/loader.gif') no-repeat center;
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
            var categorie = get_filter('categorie');
            var sub_categorie = get_filter('sub_categorie');
            var record_limit = $('#records-limit').val();
            var page = <?= isset($_GET['page']) ? $_GET['page'] : 1  ?>
            // var storage = get_filter('storage');
            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: {
                    action: action,
                    minimum_price: minimum_price,
                    maximum_price: maximum_price,
                    categorie: categorie,
                    sub_categorie: sub_categorie,
                    record_limit: record_limit,
                    page:page
                },
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

</body>
</html>
