<?php

class Database
{
    public static $conn = null;

    public static function getConnection()
    {
        if (Database::$conn == null) {
            $servername = "localhost";
            $user_name = "root";
            $pass_word = "";
            $dbname = "RoadCare";
        
            // Create connection
            $connection = new mysqli($servername, $user_name, $pass_word, $dbname);
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            } else {
                // echo "Database Connedcted";
                Database::$conn = $connection;
                return Database::$conn;
            }
        } else {
            // echo "Reusing Database Connection";

            return Database::$conn;
        }
    }
}
