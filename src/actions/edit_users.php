<?php

$file_name = 'edit_users';

include("../includes/db.php");
$id = $_GET['id'];
if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_level_id = $_POST['user_level_id'];
    $blocat = $_POST['blocat'];
    $edit = mysqli_query($con, "update utilizatori set modificat= NOW() ,  username='{$username}', email='{$email}', telefon='{$phone}', user_level_id='{$user_level_id}', blocat = '{$blocat}' where id='{$id}'");
    if ($edit) {
        header('Location: ../cont_page/users_table.php ');
        exit();
    } else {
        echo mysqli_error();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

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
                <div class="form-group col-md-12">
                    <?php

                    $qry = mysqli_query($con, "select * from utilizatori where id='$id'"); // select query
                    $row = mysqli_fetch_array($qry);

                    ?>

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" placeholder="Enter Full Name" Required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" placeholder="Enter Email" Required>
                                        <small id="emailHelp" class="form-text text-muted">Nu vom împărtăși niciodată e-mailul dvs. cu nimeni altcineva.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Numarul de telefon</label>
                                        <input type="number" class="form-control" name="phone" value="<?php echo $row['telefon'] ?>" placeholder="Enter Phone" Required>
                                    </div>
                                    <?php if($_SESSION['user_level_id'] == "3"): ?>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="card ">
                                                    <div class="card-header">
                                                        Schimbă statusul
                                                    </div>
                                                    <div class="card-body">
                                                        <select class="form-select" name="user_level_id" aria-label="Default select example">
                                                            <option value="1">User</option>
                                                            <option value="2">Seller</option>
                                                            <option value="3">Admin</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Blochează userul
                                                    </div>
                                                    <div class="card-body">
                                                        <select class="form-select" name="blocat" aria-label="Default select example">
                                                            <option value="0">Deblochează</option>
                                                            <option value="1">Blochează</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <input class="btn btn-outline-success float-right"  type="submit" name="update" value="Update">
                                </form>
                            </div>
                            <div class="col">

                                <div class="card mb-3 shadow">
                                    <?php
                                    $user_id = $_GET['id'];
                                    $query = $con->query("SELECT * FROM imagini,utilizatori where utilizatori.id='{$user_id}' and imagini.id=utilizatori.image_id ");

                                    if ($query->num_rows > 0) {
                                    while ($row = $query->fetch_assoc()) {
                                    $imageURL = '../../../uploads/' . $row["nume_fisier"];
                                    ?>
                                    <img src="<?php echo $imageURL; ?>" class="card-img" alt="...">
                                    <?php }
                                    } else { ?>
                                        <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" alt="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid">
                                    <?php } ?>
                                    <div class="card-body">
                                        <?php
                                        $sql = "SELECT * FROM utilizatori where id = '$user_id'";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <h5 class="card-title"><?php echo $row["username"]; ?></h5>
                                        <p class="card-text"></p>
                                        <p class="card-text"><small class="text-muted"><?php echo "Pe Fresh Food din " . $row["creat"]; ?></small></p>
                                        <?php } ?>
                                    </div>
                                </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </main>
</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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



