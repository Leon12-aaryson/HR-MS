<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<?php $branches = fetch_table('branch_manager_table') ?>

<!-- html for main part starts here -->
<main>
    <div class="container">
        <h1 class="title">Manage Department</h1>
        <ul class=" emp" style="line-height: none;">
            <li><a href="#">Home</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Department</a></li>
            <li><a href="#" class="btn btn-sm" style="background: var(--skin-color); color: #fff" data-bs-toggle="modal" data-bs-target="#departmentModal">Add Department</a></li>
        </ul>
        <div class="hr"></div>

        <div class="setup">
            <div class="list mt-3">
                <?php include_once('layouts/setup-menu.php') ?>
            </div>
            <div>
                <div class="event-table mt-3">
                    <table id="departmentDataTable">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Branch</th>
                                <th>Department</th>
                                <th>Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
<!-- html for main part ends here -->

<!-- Add Department -->
<div class="modal fade" id="departmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="departmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary" id="departmentModalLabel">Add Department</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="departmentform">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="branchname" class="form-label text-primary">Branch</label>
                                <select class="form-select form-select-md" name="branchname" id="branchname">
                                    <option value="">Select Branch</option>
                                    <?php foreach ($branches as $branch) : ?>
                                        <option value="<?=$branch['branch_manager_id']?>"><?=$branch['branch']?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="departmentname" class="form-label text-primary">Department</label>
                                <input type="text" class="form-control" id="departmentname" name="departmentname">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="salary" class="form-label text-primary">Salary</label>
                                <input type="text" class="form-control" id="salary" name="salary">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer pt-1 pb-1">
                    <input type="submit" value="Add" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Department Modal -->
<div class="modal fade" id="updatedepartmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updatedepartmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary">Update Department</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="updatedepartmentform">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="updatebranchname" class="form-label text-primary">Branch</label>
                                <select class="form-select form-select-md" name="updatebranchname" id="updatebranchname">
                                    <option selected>Select Branch</option>
                                    <?php foreach ($branches as $branch) : ?>
                                        <option value="<?=$branch['branch_manager_id']?>"><?=$branch['branch']?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="updatedepartmentname" class="form-label text-primary">Department</label>
                                <input type="text" class="form-control" id="updatedepartmentname" name="updatedepartmentname">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="updatesalary" class="form-label text-primary">updateSalary</label>
                                <input type="number" class="form-control" id="updatesalary" name="updatesalary">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer pt-1 pb-1">
                    <input type="hidden" name="departmentid" id="departmentid">
                    <input type="submit" value="Update" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>