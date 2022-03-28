<?php
$file_name = "wishlist";
include "../includes/auth_session.php";

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/sty/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../assets/sty/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/sty/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../../assets/sty/css/style.css">
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
            <img class="d-block w-100" src="../../assets/sty/images/banner-catalog1.jpg" alt="First slide">
        </div>
    </div>
</div>
<br>

<div class="container container-ver2 ">
    <div class="box cart-container">
        <table class="table cart-table space-80">
            <thead>
            <tr>
                <th class="product-photo">Produsul</th>
                <th class="product-name"> </th>
                <th class="produc-price">Preț</th>
                <th class="add-cart">Actiuni</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $user_id = $_SESSION["id"];
            $sql = "SELECT wishlist.*,anunturi.titlu, anunturi.pret, images.file_name FROM wishlist,anunturi,images where wishlist.user_id='$user_id' and images.id=anunturi.image_id and anunturi.id=wishlist.product_id and anunturi.status=1;";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) { ?>
            <tr class="item_cart">
                <?php $imageURL = '../../../uploads/' . $row["file_name"]; ?>
                <td class="product-photo"><img src="<?php echo $imageURL; ?>" alt="Futurelife"></td>
                <td class="produc-name"><a href="view_anunt.php?id=<?php echo $row['product_id']?>" title="">&ensp;&ensp;<?php echo $row['titlu']; ?></a></td>
                <td class="produc-price"><input value="<?php echo $row['pret']; ?>" size="4" type="text"></td>
                <td class="add-cart">
                    <a href="../actions/delete_FromWishlist.php?id=<?php echo $row["id"]?> "><i class="bi bi-trash"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></i></a>
                </td>
            </tr>
            <?php }
            } ?>
            </tbody>

        </table>
    </div>
    <!-- End container -->
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Footer -->
<div class="align-items-xl-end">
    <?php include "../includes/footer_front.php" ?>
    <!-- Footer -->
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/sty/js/jquery-3.3.1.min.js"></script>
<script src="../../assets/sty/js/popper.min.js"></script>
<script src="../../assets/sty/js/bootstrap.min.js"></script>
<script src="../../assets/sty/js/jquery.sticky.js"></script>
<script src="../../assets/sty/js/main.js"></script>
</body>
</html>