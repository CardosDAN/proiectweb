<?php
include "../includes/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $review = $_POST["review"];
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $product_id = $_POST["product_id"];
    $proprietar_anunt = $_POST["proprietar_anunt"];
    $sql = "INSERT INTO product_rating (name,rate,email,review,product_id, proprietar_anunt) VALUES ('$name','$rating','$email','$review','$product_id', '$proprietar_anunt')";
    if (mysqli_query($con, $sql)) {
        echo "New Rate addedddd successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
//    header("location: ../../view_anunt.php");
}
?>