<?php
//include auth_session.php file on all user panel pages
$file_name = 'orders_table';
//include("src/includes/auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php include("../includes/head.php"); ?>

<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
    <?php include("../includes/nav.php"); ?>
    <!-- page-content  -->
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="form-group col-md-12">

                </div>

                <div class="form-group col-md-12">
                    <a id="toggle-sidebar" class="btn btn-secondary rounded-0" href="#">
                        <span>Toggle Sidebar</span>
                    </a>
                    <a id="pin-sidebar" class="btn btn-outline-secondary rounded-0" href="#">
                        <span>Pin Sidebar</span>
                    </a>

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-md-12">
                    <form action="" method="get">
                        <div class="input-group mb-3">
                            <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                echo $_GET['search'];
                            } ?>" class="form-control" placeholder="Search orders">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                    <table class="table table-hover table-dark">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Description</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if (isset($_GET['search']))
                        {
                        $filtervalues = $_GET['search'];
                        $query = "SELECT * FROM anunturi where CONCAT(titlu) LIKE '%$filtervalues%'";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run)) {
                            foreach ($query_run as $row) {
                                ?>

                                <tr>
                                    <td> <?php echo $row["id"]; ?> </td>
                                    <td> <?php echo $row["titlu"]; ?> </td>
                                    <td> <?php echo $row["telefon"]; ?> </td>
                                    <td> <?php echo $row["descriere"]; ?> </td>
                                    <td> <?php echo $row["adresa"]; ?> </td>

                                    <td>

                                        <a class="btn btn-outline-danger"
                                           href="../actions/delete_orders.php?id=<?php echo $row['id']; ?>">
                                            <i class=" bi bi-trash"></i>
                                        </a>
                                        <a class="btn btn-outline-info"
                                           href="../front_pages/view_anunt.php?id=<?php echo $row['id']; ?>">
                                            <i class=" bi bi-eye"></i>
                                        </a>
                                        <a class="btn btn-outline-primary"
                                           href="../actions/edit_orders.php?id=<?php echo $row['id']; ?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>

                                </tr>
                                <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        $con->close();
                        ?>
                        </tbody>
                    </table>
<?php } ?>
                </div>


                <hr>
                <div class="row ">
                    <div class="form-group col-md-12">

                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- page-content" -->
</div>
<!-- page-wrapper -->

<!-- using online scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>
<script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- using local scripts -->
<!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->


<script src="../../assets/app/js/main.js"></script>
</body>

</html>