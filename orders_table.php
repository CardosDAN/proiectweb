<?php
//include auth_session.php file on all user panel pages
//$file_name = 'orders_table';
//include("src/includes/auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php include("src/includes/head.php"); ?>

<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
    <?php include("src/includes/nav.php"); ?>
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
                    <table class="table table-hover table-dark">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Description</th>
                            <th scope="col">Address</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Actions</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        $sql1 = "SELECT * FROM anunturi ORDER BY id DESC";
                        $result = $con->query($sql1);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td> <?php echo $row["id"]; ?> </td>
                                    <td> <?php echo $row["titlu"]; ?> </td>
                                    <td> <?php echo $row["telefon"]; ?> </td>
                                    <td> <?php echo $row["descriere"]; ?> </td>
                                    <td> <?php echo $row["adresa"]; ?> </td>
                                    <td> <?php echo $row["user_id"]; ?> </td>
                                    <td>

                                        <a class="btn btn-outline-danger"
                                           href="src/actions/delete_orders.php?id=<?php echo $row['id']; ?>">
                                            <i class=" bi bi-trash"></i>
                                        </a>
                                        <a class="btn btn-outline-info" href="view_orders.php?id=<?php echo $row['id']; ?>">
                                            <i class=" bi bi-eye"></i>
                                        </a>
                                        <a class="btn btn-outline-primary"
                                           href="src/actions/edit_orders.php?id=<?php echo $row['id']; ?>">
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


<script src="assets/app/js/main.js"></script>
</body>

</html>