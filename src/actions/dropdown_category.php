<?php


require('../includes/db.php');


$sql = "SELECT * FROM sub_categori
         WHERE categorie_id LIKE '%".$_GET['id']."%'";


$result = $con->query($sql);


$json = [];
while($row = $result->fetch_assoc()){
    $json[$row['id']] = $row['nume'];
}


echo json_encode($json);
