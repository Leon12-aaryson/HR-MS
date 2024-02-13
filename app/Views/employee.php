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
            <li><a href="<?= base_url('createpage') ?>" class="btn btn-sm" style="background: var(--skin-color); color: #fff">Add Employee</a></li>
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
                        <th>Branch</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Date of joining</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</main>
<!-- html for main part ends here -->

<?= $this->endSection() ?>