<?php
session_start();
require "dbconn.php";

if (isset($_POST['login'])) {
    if ($_POST["email"] == "" or $_POST["password"] == "") {
        echo '<p class="error">Email or password cannot be empty!</p>';
    } else {
        $email = trim($_POST['email']);
        $password = strip_tags(trim($_POST['password']));

        // $query = $conn->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
        $query = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
        $query->execute(array($email, $password));
        $result = $query->fetch(PDO::FETCH_OBJ);

        if ($result > 0) {
            $_SESSION["email"] = $email;
            header("Location: dashboard.php");
        }
        echo '<p class="error">email password combination is wrong!</p>';
    }
}
