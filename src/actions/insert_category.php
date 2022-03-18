<?php
include "../includes/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $sql = "INSERT INTO category (name) VALUES ('$name')";
    if (mysqli_query($con, $sql)) {

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}
