<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $user_level_id = $_SESSION['user_level_id'];
    if($user_level_id=='1')
        header("location: /src/front_pages/home.php");
    elseif ($user_level_id=='2')
        header("location: adauga.php");
    else
        header("location: users_table.php");
    exit;
}

require_once "../includes/db.php";


$username = $password = "";
$username_err = $password_err = $login_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty(trim($_POST["username"]))){
        $username_err = "Te tog introdu un username.";
    } else{
        $username = trim($_POST["username"]);
    }


    if(empty(trim($_POST["password"]))){
        $password_err = "Te rog să introduci parola.";
    } else{
        $password = trim($_POST["password"]);
    }


    if(empty($username_err) && empty($password_err)){

        $sql = "SELECT id, username, parola, user_level_id FROM utilizatori WHERE username = ?";

        if($stmt = mysqli_prepare($con, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);


            $param_username = $username;


            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);


                if(mysqli_stmt_num_rows($stmt) == 1){

                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password,$user_level_id);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["user_level_id"] = $user_level_id;
                            if($user_level_id=='1')
                                header("location: ../front_pages/home.php");
                            elseif ($user_level_id=='2')
                                header("location: ../front_pages/adauga.php");
                            else
                                header("location: ../cont_page/users_table.php");
                        } else{

                            $login_err = "Parola sau username inalide.";
                        }
                    }
                } else{

                    $login_err = "Parola sau username inalide.";
                }
            } else{
                echo "Hopa! Ceva n-a mers bine. Vă rugăm să încercați din nou mai târziu.";
            }


            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{ font: 14px sans-serif; }
    </style>
</head>
<body>
<br><br><br><br>
<div class=" container text-center card shadow">


    <?php
    if(!empty($login_err)){
        echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }
    ?>
    <div class="row">
        <div class="col-md-5">
            <h2>Login</h2>
            <p>Vă rugăm să vă completați datele de conectare pentru a vă autentifica.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Parola</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
                <p>Nu ai un cont?<a href="registration.php">Inscrie-te acum</a>.</p>
            </form>
        </div>
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../../assets/sty/images/piata.jpg"
                             alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 style="margin-top: -35%">Alimente organice proaspete</h1>
                            <p>Vă aducem fructe și legume organice de pe câmpurile noastre până acasă </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../assets/sty/images/home1-slideshow2.jpg"
                             alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../assets/sty/images/3.jpg"
                             alt="Third slide">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/sty/js/jquery-3.3.1.min.js"></script>
<script src="../../assets/sty/js/popper.min.js"></script>
<script src="../../assets/sty/js/bootstrap.min.js"></script>
<script src="../../assets/sty/js/jquery.sticky.js"></script>
<script src="../../assets/sty/js/main.js"></script>
</body>
</html>