<?php
include("../includes/db.php");
$username_msg = $_POST['id'];
$mesaj = $_POST['mesaj'];
$expeditor = $_SESSION['id'];
echo $username_msg." : ".$mesaj;


$sql = "INSERT INTO message (expeditor, mesaj)
VALUES ('".$username_msg."','".$mesaj."')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

//INSERT into message(destinatar)
//SELECT username,destinatar from users,message WHERE message.destinatar=users.username;