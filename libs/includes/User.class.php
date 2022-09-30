<?php

class User
{
    private $conn;

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

    public static function getStateHighway(){
        $conn = Database::getConnection();

        $sql = "SELECT * FROM `statehighway`;";
        $result = $conn->query($sql);

        print "
        <table class=\"table mb-0 table-striped table-hover\" border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
            <tr>
            <th width=100>RoadName</td> 
        <th width=100>Approx.Budget</td>
        </tr>"; 
        while($row = $result->fetch_assoc())
        { 
        print "<tr>"; 
        print "<td>" . $row['roadName'] . "</td>"; 

        print "</tr>"; 
        } 
        print "</table>"; 
        
        }
           
    public static function getDistrictRoads(){
        $conn = Database::getConnection();

        $sql = "SELECT * FROM `districtroads`;";
        $result = $conn->query($sql);

        print "
        <table class=\"table mb-0 table-striped table-hover\" border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
            <tr>
            <th width=100>RoadName</td> 
        <th width=100>Approx.Budget</td>
        </tr>"; 
        while($row = $result->fetch_assoc())
        { 
        print "<tr>"; 
        print "<td>" . $row['roadName'] . "</td>"; 

        print "</tr>"; 
        } 
        print "</table>"; 
        
        }


        public static function getVillageRoads(){
            $conn = Database::getConnection();
    
            $sql = "SELECT * FROM `villageroads`;";
            $result = $conn->query($sql);
    
            print "
            <table class=\"table mb-0 table-striped table-hover\"  border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
                <tr>
                <th width=100>RoadName</td> 
            <th width=100>Approx.Budget</td>
            </tr>"; 
            while($row = $result->fetch_assoc())
            { 
            print "<tr>"; 
            print "<td>" . $row['roadName'] . "</td>"; 
    
            print "</tr>"; 
            } 
            print "</table>"; 
            
            }
        


}
