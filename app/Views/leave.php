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
            <li><a href="#" class="btn btn-sm" style="background: var(--skin-color); color: #fff" data-bs-toggle="modal" data-bs-target="#leaveModal"><?= $link ?></a></li>
        </ul>
        <div class="hr"></div>

        <div class="setup">
            <div class="list mt-3">
                <?php include_once('layouts/setup-menu.php') ?>
            </div>
            <div>
                <div class="event-table mt-3">
                    <table id="leaveDataTable">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Leave</th>
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
<!-- Modal -->
<div class="modal fade" id="leaveModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="leaveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary" id="leaveModalLabel">Add leave type</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="leaveform">
                <div class="modal-body">
                    <div class="mb-3">pla
                        <label for="leavetype" class="form-label text-primary">Leave</label>
                        <input type="text" class="form-control" id="leavetype" name="leavetype">
                    </div>
                </div>
                <div class="modal-footer pt-1 pb-1">
                    <input type="submit" value="Add" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Leave -->
<div class="modal fade" id="updateleaveModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateleaveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary" id="updateleaveModalLabel">Update leave type</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="updateleaveform">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="updateleavetype" class="form-label text-primary">Leave</label>
                        <input type="text" class="form-control" id="updateleavetype" name="updateleavetype">
                    </div>
                </div>
                <div class="modal-footer pt-1 pb-1">
                    <input type="hidden" name="leaveid" id="leaveid">
                    <input type="submit" value="Update" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>