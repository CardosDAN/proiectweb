<?php

include("../includes/db.php");

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($con, "select * from users where id='$id'"); // select query

$row = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $user_level_id = $_POST['user_level_id'];

    $edit = mysqli_query($con, "update users set username='{$username}', email='{$email}', phone='{$phone}', password='{$password}' where id='{$id}'");

    if ($edit) {
        mysqli_close($con); // Close connection
        header("location:../../users_table.php"); // redirects to all records page
        exit;
    } else {
        echo mysqli_error();
    }
}
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../website-menu-07/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../website-menu-07/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../website-menu-07/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../../website-menu-07/css/style.css">
</head>
<div class="container">
    <h3>Editează</h3>
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
            <input type="number" class="form-control" name="phone" value="<?php echo $row['phone'] ?>" placeholder="Enter Phone" Required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Parola</label>
            <input type="password" class="form-control" name="password" value="<?php echo $row['password'] ?>" placeholder="Enter Password" Required>
            <small id="emailHelp" class="form-text text-muted">Nu vom împărtăși niciodată parola dvs. cu nimeni altcineva.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Schimbă statusul</label>
            <a class="btn btn-info" href="status_user.php?id=<?php echo $row['id']; ?>">User</a>
            <a class="btn btn-info" href="status_seller.php?id=<?php echo $row['id']; ?>">Seller</a>
            <a class="btn btn-info" href="status_admin.php?id=<?php echo $row['id']; ?>">Admin</a>
        </div>
        <input class="btn btn-outline-success" type="submit" name="update" value="Update">
        <a class="btn btn-outline-danger" href="../cont_page/users_table.php">Back</a>
    </form>

</div>
