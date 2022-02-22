
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//$newcontact = new Create();
//$newcontact->userMessage();



include("../includes/db.php");
function upload($files){
    $id = $_GET['id']; // get id through query string
    $statusMsg = '';
    global $con;
    // File upload path
    $targetDir = "uploads/";
    $fileName = basename($files["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $qry = mysqli_query($con,"SELECT from images * where id='$id'");
    $row = mysqli_fetch_array($qry); // fetch data
    if (isset($_POST['update'])){
        $file_name = $_POST['file_name'];
        $uploaded_on = $_POST['uploaded_on'];
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($files["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $insert = $con->query("Insert into  images set file_name='$file_name', uploaded_on ='$uploaded_on' VALUES ('".$fileName."', NOW())");
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

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($con, "select * from anunturi where id='$id'"); // select query

$row = mysqli_fetch_array($qry); // fetch data
if (isset($_POST['update']))  {
    $titlu = $_POST["titlu"];
    $telefon = $_POST["telefon"];
    $adresa = $_POST["adresa"];
    $pret = $_POST["pret"];
    $descriere = $_POST["descriere"];
    $image_id = upload($_FILES["file"]);
    $sql = "Update anunturi set titlu='$titlu',telefon='$telefon',adresa='$adresa',pret='$pret',descriere='$descriere',image_id='$image_id' where id='$id')";
    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }

//    $con->close();

//    header("location: ../home.php");

}


?>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="col-md-6 form-group">
            <input type="text" name="username" value="<?php echo $row['titlu'] ?>" placeholder="Title" Required>
        </div>
        <div class="col-md-6 form-group">
            <input type="number" name="telefon" value="<?php echo $row['telefon'] ?>" placeholder="07********">
        </div>
        <div class="col-md-6 form-group">
            <input type="number" name="pret" value="<?php echo $row['pret'] ?>" placeholder="Pret">
        </div>
        <div class="col-md-6 form-group">
            <input type="text" name="adresa" value="<?php echo $row['adresa'] ?>" placeholder="Adresa...">
        </div>
        <div class="col-md-6 form-group">
            <textarea name="descriere" value="<?php echo $row['descriere'] ?>" placeholder="Scrie ceva...." ></textarea>
        </div>
        <input type="file" value="<?php echo $row['image_id'] ?>" name="file">
        <button  type="submit" class="btn btn-primary">Edit</button>
        <a type="button" class="btn btn-danger" href="../front_pages/home.php">Anulează</a>
    </form>
</div>
