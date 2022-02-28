<?php
include "../includes/db.php";
include "../includes/auth_session.php";
$product_id = $_POST['product_id'];
$mesaj = $_POST['mesaj'];

$sql = "INSERT INTO mesaje (expeditor,destinatar, mesaj)
VALUES ('".$_SESSION['id']."','".$product_id."','".$mesaj."')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
