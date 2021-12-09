<?php
// Initialize the session
include("src/includes/db.php");
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (isset($_SESSION['user_level_id'])) {
    $user_level_id = $_SESSION['user_level_id'];
    $nume_pagina = substr(basename($_SERVER['PHP_SELF']), 0, -4);


    $p = "1";
    if(isset($file_name)){
        $qPermission = mysqli_query($con, "select min_user_level_id from pages WHERE nume='$file_name'");
        if ($permission = mysqli_fetch_assoc($qPermission)) {
            $p = $permission[$user_level_id];
        }
    }

}


// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $p !== "1") {
    header("location: login.php");
    exit;
}

?>

