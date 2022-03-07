<?php
include "../includes/db.php";
$id = $_GET['id'];

$anunt_id = 0;
$sql = "SELECT * FROM anunturi where id= ".$id;
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $user_id = $row['user_id'];
        $anunt_id = $row['id'];
    }
}

        $on = mysqli_query($con, "UPDATE anunturi SET status = 'Activ' where id= '$id'");

if($on)
{
mysqli_close($con);
    $message = "Anuntul a fost activat";
    $link = "/src/front_pages/view_anunt.php?id=".$anunt_id;
    $variabila = "/src/includes/new_notification.php?user_id=".$user_id."&message=".$message."&link=".$link;

    require __DIR__ . '/../includes/new_notification.php';

     new_notification($user_id, $message, $link);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
}
else
{
echo "Error deleting record";
}


