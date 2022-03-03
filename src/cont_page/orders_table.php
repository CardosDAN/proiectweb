<?php

$file_name = 'orders_table';

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css"/>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style>
    /*.grey-bg {*/
    /*    background-color: #F5F7FA;*/
    /*}*/


</style>
<?php include("../includes/head.php"); ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
        <div class="grey-bg container-fluid">
            <section id="minimal-statistics">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">

                        <script type="text/javascript">
                            google.charts.load("current", {packages: ["corechart"]});
                            google.charts.setOnLoadCallback(drawChart);
                            <?php
                            include "../../src/includes/db.php";


                            $sql1 = "CALL `get_products_status`();";
                            $result = $con->query($sql1);

                            if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) { ?>
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ['Active', <?= $row['active'] ?>],
                                    ['Inactive', <?= $row['inactive'] ?>]
                                ]);

                                var options = {
                                    title: 'Anunturi',
                                    is3D: true,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                chart.draw(data, options);
                            }
                            <?php
                            }
                            }
                            ?>
                        </script>
                        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-fluid p-5">

            <div class="row">
                <div class="col">
                    <h2 class="h4">Anunturi</h2>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="form-group col-md-12">
                    <div class="container-fluid ">
                        <div class=" bg-light rounded my-2 py-2">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Titlu</th>
                                    <th>Nr telefon</th>
                                    <th>Adresa</th>
                                    <th>Status</th>
                                    <th>Categorie</th>
                                    <th>Actiuni</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include "../includes/db.php";
                                $sql = "SELECT * FROM anunturi ";
                                $res = $con->query($sql);
                                while ($row = $res->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["id"] ?></td>
                                        <td><?php echo $row["titlu"] ?></td>
                                        <td><?php echo $row["telefon"] ?></td>
                                        <td><?php echo $row["adresa"] ?></td>
                                        <td><?php echo $row["status"] ?></td>
                                        <td><?php echo $row["categorie"] ?></td>
                                        <td>

                                            <a class="btn btn-outline-danger"
                                               href="../actions/delete_orders.php?id=<?php echo $row['id']; ?>">
                                                <i class=" bi bi-trash"></i>
                                            </a>
                                            <a class="btn btn-outline-info"
                                               href="../front_pages/view_anunt.php?id=<?php echo $row['id']; ?>">
                                                <i class=" bi bi-eye"></i>
                                            </a>
                                            <a class="btn btn-outline-primary"
                                               href="../actions/edit_orders.php?id=<?php echo $row['id']; ?>">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a class="btn btn-outline-warning"
                                               href="../actions/add_on.php?id=<?php echo $row['id']; ?>">
                                                <i class="bi bi-toggle-on"></i>
                                            </a>
                                            <a class="btn btn-outline-warning"
                                               href="../actions/add_off.php?id=<?php echo $row['id']; ?>">
                                                <i class="bi bi-toggle-off"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('table').DataTable();
                    })
                </script>
            </div>


            <div class="row ">
                <div class="form-group col-md-12">
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawStuff);
                        <?php
                        include "../../src/includes/db.php";
                        $result = $con->query("SELECT DISTINCT categorie FROM anunturi");
                        $row_cnt = $result->num_rows;
                        $result1 = $con->query("SELECT DISTINCT sub_categorie FROM anunturi");
                        $row_cnt1 = $result1->num_rows;
                        $result2 = $con->query("SELECT DISTINCT id FROM anunturi");
                        $row_cnt2 = $result2->num_rows;?>
                        function drawStuff() {
                            var data = new google.visualization.arrayToDataTable([
                                ['', ''],
                                ["Numar Categori", <?php printf($row_cnt); ?>],
                                ["Numar sub categori", <?php printf($row_cnt1); ?>],
                                ["Numar anunturi totale", <?php printf($row_cnt2); ?>]
                            ]);

                            var options = {
                                width: 500,
                                legend: { position: 'none' },
                                chart: { title: 'Informati anunturi',
                                    subtitle: '' },
                                bars: 'horizontal',
                                axes: {
                                    x: {
                                        0: { side: 'top', label: 'Percentage'}
                                    }
                                },
                                bar: { groupWidth: "90%" }
                            };

                            var chart = new google.charts.Bar(document.getElementById('top_x_div'));
                            chart.draw(data, options);
                        };
                    </script>
                    <div id="top_x_div" style="width: 900px; height: 500px;">

                    </div>
                </div>

            </div>
        </div>
</div>




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