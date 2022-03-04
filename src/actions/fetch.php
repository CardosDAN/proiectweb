<?php
include('../includes/db.php');
include ('../includes/auth_session.php');
$user_id = $_SESSION['id'];
if(isset($_POST['view'])){
    if($_POST["view"] != '')
    {
        $update_query = "UPDATE notificari SET status = 1 WHERE status=0 and user_id = '$user_id'";
        mysqli_query($con, $update_query);
    }
    $query = "SELECT * FROM notificari where user_id = '$user_id'  ORDER BY id ";
    $result = mysqli_query($con, $query);
    $output = '';
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
   <li>
   <a href="../cont_page/rating.php">
   <strong>'.$row["email"].'</strong><br />
   <small><em>'.$row["review"].'</em></small>
   </a>
   </li>
   ';

        }
    }
    else{
        $output .= '
     <li><a href="#" class="text-bold text-italic">Nu ai nici o notiifcare</a></li>';
    }



    $status_query = "SELECT * FROM notificari WHERE status=0 and user_id= '$user_id'";
    $result_query = mysqli_query($con, $status_query);
    $count = mysqli_num_rows($result_query);
    $data = array(
        'notification' => $output,
        'unseen_notification'  => $count
    );

    echo json_encode($data);

}

?>