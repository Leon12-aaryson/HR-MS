<?php require_once "controllerUserData.php";
require "dbconn.php" ?>
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
$title = $fetch_info['name'];

$sql = "SELECT * FROM raffles";

$querry = $conn->prepare($sql);
$retdata = $querry->execute();
$admit = $querry->fetchAll(PDO::FETCH_OBJ);
?>
<?php
include "header.php";
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
                        <td>Host Name</td>
                        <td>Start Date</td>
                        <td>End Date</td>
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
                            <?php echo $samp->startdate; ?>
                        </td>
                        <td>
                            <?php echo $samp->enddate; ?>
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
        <!-- <td><a href="form.php?delete=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td> -->
        <div class="col-12 clas">
            <!-- <label for="">Recent Events</label>
            <table class="table table-striped table-light table-borderless">
                <thead style="font-weight: 600;">
                    <tr>
                        <td>#</td>
                        <td>Event Name</td>
                        <td>Date</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <?php foreach ($parent as $samp): ?>
                    <tr>
                        <td><?php echo $samp->id; ?></td>
                        <td><?php echo $samp->eventname; ?></td>
                        <td><?php echo $samp->eventdate; ?></td>
                        <td><a href="update.php?id=<?= $samp->id; ?>" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td>
                            <form action="delevent.php" method="POST">
                                <button type="submit" name="del_recent" value="<?= $samp->id; ?>" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table> -->
        </div>
    </div>
</div>