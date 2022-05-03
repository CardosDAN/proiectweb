<?php
include "../includes/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $sub_category_id = $_POST["sub_category_id"];
    $sql = "INSERT INTO sub_categori (nume, categorie_id) VALUES ('$name', '$sub_category_id')";
    if (mysqli_query($con, $sql)) {

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}
