<?php
require "db_actions/db.php";
?>
<?php
error_reporting(E_ERROR);
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$status = $_POST['status'];
$create_datetime = $_POST['create_datetime'];
$modified = $_POST['modified'];
$address = $_POST['address'];

$result = mysql_query("INSERT INTO users (username, email, password, phone,`status`, create_datetime,modified,address) VALUES ('$username', '$email', '$password','$phone','$status', '$create_datetime','$modified','$address')");
if (mysql_affected_rows() > 1) {

//it will redeirect you to. your any file.
//you can give any file name here.
    $_SESSION['username'] = $username;//you are adding value to the session
    $_SESSION['email'] = $email; //you are adding value to the session
    $_SESSION['password'] = $password; //you are adding value to the session
    $_SESSION['phone'] = $phone; //you are adding value to the session
    $_SESSION['status'] = $status; //you are adding value to the session
    $_SESSION['create_datetime'] = $create_datetime; //you are adding value to the session
    $_SESSION['modified'] = $modified; //you are adding value to the session
    $_SESSION['address'] = $address; //you are adding value to the session
//Do this for rest of your value
    header('Location:Your_File_name.php');
}


if (!$result) {
    die($con(0, "wrong query"));
}
?>
