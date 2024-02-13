
<?= $this->extend('layouts/emp-master') ?>
<?= $this->section('body-contents') ?>


<main>

            <div class="container">
                <h1 class="title">View your Attendance Report</h1>
                <ul class=" emp" style="line-height: none;">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Attendance</a></li>

                </ul>
                <div class="hr"></div>
                <div class="personal-details mt-3">
                    <div class="heading">
                        <div class="color-top"></div>
                        <div class="begin">
                            <h2>My Attendance Report</h2>
                        </div>
                    </div>
                    <hr>
                    <form action="#">

                        <div class="row g-3">

                            <div class="col-md-4">
                                <label>Year</label>
                                <select class=" form-select form-select-sm" aria-label="Default select example">
                                    <option value="May">2024</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Month</label>
                                <select class=" form-select form-select-sm" aria-label="Default select example">
                                    <option value="May">May</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <a href="#" style="width: 150px; position: relative; top: 24px;"
                                    class="btn btn-sm btn-success">Show report</a>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- <div class="event-table small-table mt-3">
                        <div class="color-top" style="left: -22px;"></div>
                    
                        <table>
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
                                      </div></td>
                                    <td>
                                        <div class="col-md-10">
                                            <input type="time" class="form-control form-control-sm" >
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
                       </div>
                </div> -->
</div>
        </main>


        <?= $this->endSection() ?>