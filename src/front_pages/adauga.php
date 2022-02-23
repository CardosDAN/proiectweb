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
            <img class="d-block w-100" src="../../website-menu-07/images/banner-catalog1.jpg" alt="First slide">
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
                        <div class="col-5">
                            <input type="text" name="adresa" class="form-control" placeholder="Adresa">
                        </div>
                        <div class="col">
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
                    <script>
                        function populate(brand,sub_brand){
                            var brand = document.getElementById(brand);
                            var sub_brand = document.getElementById(sub_brand);
                            sub_brand.innerHTML = "";
                            if(brand.value == "Fructe"){
                                var optionArray = ["|","mere|Mere","pere|Pere","prune|Prune"];
                            } else if(brand.value == "Legume"){
                                var optionArray = ["|","ceapa|Ceapa","morcov|Morcov","varza|Varza"];
                            } else if(brand.value == "Lactate"){
                                var optionArray = ["|","lapte|Lapte","branza|Branza"];
                            }
                            for(var option in optionArray){
                                var pair = optionArray[option].split("|");
                                var newOption = document.createElement("option");
                                newOption.value = pair[0];
                                newOption.innerHTML = pair[1];
                                sub_brand.options.add(newOption);
                            }
                        }
                    </script>
                    <div class="card">
                        <div class="card-header">
                            Alege categoria pentru anunt
                        </div>
                        <div class="card-body">
                            Categoria:
                            <select class="form-select" id="brand" name="brand" onchange="populate(this.id,'sub_brand')">
                                <option value=""></option>
                                <option value="Fructe">Fructe</option>
                                <option value="Legume">Legume</option>
                                <option value="Lactate">Lactate</option>
                            </select>
                            <hr />
                            Sub categoria
                            <select class="form-select" id="sub_brand" name="sub_brand">
                                <option value=""></option>
                            </select>
                            <hr />
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