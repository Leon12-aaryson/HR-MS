<?php
require "dbconn.php";

//contact form data
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];

    $sql = "INSERT INTO users (first_name, last_name, username, email, password) VALUES (:fname, :lname, :username, :email, :password)";

    $querry = $conn->prepare($sql);

    $data = [
        ':fname' => $fname,
        ':lname' => $lname,
        ':email' => $email,
        ':passwd' => $passwd
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

?>