<?php

if (!function_exists("dbconn")) {
    function dbconn()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=hrmsdb", "root", "");
        } catch (PDOException $error) {
            echo "Error due to " . $error->getMessage();
        }
        return $conn;
    }
}

if (!function_exists("pretify")) {
    function pretify($data)
    {
        echo "<pre>";
        print_r($data);
    }
}

if (!function_exists("table_count")) {
    function table_count($table)
    {
        $conn = dbconn();
        $query = $conn->prepare("SELECT * FROM " . $table);
        $query->execute();
        $result = $query->fetchAll();
        return $query->rowCount();
    }
}


