<?php
//include auth_session.php file on all user panel pages
include("../db_actions/auth_session.php");
include("../db_actions/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- using local links -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
</head>

<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <!-- sidebar-brand  -->
            <div class="sidebar-item sidebar-brand">
                <a href="../home.php">Fresh Food</a>
            </div>
            <!-- sidebar-header  -->
            <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="img/user.jpg" alt="User picture">
                </div>
                <div class="user-info">
                        <span class="user-name">Welcome
                            <strong><?php echo $_SESSION['username']; ?></strong>
                        </span>
                    <span class="user-role">
                        <?php
                        $sql = "SELECT * FROM users ORDER BY id DESC";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>

                        <?php echo $row["status"]; ?>
                    </span>
                    <?php
                    }
                    } else {
                        echo "0 results";
                    }
                    ?>
                    <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <?php
                            $sql = "SELECT * FROM users ORDER BY id DESC";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) { ?>

                        <?php echo $row["is_active"]; ?>
                        </span>
                <?php
                }
                } else {
                    echo "0 results";
                }
                ?>
                </div>
            </div>
            <!-- sidebar-search  -->
            <div class="sidebar-item sidebar-search">
                <div>
                    <div class="input-group">
                        <input type="text" class="form-control search-menu" placeholder="Search...">
                        <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sidebar-menu  -->
            <div class=" sidebar-item sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>General</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span class="menu-text">Dashboard</span>
                            <span class="badge badge-pill badge-warning">New</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Dashboard 1
                                        <span class="badge badge-pill badge-success">Pro</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="#">Dashboard 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="menu-text">E-commerce</span>
                            <span class="badge badge-pill badge-danger">3</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="users_table.php">Users

                                    </a>
                                </li>
                                <li>
                                    <a href="orders_table.php">Orders</a>
                                </li>
                                <li>
                                    <a href="#">Credit cart</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-gem"></i>
                            <span class="menu-text">Components</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">General</a>
                                </li>
                                <li>
                                    <a href="#">Panels</a>
                                </li>
                                <li>
                                    <a href="#">Tables</a>
                                </li>
                                <li>
                                    <a href="#">Icons</a>
                                </li>
                                <li>
                                    <a href="#">Forms</a>
                                </li>
                            </ul>
                        </div>
                    </li>
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
                    <li class="header-menu">
                        <span>Extra</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span class="menu-text">Documentation</span>
                            <span class="badge badge-pill badge-primary">Beta</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-calendar"></i>
                            <span class="menu-text">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span class="menu-text">Examples</span>
                        </a>
                    </li>
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
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <div class="dropdown-menu messages" aria-labelledby="dropdownMenuMessage">
                    <div class="messages-header">
                        <i class="fa fa-envelope"></i>
                        Messages
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div class="message-content">
                            <div class="pic">
                                <img src="img/user.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="message-title">
                                    <strong> Jhon doe</strong>
                                </div>
                                <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo
                                </div>
                            </div>
                        </div>

                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="message-content">
                            <div class="pic">
                                <img src="img/user.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="message-title">
                                    <strong> Jhon doe</strong>
                                </div>
                                <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo
                                </div>
                            </div>
                        </div>

                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="message-content">
                            <div class="pic">
                                <img src="img/user.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="message-title">
                                    <strong> Jhon doe</strong>
                                </div>
                                <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-center" href="#">View all messages</a>

                </div>
            </div>
            <div class="dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                    <a class="dropdown-item" href="#">My profile</a>
                    <a class="dropdown-item" href="#">Help</a>
                    <a class="dropdown-item" href="#">Setting</a>
                </div>
            </div>
            <div>
                <a href="#">
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
    <!-- page-content  -->
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="form-group col-md-12">

                </div>

                <div class="form-group col-md-12">
                    <a id="toggle-sidebar" class="btn btn-secondary rounded-0" href="#">
                        <span>Toggle Sidebar</span>
                    </a>
                    <a id="pin-sidebar" class="btn btn-outline-secondary rounded-0" href="#">
                        <span>Pin Sidebar</span>
                    </a>

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-hover table-dark">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Actiuni</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        $sql1 = "SELECT * FROM users ORDER BY id DESC";
                        $result = $con->query($sql1);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td> <?php echo $row["id"]; ?> </td>
                                    <td> <?php echo $row["username"]; ?> </td>
                                    <td> <?php echo $row["email"]; ?> </td>
                                    <td> <?php echo $row["password"]; ?> </td>
                                    <td>
                                        <i class="btn btn-outline-danger bi bi-trash"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg></i>
                                        <i class="btn btn-outline-info bi bi-eye">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                            </svg>
                                        </i>
                                        <i class="btn btn-outline-primary bi bi-pencil-square">
                                            <a href="php/edit_users.php?id=<?php echo $row['id']; ?>">Edit</a>
<!--                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">-->
<!--                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>-->
<!--                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"  />-->
<!--                                            </svg>-->
                                        </i>
                                    </td>

                                </tr>
                                <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        $con->close();
                        ?>
                        </tbody>
                    </table>

                </div>


                <hr>
                <div class="row ">
                    <div class="form-group col-md-12">

                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- page-content" -->
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


<script src="js/main.js"></script>
</body>

</html>