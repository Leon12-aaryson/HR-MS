<?php
$title = "Error";
require "header.php";
require "contactdata.php";
$err = "Page error.... All fields are required";
?>
<div class="embod">
    <div class="alert alert-primary" role="alert">
        <?php echo $err ?>
    </div>
</div>

<script src="static/bootstrap/js/jquery.js"></script>
<script src="static/bootstrap/js/bootstrap.min.js"></script>
<script src="static/bootstrap/js/bootstrap.min.js.map"></script>