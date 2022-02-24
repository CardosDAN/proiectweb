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
                                <a href="../cont_page/contact_us.php">Contactează-ne</a>
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
        <div class="dropdown">

            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="badge badge-pill badge-warning notification">3</span>
            </a>
            <div class="dropdown-menu notifications" aria-labelledby="dropdownMenuMessage">
                <div class="notifications-header">
                    <i class="fa fa-bell"></i>
                    Notifications
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <div class="notification-content">
                        <div class="icon">
                            <i class="fas fa-check text-success border border-success"></i>
                        </div>
                        <div class="content">
                            <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. In totam explicabo
                            </div>
                            <div class="notification-time">
                                6 minutes ago
                            </div>
                        </div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="notification-content">
                        <div class="icon">
                            <i class="fas fa-exclamation text-info border border-info"></i>
                        </div>
                        <div class="content">
                            <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. In totam explicabo
                            </div>
                            <div class="notification-time">
                                Today
                            </div>
                        </div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="notification-content">
                        <div class="icon">
                            <i class="fas fa-exclamation-triangle text-warning border border-warning"></i>
                        </div>
                        <div class="content">
                            <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. In totam explicabo
                            </div>
                            <div class="notification-time">
                                Yesterday
                            </div>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-center" href="#">View all notifications</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-cog"></i>
                <span class="badge-sonar"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                <a class="dropdown-item" href="../cont_page/profil.php">My profile</a>
<!--                <a class="dropdown-item" href="../actions/user_edit_info.php">Editează profilul</a>-->
                <a class="dropdown-item" href="../cont_page/settings.php">Setting</a>
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