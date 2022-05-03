<?php

include "db.php";

session_start();


if (isset($_SESSION['user_level_id'])) {
    $user_level_id = $_SESSION['user_level_id'];
    $nume_pagina = substr(basename($_SERVER['PHP_SELF']), 0, -4);

    $p = "1";
    if(isset($file_name) ){
        $qPermission = mysqli_query($con, "select min_user_level_id from pagini WHERE nume='$file_name'");
        if ($permission = mysqli_fetch_assoc($qPermission)) {
            $p = $permission["min_user_level_id"];
        }
    }
}
if (isset($_SESSION["id"])) {
    $user_id = $_SESSION["id"];

    $result = mysqli_query($con, "SELECT blocat FROM utilizatori where id = " . $user_id);

    while ($row = mysqli_fetch_array($result)) {
        $blocat = $row['blocat'];
    }
    if ($blocat == "1") {
        header("Location:../cont_page/login.php");
    }
}
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $p > $user_level_id) {
    header("location: ../cont_page/login.php");

    exit;
}



