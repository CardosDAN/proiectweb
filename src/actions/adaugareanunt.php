
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//$newcontact = new Create();
//$newcontact->userMessage();



include("../includes/db.php");
function upload($files){
    $statusMsg = '';
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
    $brand = $_POST['brand'];
    session_start();
    $user_id = $_SESSION['id'];
    $sql = "INSERT INTO anunturi (titlu,telefon,adresa,pret,descriere,image_id,user_id,brand) VALUES ('{$titlu}','{$telefon}','{$adresa}','{$pret}','{$descriere}','{$image_id}','$user_id','$brand')";
    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }

    $con->close();

//    header("location: ../home.php");

}


?>
