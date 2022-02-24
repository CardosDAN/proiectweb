<?php
include("../includes/db.php");

$id = $_GET['id'];

$del = mysqli_query($con,"delete from wishlist where id = '$id'");

if($del)
{
    mysqli_close($con);
    header("location: ../front_pages/wishlist.php");
    exit;
}
else
{
    echo "Error deleting record";
}


