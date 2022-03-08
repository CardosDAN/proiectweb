<?php
include "../includes/db.php";
include "../includes/auth_session.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $anunt_id = $_POST['product_id'];
    $sql = "SELECT * FROM anunturi where id= ".$anunt_id;
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $user_id = $row['user_id'];
        }
    }
    $email = $_POST["email"];
    $review = $_POST["review"];
    $name = $_SESSION['username'];
    $rating = $_POST["rating"];
    $product_id = $_POST["product_id"];
    $proprietar_anunt = $_POST["proprietar_anunt"];
    $sql = "INSERT INTO product_rating (name,rate,email,review,product_id, proprietar_anunt) VALUES ('$name','$rating','$email','$review','$product_id', '$proprietar_anunt')";
    if (mysqli_query($con, $sql)) {
        $message = "Ai un review nou";
        $link = "/src/front_pages/view_anunt.php?id=".$anunt_id;
        $variabila = "/src/includes/new_notification.php?user_id=".$user_id."&message=".$message."&link=".$link;

        require __DIR__ . '/../includes/new_notification.php';

        new_notification($user_id, $message, $link);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}
?>