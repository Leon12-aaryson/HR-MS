<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<main>
            <div class="container">
                <h1 class="title">Manage Application</h1>
                <ul class=" emp" style="line-height: none;">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Application</a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-sm"
                            style="background: var(--skin-color); color: #fff">New
                            Applicant</a></li>
                </ul>
                <div class="hr"></div>

                <div class="setup">
                    <div class="list mt-3">
                        <ul>
                            <li class="active-list">
                                <a  href="#">All</a>
                                <i class='bx bxs-chevron-right arrow'></i>
                            </li>
                            <li><a href="#">New</a>
                            <i class='bx bxs-chevron-right arrow'></i></li>
                            <li><a href="#">For initial interview</a>
                            <i class='bx bxs-chevron-right arrow'></i></li>
                            <li><a href="#">Passed</a>
                            <i class='bx bxs-chevron-right arrow'></i></li>
                            <li><a href="#">Failed</a>
                            <i class='bx bxs-chevron-right arrow'></i></li>
                            <li><a href="#">Intership</a>
                            <i class='bx bxs-chevron-right arrow'></i></li>
                            <li><a href="#">Job Offer</a>
                            <i class='bx bxs-chevron-right arrow'></i></li>
                            <li><a href="#">Hired</a>
                            <i class='bx bxs-chevron-right arrow'></i></li>
                            <li><a href="#">Withdraw Application</a>
                            <i class='bx bxs-chevron-right arrow'></i></li>
                        </ul>
                    </div>
                    <div>
                        <div class="event-table mt-3">  
                            <div class="heading">
                                <div class="color-top"></div>
                                <div class="begin row mb-2 g-3">
                                    <div class="col" >
                                       
                                        <select class="form-select">
                                            <option selected>Filter any position</option>
                                            <option value="1">Software
                                                Engineering</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                       
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn "
                                        style="background: var(--skin-color); color: #fff">Find</button>
                                    </div>
                                </div>
                            </div>
                            <hr>                  
                            <table>
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>Postion</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ssewankambo Derick</td>
                                        <td>Software Engineering</td>
                                        <td>New</td>
                                        <td>
        
                                            <div class="dropdown">
                                                <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical" style="color: var(--skin-color);"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#Edit" class="btn btn-sm"><i class="bx bx-edit"></i> Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class=" dropdown-item update btn-sm btn"  data-bs-toggle="modal" data-bs-target="#view"><i class="bx bx-show"></i> view</a>
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
                </div>

            </div>

            <!-- Add -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content modal-bg ">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add an Applicant</h1>
                            <button type="button" class="btn-close" style="color: var(--text-color);"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action>
                            <div class="modal-body">

                                <div class="row mb-2 g-3" style="width: 80%; margin: 0 auto;">
                                   <div class="col">
                                    <label class="form-label">Position</label>
                                    <select class="form-select">
                                        <option selected>Select the
                                            Application Position</option>
                                        <option value="1">Software
                                            Engineering</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                   </div>
                                   <div class="col">
                                    <label class="form-label">Applicant
                                        Name</label>
                                    <input type="text" class="form-control form-name" placeholder="Enter the applicant name">
                                </div>
                                </div>
                                <div class="row mb-2 g-3" style="width: 80%; margin: 0 auto;">
                                    <div class="col">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control form-name">
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control form-name" placeholder="Enter the applicant Email">
                                    </div>
                                </div>
                                <div class="row mb-2 g-3" style="width: 80%; margin: 0 auto;">
                                    <div class="col">
                                        <label class="form-label">Contact</label>
                                        <input type="text" class="form-control form-name" placeholder="Enter Applicant Contact">
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select form-name">
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>

                                <div class="row mb-2 g-3" style="width: 80%; margin: 0 auto;">
                                    <div class="col">
                                        <label class="form-label">Applicant
                                            Cover Letter</label>
                                        <input type="file" class="form-control " >
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Applicant Resume</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm"
                                    style="background: var(--skin-color); color: #fff">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit -->
            <div class="modal fade" id="Edit" tabindex="-1" aria-labelledby="Edit"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content modal-bg ">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add an Applicant</h1>
                        <button type="button" class="btn-close" style="color: var(--text-color);"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action>
                        <div class="modal-body">

                            <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                <label class="form-label">Position</label>
                                <select class="form-select">
                                    <option selected>Select the
                                        Application Position</option>
                                    <option value="1">Software
                                        Engineering</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="row mb-2 g-3" style="width: 80%; margin: 0 auto;">
                                <div class="col">
                                    <label class="form-label">Applicant
                                        Name</label>
                                    <input type="text" class="form-control form-name" placeholder="Enter the applicant name">
                                </div>
                                <div class="col">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control form-name" placeholder="Enter the applicant Email">
                                </div>
                            </div>
                            <div class="row mb-2 g-3" style="width: 80%; margin: 0 auto;">
                                <div class="col">
                                    <label class="form-label">Contact</label>
                                    <input type="text" class="form-control form-name" placeholder="Enter Applicant Contact">
                                </div>
                                <div class="col">
                                    <label class="form-label">Gender</label>
                                    <select class="form-select form-name">
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>

                            <div class="row mb-2 g-3" style="width: 80%; margin: 0 auto;">
                                <div class="col">
                                    <label class="form-label">Applicant
                                        Cover Letter</label>
                                    <input type="file" class="form-control " >
                                </div>
                                <div class="col">
                                    <label class="form-label">Applicant Resume</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option selected>Change the
                                        Applicant Status</option>
                                    <option value="1">New</option>
                                    <option value="2">For initial interview</option>
                                    <option value="3">Passed</option>
                                    <option value="3">Failed</option>
                                    <option value="3">Internship</option>
                                    <option value="3">Hired</option>
                                    <option value="3">Withdraw Application</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-sm"
                                style="background: var(--skin-color); color: #fff">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
       </div>


<?= $this->endSection() ?>