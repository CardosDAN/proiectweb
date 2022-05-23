<?php
include("../includes/db.php");
function upload($files)
{

    global $con;

    $targetDir = "../../uploads/";
    $fileName = basename($files["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (!empty($files["name"])) {

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {

            if (move_uploaded_file($files["tmp_name"], $targetFilePath)) {

                $insert = $con->query("INSERT into imagini (nume_fisier, incarcat) VALUES ('" . $fileName . "', NOW())");
                if ($insert) {
                    return $con->insert_id;

                } else {
                    $statusMsg = "Imaginea nu a putut fi încărcată, încearcă din nou mai târziu.";
                }
            } else {
                $statusMsg = "Scuze, a apărut o eroare.";
            }
        } else {
            $statusMsg = 'Scuze, numai JPG, JPEG, PNG, GIF imagini pot fi puse.';
        }
    } else {
        $statusMsg = 'Selectează un fișier pentru a fi încarcat.';
    }


    echo $statusMsg;
    return 0;
}
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $image_id = upload($_FILES["file"]);
    session_start();
    $user_id = $_SESSION['id'];
    $sql = "UPDATE utilizatori set image_id='{$image_id}' where id='{$user_id}'";
    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }

    $con->close();

    header('Location: ' . $_SERVER['HTTP_REFERER']);

}


