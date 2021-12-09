<?php
include("../includes/db.php");
$id = $_GET['id'];

$administrator = mysqli_query($con, "UPDATE users SET user_level_id = 3 where id= '$id'");

if($administrator)
{
    mysqli_close($con);
    header("location: ../../users_table.php");
    exit;
}
else
{
    echo "Error deleting record";
}
?>