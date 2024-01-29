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
            <li><a href="#" class="btn btn-sm" style="background: var(--skin-color); color: #fff" data-bs-toggle="modal" data-bs-target="#addbranchmodal"><?= $link ?></a></li>
        </ul>
        <div class="hr"></div>

        <div class="setup">
            <div class="list mt-3">
                <?php include_once('layouts/setup-menu.php') ?>
            </div>
            <div>
                <div class="event-table mt-3">
                    <table id="branchmanagerDataTable">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Branch</th>
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

<!-- Add branch Modal -->
<div class="modal fade" id="addbranchmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addbranchmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary" id="addbranchmodalLabel">Add Branch</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" id="branchmasterForm">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="branchname" class="form-label text-primary">Branch</label>
                        <input type="text" class="form-control" name="branchname" id="branchname">
                    </div>
                </div>
                <div class="modal-footer pt-1 pb-1">
                    <input type="submit" value="Add" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Branch Modal -->
<div class="modal fade" id="updatebranchmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updatebranchmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary" id="updatebranchmodalLabel">Update Branch</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" id="branchmasterFormUpdate">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="updatebranchname" class="form-label text-primary">Branch</label>
                        <input type="text" class="form-control" name="updatebranchname" id="updatebranchname">
                    </div>
                </div>
                <div class="modal-footer pt-1 pb-1">
                    <input type="hidden" id="branchid" name="branchid">
                    <input type="submit" value="Update" id="updatebranchmanager" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

