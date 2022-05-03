<?php

function new_notification ($user_id, $mesaj, $link = null){
    include 'db.php';
    $sql = "Insert into notificari (user_id,mesaj,link)  values ('$user_id', '$mesaj',  '"."http://".$_SERVER['HTTP_HOST'].$link."' ) ";
    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }


}
