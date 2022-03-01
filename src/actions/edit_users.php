<?php
$file_name = 'edit_users';

include("../includes/db.php");

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
                    <?php $id = $_GET['id']; // get id through query string

                    $qry = mysqli_query($con, "select * from users where id='$id'"); // select query

                    $row = mysqli_fetch_array($qry); // fetch data

                    if (isset($_POST['update'])) // when click on Update button
                    {
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $password = $_POST['password'];
                        $user_level_id = $_POST['user_level_id'];

                        $edit = mysqli_query($con, "update users set username='{$username}', email='{$email}', phone='{$phone}', password='{$password}', user_level_id='{$user_level_id}' where id='{$id}'");

                        if ($edit) {
                            header('Location: ' . $_SERVER['HTTP_REFERER']);
                            exit;

                        } else {
                            echo mysqli_error();
                        }
                    }
                    ?>

                    <div class="container">
                        <h3>Editează</h3>
                        <form method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" placeholder="Enter Full Name" Required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" placeholder="Enter Email" Required>
                                <small id="emailHelp" class="form-text text-muted">Nu vom împărtăși niciodată e-mailul dvs. cu nimeni altcineva.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Numarul de telefon</label>
                                <input type="number" class="form-control" name="phone" value="<?php echo $row['phone'] ?>" placeholder="Enter Phone" Required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Parola</label>
                                <input type="password" class="form-control" name="password" value="<?php echo $row['password'] ?>" placeholder="Enter Password" Required>
                                <small id="emailHelp" class="form-text text-muted">Nu vom împărtăși niciodată parola dvs. cu nimeni altcineva.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <div class="card">
                                    <div class="card-header">
                                        Schimbă statusul
                                    </div>
                                    <div class="card-body">
                                        <select class="form-select" name="user_level_id" aria-label="Default select example">
                                            <option selected><?php echo $row['user_level_id'];?></option>
                                            <option value="1">User</option>
                                            <option value="2">Seller</option>
                                            <option value="3">Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-outline-success"  type="submit" name="update" value="Update">
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </main>
</div>





