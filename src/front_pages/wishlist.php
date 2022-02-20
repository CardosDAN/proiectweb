<?php
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
    <title>Wishlist</title>
    <style>
        @media (max-width: 767px)
        table.table.cart-table td.product-photo img {
            width: 150px;
        }
            table.table.cart-table td.product-photo img {
                width: 200px;
            }
            img {
                vertical-align: middle;
            }
            img {
                border: 0;
            }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Oswald', sans-serif;
            font-size: 14px;
            display: inline-block;
            width: 100%;
            color: #161616;
            position: relative;
            font-weight: 400;
        }

        .space-80 {
            margin-bottom: 80px !important;
        }

        table.table.cart-table thead {
            background: #80b435;
        }

        table.table.cart-table thead th:first-child {
            padding-left: 30px;
        }

        table.table.cart-table thead th {
            color: #fff;
            font: 700 18px "Roboto Slab";
            padding: 12px 0px;
            letter-spacing: 0px;
        }

        table.table.cart-table thead th.add-cart {
            text-align: right;
            padding-right: 20px;
        }

        @media (max-width: 767px)
        table.table.cart-table td.product-photo {
            width: 150px;
        }
            table.table.cart-table td.product-photo {
                max-width: 200px;
                width: 250px;
            }

            table.table.cart-table td {
                padding: 30px 0px;
                vertical-align: middle;
            }

            table.table.cart-table td.produc-name {
                width: 30%;
            }

            table.table.cart-table td {
                padding: 30px 0px;
                vertical-align: middle;
            }

            table.table.cart-table td.produc-price, table.table.cart-table td.product-quantity, table.table.cart-table td.total-price {
                width: 15%;
            }

            @media (max-width: 767px)
            table.table tr td.description, table.table tr td.product-avai, table.table tr td.produc-price {
                display: none;
            }

                table.table.cart-table td {
                    padding: 30px 0px;
                    vertical-align: middle;
                }

                table.table.cart-table td.product-instock {
                    font: 400 18px/25px "Roboto Condensed";
                    color: #80b435;
                }

                table.table.cart-table td {
                    padding: 30px 0px;
                    vertical-align: middle;
                }
                table.table.cart-table td.add-cart {
                    text-align: right;
                    padding: 0 30px;
                }
                table.table.cart-table td {
                    padding: 30px 0px;
                    vertical-align: middle;
                }
                table.table.cart-table td.produc-price input {
                    border: none;
                    font: 400 18px "Roboto Slab";
                    color: #666;
                }
    </style>
</head>
<?php include "../includes/nav_front.php" ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../../website-menu-07/images/banner-catalog1.jpg" alt="First slide">
        </div>
    </div>
</div>
<br>

<div class="container container-ver2 ">
    <div class="box cart-container">
        <table class="table cart-table space-80">
            <thead>
            <tr>
                <th class="product-photo"></th>
                <th class="product-name"></th>
                <th class="produc-price">Preț</th>
                <th class="add-cart">Numele Produsului</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $user_id = $_SESSION["id"];
            $sql = "SELECT * FROM wishlist,anunturi,images where wishlist.user_id='$user_id' and images.id=anunturi.image_id and anunturi.id=wishlist.product_id and anunturi.status='Activ' ";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) { ?>
            <tr class="item_cart">
                <?php $imageURL = '../../../uploads/' . $row["file_name"]; ?>
                <td class="product-photo"><img src="<?php echo $imageURL; ?>" alt="Futurelife"></td>
                <td class="produc-name"><a href="#" title=""></a></td>
                <td class="produc-price"><input value="<?php echo $row['pret']; ?>" size="4" type="text"></td>
                <td class="add-cart"><a class="link-v1 lh-50 rt" href="view_anunt.php?id=<?php echo $row['id']?>" title="Add to cart"><i
                                class="fa fa-shopping-cart"></i><?php echo $row['titlu']; ?></a></td>
            </tr>
            <?php }
            } ?>
            </tbody>

        </table>
    </div>
    <!-- End container -->
</div>

<!-- Footer -->
<div class="align-items-xl-end">
    <?php include "../includes/footer_front.php" ?>
    <!-- Footer -->
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../website-menu-07/js/jquery-3.3.1.min.js"></script>
<script src="../../website-menu-07/js/popper.min.js"></script>
<script src="../../website-menu-07/js/bootstrap.min.js"></script>
<script src="../../website-menu-07/js/jquery.sticky.js"></script>
<script src="../../website-menu-07/js/main.js"></script>
</body>
</html>