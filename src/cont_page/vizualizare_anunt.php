<?php

$file_name = 'vizualizare_anunt';
$product_id = $_GET['id'];
$order_status = ['Inactiv','Activ'];
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css"/>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<?php include("../includes/head.php"); ?>

<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
    <?php include("../includes/nav.php"); ?>
    <!-- page-content  -->
    <style>
        a {
            -webkit-transition: color 2s;
            transition: color 2s;
        }

        a:hover {
            color: green;
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

    </style>
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <a id="toggle-sidebar" class="btn btn-secondary rounded-0 sticky-top" href="#">
            <span><i class="bi bi-list"></i></span>
        </a>
        <br><br><br>
        <div class="grey-bg container-fluid">
            <section id="minimal-statistics">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <?php
                                    $user_id = $_SESSION['id'];
                                    $sql1 = "SELECT count(id) FROM anunturi where anunturi.user_id = '$user_id'";
                                    $result = $con->query($sql1);

                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) { ?>
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-book-open primary font-large-2 float-right"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><?php echo $row["count(id)"]; ?></h3>
                                            <span>Anunturi postate de tine</span>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <?php
                                    $user_id = $_SESSION['id'];
                                    $result = $con->query("SELECT DISTINCT categorie_id FROM anunturi where anunturi.user_id = '$user_id' ORDER BY categorie_id");
                                    $row_cnt = $result->num_rows;
                                    ?>
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="primary"><?php printf($row_cnt); ?></h3>
                                            <span>Categorii anunturi</span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-grid primary font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <?php
                                    $user_id = $_SESSION['id'];
                                    $sql1 = "SELECT vizualizari FROM anunturi where  id=".$product_id;
                                    $result = $con->query($sql1);

                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) { ?>
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-eye primary font-large-2 float-right"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><?php echo $row["vizualizari"]; ?></h3>
                                            <span>Vizualizari </span>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <br>
        <div class="container-fluid p-5">
            <div class="row justify-content-center">
                <div class="form-group col-md-12">
                    <div class="container-fluid ">
                        <div class=" bg-light rounded my-2 py-2">
                            <div class="product-details-content row justify-content-between">
                                <div class="col-md-5">
                                    <div class="card mb-lg-3">
                                        <?php

                                        $query = $con->query("SELECT * FROM imagini,anunturi where  imagini.id=anunturi.image_id and anunturi.id=" . $product_id);

                                        if ($query->num_rows > 0) {
                                            while ($row = $query->fetch_assoc()) {
                                                $imageURL = '../../../uploads/' . $row["nume_fisier"];
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
                                                        $query = $con->query("SELECT * FROM imagini,utilizatori where utilizatori.id='{$user_id}' and imagini.id=utilizatori.image_id ");

                                                        if ($query->num_rows > 0) {
                                                            while ($row = $query->fetch_assoc()) {
                                                                $imageURL = '../../../uploads/' . $row["nume_fisier"];
                                                                ?>
                                                                <img class=" avatar" src="<?php echo $imageURL; ?>"
                                                                     data-holder-rendered="true"/>
                                                            <?php }
                                                        } else { ?>
                                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" alt="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid">
                                                        <?php } ?>
                                                    </div>
                                                    <div class="col">
                                                        <?php $id_anunt = $_GET['id']; ?>
                                                        <?php
                                                        $sql = "SELECT * FROM anunturi,utilizatori where anunturi.id='$id_anunt' and utilizatori.id=anunturi.user_id";
                                                        $result = mysqli_query($con, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                                        <?php echo $row["username"]; ?>
                                                        <p class="card-text"><small
                                                                    class="text-muted"> <?php echo "Pe Fresh Food din " . $row["creat"]; ?></small>
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
                                <?php

                                $sql = "SELECT * FROM anunturi where  id=".$product_id;
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {?>
                                <!-- End col-md-6 -->
                                <div class="col-md-6 ">
                                    <div class="box-details-info">
                                        <div class="product-name">
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
                                        <div class="description-lits align-self-auto ">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <i class="bi bi-geo-alt">
                                                        <?php echo "Locatie " . $row['adresa']; ?> </i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <?php
                                                    $address = $row['adresa'];;
                                                    echo '<iframe frameborder="0" height="400" width="500" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>'; ?>
                                                </div>
                                            </div>
                                            <div class="container-fluid">
                                                <i class="bi bi-eye-fill">
                                                    <?= $row['vizualizari'].' Vizualizari'; ?>
                                                </i>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="form-group col-md-12">
                    <div class="col">
                        <hr>
                        <p>Alte anunturi postate de tine</p>
                        <hr>
                        <div class="container-fluid ">
                            <div class="rounded my-2 py-2">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nr</th>
                                        <th>Titlu</th>
                                        <th>Nr telefon</th>
                                        <th>Adresa</th>
                                        <th>Status</th>
                                        <th data-orderable="false"> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include "../includes/db.php";

                                    $sql = "SELECT * FROM anunturi where anunturi.user_id = '$user_id' and anunturi.id != '$product_id'";
                                    $res = $con->query($sql);
                                    while ($row = $res->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row["id"] ?></td>
                                            <td><?php echo $row["titlu"] ?></td>
                                            <td><?php echo $row["telefon"] ?></td>
                                            <td><?php echo $row["adresa"] ?></td>
                                            <td><?php echo $order_status[$row["status"]] ?></td>
                                            <td>
                                                <?php echo "<a onClick=\"javascript: return confirm('Vă rugăm să confirmați ștergerea');\" href='../actions/delete_orders.php?id=" . $row['id'] . "'><i class='bi bi-trash btn btn-outline-danger'></i></a>"; ?>
                                                <a class="btn btn-outline-primary"
                                                   href="../actions/edit_orders.php?id=<?php echo $row['id']; ?>">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a class="btn btn-outline-warning"
                                                   href="../actions/add_off.php?id=<?php echo $row['id']; ?>">
                                                    <i class="bi bi-toggle-off"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('table').DataTable();
                            })
                        </script>
                    </div>
                </div>

            </div>
        </div>
</div>

<!-- page-wrapper -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>
<script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../assets/app/js/main.js"></script>
</body>

</html>