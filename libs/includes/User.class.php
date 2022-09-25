<?php

class User
{
    private $conn;

    public static function login($user, $pass)
    {
        $conn = Database::getConnection();

        $sql = "SELECT * FROM `clientAuth` WHERE `username` = '$user' ";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if ($pass == $row['password']) {
                return $row['email'];
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

    public static function priceUpdate($cement,$mcent,$agrigator,$labourcharge,$bitumin,$layingCharge,$mixingCharge )
    {
        $conn = Database::getConnection();

        $sql = "UPDATE `materialprice` SET `cement`= '$cement',`mcent`='$mcent',`agrigator`='$agrigator',`labourcharge`='$labourcharge',`bitumin`='$bitumin',`laying`='$layingCharge',`mixing`='$mixingCharge'  WHERE `id`= '1'";
        if ($conn->query($sql) === TRUE) {
            return True;
        } else {
            // echo "Error updating record: " . $conn->error;
            return False;
        }
    }

}