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
            <!-- view -->
            <div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content modal-bg ">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">View Leave Request</h1>
                            <button type="button" class="btn-close" style="color: var(--text-color);"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                <ul>
                                    <li style="list-style: none;"><span>Employee's Name</span> : <span>Ssewankambo
                                            Derick</span></li>
                                    <li style="list-style: none;"><span>Leave Type</span> : <span>Medical</span></li>
                                    <li style="list-style: none;"><span>Duration</span> :
                                        <span>9/02/2024-8/03/2024</span></li>
                                    <li style="list-style: none;"><span>Leave Status</span> : <span> Pending</span></li>

                                </ul>
                                <div class="hr"></div>
                                <h5>Comment</h5>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsam quisquam
                                    temporibus voluptatibus, accusantium natus ducimus deserunt reiciendis, numquam
                                    explicabo impedit, ab ut officiis praesentium non commodi ea sapiente rerum.</p>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>


<?= $this->endSection() ?>