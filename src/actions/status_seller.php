<?php
include("../includes/db.php");
$id = $_GET['id'];

$seller = mysqli_query($con, "UPDATE users SET user_level_id = 2 where id= '$id'");

if($seller)
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