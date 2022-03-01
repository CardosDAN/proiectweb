<?php
include "../includes/db.php";
$id = $_GET['id'];

$on = mysqli_query($con, "UPDATE anunturi SET status = 'Inactiv' where id= '$id'");

if($on)
{
    mysqli_close($con);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
else
{
    echo "Error deleting record";
}
?>