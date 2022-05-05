<?php
include "../includes/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['user_id'];
    $sql = "SELECT * FROM utilizatori where user_level_id = 3";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $admin_id = $row['id'];
        }
    }
    $user_id = $_POST["user_id"];
    $mesaj = $_POST["mesaj"];
    $sql = "INSERT INTO applicati (user_id, mesaj) VALUES ('$user_id','$mesaj')";
    if (mysqli_query($con, $sql)) {
        $message = "Cerere trimisa";
        $message1 = "Cererea ".$mesaj;
        $link = "/src/cont_page/profil.php";
        $link1 = "/src/actions/edit_users.php?id=".$user_id;
        $variabila = "/src/includes/new_notification.php?user_id=".$user_id."&message=".$message."&link=".$link;

        require __DIR__ . '/../includes/new_notification.php';

        new_notification($user_id, $message, $link);
        if (isset($admin_id)){
            new_notification($admin_id, $message1, $link1);
        }


        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}
?>