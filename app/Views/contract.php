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
            <li><a href="#" class="btn btn-sm" style="background: var(--skin-color); color: #fff" data-bs-toggle="modal" data-bs-target="#contractModal"><?= $link ?></a></li>
        </ul>
        <div class="hr"></div>

        <div class="setup">
            <div class="list mt-3">
                <?php include_once('layouts/setup-menu.php') ?>
            </div>
            <div>
                <div class="event-table mt-3">
                    <table id="contractDataTable">
                        <thead>
                            <tr>
                                <th>s.n</th>
                                <th>Contract Type</th>
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
<div class="modal fade" id="contractModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="contractModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary">Add Contract type</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="contractform">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="contracttype" class="form-label text-primary">Contract Type</label>
                        <input type="text" class="form-control" id="contracttype" name="contracttype">
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
<div class="modal fade" id="updatecontractModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updatecontractModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary">Update Contract type</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="updatecontractform">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="updatecontracttype" class="form-label text-primary">Contract Type</label>
                        <input type="text" class="form-control" id="updatecontracttype" name="updatecontracttype">
                    </div>
                </div>
                <div class="modal-footer pt-1 pb-1">
                    <input type="hidden" name="contractid" id="contractid">
                    <input type="submit" value="Update" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>