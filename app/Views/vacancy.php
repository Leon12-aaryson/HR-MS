<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<main>
    <div class="container">
        <h1 class="title">Manage Vacancy</h1>
        <ul class=" emp" style="line-height: none;">
            <li><a href="#">Home</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">vacancy</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-sm" style="background: var(--skin-color); color: #fff">Add vacancy</a></li>
        </ul>
        <div class="hr"></div>

        <div class="event-table mt-3">
            <div class="color-top" style="left: -22px;"></div>

            <table>
                <thead>
                    <tr>
                        <th>S.n</th>
                        <th>Position</th>
                        <th>Availabity</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Web Developer</td>
                        <td>10</td>
                        <td class="text-success">Active</td>

                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, eaque...</td>
                        <td>

                            <div class="dropdown">
                                <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical" style="color: var(--skin-color);"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" class=" dropdown-item update btn-sm btn " data-bs-toggle="modal" data-bs-target="#edit"><i class="bx bx-edit"></i> Edit</a>
                                    </li>
                                    <li>
                                        <a href="#" class=" dropdown-item update btn-sm btn" data-bs-toggle="modal" data-bs-target="#view"><i class="bx bx-show"></i> View</a>
                                    </li>
                                    <li>
                                        <button type="submit" class="dropdown-item btn-sm btn delete">
                                            <i class="bx bx-trash"></i>
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Add -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-bg ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Vacancy</h1>
                    <button type="button" class="btn-close" style="color: var(--text-color);" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action>
                    <div class="modal-body">

                        <div class="row mb-2 g-3">
                            <div class="col" style="width: 80%; margin: 0 auto;">
                                <label class="form-label">Position Name</label>
                                <input type="text" class="form-control form-name" placeholder="Enter the position name">
                            </div>
                            <div class="col" style="width: 80%; margin: 0 auto;">
                                <label class="form-label">Salary</label>
                                <input type="text" class="form-control form-name" placeholder="Enter the salary range">
                            </div>
                        </div>
                        <div class="row mb-2 g-3">
                            <div class="col" style="width: 80%; margin: 0 auto;">
                                <label class="form-label">Job Nature</label>
                                <select class="form-select " aria-label=".form-select-lg example">
                                    <option selected>Select Job Nature</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                            <div class="col" style="width: 80%; margin: 0 auto;">
                                <label class="form-label">Vacancy Position</label>
                                <input type="text" class="form-control form-name" placeholder="Enter the number of vacancies">
                            </div>
                            
                        </div>
                        <div class="row mb-2 g-3">
                        <div class="col" style="width: 80%; margin: 0 auto;">
                                <label class="form-label">Publish Date</label>
                                <input type="date" class="form-control form-name" placeholder="Enter the Publish Date">
                            </div>
                            <div class="col" style="width: 80%; margin: 0 auto;">
                                <label class="form-label">Dead line date</label>
                                <input type="date" class="form-control form-name" placeholder="Enter the deadline date">
                            </div>
                        </div>
                        <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2">Enter the job location</textarea>
                            </div>
                        <div class="mb-2 row g-3" style="width: 80%; margin: 0 auto;">
                           <div class="col">
                           <label class="form-label">Enter the Job Responsiblities</label>
                            <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> -->
                            <textarea class="form-control" name="cat_desc" id="cat_desc" rows="3" required>Enter the job Responsiblities.</textarea>
                            <script>
                                CKEDITOR.replace('cat_desc');
                            </script>
                           </div>

                           <div class="col">
                           <label class="form-label">Enter the Job Qualifications</label>
                            <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> -->
                            <textarea class="form-control" name="cat_desc" id="qualify" rows="3" required>Enter the job Qualifications</textarea>
                            <script>
                                CKEDITOR.replace('qualify');
                            </script>
                           </div>
                        </div>
                        <div class="mb-2" style="width: 80%; margin: 0 auto;">
                            <label class="form-label">Enter the Job Descriptions</label>
                            <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> -->
                            <textarea class="form-control" name="desc" id="desc" rows="3" required>Enter the job descriptions.</textarea>
                            <script>
                                CKEDITOR.replace('desc');
                            </script>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm" style="background: var(--skin-color); color: #fff">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content modal-bg ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Vacancy</h1>
                    <button type="button" class="btn-close" style="color: var(--text-color);" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action>
                    <div class="modal-body">

                        <div class="mb-2" style="width: 80%; margin: 0 auto;">
                            <label class="form-label">Position Name</label>
                            <input type="text" class="form-control form-name" placeholder="Enter the position name">
                        </div>
                        <div class="mb-2" style="width: 80%; margin: 0 auto;">
                            <label class="form-label">Availabity</label>
                            <input type="text" class="form-control form-name" placeholder="Enter the position availabity">
                        </div>

                        <div class="mb-2" style="width: 80%; margin: 0 auto;">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <div class="mb-2" style="width: 80%; margin: 0 auto;">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option selected>Change vacancy Status</option>
                                <option value="1">Active</option>
                                <option value="2">Closed</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm" style="background: var(--skin-color); color: #fff">Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- view -->
    <div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content modal-bg ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">View Vacancy</h1>
                    <button type="button" class="btn-close" style="color: var(--text-color);" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-2" style="width: 80%; margin: 0 auto;">
                        <ul>
                            <li style="list-style: none;"><span>Position</span> : <span>Web Development</span></li>
                            <li style="list-style: none;"><span>Availabity</span> : <span>10</span></li>

                        </ul>
                        <div class="hr"></div>
                        <h5>Description</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsam quisquam temporibus
                            voluptatibus, accusantium natus ducimus deserunt reiciendis, numquam explicabo impedit, ab
                            ut officiis praesentium non commodi ea sapiente rerum.</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>


<?= $this->endSection() ?>