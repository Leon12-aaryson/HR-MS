<?php
// session_start();

$servername = "localhost";
$username = "u855062599_raffleitapp";
$password = "Leon12@48dex";

try {
    $conn = new PDO("mysql:host=$servername;dbname=u855062599_raffleitapp", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}




// <?php

// $servername = "89.117.139.44";
// $username = "u952475118_raffleitapp";
// $password = "Leon12@48dex";
// // $dbname = "u952475118_raffleitapp";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=u952475118_raffleitapp", $username, $password);

//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo "Connection failed" . $e->getMessage();
// }
