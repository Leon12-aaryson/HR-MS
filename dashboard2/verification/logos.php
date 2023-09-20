<style>
    /* img {
        display: none;
    } */

    table img {
        display: flex;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
</style>
<?php
$title = "Admin Gallery";
require "header.php";

require "dbconn.php";

$sql = "SELECT * FROM logos";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$inventory = $querry->fetchAll(PDO::FETCH_OBJ);

?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-8 ml-4 whole-dash">
        <div class="col-12 clas">
            <label for="">Gallery Table</label>
            <table class="table table-striped table-light table-borderless">
                <thead style="font-weight: 600;">
                    <tr>
                        <td>#</td>
                        <td>Organisation</td>
                        <td>Picture</td>
                        <td>Upload Date</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <?php foreach ($inventory as $samp) : ?>
                    <tr>
                        <td><?php echo $samp->id; ?></td>
                        <td><?php echo $samp->organisation; ?></td>
                        <!-- <td><?php echo $samp->picture; ?></td> -->
                        <td>
                            <img src="<?php echo $samp->picture; ?>" alt="">
                        </td>
                        <td><?php echo $samp->upload_date; ?></td>
                        <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>