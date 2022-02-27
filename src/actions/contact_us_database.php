<?php
include("../includes/db.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $subiect = $_POST["subiect"];
//    session_start();
//    $user_id = $_SESSION['id'];
    $sql = "INSERT INTO contact_us (nume,email,subiect) VALUES ('{$nume}','{$email}','{$subiect}')";
    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }

    $con->close();

    header("location: ../front_pages/contact_us_table.php");

}