<?php

$servername = "localhost";
$username = "id18086315_root";
$password = "X%5[d0j9gq!|-t!E";
$dbname = "id18086315_main";


// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>