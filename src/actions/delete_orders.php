<?php
include("../includes/db.php");

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con,"delete from anunturi where id = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:../orders_table.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>

