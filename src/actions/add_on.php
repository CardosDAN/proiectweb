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

        $on = mysqli_query($con, "UPDATE anunturi SET status = 1 where id= '$id'");

if($on)
{
mysqli_close($con);
    $mesaj = "Anuntul a fost activat";
    $link = "/src/front_pages/view_anunt.php?id=".$anunt_id;
    $variabila = "/src/includes/new_notification.php?user_id=".$user_id."&mesaj=".$mesaj."&link=".$link;

    require __DIR__ . '/../includes/new_notification.php';

     new_notification($user_id, $mesaj, $link);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
}
else
{
echo "Eroare activare anunt";
}


