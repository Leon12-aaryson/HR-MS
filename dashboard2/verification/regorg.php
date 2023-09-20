<?php

$title = "Register";
include "include.php";
include "../header.php";
?>

<div class="reg">
    <div class="reg1">
        <div class="regform">
            <h5 class="card-title">REGISTER ORGANISATION</h5>
            <h4><span>Don't Have and account ? <a href="register.php">Register Here</a></span></h4>
            <form action="orgdb.php" method="post">
                <input type="text" placeholder="Organistaion/Team" name="cname"><br>
                <input type="text" placeholder="Logo" name="logo"><br>
                <input type="text" placeholder="website" name="website"><br>
                <input type="text" placeholder="Description" name="description"><br>
                <input type="text" placeholder="email" name="email"><br>
                <input type="text" placeholder="Address" name="address"><br>
                <button type="submit" class="btn-submit" name="submit">SUBMIT</button>
            </form>
            <h5><span>Already have an account? <a href="login.php">Login</a></span></h5>
        </div>
    </div>
    <!-- <div class="logimg"> -->
    <img src="static/images/logimg.jpg" alt="login image">
    <!-- </div> -->
</div>
<?php
include "footer.php";
?>