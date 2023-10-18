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
            <li><a href="#" class="btn btn-sm" style="background: var(--skin-color); color: #fff"><?= $link ?></a></li>
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

<?= $this->endSection() ?>