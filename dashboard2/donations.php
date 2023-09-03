<?php
session_start(); // start session
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$title = "Create Raffle";
include "header.php";
require_once "dbconn.php";
?>

<style>
    .regform form label,
    option {
        margin-left: 1rem;
        margin-bottom: -0.5rem;
    }

    input[type=file]::file-selector-button {
        margin-right: 20px;
        border: none;
        background: #084cdf;
        padding: 5px 16px;
        border-radius: .2rem;
        color: #fff;
        cursor: pointer;
        transition: background .2s ease-in-out;
    }
</style>


<div class="reg">
    <div class="reg1">
        <div class="regform">
            <h5 class="card-title">DONATE NOW</h5>
            <form action="raffledb.php" method="POST" enctype="multipart/form-data">
                <label for="fnamename">First name</label><br>
                <input type="text" placeholder="First Name" name="fname" id="fname"><br>
                <label for="lname">Last Name</label><br>
                <input type="text" placeholder="Last Name" id="lname" name="lname"><br>
                <label for="cause">Donation Cause</label><br>
                <select name="cause" id="cause"><br>
                    <option selected>Select Option</option>
                    <option value="">Poor Children</option>
                    <option value="">Sports</option>
                </select>
                <button type="submit" class="btn-submit" name="submit">SUBMIT</button>
            </form>
        </div>
    </div>
    <!-- <div class="logimg"> -->
    <img src="static/images/logimg.jpg" alt="login image">
    <!-- </div> -->
</div>
<?php
include "footer.php";
?>