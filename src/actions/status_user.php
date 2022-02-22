<?php
include("../includes/db.php");
$id = $_GET['id'];

$user = mysqli_query($con, "UPDATE users SET user_level_id = 1 where id= '$id'");

if($user)
{
    mysqli_close($con);
    header("location: ../cont_page/users_table.php");
    exit;
}
else
{
    echo "Error deleting record";
}
?>