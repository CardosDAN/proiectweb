<?php
//include auth_session.php file on all user panel pages
$file_name = 'sub_category';

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
        <div class="container-fluid p-5">

            <div class="row">
                <div class="col">
                    <h2 class="h4">Adaugă o nouă sub categorie</h2>
                </div>

            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="form-group col-md-12">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" class="form-inline" action="../actions/insert_sub_category.php">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                               aria-describedby="emailHelp" required>
                                        <input type="hidden" class="form-control" id="exampleInputEmail1"
                                               name="sub_category_id" value="<?= $_GET['id'] ?> ">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Adaugă</button>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <div class=" rounded my-2 py-2">
                                    <div class=" bg-light rounded my-2 py-2">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Sub Categoria</th>
                                                <th data-orderable="false"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $category_id = $_GET["id"];
                                            include "../includes/db.php";
                                            $sql = "Select * from sub_category where sub_category_id = '$category_id'";
                                            $res = $con->query($sql);
                                            while ($row = $res->fetch_assoc()) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["name"] ?></td>
                                                    <td>
                                                        <?php echo "<a onClick=\"javascript: return confirm('Vă rugăm să confirmați ștergerea');\" href='../actions/delete_sub_category.php?id=" . $row['id'] . "'><i class='bi bi-trash btn btn-outline-danger'></i></a>"; ?>
                                                        <a class="btn btn-outline-primary"
                                                           href="../actions/edit_sub_category.php?id=<?php echo $row['id']; ?>">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('table').DataTable();
                    })
                </script>
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