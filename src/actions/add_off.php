<?php
include "../includes/db.php";
$id = $_GET['id'];

$on = mysqli_query($con, "UPDATE anunturi SET status = 'Inactiv' where id= '$id'");

if($on)
{
    mysqli_close($con);

    header("location: ../cont_page/orders_table.php");
    exit;
}
else
{
    echo "Error deleting record";
}
?>