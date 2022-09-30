<?php

include "../libs/load.php";

if (!empty(isset($_POST['cement'])) and !empty(isset($_POST['mcent'])) and !empty(isset($_POST['agrigator'])) and !empty(isset($_POST['labourcharge']))) {
    $cement = $_POST['cement'];
    $mcent = $_POST['mcent'];
    $agrigator = $_POST['agrigator'];
    $labourcharge = $_POST['labourcharge'];
    echo $cement;
    echo $mcent;
    echo $agrigator;
    echo $labourcharge;


    $result = User::priceUpdate($cement, $mcent, $agrigator, $labourcharge);
    if ($result) {
        echo "DOne";
    }
} else {
    echo "Not Updated";
}

?>
<a href="components.php">Back</a>