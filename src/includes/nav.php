<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>


<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <!-- sidebar-brand  -->
        <div class="sidebar-item sidebar-brand">
            <a href="../front_pages/home.php">Fresh Food</a>
        </div>
        <!-- sidebar-header  -->
        <div class="sidebar-item sidebar-header d-flex flex-nowrap">
            <div class="user-pic">
                <?php
                $user_id = $_SESSION['id'];
                $query = $con->query("SELECT * FROM images,users where users.id='{$user_id}' and images.id=users.image_id ");

                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                        $imageURL = '../../../uploads/'.$row["file_name"];
                        ?>
                        <img src="<?php echo $imageURL; ?>" alt="" />
                    <?php }
                }else{ ?>
                    <p>No image(s) found...</p>
                <?php } ?>
                </a>

                <p>
                    <?php
                    $loged_id = $_SESSION['id'];
                    $sql = "SELECT * FROM users where id=$loged_id";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) { ?>


                </p>
            <?php
            }
            } else {
                echo "0 results";
            }
            ?>
            </div>
            <div class="user-info">
                        <span class="user-name">Welcome
                            <strong><?php echo $_SESSION['username']; ?></strong>
                        </span>
                <span class="user-role">
                        <?php
                        $loged_id = $_SESSION['id'];
                        $sql = "SELECT * FROM users,user_levels where users.id='$loged_id' and users.user_level_id = user_levels.id";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>

                        <?php echo "Status: ".$row["nume"]; ?>
                    </span>
                <?php
                }
                } else {
                    echo "0 results";
                }
                ?>


            </div>
        </div>

        <!-- sidebar-menu  -->
        <div class=" sidebar-item sidebar-menu">
            <ul>
                <?php if($_SESSION['user_level_id'] == "3"): ?>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-table"></i>
                        <span class="menu-text">Administrează</span>
                        <span class="badge badge-pill badge-danger">3</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="../cont_page/users_table.php">Users

                                </a>
                            </li>
                            <li>
                                <a href="../cont_page/orders_table.php">Anunțuri</a>
                            </li>
                            <li>
                                <a href="../cont_page/category.php">Categori</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php endif ?>
                <?php if($_SESSION['user_level_id'] >= 2): ?>
                <li class="sidebar">
                    <a href="../front_pages/adauga.php">
                        <i class="fa fa-upload"></i>
                        <span class="menu-text">Adaugă anunțuri</span>
                    </a>
                </li>
                <?php endif ?>
            </ul>
        </div>
        <!-- sidebar-menu  -->

    </div>
    <!-- sidebar-footer  -->

    <div class="sidebar-footer">
        <div class="dropdown ">
            <a href="#" class=" dropdown" data-toggle="dropdown">
                <span class="count" >

                </span>
                <span class="fa fa-bell" ></span>
            </a>
            <div class="dropdown-menu">
                <div class="dropdown-item-text">
                    <?php
                    $sql = "SELECT * FROM notifications where user_id=".$_SESSION['id'];
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                    <li>
                        <a href="../includes/delete_notification.php?id=<?= $row['id'] ?> ">
                        <strong><?php echo $row['message']; ?></strong><br/>
                        <small><em> <?php echo $row['time']; ?></em></small>
                        </a>
                    </li>
                    <?php  } } ?>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope"></i>
                <span class="badge badge-pill badge-success notification count_message"></span>
            </a>
            <div class="dropdown-menu messages" aria-labelledby="dropdownMenuMessage">
                <a class="dropdown-item-message" href="#">
                    <div class="content">
                    </div>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-center" href="../cont_page/message.php">View all messages</a>

            </div>
        </div>
        <div class="dropdown">
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-cog"></i>
                <span class="badge-sonar"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                <a class="dropdown-item" href="../cont_page/anunturi.php?search=">Anunturi</a>
                <a class="dropdown-item" href="../cont_page/profil.php">Profil</a>
<!--                <a class="dropdown-item" href="../actions/user_edit_info.php">Editează profilul</a>-->
                <a class="dropdown-item" href="../cont_page/settings.php">Setări</a>

            </div>
        </div>
        <div>
            <a href="../cont_page/logout.php">
                <i class="fa fa-power-off"></i>
            </a>
        </div>
        <div class="pinned-footer">
            <a href="#">
                <i class="fas fa-ellipsis-h"></i>
            </a>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function () {
        function load_unseen_message(view = '') {
            $.ajax({
                url: "../actions/fetch_message.php",
                method: "POST",
                data: {view: view},
                dataType: "json",
                success: function (data) {
                    $('.dropdown-item-message').html(data.message);
                    if (data.unseen_message > 0) {
                        $('.count_message').html(data.unseen_message);
                    }
                }
            });
        }

        load_unseen_message();

        $(document).on('click', '.dropdown', function () {
            $('.count_message').html('');
            load_unseen_message('yes');
        });

        setInterval(function () {
            load_unseen_message();
        }, 5000);

    });
</script>