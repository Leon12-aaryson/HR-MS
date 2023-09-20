<?php
require "dbconn.php";

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];

    try {
        $sql = "DELETE FROM events where id=:id";
        $statement = $conn->prepare($sql);
        $data = [':id' => $id];
        $execdata = $statement->execute($data);

        if ($execdata) {
            $_SESSION['message'] = "Data Deleted";
        } else {
            $_SESSION['message'] = "Data deletion failed";
        }

        header('Location: eventlist.php');
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("location:eventlist.php");
}

if (isset($_POST['del_recent'])) {
    $id = $_POST['del_recent'];

    try {
        $sql = "DELETE FROM recent where id=:id";
        $statement = $conn->prepare($sql);
        $data = [':id' => $id];
        $execdata = $statement->execute($data);

        if ($execdata) {
            $_SESSION['message'] = "Data Deleted";
        } else {
            $_SESSION['message'] = "Data deletion failed";
        }

        header('Location: eventlist.php');
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("location:eventlist.php");
}

if (isset($_POST['update_event'])) {
    $id = $_POST['id'];
    $eventname = $_POST['eventname'];
    $eventdate = $_POST['eventdate'];
    $enddate = $_POST['enddate'];

    try {
        $sql = "UPDATE events SET eventname=:eventname, eventdate=:eventdate, enddate=:enddate WHERE id=:id";
        $statement = $conn->prepare($sql);
        $data = [
            ':id' => $id,
            ':eventname' => $eventname,
            ':eventdate' => $eventdate,
            ':enddate' => $enddate
        ];
        $execdata = $statement->execute($data);

        if ($execdata) {
            $_SESSION['message'] = "Data Updated";
        } else {
            $_SESSION['message'] = "Data update failed";
        }

        header('Location: eventlist.php');
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("location:eventlist.php");
}
