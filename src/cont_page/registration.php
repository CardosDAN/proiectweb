<?php

require_once "../includes/db.php";


$username = $password = $confirm_password = $email = $telefon = " ";
$username_err = $password_err = $confirm_password_err = $telefon_err = $email_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty(trim($_POST["username"]))){
        $username_err = "Introdu un username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username poate conține doar litere.";
    } else{

        $sql = "SELECT id FROM utilizatori WHERE username = ?";
        if($stmt = mysqli_prepare($con, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);


            $param_username = trim($_POST["username"]);


            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Acest username este deja folosit.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "eroare 1";
            }


            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["telefon"]))) {
        $telefon_err = "Trebuie introdus numarul de telefon";
    } else {
        $telefon = $_POST["telefon"];
        if (!preg_match("/^[0-9]{10}+$/", $telefon)) {
            $telefon_err = "Numarul introdus nu este valid";
        }
    }
    if(empty(trim($_POST["email"]))){
        $email_err = "Trebuie introdus un email";
    } elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_err = "Nu ai scris bine email-ul";
    } else{

        $sql = "SELECT id FROM utilizatori WHERE email = ?";
        if($stmt = mysqli_prepare($con, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_email);


            $param_email = trim($_POST["email"]);


            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "Acest email este deja folosit.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "eroare 1";
            }


            mysqli_stmt_close($stmt);
        }
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Introdu o parolă";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Parola trebuie să aibă minim 6 caractere.";
    } else{
        $password = trim($_POST["password"]);
    }


    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Confirmă parola";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Nu se potrivește cu prima parolă.";
        }
    }


    if(empty($username_err) && empty($password_err) && empty($email_err) && empty($telefon_err) && empty($confirm_password_err)){


        $sql = "INSERT INTO utilizatori (username, parola, telefon, email) VALUES (?, ?, ?, ?)";
        if($stmt = mysqli_prepare($con, $sql)){

            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password, $param_telefon, $param_email);

            $param_email = $email;
            $param_telefon = $telefon;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // hasuirea parolei


            if(mysqli_stmt_execute($stmt)){

                header("location: login.php");
            } else{
                echo "eroare 2";
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
<br><br><br>
<div class="wrapper container border shadow">
    <h2>Sign Up</h2>
    <p>Vă rugăm să completați acest formular pentru a vă crea un cont</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
            <span class="invalid-feedback"><?php echo $email_err; ?></span>
        </div>
        <div class="form-group">
            <label>Telefon</label>
            <input type="number" name="telefon" class="form-control <?php echo (!empty($telefon_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $telefon; ?>">
            <span class="invalid-feedback"><?php echo $telefon_err; ?></span>
        </div>
        <div class="form-group">
            <label>Parola</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group">
            <label>Confirma parola</label>
            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Trimite">
            <input type="reset" class="btn btn-secondary ml-2" value="Resetează">
        </div>
        <p>Ai deja un cont? <a href="login.php">Autentifică-te aici</a>.</p>
    </form>
</div>
</body>
</html>