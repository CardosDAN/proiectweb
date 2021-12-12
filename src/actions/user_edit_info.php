<?php

include("../includes/db.php");

session_start();
$id = $_SESSION['id'];

$qry = mysqli_query($con, "select * from users where id='$id'"); // select query

$row = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    $edit = mysqli_query($con, "update users set username='{$username}', email='{$email}', phone='{$phone}', password='{$password}' where id='{$id}'");

    if ($edit) {
        mysqli_close($con); // Close connection
//        header("location:../users_table.php"); // redirects to all records page
        exit;
    } else {
        echo mysqli_error();
    }
}
?>

<h3>Update Data</h3>

<form method="POST">
    <input type="text" name="username" value="<?php echo $row['username'] ?>" placeholder="Enter Full Name" Required>
    <input type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="Enter Email" Required>
    <input type="number" name="phone" value="<?php echo $row['phone'] ?>" placeholder="Enter Phone" Required>
    <input type="password" name="password" value="<?php echo $row['password'] ?>" placeholder="Enter Password" Required>
    <input type="submit" name="update" value="Update">
</form>