
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../includes/db.php");

function upload($files){

    global $con;
    // File upload path
    $targetDir = "../../uploads/";
    $fileName = basename($files["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(!empty($files["name"])){
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($files["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $insert = $con->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
                if($insert){
                    return $con->insert_id;
                    #return $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                }else{
                    $statusMsg = "File upload failed, please try again.";
                }
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }

// Display status message
    echo $statusMsg;
    return 0;
}


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $titlu = $_POST["titlu"];
    $telefon = $_POST["telefon"];
    $adresa = $_POST["adresa"];
    $pret = $_POST["pret"];
    $descriere = $_POST["descriere"];
    $image_id = upload($_FILES["file"]);
    $category_id = $_POST['category_id'];
    $sub_category_id= $_POST['sub_category_id'];
    session_start();
    $user_id = $_SESSION['id'];
    $sql = "INSERT INTO anunturi (titlu,telefon,adresa,pret,descriere,image_id,user_id,category_id,sub_category_id) VALUES ('{$titlu}','{$telefon}','{$adresa}','{$pret}','{$descriere}','{$image_id}','$user_id','$category_id','$sub_category_id')";
    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }

    $con->close();

    header('Location: ' . $_SERVER['HTTP_REFERER']);

}


?>
