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
    .regform form label {
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
            <!-- <h4><span>Have an Organisation? <a href="regorg.php">Register Organisation</a></span></h4> -->
            <h5 class="card-title">REGISTER RAFFLE</h5>
            <form action="raffledb.php" method="POST" enctype="multipart/form-data">
                <label for="hostname">Host name</label><br>
                <input type="text" placeholder="Host Name" name="hostname" id="hostname"><br>
                <label for="reason">Reason</label><br>
                <input type="text" placeholder="Reason" id="reason" name="reason"><br>
                <label for="picture">Picture</label><br>
                <input type="file" placeholder="Photo" id="picture" name="picture"><br>
                <label for="startdate">Start Date</label><br>
                <input type="date" placeholder="Date" id="startdate" name="startdate"><br>
                <label for="enddate">End Date</label><br>
                <input type="date" placeholder="End Date" id="enddate" name="enddate"><br>
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