<?php
include "../includes/db.php";
include "../includes/auth_session.php";
$product_id = $_POST['product_id'];
$id_client = $_POST['id_client'];
$mesaj = $_POST['mesaj'];
$raspuns = 0;
if ($id_client == $_SESSION['id']) {
    $raspuns = 1;
}
$sql = "INSERT INTO mesaje (id_anunt,id_client, mesaj, raspuns)
VALUES ('".$product_id."','".$id_client."','".$mesaj."', '".$raspuns."')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
