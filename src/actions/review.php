<?php
include "../includes/db.php";
include "../includes/auth_session.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $review = $_POST["review"];
    $name = $_SESSION['username'];
    $rating = $_POST["rating"];
    $product_id = $_POST["product_id"];
    $proprietar_anunt = $_POST["proprietar_anunt"];
    $sql = "INSERT INTO product_rating (name,rate,email,review,product_id, proprietar_anunt) VALUES ('$name','$rating','$email','$review','$product_id', '$proprietar_anunt')";
    if (mysqli_query($con, $sql)) {
        echo "New Rate addedddd successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}
?>