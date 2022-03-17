<?php
$file_name = "adauga";
//include auth_session.php file on all user panel pages
include "../includes/auth_session.php";

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/sty/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../assets/sty/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/sty/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style -->
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
</head>
<body>


<?php include "../includes/nav_front.php" ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../../assets/sty/images/banner-catalog1.jpg" alt="First slide">
        </div>
    </div>
</div>


<div class="container m-4">
    <form action="../actions/adaugareanunt.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-row">
                    <div class="col-7">
                        <input type="text" name="titlu" class="form-control" placeholder="Titlul anuntului">
                    </div>
                    <div class="col">
                        <input type="number" name="telefon" class="form-control" placeholder="Numarul de telefon">
                    </div>
                </div>
                <br>
                <div class="mb-3">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="adresa" class="form-control" placeholder="Primaria Jibou, Strada Libertății, Jibou">
                        </div>
                        <div class="col-md-2">
                            <input type="number" name="pret" class="form-control" placeholder="Pret">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Dă cât mai multe detali..</label>
                    <textarea type="text" name="descriere" class="form-control" id="exampleInputPassword1"></textarea>
                </div>
                <div class="container ">
                    <div class="center">
                        <div class="form-input">
                            <div class="preview">
                                <img id="file-ip-1-preview">
                                <label for="file-ip-1">Upload Image</label>
                                <input type="file" id="file-ip-1" name="file" accept="image/*" onchange="showPreview(event);">
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
                            <select name="category_id" class="form-select">
                                <option value="">--- Selectează categoria ---</option>
                                <?php
                                require('../includes/db.php');
                                $sql = "SELECT * FROM category";
                                $result = $con->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo "<option value='".$row['id']."'>".$row['name']."</option>";
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
                    <button type="submit" class="btn btn-success">Adauga</button>
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
    $( "select[name='category_id']" ).change(function () {
        var category = $(this).val();


        if(category) {


            $.ajax({
                url: "../actions/dropdown_category.php",
                dataType: 'Json',
                data: {'id':category},
                success: function(data) {
                    $('select[name="sub_category_id"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="sub_category_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });


        }else{
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