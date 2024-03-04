<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<!-- html for main part starts here -->
<main>
    <div class="container">
        <h1 class="title">Manage Employee</h1>
        <ul class=" emp" style="line-height: none;">
            <li><a href="#">Home</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Employee</a></li>
            <li><a href="<?= base_url('createEmployee') ?>" class="btn btn-sm" style="background: var(--skin-color); color: #fff">Add Employee</a></li>
        </ul>
        <div class="hr"></div>

        <div class="event-table mt-3">
            <div class="color-top" style="left: -22px;"></div>

            <?php if (session()->getFlashdata('status')) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Success!</strong> <span class="text-success">
                        <?= session()->getFlashdata('status')  ?>
                    </span>
                </div>

            <?php endif ?>

            <table class="table-responsive" id="employeeDataTable">
                <thead>
                    <tr>
                        <th>Employee_ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Date of joining</th>
                        <th>Action</th>
                    </tr>
                </thead>
<<<<<<< HEAD
                <tbody>
                    <tr>
                        <td>Emp_0000001</td>
                        <td>Ssewankambo Derick</td>
                        <td>ssewankamboderick@gmail.com</td>

                        <td>IT Dept</td>
                        <td>Software Engineer</td>
                        <td>9/6/2023</td>
                        <td>

                            <div class="dropdown">
                                <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical" style="color: var(--skin-color);"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" class=" dropdown-item update btn-sm btn"><i class="bx bx-edit"></i> Edit</a>
                                    </li>
                                    <li>
                                        <button type="submit" class="dropdown-item btn-sm btn delete">
                                            <i class="bx bx-trash"></i>
                                            Delete
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item btn-sm btn">
                                            <i class="bx bx-show"></i>
                                            View
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
=======
>>>>>>> cyber
            </table>
        </div>

    </div>
</main>
<!-- html for main part ends here -->

<?= $this->endSection() ?>