<style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    :root {
        --font1: 'Heebo', sans-serif;
        --font2: 'Fira Sans Extra Condensed', sans-serif;
        --font3: 'Roboto', sans-serif
    }

    body {
        font-family: var(--font3);
        background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%)
    }

    h2 {
        font-weight: 900
    }

    .container-fluid {
        max-width: 1200px
    }

    .card {
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        border: 0;
        border-radius: 1rem
    }

    .card-img,
    .card-img-top {
        border-top-left-radius: calc(1rem - 1px);
        border-top-right-radius: calc(1rem - 1px)
    }

    .card h5 {
        overflow: hidden;
        height: 56px;
        font-weight: 900;
        font-size: 1rem
    }

    .card-img-top {
        width: 100%;
        max-height: 180px;
        object-fit: contain;
        padding: 30px
    }

    .card h2 {
        font-size: 1rem
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)
    }

    .label-top {
        position: absolute;
        background-color: #8bc34a;
        color: #fff;
        top: 8px;
        right: 8px;
        padding: 5px 10px 5px 10px;
        font-size: .7rem;
        font-weight: 600;
        border-radius: 3px;
        text-transform: uppercase
    }

    .top-right {
        position: absolute;
        top: 24px;
        left: 24px;
        width: 90px;
        height: 90px;
        border-radius: 50%;
        font-size: 1rem;
        font-weight: 900;
        background: #ff5722;
        line-height: 90px;
        text-align: center;
        color: white
    }

    .top-right span {
        display: inline-block;
        vertical-align: middle
    }

    @media (max-width: 768px) {
        .card-img-top {
            max-height: 250px
        }
    }

    .over-bg {
        background: rgba(53, 53, 53, 0.85);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(0.0px);
        -webkit-backdrop-filter: blur(0.0px);
        border-radius: 10px
    }

    .btn {
        font-size: 1rem;
        font-weight: 500;
        text-transform: uppercase;
        padding: 5px 50px 5px 50px
    }

    .box .btn {
        font-size: 1.5rem
    }

    @media (max-width: 1025px) {
        .btn {
            padding: 5px 40px 5px 40px
        }
    }

    @media (max-width: 250px) {
        .btn {
            padding: 5px 30px 5px 30px
        }
    }

    .btn-warning {
        background: none #f7810a;
        color: #ffffff;
        fill: #ffffff;
        border: none;
        text-decoration: none;
        outline: 0;
        box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);
        border-radius: 100px
    }

    .btn-warning:hover {
        background: none #ff962b;
        color: #ffffff;
        box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)
    }

    .bg-success {
        font-size: 1rem;
        background-color: #f7810a !important
    }

    .bg-danger {
        font-size: 1rem
    }

    .price-hp {
        font-size: 1rem;
        font-weight: 600;
        color: darkgray
    }

    .amz-hp {
        font-size: .7rem;
        font-weight: 600;
        color: darkgray
    }

    .fa-question-circle:before {
        color: darkgray
    }

    .fa-plus:before {
        color: darkgray
    }

    .box {
        border-radius: 1rem;
        background: #fff;
        box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)
    }

    .box-img {
        max-width: 300px
    }

    .thumb-sec {
        max-width: 300px
    }

    @media (max-width: 576px) {
        .box-img {
            max-width: 200px
        }

        .thumb-sec {
            max-width: 200px
        }
    }

    .inner-gallery {
        width: 60px;
        height: 60px;
        border: 1px solid #ddd;
        border-radius: 3px;
        margin: 1px;
        display: inline-block;
        overflow: hidden;
        -o-object-fit: cover;
        object-fit: cover
    }

    @media (max-width: 370px) {
        .box .btn {
            padding: 5px 40px 5px 40px;
            font-size: 1rem
        }
    }

    .disclaimer {
        font-size: .9rem;
        color: darkgray
    }

    .related h3 {
        font-weight: 900
    }

    footer {
        background: #212529;
        height: 80px;
        color: #fff
    }

    body {
        color: #6F8BA4;
        margin-top: 20px;
    }

    .section {
        padding: 100px 0;
        position: relative;
    }

    .gray-bg {
        background-color: #f5f5f5;
    }

    img {
        max-width: 100%;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    /* About Me
    ---------------------*/
    .about-text h3 {
        font-size: 45px;
        font-weight: 700;
        margin: 0 0 6px;
    }

    @media (max-width: 767px) {
        .about-text h3 {
            font-size: 35px;
        }
    }

    .about-text h6 {
        font-weight: 600;
        margin-bottom: 15px;
    }

    @media (max-width: 767px) {
        .about-text h6 {
            font-size: 18px;
        }
    }

    .about-text p {
        font-size: 18px;
        max-width: 450px;
    }

    .about-text p mark {
        font-weight: 600;
        color: #20247b;
    }

    .about-list {
        padding-top: 10px;
    }

    .about-list .media {
        padding: 5px 0;
    }

    .about-list label {
        color: #20247b;
        font-weight: 600;
        width: 88px;
        margin: 0;
        position: relative;
    }

    .about-list label:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        right: 11px;
        width: 1px;
        height: 12px;
        background: #20247b;
        -moz-transform: rotate(15deg);
        -o-transform: rotate(15deg);
        -ms-transform: rotate(15deg);
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
        margin: auto;
        opacity: 0.5;
    }

    .about-list p {
        margin: 0;
        font-size: 15px;
    }

    @media (max-width: 991px) {
        .about-avatar {
            margin-top: 30px;
        }
    }

    .about-section .counter {
        padding: 22px 20px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    }

    .about-section .counter .count-data {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .about-section .counter .count {
        font-weight: 700;
        color: #20247b;
        margin: 0 0 5px;
    }

    .about-section .counter p {
        font-weight: 600;
        margin: 0;
    }

    mark {
        background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
        background-size: 100% 3px;
        background-repeat: no-repeat;
        background-position: 0 bottom;
        background-color: transparent;
        padding: 0;
        color: currentColor;
    }

    .theme-color {
        color: #fc5356;
    }

    .dark-color {
        color: #20247b;
    }
</style>
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



