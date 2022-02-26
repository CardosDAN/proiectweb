

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
                <div class="col">
                    <h2 class="h4">Lista de utilizatori</h2>
                </div>

            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="form-group col-md-12">
                    <div class="container-fluid ">
                        <?php
                        include ('../includes/db.php');
                        $result = @mysqli_query($con, "SELECT * FROM anunturi") or die("Error: " . mysqli_error($con));

                        // delete records
                        if(isset($_POST['chk_id']))
                        {
                            $arr = $_POST['chk_id'];
                            foreach ($arr as $id) {
                                @mysqli_query($con,"DELETE FROM anunturi WHERE id = " . $id);
                            }
                            $msg = "Deleted Successfully!";
                            header("Location: anunturi.php?msg=$msg");
                        }
                        ?>
                        <form action="anunturi.php" method="post">
                            <?php if (isset($_GET['msg'])) { ?>
                                <p class="alert alert-success"><?php echo $_GET['msg']; ?></p>
                            <?php } ?>
                            <table class="table table-striped table-hover">
                                <div class="text-right">
                                    <input id="submit" name="submit" type="submit" class="btn btn-danger" value="Delete Selected Row(s)" />
                                </div>

                                <thead>
                                <tr>
                                    <th><input id="chk_all" name="chk_all" type="checkbox"  /></th>
                                    <th>Titlu</th>
                                    <th>Descriere</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><input name="chk_id[]" type="checkbox" class='chkbox' value="<?php echo $row['id']; ?>"/></td>
                                        <td><?php echo $row['titlu']; ?></td>
                                        <td><?php echo $row['descriere']; ?></td>


                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>

                        </form>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#chk_all').click(function(){
            if(this.checked)
                $(".chkbox").prop("checked", true);
            else
                $(".chkbox").prop("checked", false);
        });
    });
</script>
<script src="../../assets/app/js/main.js"></script>
</body>

</html>

