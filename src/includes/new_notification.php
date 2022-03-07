<?php

function new_notification ($user_id, $message, $link = null){
    include 'db.php';
    $sql = "Insert into notifications (user_id,message,link)  values ('$user_id', '$message',  '"."http://".$_SERVER['HTTP_HOST'].$link."' ) ";
    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }


}
