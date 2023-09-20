<?php

include "dbconn.php";

//contact form data
if (isset($_POST['submit'])) {
    $cname = $_POST['cname'];
    $logo = $_POST['logo'];
    $website = $_POST['website'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO organisation (cname, logo, website, description, email, address) VALUES (:cname, :logo, :website, :description, :email, :address)";

    $querry = $conn->prepare($sql);

    $data = [
        ':cname' => $cname,
        ':logo' => $logo,
        ':website' => $website,
        ':description' => $description,
        ':email' => $email,
        ':address' => $address,
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header('Location: index.php');
    die();
}