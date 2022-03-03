<?php
//include auth_session.php file on all user panel pages
$file_name = '';

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
<style>
    /*.grey-bg {*/
    /*    background-color: #F5F7FA;*/
    /*}*/


</style>
<?php include("../includes/head.php"); ?>

<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
    <?php include("../includes/nav.php"); ?>
    <!-- page-content  -->
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <a id="toggle-sidebar" class="btn btn-secondary rounded-0 sticky-top" href="#">
            <span><i class="bi bi-list"></i></span>
        </a>
        <br>
        <div class="grey-bg container-fluid">

        </div>
        <div class="container-fluid p-5">

            <div class="row">
                <ul class="nav nav-tabs tabs tabs-title" id="myTab" role="tablist">
                    <li class="nav-item" rel="tab_1" role="presentation">
                        <a class="nav-link  active" id="home-tab" data-bs-toggle="tab" href="#activ" role="tab"
                           aria-controls="activ" aria-selected="true">Active</a>
                    </li>
                    <li class="nav-item" rel="tab_2" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#inactiv" role="tab"
                           aria-controls="inactiv"
                           aria-selected="false">Inactive</a>
                    </li>
                </ul>

            </div>
            <hr>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="activ" role="tabpanel" aria-labelledby="activ-tab">
                    <div class="text-right m-sm-2">
                        <form action="" method="get" class="form-inline">
                            <input class="form-control mr-sm-2" type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                echo $_GET['search'];
                            } ?>" placeholder="Cauta">
                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Search</button>
                        </form>
                    </div>
                    <div class="row">
                        <?php
                        if (isset($_GET['search'])) {
                            $filtervalues = $_GET['search'];
                            $user_id = $_SESSION['id'];
                            $query = "SELECT * FROM images,anunturi where images.id=anunturi.image_id and anunturi.status='Activ' and anunturi.user_id = '$user_id' and CONCAT(titlu) LIKE '%$filtervalues%'";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run)) {
                                foreach ($query_run as $row) {
                                    ?>


                                    <div class="card mb-3 " style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <?php
                                                $imageURL = '../../../uploads/' . $row["file_name"]; ?>
                                                <img src="<?php echo $imageURL; ?>" class="img-fluid rounded-start"
                                                     alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <a href="vizualizare%20anuntO.php?id=<?php echo $row['id'] ?>"
                                                        class="card-title"><?php echo $row['titlu'] ?></a>
                                                    <p class="card-text"><?php echo $row['descriere'] ?></p>
                                                    <p class="card-text text-right">
                                                        <a href="../actions/edit_orders.php?id=<?php echo $row['id'] ?>"><i
                                                                    class="bi bi-pencil-square py-2 "></i></a>
                                                        <a href="../actions/delete_orders.php?id=<?php echo $row['id'] ?>"><i
                                                                    class="bi bi-trash py-2 danger"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="3">Niciun anunt Activ </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="inactiv" role="tabpanel" aria-labelledby="inactiv-tab">
                    <div class="text-right m-sm-2">
                        <form action="" method="get" class="form-inline">
                            <input class="form-control mr-sm-2" type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                echo $_GET['search'];
                            } ?>" placeholder="Cauta">
                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Search</button>
                        </form>
                    </div>
                    <div class="row">
                        <?php
                        if (isset($_GET['search'])) {
                            $filtervalues = $_GET['search'];
                            $user_id = $_SESSION['id'];
                            $query = "SELECT * FROM images,anunturi where images.id=anunturi.image_id and anunturi.status='Inactiv' and anunturi.user_id = '$user_id' and CONCAT(titlu) LIKE '%$filtervalues%'";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run)) {
                                foreach ($query_run as $row) {
                                    ?>


                                    <div class="card mb-3 " style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <?php
                                                $imageURL = '../../../uploads/' . $row["file_name"]; ?>
                                                <img src="<?php echo $imageURL; ?>" class="img-fluid rounded-start"
                                                     alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 href="../front_pages/view_anunt.php?id=<?php echo $row['id'] ?>"
                                                        class="card-title"><?php echo $row['titlu'] ?></h5>
                                                    <p class="card-text"><?php echo $row['descriere'] ?></p>
                                                    <p class="card-text text-right">
                                                        <a href="../actions/edit_orders.php?id=<?php echo $row['id'] ?>"><i
                                                                    class="bi bi-pencil-square py-2 "></i></a>
                                                        <a href="../actions/delete_orders.php?id=<?php echo $row['id'] ?>"><i
                                                                    class="bi bi-trash py-2 danger"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="3">Niciun anunt Inactiv</td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="row ">
                <div class="form-group col-md-12">

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

