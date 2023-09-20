<?php
// $servername = "149.100.151.157";
// $username = "u494998168_foscu";
// $password = "Leon12@48dex";

$servername = "localhost";
$username = "root";
$password = "";


try {
    $conn = new PDO("mysql:host=$servername;dbname=raffleitapp", $username, $password);
    //$conn = new PDO("mysql:host=$servername;dbname=u494998168_foscu", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
