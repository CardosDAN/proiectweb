
<?php
$file_name = 'edit_orders';

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

?>
<!DOCTYPE html>
<html lang="en">

<?php include("../includes/head.php"); ?>

<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
    <?php include("../includes/nav.php"); ?>
    <!-- page-content  -->
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <a id="toggle-sidebar" class="btn btn-secondary rounded-0 sticky-top" href="#">
            <span><i class="bi bi-list"></i></span>
        </a>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="form-group col-md-12">
                    <?php $id = $_GET['id'];

                    $qry = mysqli_query($con, "select * from anunturi where id='$id'");

                    $row = mysqli_fetch_array($qry);

                    if (isset($_POST['update']))
                    {
                        $titlu = $_POST["titlu"];
                        $telefon = $_POST["telefon"];
                        $adresa = $_POST["adresa"];
                        $pret = $_POST["pret"];
                        $descriere = $_POST["descriere"];
                        $edit = mysqli_query($con, "Update anunturi set titlu='$titlu',telefon='$telefon',adresa='$adresa',pret='$pret',descriere='$descriere' where id='$id'");
                        if(isset($_FILES["file"])){
                            $image_id = upload($_FILES["file"]);
                            $edit = mysqli_query($con, "Update anunturi set image_id='$image_id' where id='$id'");
                        }
//                        if ($edit) {
////                            header('Location: ' . $_SERVER['HTTP_REFERER']);
//                            exit;
//
//                        } else {
//                            echo mysqli_error();
//                        }
                    }
                    ?>

                    <div class="container">
                        <h3>Editează</h3>
                        <form method="POST" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Titlu</label>
                                        <input type="text" name="titlu" class="form-control" value="<?php echo $row['titlu'] ?>" placeholder="Enter Full Name" Required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telefon</label>
                                        <input type="number" class="form-control" name="telefon" value="<?php echo $row['telefon'] ?>" placeholder="Enter Email" Required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pret</label>
                                        <input type="number" class="form-control" name="pret" value="<?php echo $row['pret'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Adresa</label>
                                        <input type="text" class="form-control" name="adresa" value="<?php echo $row['adresa'] ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Descriere</label>
                                        <textarea type="text" class="form-control" name="descriere"><?php echo $row['descriere'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="center">
                                            <div class="form-input">
                                                <div class="preview">
                                                    <img id="file-ip-1-preview">
                                                    <label for="file-ip-1">Upload Image</label>
                                                    <input type="file" id="file-ip-1" name="file"  accept="image/*" onchange="showPreview(event);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <input class="btn btn-outline-success float-right" type="submit" name="update" value="Update">
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </main>
</div>
<style>
    .center {
        height:50%;
        display:flex;
        align-items:center;
        justify-content:center;

    }
    .form-input  {
        width: 350px;
        padding: 20px;
        background: #fff;
        box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377),
        3px 3px 7px rgba(94, 104, 121, 0.377);
    }

    .form-input input {
        display: none;

    }

    .form-input label {
        display: block;
        width: 45%;
        height: 45px;
        margin-left: 25%;
        line-height: 50px;
        text-align: center;
        background: limegreen;

        color: #fff;
        font-size: 15px;
        font-family: "Open Sans", sans-serif;
        text-transform: Uppercase;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-input img {
        width: 100%;
        display: none;

        margin-bottom: 30px;
    }
</style>
<script type="text/javascript">
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>
<script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../assets/app/js/main.js"></script>
</body>
</html>
