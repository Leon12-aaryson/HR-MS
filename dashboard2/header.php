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
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="works.php">How it Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                </li>
                <?php
                if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                    // user is not logged in, display the login link
                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="verification/login-user.php">Login</a></li>';
                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="verification/signup-user.php">Register</a></li>';
                } else {
                    // user is already logged in, display the logout link
                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="raffles.php">View Raffles</a></li>';
                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="../raffleIt/login-system/index?logout">Logout</a></li>';
                }
                ?>
        </div>
    </div>
</nav>


<!-- profile -->