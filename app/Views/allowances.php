<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<!-- html for main part starts here -->
<main>
    <div class="container">
        <h1 class="title"><?= $page_title ?></h1>
        <ul class=" emp" style="line-height: none;">
            <li><a href="#">Home</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active"><?= $head ?></a></li>
            <li><a href="#" class="btn btn-sm" style="background: var(--skin-color); color: #fff" data-bs-toggle="modal" data-bs-target="#allowanceModal"><?= $link ?></a></li>
        </ul>
        <div class="hr"></div>

        <div class="setup">
            <div class="list mt-3">
                <?php include_once('layouts/setup-menu.php') ?>
            </div>
            <div>
                <div class="event-table mt-3">
                    <table id="allowanceDataTable">
                        <thead>
                            <tr>
                                <th>s.n</th>
                                <th>Allowance Type</th>
                                <th>Allowance Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="allowanceModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="allowanceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary">Add Allowance</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="allowanceform">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="allowancename" class="form-label text-primary">Job Type</label>
                        <input type="text" class="form-control" id="allowancename" name="allowancename">
                    </div>
                    <div class="mb-3">
                        <label for="allowanceamount" class="form-label text-primary">Job Type</label>
                        <input type="number" class="form-control" id="allowanceamount" name="allowanceamount">
                    </div>
                </div>
                <div class="modal-footer pt-1 pb-1">
                    <input type="submit" value="Add" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update -->
<div class="modal fade" id="updateallowanceModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateallowanceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary">Update Allowance</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="updateallowanceform">
                <div class="modal-body">
                <div class="mb-3">
                        <label for="updateallowancename" class="form-label text-primary">Job Type</label>
                        <input type="text" class="form-control" id="updateallowancename" name="updateallowancename">
                    </div>
                    <div class="mb-3">
                        <label for="updateallowanceamount" class="form-label text-primary">Job Type</label>
                        <input type="number" class="form-control" id="updateallowanceamount" name="updateallowanceamount">
                    </div>
                </div>
                <div class="modal-footer pt-1 pb-1">
                    <input type="hidden" name="allowanceid" id="allowanceid">
                    <input type="submit" value="Update" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>