<?php
$file_name = 'edit_sub_category';

include("../includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- page-content  -->
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <a id="toggle-sidebar" class="btn btn-secondary rounded-0 sticky-top" href="#">
            <span><i class="bi bi-list"></i></span>
        </a>
        <br>

        <div class="container col-md-12">
            <div class="row">
                <div class="col">
                    <h2 class="h4">Editeaza sub categorie</h2>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="form-group col-md-12">
                    <?php $id = $_GET['id']; // get id through query string

                    $qry = mysqli_query($con, "select * from sub_category where id='$id'"); // select query

                    $row = mysqli_fetch_array($qry); // fetch data

                    if (isset($_POST['update'])) // when click on Update button
                    {
                        $name = $_POST['name'];

                        $edit = mysqli_query($con, "update sub_category set name='{$name}' where id='{$id}'");

                        if ($edit) {
                            header('Location: ' . $_SERVER['HTTP_REFERER']);
                            exit;

                        } else {
                            echo mysqli_error();
                        }
                    }
                    ?>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" class="form-inline">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label for="exampleInputEmail1">Sub Categoria</label>
                                        <input type="text" name="username" class="form-control" value="<?php echo $row['name'] ?>" placeholder="Enter Full Name" Required>
                                    </div>
                                    <button class="btn btn-success mb-2"  type="submit" name="update" value="Update">Update</button>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <div class="rounded my-2 py-2">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Sub Categoria</th>
                                            <th data-orderable="false"> </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include "../includes/db.php";
                                        $sub_category = $_GET["id"];
                                        $sql = "Select * from sub_category where sub_category_id = '$sub_category'";
                                        $res = $con->query($sql);
                                        while ($row = $res->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row["name"] ?></td>
                                                <td>

                                                    <a class="btn btn-outline-danger"
                                                       href="../actions/delete_sub_category.php?id=<?php echo $row['id']; ?>">
                                                        <i class=" bi bi-trash"></i>
                                                    </a>
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

    </main>
</div>




<script type="text/javascript">
    $(document).ready(function () {
        $('table').DataTable();
    })
</script>
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



