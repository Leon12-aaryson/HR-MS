<?php
require "dbconn.php";

//contact form data
if (isset($_POST['submit'])) {
    $eventname = $_POST['eventname'];
    $eventdate = $_POST['eventdate'];

    $sql = "INSERT INTO recent (eventname, eventdate) VALUES (:eventname, :eventdate)";
    /** @var TYPE_NAME $conn */
    $querry = $conn->prepare($sql);

    $data = [
        ':eventname' => $eventname,
        ':eventdate' => $eventdate
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header('Location: eventlist.php');
    die();
}
