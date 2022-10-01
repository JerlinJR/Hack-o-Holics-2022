<?php

include 'Formula.class.php';

class User
{
    private $conn;
    private $roadWidth;
    private $subBaseDepth;
    private $lengthOfTheRoad;

    public static function userLogin($user, $pass)
    {
        $conn = Database::getConnection();

        $sql = "SELECT * FROM `clientauth` WHERE `username` = '$user' ";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if ($pass == $row['password']) {
                return $row['id'];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function moderatorLogin($user, $pass)
    {
        $conn = Database::getConnection();

        $sql = "SELECT * FROM `moderatorlogin` WHERE `moderatorid` = '$user' ";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if ($pass == $row['password']) {
                return $row['moderatorUsername'];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function getMaterialData()
    {
        $conn = Database::getConnection();

        $sql = "SELECT * FROM `materialprice`";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return false;
        }
    }

    public static function priceUpdate($cement, $mcent, $agrigator, $labourcharge)
    {
        $conn = Database::getConnection();

        $sql = "UPDATE `materialprice` SET `subBaselabourCost`='$cement',`subBaseMaterialPrice`='$mcent',`baseMaterialPrice`='$agrigator',`baseLabourCost`='$labourcharge' WHERE `id`=1";
        if ($conn->query($sql) === true) {
            return true;
        } else {
            echo "Error updating record: " . $conn->error;
            // return false;
        }
    }

    public static function roadUpdate($id, $roadType, $roadName, $depth)
    {
        $conn = Database::getConnection();

        $sql = "UPDATE `clientauth` SET `roadType`='$roadType',`roadName`='$roadName',`depth`='$depth' WHERE `id`='$id'";
        if ($conn->query($sql) === true) {
            echo "Data Inserted";
        // return true;
        } else {
            echo "Error updating record: " . $conn->error;
            // return false;
        }
    }

    public static function GetDbValue($table, $index)
    {
        $conn = Database::getConnection();
        $roadType=(($table== "districtroads")?"district":(($table=="statehighway")?"state":(("village"))));
        //print_r($roadType);
        $sql = "SELECT * FROM `$table` WHERE `roadName`= '$roadType road $index';";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            //print_r($row) ;
            return $row;
        } else {
            return false;
        }
    }

    public static function GetDbPrice()
    {
        $conn = Database::getConnection();

        $sql = "SELECT * FROM `materialprice` WHERE 1;";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            //print_r($row);
            return $row;
        } else {
            return false;
        }
    }
    public static function SetEstimate($estimate, $table, $index)
    {
        $conn = Database::getConnection();
        $roadType=(($table== "districtroads")?"district":(($table=="statehighway")?"state":(("village"))));
        $sql = "UPDATE `$table` SET `approximatePrice` = '$estimate' WHERE `roadName`= '$roadType road $index';";
        
            
        if ($conn->query($sql) === true) {
            echo "Data Inserted";
        // return true;
        } else {
            echo "Error updating record: " . $conn->error;
            // return false;
        }
    }
    

    

    public static function EstimatePrice($table, $index)
    {
        $row = User::GetDbValue($table, $index);
        $row1 = User::GetDbPrice();
        $roadWidth = $row["roadWidth"];
        $subBaseDepth = $row["subBaseDepth"];
        $lengthOfTheRoad = $row["roadLength"];
    
        $baseDepth = $row["baseDepth"];
        $subBaseLabourCost= $row1["subBaselabourCost"];
        $subBaseMaterialPrice = $row1["subBaseMaterialPrice"];
        $baseMaterialPrice = $row1["baseMaterialPrice"];
        $baselabourCost = $row1["baseLabourCost"];
        $subBaseVolume = Formula::SubBaseVolume($roadWidth, $subBaseDepth, $lengthOfTheRoad);
        //print($subBaseVolume);
        $baseVolume = Formula::BaseVolume($roadWidth, $baseDepth, $lengthOfTheRoad);
        $totalSubBaseLabourCost = Formula::TotalSubBaseLabourCost($subBaseVolume, $subBaseLabourCost, );
        $totalSubBaseMaterialPrice = Formula::TotalSubBaseMaterialPrice($subBaseVolume, $subBaseMaterialPrice);
        $totalBaseMaterialPrice = Formula::TotalBaseMaterialPrice($baseMaterialPrice, $baseVolume);
        $totalBaseLabourCost=Formula::TotalBaseLabourCost($baseVolume, $baselabourCost);
        $total = $totalSubBaseLabourCost + $totalBaseMaterialPrice + $totalBaseMaterialPrice + $totalSubBaseLabourCost;
        print($total);

        return $total;
    }


public static function getStateHighway()
{
    $conn = Database::getConnection();

    $sql = "SELECT * FROM `statehighway`;";
    $result = $conn->query($sql);

    print "
    <table class=\"table mb-0 table-striped table-hover\" border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
        <tr>
        <th >RoadName</td> 
    <th>Approx.Budget</td>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        print "<tr>";
        print "<td>" . $row['roadName'] . "</td>";
        print "<td>" . $row['approximatePrice'] . "</td>";

        print "</tr>";
    }
    print "</table>";
}
       
public static function getDistrictRoads()
{
    $conn = Database::getConnection();

    $sql = "SELECT * FROM `districtroads`;";
    $result = $conn->query($sql);

    print "
    <table class=\"table mb-0 table-striped table-hover\" border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
        <tr>
        <th >RoadName</td> 
    <th >Approx.Budget</td>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        print "<tr>";
        print "<td>" . $row['roadName'] . "</td>";
        print "<td>" . $row['approximatePrice'] . "</td>";

        print "</tr>";
    }
    print "</table>";
}


    public static function getVillageRoads()
    {
        $conn = Database::getConnection();

        $sql = "SELECT * FROM `villageroads`;";
        $result = $conn->query($sql);

        print "
        <table class=\"table mb-0 table-striped table-hover\"  border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
            <tr>
            <th >RoadName</td> 
        <th>Approx.Budget</td>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            print "<tr>";
            print "<td>" . $row['roadName'] . "</td>";
            print "<td>" . $row['approximatePrice'] . "</td>";
        

            print "</tr>";
        }
        print "</table>";
    }
}
