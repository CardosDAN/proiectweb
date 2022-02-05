<?php
include "../includes/db.php";
include "../includes/auth_session.php";
$product_id= $_GET["product_id"]?:0;
$user_id= $_SESSION["id"];
$administrator = mysqli_query($con, "call wishlist_toggle(".$product_id.",".$user_id.")");
