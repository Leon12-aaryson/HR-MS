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

                <div class="top-form mb-4">

                </div>

                <div class="campany-details">
                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Employee Information</h2>
                            </div>
                        </div>
                        <hr>

                        <form action="#">
                            <div class="row g-3 ">
                                <div class="col-md-4">
                                    <label>Employee by Department</label>
                                    <select class=" form-select form-select-sm" aria-label="Default select example">
                                        <option value="2023">All Employees</option>
                                        <option value="2024">IT Department</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Date</label>
                                    <input type="date" class="form-control form-control-sm ">
                                </div>
                                <div class=" col-md-4">
                                    <a href="#" style="width: 150px; position: relative; top: 24px;"
                                        class="btn btn-sm btn-success">Get Employee List</a>
                                </div>
                            </div>
                        </form>
                    </div>
 
                    <!-- <div class="event-table small-table mt-3">
                        <div class="color-top" style="left: -22px;"></div>

                        <table class="table">
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
                            <tbody>
                                <tr>
                                    <td>Ssewankambo Derick</td>
                                    <td>Manual</td>
                                    <td>Administrator</td>
                                    <td>12/06/2023</td>
                                    <td>
                                        <div class="col-md-10">
                                            <input type="time" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-10">
                                            <input type="time" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12">
                                            <select id="inputState" class="form-select form-select-sm">
                                                <option>Absent</option>
                                                <option>Present</option>
                                                <option>Leave</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-sm mt-2"
                            style="background: var(--skin-color); color: #fff">Save</button>
                    </div>  -->

                </div>
        </main>
<?= $this->endSection() ?>