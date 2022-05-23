<?php
$file_name = "adauga";

include "../includes/auth_session.php";

?>
<?php
$titlu = $telefon = $adresa = $pret = $descriere = $category_id = '';
$erori = array('titlu' => '', 'telefon' => '', 'adresa' => '', 'pret' => '', 'descriere' => '', 'category_id' => '');

if (isset($_POST['submit'])) {

    if (empty($_POST['titlu'])) {
        $erori['titlu'] = 'Titlul trebuie introdus';
    } else {
        $titlu = $_POST['titlu'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $titlu)) {
            $erori['titlu'] = 'Titlul trebuie sa fie din litere ';
        }
    }
    if (empty($_POST["telefon"])) {
        $erori['telefon'] = "Trebuie introdus numarul de telefon";
    } else {
        $telefon = $_POST["telefon"];
        if (!preg_match("/^[0-9]{10}+$/", $telefon)) {
            $erori['telefon'] = "Numarul introdus nu este valid";
        }
    }
    if (empty($_POST["adresa"])) {
        $erori['adresa'] = "Trebuie introdusa adresa";
    } else {
        $adresa = $_POST["adresa"];
    }
    if (empty($_POST["pret"])) {
        $erori['pret'] = "Trebuie introdus pretul";
    } else {
        $pret = $_POST["pret"];
        if (!preg_match("/^\d+(:?[.]\d{2})$/", $_POST["pret"]) == '0') {
            $erori['pret'] = "Pretul introdus nu este corect";
        }
    }
    if (empty($_POST["descriere"])) {
        $erori['descriere'] = "Trebuie introdusa o descriere a produsului";
    } else {
        $descriere = $_POST["descriere"];
    }
    if (empty($_POST["category_id"])) {
        $erori['category_id'] = "Trebuie selectata o categorie";
    } else {
        $category_id = $_POST["category_id"];
    }
    if (array_filter($erori)) {
        echo '';
    } else {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        function upload($files){
            global $con;
            // Calea de încărcare a imagini
            $targetDir = "../../uploads/";
            $fileName = basename($files["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            if (!empty($files["name"])) {
                // Permite anumite formate de imagini
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if (in_array($fileType, $allowTypes)) {
                    if (move_uploaded_file($files["tmp_name"], $targetFilePath)) {
                        // incarca imaginea in baza de date
                        $insert = $con->query("INSERT into imagini (nume_fisier, incarcat) VALUES ('" . $fileName . "', NOW())");
                        if ($insert) {
                            return $con->insert_id;
                        } else {
                            $statusMsg = "Imaginea nu s-a putut încarca, încearcă mai tarziu din nou.";
                        }
                    } else {
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                } else {
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                }
            } else {
                $statusMsg = 'Please select a file to upload.';
            }

            echo $statusMsg;
            return 0;
        }

        $titlu = mysqli_real_escape_string($con, $_POST["titlu"]);
        $telefon = mysqli_real_escape_string($con, $_POST["telefon"]);
        $adresa = mysqli_real_escape_string($con, $_POST["adresa"]);
        $pret = mysqli_real_escape_string($con, $_POST["pret"]);
        $descriere = mysqli_real_escape_string($con, $_POST["descriere"]);
        $category_id = mysqli_real_escape_string($con, $_POST["category_id"]);
        $image_id = upload($_FILES["file"]);
        $sub_category_id = $_POST['sub_category_id'];
        $user_id = $_SESSION['id'];
        $sql = "INSERT INTO anunturi (titlu,telefon,adresa,pret,descriere,image_id,user_id,categorie_id,sub_categorie_id) VALUES ('{$titlu}','{$telefon}','{$adresa}','{$pret}','{$descriere}','{$image_id}','$user_id','$category_id','$sub_category_id')";
        if ($con->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error updating record: " . $con->error;
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/sty/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../assets/sty/css/owl.carousel.min.css">


    <link rel="stylesheet" href="../../assets/sty/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/sty/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <title>Adauga un anunt</title>
    <style>
        a {
            -webkit-transition: color 2s;
            transition: color 2s;
        }

        a:hover {
            color: green;
        }

        body {
            margin: 0px;
            height: 100vh;
        }

        .center {
            height: 50%;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .form-input {
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
</head>
<body>


<?php include "../includes/nav_front.php" ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block" src="../../assets/sty/images/banner-catalog1.jpg" alt="First slide">
        </div>
    </div>
</div>


<div class="container m-4">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-row">
                    <div class="col-7">
                        <input type="text" name="titlu" class="form-control"
                               value="<?php echo htmlspecialchars($titlu) ?>" placeholder="Titlul anuntului">
                        <div class="red-text"><?php echo $erori['titlu']; ?></div>
                    </div>
                    <div class="col">
                        <input type="number" name="telefon" min="0" class="form-control"
                               value="<?php echo htmlspecialchars($telefon) ?>" placeholder="Numarul de telefon">
                        <div class="red-text"><?php echo $erori['telefon']; ?></div>
                    </div>
                </div>
                <br>
                <div class="mb-3">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="adresa" class="form-control"
                                   value="<?php echo htmlspecialchars($adresa) ?>"
                                   placeholder="Primaria Jibou, Strada Libertății, Jibou">
                            <div class="red-text"><?php echo $erori['adresa']; ?></div>
                        </div>
                        <div class="col-md-2">
                            <input type="number" name="pret" min="0" class="form-control"
                                   value="<?php echo htmlspecialchars($pret) ?>" placeholder="Pret">
                            <div class="red-text"><?php echo $erori['pret']; ?></div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Dă cât mai multe detali..</label>
                    <textarea type="text" name="descriere" class="form-control"
                              id="exampleInputPassword1"><?php echo htmlspecialchars($descriere) ?></textarea>
                    <div class="red-text"><?php echo $erori['descriere']; ?></div>
                </div>
                <div class="container ">
                    <div class="center">
                        <div class="form-input">
                            <div class="preview">
                                <img id="file-ip-1-preview">
                                <label for="file-ip-1">Upload Image</label>
                                <input type="file" id="file-ip-1" name="file" accept="image/*"
                                       onchange="showPreview(event);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="m-3">
                    <div class="card">
                        <div class="form-group">
                            <label for="title">Selectează categoria:</label>
                            <div class="red-text"><?php echo $erori['category_id']; ?></div>
                            <select name="category_id" class="form-select">
                                <option value="<?php echo htmlspecialchars($category_id) ?>">--- Selectează categoria
                                    ---
                                </option>
                                <?php
                                require('../includes/db.php');
                                $sql = "SELECT * FROM categorii";
                                $result = $con->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['nume'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Selecteaza sub categoria</label>
                            <select name="sub_category_id" class="form-select">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="align-right">
                    <button type="submit" name="submit" class="btn btn-success">Adauga</button>
                    <a type="button" class="btn btn-danger" href="home.php">Anulează</a>
                </div>
            </div>
        </div>

    </form>
</div>


<div class="footer">
    <!-- Footer -->
    <?php include "../includes/footer_front.php" ?>
    <!-- Footer -->
</div>

<script>
    $("select[name='category_id']").change(function () {
        var category = $(this).val();


        if (category) {


            $.ajax({
                url: "../actions/dropdown_category.php",
                dataType: 'Json',
                data: {'id': category},
                success: function (data) {
                    $('select[name="sub_category_id"]').empty();
                    $.each(data, function (key, value) {
                        $('select[name="sub_category_id"]').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });


        } else {
            $('select[name="sub_category_id"]').empty();
        }
    });
</script>
<script src="../../assets/sty/js/jquery-3.3.1.min.js"></script>
<script src="../../assets/sty/js/popper.min.js"></script>
<script src="../../assets/sty/js/bootstrap.min.js"></script>
<script src="../../assets/sty/js/jquery.sticky.js"></script>
<script src="../../assets/sty/js/main.js"></script>
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
</body>
</html>