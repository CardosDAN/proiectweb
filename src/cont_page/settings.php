<?php

$file_name = 'settings';

$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty(trim($_POST["new_password"]))) {
        $new_password_err = "Introdu parola nouă";
    } elseif (strlen(trim($_POST["new_password"])) < 6) {
        $new_password_err = "Parola trebuie să aibă minim 6 caractere.";
    } else {
        $new_password = trim($_POST["new_password"]);
    }


    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Confirmă parola.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($new_password_err) && ($new_password != $confirm_password)) {
            $confirm_password_err = "Parorele nu se potrivesc.";
        }
    }


    if (empty($new_password_err) && empty($confirm_password_err)) {

        $sql = "UPDATE utilizatori SET parola = ? WHERE id = ?";

        if ($stmt = mysqli_prepare($con, $sql)) {

            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);


            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];


            if (mysqli_stmt_execute($stmt)) {

                session_destroy();
                header("location: ../../login.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }


            mysqli_stmt_close($stmt);
        }
    }


    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">


<?php include("../includes/head.php"); ?>

<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php include("../includes/nav.php"); ?>
    <!-- page-content  -->
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <a id="toggle-sidebar" class="btn btn-secondary rounded-0 sticky-top" href="#">
            <span><i class="bi bi-list"></i></span>
        </a>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h2>Reseteaza parola</h2>
                    <p>Vă rugăm să completați acest formular pentru a vă reseta parola.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Parola nouă</label>
                            <input type="password" name="new_password"
                                   class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>"
                                   value="<?php echo $new_password; ?>">
                            <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Confirmă parola</label>
                            <input type="password" name="confirm_password"
                                   class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <div class="form-group float-right">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>

                </div>
                <hr>
                <div class="input-group">

                    <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                        <label for="formFileSm" class="form-label">Selectați Fișier imagine de încărcat
                            pentru fotografia dvs. de profil</label>
                        <input type="file" class="form-control" id="inputGroupFile04"
                               aria-describedby="inputGroupFileAddon04" name="file" aria-label="Upload">
                        <br>
                        <button class="btn btn-primary float-right" type="submit" name="submit"
                                id="inputGroupFileAddon04">Upload
                        </button>
                    </form>
                </div>

            </div>
        </div>
</div>
</div>
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