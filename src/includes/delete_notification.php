<?php
include("../includes/db.php");

$id = $_GET['id'];
$link = $_SERVER['HTTP_REFERER'];
$sql = "Select link from notifications where id =".$id;
$result = mysqli_query($con, $sql);

if ($row = mysqli_fetch_assoc($result)){
    if ($row['link']) {
        $link = $row["link"];
    }
}


$del = mysqli_query($con, "delete from notifications where id = '$id'");

if ($del) {
    mysqli_close($con);
    header('Location: ' . $link);
    exit;
} else {
    echo "Error deleting record";
}


