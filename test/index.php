<?php

$sql = "UPDATE anunturi SET visits = visits+1 WHERE id = 1";
$con->query($sql);

$sql = "SELECT visits FROM anunturi WHERE id = 1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $visits = $row["visits"];
    }
} else {
    echo "no results";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Visit counter</title>
</head>
<body>
Visits: <?php print $visits; ?>

</body>
</html>