<style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    :root {
        --font1: 'Heebo', sans-serif;
        --font2: 'Fira Sans Extra Condensed', sans-serif;
        --font3: 'Roboto', sans-serif
    }


    h2 {
        font-weight: 900
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



    .top-right span {
        display: inline-block;
        vertical-align: middle
    }

    @media (max-width: 768px) {
        .card-img-top {
            max-height: 250px
        }
    }



    .btn {
        font-size: 1rem;
        font-weight: 500;
        text-transform: uppercase;
        padding: 15px 50px 5px 50px
    }

    .box .btn {
        font-size: 1.5rem
    }

    @media (max-width: 1025px) {
        .btn {
            padding: 15px 40px 5px 40px
        }
    }

    @media (max-width: 250px) {
        .btn {
            padding: 15px 30px 5px 30px
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



    .price-hp {
        font-size: 1rem;
        font-weight: 600;
        color: darkgray
    }





    @media (max-width: 370px) {
        .box .btn {
            padding: 5px 40px 5px 40px;
            font-size: 1rem
        }
    }



    .related h3 {
        font-weight: 900
    }

    footer {
        background: #212529;
        height: 80px;
        color: #fff
    }
</style>

<?php

include "../actions/database_connection.php";


if (isset($_POST["action"])) {
    $query = "
		SELECT * FROM anunturi,imagini WHERE imagini.id=anunturi.image_id and anunturi.status=1 
	";
    if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query .= "
		 AND pret BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
		";
    }
    if (isset($_POST["category_id"])) {
        $category_id_filter = implode("','", $_POST["category_id"]);
        $query .= "
		 AND categorie_id IN('" . $category_id_filter . "')
		";
    }
    if(isset($_POST["sub_category_id"]))
    {
        $sub_category_id_filter = implode("','", $_POST["sub_category_id"]);
        $query .= "
		 AND sub_categorie_id IN('".$sub_category_id_filter."')
		";
    }
    if(isset($_POST["record_limit"]))
    {
        $query .= "LIMIT ".$_POST["record_limit"];
    }
    if(isset($_POST["page"])){
        $record_limit = 10;
        if(isset($_POST["record_limit"]))
        {
            $record_limit = $_POST["record_limit"];
        }
        $query .= " OFFSET ".($_POST["page"]-1) * $_POST["record_limit"];
    }
    $statement = $con->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
                <div class="col-xl-4 py-1">
                    <div class="card h-100 shadow-sm">
                    
                   
                        <img src="../../uploads/' . $row["nume_fisier"] . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                            <span class="float-start badge rounded-pill bg-success">' . $row['titlu'] . '</span>
                                <span class="float-end price-hp">' . $row['pret'] . '</span>
                                </div>
                                        <h5 class="card-title">' . $row['descriere'] . '</h5>
                            <div class="container">
                                <a href="../front_pages/view_anunt.php?id='.$row['0'].'" class="btn btn-warning ">Vezi oferta</a>
                            </div>
                         
                        </div>
                    </div>
                </div>
			';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}

?>