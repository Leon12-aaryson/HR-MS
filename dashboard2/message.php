<?php
session_start();

require "dbconn.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO message (message_name, email, message) VALUES (:name, :email, :message)";

    $querry = $conn->prepare($sql);

    $data = [
        ':name' => $name,
        ':email' => $email,
        ':message' => $message
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header("Location: index.php");
    die();
}
