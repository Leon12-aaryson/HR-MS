<?php require_once "controllerUserData.php"; ?>
<?php

$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($email != false && $password != false) {
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if ($run_Sql) {
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if ($status == "verified") {
            if ($code != 0) {
                header('Location: reset-code.php');
            }
        } else {
            header('Location: user-otp.php');
        }
    }
} else {
    header('Location: login-user.php');
}
?>
</section>
<?php
include "include.php";
?>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <li class="toggle"><a href="#"><i class="bx bx-menu"></i></a></li>
        </button>
        <a class="navbar-brand" href="#">Raffleitapp</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <?php
                // if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
                if ($email == false && $password == false) {
                    // user is not logged in, display the login link
                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="verification/login-user.php">Login</a></li>';
                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="verification/signup-user.php">Register</a></li>';
                } else {
                    // user is already logged in, display the logout link
                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="rafflelist.php">View Raffles</a></li>';
                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="logout-user.php">Logout</a></li>';
                    // <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
                }
                ?>
        </div>
    </div>
</nav>


<!-- profile -->
<?php
include "footer.php";
?>