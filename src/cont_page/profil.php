<?php

$file_name = 'profil';

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

                    <section class="section about-section gray-bg" id="about">
                        <div class="container">
                            <div class="text-right">
                                <!--                    <li><a href="#"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-warning pull-right r-activity">9</span></a></li>-->
                                <a href="../actions/user_edit_info.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg></a>
                            </div>
                            <?php
                            $id = $_SESSION['id'];
                            $sql = "select * from users WHERE id = $id LIMIT $id";
                            $result = mysqli_query($con, $sql);
                            while ($data = mysqli_fetch_array($result)) { ?>
                                <div class="row  flex-row-reverse">
                                    <div class="col-lg-6">
                                        <div class="about-text go-to">
                                            <h3 class="dark-color">Bio Graph</h3>
                                            <div class="row about-list">
                                                <div class="col-md-6">
                                                    <div class="media">
                                                        <label>Username</label>
                                                        <p><?php echo $data["username"] ?></p>
                                                    </div>
                                                    <div class="media">
                                                        <label>E-mail</label>
                                                        <p><?php echo $data["email"] ?></p>
                                                    </div>
                                                    <div class="media">
                                                        <label>Numar de telefon</label>
                                                        <p><?php echo $data["phone"] ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="media">
                                                        <label>Status</label>
                                                        <p><?php echo $data["user_level_id"] ?></p>
                                                    </div>
                                                    <div class="media">
                                                        <label>Pe Fresh Food</label>
                                                        <p><?php echo $data["created_at"] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="about-avatar">
                                            <?php
                                            $user_id = $_SESSION["id"];
                                            $query = $con->query("SELECT * FROM images,users where users.id='{$user_id}' and images.id=users.image_id ");

                                            if ($query->num_rows > 0) {
                                                while ($row = $query->fetch_assoc()) {
                                                    $imageURL = '../../../uploads/' . $row["file_name"];
                                                    ?>
                                                    <img title="" alt="" src="<?php echo $imageURL; ?>"
                                                         data-holder-rendered="true"/>
                                                <?php }
                                            } else { ?>
                                                <p>No image(s) found...</p>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </section>
                </div>

            </div>
            <br>
            <h5>Anunturile tale</h5>

            <div class="row">
                <?php
                $user_id = $_SESSION["id"];
                $query = $con->query("SELECT * FROM images,anunturi where images.id=anunturi.image_id and anunturi.user_id='$user_id'");
                while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-md-4 p-2">

                        <?php
                        $imageURL = '../../../uploads/' . $row["file_name"]; ?>
                        <div class="card h-100 shadow-sm">
                            <h5 class="card-title container"><?php echo $row['status'] ?></h5>
                            <img src="<?php echo $imageURL; ?>" class="card-img-top" alt="...">

                            <div class="card-body">
                                <div class="clearfix mb-3"><span
                                            class="float-start badge rounded-pill bg-success"><?php echo $row['titlu'] ?>
                                        <span class="float-end"><a
                                                    href="#"><?php echo $row['pret'] ?></a></span>
                                </div>
                                <h5 class="card-title"><?php echo $row['descriere'] ?></h5>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-grid gap-2 my-4"><a
                                                    href="../front_pages/view_anunt.php?id=<?php echo $row['id'] ?>"
                                                    class="btn btn-warning">Vezi oferta</a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-grid gap-2 my-4"><a
                                                    href="../actions/edit_orders.php?id=<?php echo $row['id'] ?>"
                                                    class="btn btn-warning">Editează</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php } ?>
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