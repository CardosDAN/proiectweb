<!DOCTYPE html>
<html lang="en">
<?php $product_id = $_GET['id_anunt'];
$id_client = $_GET['id_client'];
?>

<?php include("../includes/head.php"); ?>

<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php include("../includes/nav.php"); ?>
    <style>
        .card-bordered {
            border: 1px solid #ebebeb
        }

        .card {
            border: 0;
            border-radius: 0px;
            margin-bottom: 30px;
            -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
            -webkit-transition: .5s;
            transition: .5s
        }

        .padding {
            padding: 3rem !important
        }

        body {
            background-color: #f9f9fa
        }

        .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
        }

        .card-header {
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            padding: 15px 20px;
            background-color: transparent;
            border-bottom: 1px solid rgba(77, 82, 89, 0.07)
        }

        .card-header .card-title {
            padding: 0;
            border: none
        }

        h4.card-title {
            font-size: 17px
        }

        .card-header > *:last-child {
            margin-right: 0
        }

        .card-header > * {
            margin-left: 8px;
            margin-right: 8px
        }

        .btn-secondary {
            color: #4d5259 !important;
            background-color: #e4e7ea;
            border-color: #e4e7ea;
            color: #fff
        }

        .btn-xs {
            font-size: 11px;
            padding: 2px 8px;
            line-height: 18px
        }

        .btn-xs:hover {
            color: #fff !important
        }

        .card-title {
            font-family: Roboto, sans-serif;
            font-weight: 300;
            line-height: 1.5;
            margin-bottom: 0;
            padding: 15px 20px;
            border-bottom: 1px solid rgba(77, 82, 89, 0.07)
        }

        .ps-container {
            position: relative
        }

        .ps-container {
            -ms-touch-action: auto;
            touch-action: auto;
            overflow: hidden !important;
            -ms-overflow-style: none
        }

        .media-chat {
            padding-right: 64px;
            margin-bottom: 0
        }

        .media {
            padding: 16px 12px;
            -webkit-transition: background-color .2s linear;
            transition: background-color .2s linear
        }

        .media .avatar {
            flex-shrink: 0
        }

        .avatar {
            position: relative;
            display: inline-block;
            width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            border-radius: 100%;
            background-color: #f5f6f7;
            color: #8b95a5;
            text-transform: uppercase
        }

        .media-chat .media-body {
            -webkit-box-flex: initial;
            flex: initial;
            display: table
        }

        .media-body {
            min-width: 0
        }

        .media-chat .media-body p {
            position: relative;
            padding: 6px 8px;
            margin: 4px 0;
            background-color: #f5f6f7;
            border-radius: 3px;
            font-weight: 100;
            color: #9b9b9b
        }

        .media > * {
            margin: 0 8px
        }

        .media-chat .media-body p.meta {
            background-color: transparent !important;
            padding: 0;
            opacity: .8
        }

        .media-meta-day {
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            margin-bottom: 0;
            color: #8b95a5;
            opacity: .8;
            font-weight: 400
        }

        .media {
            padding: 16px 12px;
            -webkit-transition: background-color .2s linear;
            transition: background-color .2s linear
        }

        .media-meta-day::before {
            margin-right: 16px
        }

        .media-meta-day::before,
        .media-meta-day::after {
            content: '';
            -webkit-box-flex: 1;
            flex: 1 1;
            border-top: 1px solid #ebebeb
        }

        .media-meta-day::after {
            content: '';
            -webkit-box-flex: 1;
            flex: 1 1;
            border-top: 1px solid #ebebeb
        }

        .media-meta-day::after {
            margin-left: 16px
        }

        .media-chat.media-chat-reverse {
            padding-right: 12px;
            padding-left: 64px;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: reverse;
            flex-direction: row-reverse
        }

        .media-chat {
            padding-right: 64px;
            margin-bottom: 0
        }

        .media {
            padding: 16px 12px;
            -webkit-transition: background-color .2s linear;
            transition: background-color .2s linear
        }

        .media-chat.media-chat-reverse .media-body p {
            float: right;
            clear: right;
            background-color: #48b0f7;
            color: #fff
        }

        .media-chat .media-body p {
            position: relative;
            padding: 6px 8px;
            margin: 4px 0;
            background-color: #f5f6f7;
            border-radius: 3px
        }

        .border-light {
            border-color: #f1f2f3 !important
        }

        .bt-1 {
            border-top: 1px solid #ebebeb !important
        }

        .publisher {
            position: relative;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            padding: 12px 20px;
            background-color: #f9fafb
        }

        .publisher > *:first-child {
            margin-left: 0
        }

        .publisher > * {
            margin: 0 8px
        }

        .publisher-input {
            -webkit-box-flex: 1;
            flex-grow: 1;
            border: none;
            outline: none !important;
            background-color: transparent
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: Roboto, sans-serif;
            font-weight: 300
        }

        .publisher-btn {
            background-color: transparent;
            border: none;
            color: #8b95a5;
            font-size: 16px;
            cursor: pointer;
            overflow: -moz-hidden-unscrollable;
            -webkit-transition: .2s linear;
            transition: .2s linear
        }

        .file-group {
            position: relative;
            overflow: hidden
        }

        .publisher-btn {
            background-color: transparent;
            border: none;
            color: #cac7c7;
            font-size: 16px;
            cursor: pointer;
            overflow: -moz-hidden-unscrollable;
            -webkit-transition: .2s linear;
            transition: .2s linear
        }

        .file-group input[type="file"] {
            position: absolute;
            opacity: 0;
            z-index: -1;
            width: 20px
        }

        .text-info {
            color: #48b0f7 !important
        }
    </style>
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <a id="toggle-sidebar" class="btn btn-secondary rounded-0 sticky-top" href="#">
            <span><i class="bi bi-list"></i></span>
        </a>
        <br>
        <div class="container-fluid">

            <div class="padding">
                <div class="row container">
                    <div class="col">
                        <div class="card card-bordered">
                            <div class="ps-container ps-theme-default ps-active-y" id="chat-content"
                                 style="overflow-y: scroll !important; height:400px !important;">
                                <?php
                                $user_id = $_SESSION['id'];
                                $sql = "SELECT DISTINCT (mesaje.id), mesaje.mesaj,mesaje.time,mesaje.raspuns,c.username as client,v.username as vanzator FROM mesaje,anunturi,utilizatori c, utilizatori v where mesaje.id_anunt = '$product_id' and mesaje.id_client = '$id_client' AND c.id = mesaje.id_client and anunturi.id = mesaje.id_anunt and v.id = anunturi.user_id ORDER BY mesaje.id;";

                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {

                                    ?>

                                    <div class="media media-chat <?= $row['raspuns'] == 0 ? 'media-chat-reverse': '' ?> ">
                                       <p><?= $row['raspuns'] == 1 ? $row['client'] : $row['vanzator'] ?></p>



                                        <div class="media-body">
                                            <p><?php echo $row['mesaj']; ?></p>
                                            <p class="meta">
                                                <time datetime="2022"><?php echo $row['time']; ?></time>
                                            </p>
                                        </div>

                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                            </div>
                        </div>
                        <div class="publisher bt-1 border-light">
                            <img class="avatar avatar-xs"
                                 src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                            <form action="../actions/insert_mesaje.php" method="post">
                                <input type="hidden" id="username" name="product_id" value="<?= $product_id ?>">
                                <input type="hidden" id="username" name="id_client" value="<?= $id_client ?>">
                                <input class="publisher-input" type="text" name="mesaj" placeholder="Mesajul tau">
                                <input type="submit" class="publisher-btn text-info" value="Trimite">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>





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
