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

    public static function priceUpdate($cement, $mcent, $agrigator, $labourcharge, $bitumin, $layingCharge, $mixingCharge)
    {
        $conn = Database::getConnection();

        $sql = "UPDATE `materialprice` SET `cement`= '$cement',`mcent`='$mcent',`agrigator`='$agrigator',`labourcharge`='$labourcharge',`bitumin`='$bitumin',`laying`='$layingCharge',`mixing`='$mixingCharge'  WHERE `id`= '1'";
        if ($conn->query($sql) === true) {
            return true;
        } else {
            // echo "Error updating record: " . $conn->error;
            return false;
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
}
