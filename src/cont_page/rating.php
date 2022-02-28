<?php

$file_name = 'settings';

?>

<!DOCTYPE html>
<html lang="en">


<?php include("../includes/head.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php include("../includes/nav.php"); ?>
    <!-- page-content  -->
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <a id="toggle-sidebar" class="btn btn-secondary rounded-0 sticky-top" href="#">
            <span><i class="bi bi-list"></i></span>
        </a>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <?php
                    $user_id = $_SESSION['id'];
                    $query = $con->query("SELECT * FROM images,anunturi,product_rating where images.id=anunturi.image_id and anunturi.user_id = '$user_id' and anunturi.status='Activ' and anunturi.id=product_rating.product_id");
                    while ($row = $query->fetch_assoc()) { ?>
                        <div class="card mb-3">
                            <div class="row">
                                <div class="col">
                                    <?php $imageURL = '../../../uploads/' . $row["file_name"]; ?>
                                    <img src="<?php echo $imageURL; ?>" class="card-img-top img-responsive" alt="...">
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row['titlu'] ?></h5>
                                        <hr>
                                        <p class="card-text">
                                        <div class="row">
                                            <div class="col-md-auto">
                                                <span class="d-block font-weight-bold name"><?php echo $row['name']; ?></span>
                                            </div>
                                            <div class="col">
                                                <span class="date text-black-50"><?php echo $row['email']; ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-auto">
                                                <p class="comment-text"><?php echo $row['review']; ?></p>

                                            </div>
                                            <div class="col">
                                                <div class="rateyo" id="rating"
                                                     data-rateyo-rating="<?php echo $row['rate']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :' + rating);
            $(this).parent().find('input[name=rating]').val(rating);
        });
    });

</script>

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