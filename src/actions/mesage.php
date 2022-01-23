<?php
include("../includes/db.php");
$username_msg = $_POST['username'];
$mesaj = $_POST['mesaj'];

echo $username_msg." : ".$mesaj;


$sql = "INSERT INTO message (expeditor, mesaj)
VALUES ('".$username_msg."','".$mesaj."')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);