<?php
include("../includes/db.php");

$id = $_GET['id'];

$del = mysqli_query($con,"delete from wishlist where id = '$id'");

if($del)
{
    mysqli_close($con);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
else
{
    echo "Eroare stergere produs din lista";
}


