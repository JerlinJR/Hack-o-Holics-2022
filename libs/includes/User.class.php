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

        $sql = "SELECT * FROM `moderatorLogin` WHERE `moderatorid` = '$user' ";
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
}
