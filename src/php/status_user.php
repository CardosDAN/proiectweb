<?php
include("../../db_actions/db.php");
$id = $_GET['id'];

$user = mysqli_query($con, "UPDATE users SET status = 'User' where id= '$id'");

if($user)
{
    mysqli_close($con);
    header("location: ../users_table.php");
    exit;
}
else
{
    echo "Error deleting record";
}
?>