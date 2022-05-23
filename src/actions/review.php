<?php
include "../includes/db.php";
include "../includes/auth_session.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $anunt_id = $_POST['product_id'];
    $qry = mysqli_query($con, "SELECT pareri_produs.*,c.id as client,v.id as vanzator FROM anunturi,pareri_produs,utilizatori c, utilizatori v where anunturi.id=pareri_produs.product_id and c.id = pareri_produs.user_id and v.id = anunturi.user_id order by pareri_produs.id  and pareri_produs.product_id= ".$anunt_id);

    $row = mysqli_fetch_array($qry);


    $proprietar = $row["vanzator"];
    $review = $_POST["review"];
    $user_id = $_SESSION['id'];
    $rating = $_POST["rating"];
    $product_id = $_POST["product_id"];

    $sql = "INSERT INTO pareri_produs (user_id,rate,mesaj,product_id) VALUES ('$user_id','$rating','$review','$product_id')";
    if (mysqli_query($con, $sql)) {
        $mesaj = "Ai un review nou";
        $link = "/src/front_pages/view_anunt.php?id=".$anunt_id;
        $variabila = "/src/includes/new_notification.php?user_id=".$proprietar."&mesaj=".$mesaj."&link=".$link;

        require __DIR__ . '/../includes/new_notification.php';

        new_notification($proprietar, $mesaj, $link);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}
