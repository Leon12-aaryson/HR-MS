<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<main>
    <div class="container">
        <h1 class="title">Manage Attendance</h1>
        <ul class=" emp" style="line-height: none;">
            <li><a href="#">Home</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Daily Attendance</a></li>
        </ul>
        <div class="hr"></div>

        <form method="POST" id="attendancefilterform">
            <div class="row mt-3">
                <div class="col-md-3">
                    <label class="mb-0">Employee by Department</label>
                    <select class="form-select form-select-sm" name="selectdepartment">
                        <option value="">All Departments</option>
                        <?php foreach ($departments as $department) : ?>
                            <option value="<?= $department['department_id'] ?>"><?= $department['department_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="submit" value="Get Employee List" class="btn btn-sm btn-success mt-4">
                </div>
            </div>
        </form>


        <form action="" method="post" id="Updateattendanceform">
            <div class="event-table small-table mt-3">
                <div class="color-top" style="left: -22px;"></div>

                <table id="manageAttendanceDataTable">
                    <thead>
                        <tr>
                            <th>Employee Name</th>
                            <th>Attendance Type</th>
                            <th>Attendance By</th>
                            <th>Date</th>
                            <th>In Time</th>
                            <th>Out Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                </table>

                <button type="button" class="btn btn-sm mt-2" style="background: var(--skin-color); color: #fff">Save</button>
            </div>
        </form>

    </div>
</main>

<?= $this->endSection() ?>