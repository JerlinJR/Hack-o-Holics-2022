<?php

include "../libs/load.php";

if(!empty(isset($_POST['cement'])) and !empty(isset($_POST['mcent'])) and !empty(isset($_POST['agrigator'])) and !empty(isset($_POST['labourcharge'])) and !empty(isset($_POST['bitumin'])) and !empty(isset($_POST['layingCharge'])) and !empty(isset($_POST['mixingCharge']))){

    $cement = $_POST['cement'];
    $mcent = $_POST['mcent'];
    $agrigator = $_POST['agrigator'];
    $labourcharge = $_POST['labourcharge'];
    $bitumin = $_POST['bitumin'];
    $layingCharge = $_POST['layingCharge'];
    $mixingCharge = $_POST['mixingCharge'];

    $result = User::priceUpdate($cement,$mcent,$agrigator,$labourcharge,$bitumin,$layingCharge,$mixingCharge);
    if($result){
        echo "DOne";
    }
} else {
    echo "Not Updated";
}

?>
    <a href="components.php">Back</a>