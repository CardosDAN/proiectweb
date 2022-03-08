<?php
include('../includes/db.php');
include('../includes/auth_session.php');
$user_id = $_SESSION['id'];
if (isset($_POST['view'])) {
    if ($_POST["view"] != '') {
        $update_query = "UPDATE mesaje SET status = 1 WHERE status=0";
        mysqli_query($con, $update_query);
    }
    $query = "SELECT DISTINCT mesaje.id, users.username, mesaje.mesaj FROM mesaje,anunturi,users where mesaje.id_anunt = anunturi.id and anunturi.user_id = '$user_id' and mesaje.status = 0 AND users.id = mesaje.id_client ORDER BY mesaje.id;";
    $result = mysqli_query($con, $query);
    $output = '';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
   
   <div class="message-title">
   <strong> ' . $row["username"] . '</strong>
   </div>
   <div class="message-detail"> ' . $row["mesaj"] . '</div>
   ';

        }
    } else {
        $output .= '
     <li><a href="#" class="text-bold text-italic">Nu ai nici un mesaj nou</a></li>';
    }


    $status_query = "SELECT * FROM mesaje,anunturi WHERE mesaje.status=0 and anunturi.id = mesaje.id_anunt and anunturi.user_id = '$user_id' ";
    $result_query = mysqli_query($con, $status_query);
    $count = mysqli_num_rows($result_query);
    $data = array(
        'message' => $output,
        'unseen_message' => $count
    );

    echo json_encode($data);

}

?>