<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>
<?php //SELECT `sections`.`nume`, `pages`.`nume` FROM `sections`, `pages` WHERE `pages`.`min_user_level_id` <= 3 AND `sections`.`id` = `pages`.`section_id`;
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
                        $sql = "SELECT * FROM users where id=$loged_id";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>

                        <?php echo "Status: ".$row["user_level_id"]; ?>
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
                <li class="header-menu">
                    <span>General</span>
                </li>
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
                                <a href="../cont_page/users_table.php?search=#">Users

                                </a>
                            </li>
                            <li>
                                <a href="../cont_page/orders_table.php?search=#">Anunțuri</a>
                            </li>
                            <li>
                                <a href="../cont_page/contact_us_table.php">Contactează-ne</a>
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
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-chart-line"></i>
                        <span class="menu-text">Charts</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">Pie chart</a>
                            </li>
                            <li>
                                <a href="#">Line chart</a>
                            </li>
                            <li>
                                <a href="#">Bar chart</a>
                            </li>
                            <li>
                                <a href="#">Histogram</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-globe"></i>
                        <span class="menu-text">Maps</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">Google maps</a>
                            </li>
                            <li>
                                <a href="#">Open street map</a>
                            </li>
                        </ul>
                    </div>
                </li>
<!--                <li class="header-menu">-->
<!--                    <span>Extra</span>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-book"></i>-->
<!--                        <span class="menu-text">Documentation</span>-->
<!--                        <span class="badge badge-pill badge-primary">Beta</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-calendar"></i>-->
<!--                        <span class="menu-text">Calendar</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-folder"></i>-->
<!--                        <span class="menu-text">Examples</span>-->
<!--                    </a>-->
<!--                </li>-->
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
                <a class="dropdown-item" href="../cont_page/anunturi.php">Anunturi</a>
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
        function load_unseen_notification(view = '') {
            $.ajax({
                url: "../actions/fetch.php",
                method: "POST",
                data: {view: view},
                dataType: "json",
                success: function (data) {
                    $('.dropdown-item-text').html(data.notification);
                    if (data.unseen_notification > 0) {
                        $('.count').html(data.unseen_notification);
                    }
                }
            });
        }

        load_unseen_notification();

        $(document).on('click', '.dropdown', function () {
            $('.count').html('');
            load_unseen_notification('yes');
        });

        setInterval(function () {
            load_unseen_notification();
        }, 5000);

    });
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