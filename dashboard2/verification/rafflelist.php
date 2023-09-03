<?php
$title = "Raffles";
require "header.php";
require "dbconn.php";

// for students table
$sql = "SELECT * FROM raffles";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$admit = $querry->fetchAll(PDO::FETCH_OBJ);
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-8 ml-4 whole-dash">
        <div class="col-12 clas">
            <label for="">Trending Raffles</label>
            <table class="table table-striped table-light table-borderless">
                <thead style="font-weight: 600;">
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <?php foreach ($admit as $samp): ?>
                    <tr>
                        <td>
                            <?php echo $samp->id; ?>
                        </td>
                        <td>
                            <?php echo $samp->hostname; ?>
                        </td>
                        <td>
                            <?php echo $samp->email; ?>
                        </td>
                        <td><a href="update.php?id=<?= $samp->id; ?>" class="text-primary">
                                <i class='bx bxs-edit'></i></a></td>
                        <td>
                            <form action="delevent.php" method="POST">
                                <button type="submit" name="delete" value="<?= $samp->id; ?>" class="text-danger"><i
                                        class='bx bx-trash'></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>

    </div>
</div>