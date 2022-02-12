<?php
//include auth_session.php file on all user panel pages
$file_name = 'dashbaord';
//include("src/includes/auth_session.php");

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
        <div class="container-fluid p-5">
            <div class="row">
                <div class="form-group col-md-12">
                    <h3>Themes</h3>
                    <p>Here are more themes that you can use</p>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <a href="#" data-theme="default-theme" class="theme default-theme selected"></a>
                    <a href="#" data-theme="chiller-theme" class="theme chiller-theme"></a>
                    <a href="#" data-theme="legacy-theme" class="theme legacy-theme"></a>
                    <a href="#" data-theme="ice-theme" class="theme ice-theme"></a>
                    <a href="#" data-theme="cool-theme" class="theme cool-theme"></a>
                    <a href="#" data-theme="light-theme" class="theme light-theme"></a>
                </div>
                <div class="form-group col-md-12">
                    <p>You can also use background image </p>
                </div>
                <div class="form-group col-md-12">
                    <a href="#" data-bg="bg1" class="theme theme-bg selected"></a>
                    <a href="#" data-bg="bg2" class="theme theme-bg"></a>
                    <a href="#" data-bg="bg3" class="theme theme-bg"></a>
                    <a href="#" data-bg="bg4" class="theme theme-bg"></a>
                    <a href="#" data-bg="bg5" class="theme theme-bg"></a>
                </div>
                <div class="form-group col-md-12">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="toggle-bg" checked>
                        <label class="custom-control-label" for="toggle-bg">Background image</label>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="toggle-border-radius">
                        <label class="custom-control-label" for="toggle-border-radius">Border radius</label>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<!-- page-wrapper -->

<!-- using online scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>
<script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- using local scripts -->
<!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->


<script src="../../assets/app/js/main.js"></script>
</body>

</html>