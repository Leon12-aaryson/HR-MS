<?php
$title = "Update Events";
require "header.php";
require "dbconn.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-8 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Update Events</h4>
        </div>
        <div class="row p-2">
            <div class="card regcard col-md-5 p-2">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Events</h5>
                    <?php
                    if (isset($_GET['id'])) {
                        $event_id = $_GET['id'];

                        $querry = "SELECT * FROM events WHERE id=:id";
                        $statement = $conn->prepare($querry);
                        $data = [
                            ':id' => $event_id
                        ];
                        $statement->execute($data);
                        $result = $statement->fetch(PDO::FETCH_OBJ);
                    }
                    ?>
                    <form action="delevent.php" class="form-group" method="POST">
                        <input type="hidden" name="id" value="<?=$result->id;?>">
                        <div class="form-group">
                            <label for="eventname">Event Name</label>
                            <input id="eventname" class="form-control" type="text" value="<?=$result->eventname;?>" name="eventname" placeholder="Enter Event name">
                        </div>
                        <div class="form-group">
                            <label for="eventdate">Event Date</label>
                            <input type="date" name="eventdate" id="eventdate" class="form-control" value="<?=$result->eventdate;?>" placeholder="Start date">
                        </div>
                        <div class="form-group">
                            <label for="enddate">End Date</label>
                            <input type="date" name="enddate" id="enddate" class="form-control" value="<?=$result->enddate;?>" placeholder="End date">
                        </div>
                        <button type="submit" class="btn btn-primary" name="update_event">UPDATE EVENT</button>
                    </form>
                </div>
            </div>
            <div class="card regcard col-md-6 p-2">
                <div class="card-body">
                    <h5 class="card-title">Recent events</h5>
                    <form action="dbrecent.php" class="form-group" method="POST">
                        <div class="form-group">
                            <label for="eventname">Event Name</label>
                            <input id="eventname" class="form-control" type="text" name="eventname">
                        </div>
                        <div class="form-group">
                            <label for="eventdate">Event Date</label>
                            <input type="date" name="eventdate" id="eventdate" class="form-control" placeholder="Event date">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>