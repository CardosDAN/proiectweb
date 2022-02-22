<?php
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

    <link rel="stylesheet" href="../../website-menu-07/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../website-menu-07/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../website-menu-07/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="../../website-menu-07/css/style.css">

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
            height:100%;
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
            <img class="d-block w-100" src="../../website-menu-07/images/banner-catalog1.jpg" alt="First slide">
        </div>
    </div>
</div>


<div class="container m-4">
    <form action="../actions/adaugareanunt.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" name="titlu" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone</label>
                    <input type="number" name="telefon" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price</label>
                    <input type="number" name="pret" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Address</label>
                    <input type="text" name="adresa" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea type="text" name="descriere" class="form-control" id="exampleInputPassword1"></textarea>
                </div>

            </div>
            <div class="col">
                <div class="m-3">
                    <h1>Alege categoria pentru anunt</h1>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="brand" value="Fructe" id="inlineRadio1">
                        <label  class="form-check-label" for="inlineRadio1">Legume</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="brand" value="Legume" id="inlineRadio1">
                        <label  class="form-check-label" for="inlineRadio1">Fructe</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="brand" value="Lactate" id="inlineRadio1">
                        <label  class="form-check-label" for="inlineRadio1">Lactate</label>
                    </div>
                </div>
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
        <button type="submit" class="btn btn-primary">Adauga</button>
        <a type="button" class="btn btn-danger" href="home.php">Anulează</a>
    </form>
</div>


<div class="m-4">
    <!-- Footer -->
    <?php include "../includes/footer_front.php" ?>
    <!-- Footer -->
</div>


<script src="../../website-menu-07/js/jquery-3.3.1.min.js"></script>
<script src="../../website-menu-07/js/popper.min.js"></script>
<script src="../../website-menu-07/js/bootstrap.min.js"></script>
<script src="../../website-menu-07/js/jquery.sticky.js"></script>
<script src="../../website-menu-07/js/main.js"></script>
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