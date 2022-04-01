<?php
//include auth_session.php file on all user panel pages
$file_name = 'users_table';

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
            <section id="minimal-statistics">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <?php
                                    $result = $con->query("SELECT DISTINCT id FROM users ORDER BY id");
                                    $row_cnt = $result->num_rows;
                                    ?>
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="success"><?php printf($row_cnt); ?></h3>
                                            <span>Users</span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-user success font-large-2 float-right"></i>
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

                                    $sql1 = "SELECT COUNT(user_level_id) FROM users where users.user_level_id = '3' ORDER BY id ";
                                    $result = $con->query($sql1);

                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) { ?>
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-pencil warning font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><?php echo $row["COUNT(user_level_id)"]; ?></h3>
                                            <span>Admini</span>
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
                                    $sql1 = "SELECT count(user_level_id) FROM users where user_level_id = 2";
                                    $result = $con->query($sql1);
                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) { ?>
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning"><?php echo $row["count(user_level_id)"]; ?></h3>
                                            <span>Selleri</span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-book-open primary font-large-2 float-right"></i>
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
        <div class="container-fluid p-5">

            <div class="row">
                <div class="col">
                    <h2 class="h4">Lista de utilizatori</h2>
                </div>
                <?php
                function function_alert($message)
                {
                    echo "<script>alert('$message');</script>";
                }?>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="form-group col-md-12">
                    <div class="container-fluid ">
                        <div class="rounded my-2 py-2">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Telefon</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th data-orderable="false"> </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include "../includes/db.php";
                                $sql = "Select * from users";
                                $res = $con->query($sql);
                                while ($row = $res->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["username"] ?></td>
                                        <td><?php echo $row["phone"] ?></td>
                                        <td><?php echo $row["email"] ?></td>
                                        <td><?php echo $row["user_level_id"] ?></td>
                                        <td>
                                           <?php echo "<a onClick=\"javascript: return confirm('Vă rugăm să confirmați ștergerea');\" href='../actions/delete_user.php?id=".$row['id']."'><i class='bi bi-trash btn btn-outline-danger'></i></a>"; ?>

                                            <a class="btn btn-outline-primary"
                                               href="../actions/edit_users.php?id=<?php echo $row['id']; ?>">
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