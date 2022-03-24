<?php

$file_name = 'message';

?>

<!DOCTYPE html>
<html lang="en">


<?php include("../includes/head.php"); ?>

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
            <div class="col">
                <?php
                include "../includes/db.php";

                $user_id = $_SESSION['id'];
                $result = @mysqli_query($con, "SELECT users.username, anunturi.titlu, mesaje.id_anunt, mesaje.id_client FROM mesaje,anunturi,users where mesaje.id_anunt = anunturi.id and users.id=mesaje.id_client GROUP BY users.id, anunturi.id") or die("Error: " . mysqli_error($con));


                if (isset($_POST['chk_id'])) {
                    $arr = $_POST['chk_id'];
                    foreach ($arr as $id) {
                        @mysqli_query($con, "DELETE FROM mesaje WHERE id = " . $id);
                    }
                    $msg = "Mesaj sters!";
                    header("Location: message.php?msg=$msg");
                }
                ?>
                <form action="message.php" method="post">
                    <?php if (isset($_GET['msg'])) { ?>
                        <p class="alert alert-success"><?php echo $_GET['msg']; ?></p>
                    <?php } ?>
                    <div class="float-right">
                        <input id="submit" name="submit" type="submit" class="btn btn-danger" value="Sterge mesajul"/>
                    </div>
                    <table class="table table-striped table-borderless">
                        <thead>
                        <tr>
                            <th><input id="chk_all" name="chk_all" type="checkbox"/>  &nbsp;Tot</th>
                            <th>Nume utilizator</th>
                            <th>Anunt</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td>
                                    <input name="chk_id[]" type="checkbox" class='chkbox'
                                           value="<?php echo $row['id']; ?>"/>
                                </td>
                                <td><?php echo $row['username']; ?></td>
                                <td>
                                    <a href="mesaje_chat.php?id_anunt=<?= $row['id_anunt'] ?> &id_client=<?= $row['id_client'] ?> "><?php echo $row['titlu']; ?></a>
                                </td>

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </main>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $('#chk_all').click(function () {
            if (this.checked)
                $(".chkbox").prop("checked", true);
            else
                $(".chkbox").prop("checked", false);
        });
    });

    $(document).ready(function () {
        $('#delete_form').submit(function (e) {
            if (!confirm("Confirm Delete?")) {
                e.preventDefault();
            }
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