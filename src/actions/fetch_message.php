<?php
include('../includes/db.php');
include('../includes/auth_session.php');
$user_id = $_SESSION['id'];
if (isset($_POST['view'])) {
    if ($_POST["view"] != '') {
        $update_query = "UPDATE mesaje SET status = 1 WHERE status=0";
        mysqli_query($con, $update_query);
    }
    $status_query = "SELECT DISTINCT (mesaje.id), c.username as client,v.username as vanzator,mesaje.raspuns, mesaje.mesaj FROM mesaje,anunturi,utilizatori c, utilizatori v where mesaje.id_anunt = anunturi.id and mesaje.id_client = '$user_id' AND c.id = mesaje.id_client and anunturi.id = mesaje.id_anunt and v.id = anunturi.user_id and mesaje.status = 0 ORDER BY mesaje.id;";
    $result_query = mysqli_query($con, $status_query);
    $count = mysqli_num_rows($result_query);
    $data = array(
        'unseen_message' => $count
    );

    echo json_encode($data);

}

