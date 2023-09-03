<?php
$title = "Student admission";
require "header.php";

require "dbconn.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Add Inventory</h4>
        </div>
        <div class="row p-2">
            <div class="card regcard col-md-6 p-2">
                <div class="card-body">
                    <!-- <h5 class="card-title">Admission Form-A</h5> -->
                    <form action="dbgallery.php" class="form-group" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select id="category" class="form-control" name="category">
                                <option>Select</option>
                                <option>Sports</option>
                                <option>Wellfare</option>
                                <option>Academics</option>
                                <option>Functions</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <!-- <input type="image" src="" alt="" class="form-control-file" name="picture"> -->
                            <input id="picture" class="form-control-file" type="file" id="picture" name="picture" placeholder="Upload file">
                        </div>
                        <div class="form-group">
                            <label for="upload_date">Upload Date</label>
                            <input id="upload_date" class="form-control" type="date" id="upload_date" name="upload_date">
                        </div>
                        <button type="submit" class="form-group btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>