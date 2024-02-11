<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<main>
            <div class="container">
                <h1 class="title">View Leave report</h1>
                <ul class=" emp" style="line-height: none;">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Leave Report</a></li>

                </ul>
                <div class="hr"></div>
                <div class="personal-details mt-3">
                    <div class="heading">
                        <div class="color-top"></div>
                        <div class="begin">
                            <h2>Leave Report</h2>
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

                <!-- <div class="event-table mt-3">
                    <div class="color-top" style="left: -22px;"></div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Employee's Name</th>
                                <th>Leave Type</th>
                                <th>Duration</th>
                                <th>Leave Status</th>
                                <th>Comment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ssewankambo Derick</td>
                                <td>Medical</td>
                                <td>9/02/2024-8/03/2024</td>
                                <td class="text-warning">Pending</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, nesciunt!</td>
                                <td>

                                    <div class="dropdown">
                                        <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical" style="color: var(--skin-color);"></i>
                                        </a>
                                        <ul class="dropdown-menu">

                                            <li>
                                                <a href="#" class="dropdown-item btn-sm btn" data-bs-toggle="modal"
                                                    data-bs-target="#view"> <i class="bx bx-show"></i>View</a>

                                            </li>


                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
            </div>
            
        </main>
<?= $this->endSection() ?>