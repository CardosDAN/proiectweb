<?php
include("../includes/db.php");

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con,"delete from sub_category where id = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>

