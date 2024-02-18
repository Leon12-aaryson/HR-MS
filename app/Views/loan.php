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
            <li><a href="#" class="btn btn-sm" style="background: var(--skin-color); color: #fff" data-bs-toggle="modal" data-bs-target="#loanModal"><?= $link ?></a></li>
        </ul>
        <div class="hr"></div>

        <div class="setup">
            <div class="list mt-3">
                <?php include_once('layouts/setup-menu.php') ?>
            </div>
            <div>
                <div class="event-table mt-3">
                    <table id="loanDataTable">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Loan Type</th>
                                <th>Amount</th>
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
<div class="modal fade" id="loanModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary" id="loanModalLabel">Add loan</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="loanform">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="loantype" class="form-label text-primary"> Loan Type</label>
                        <input type="text" class="form-control" name="loantype" id="loantype">
                    </div>
                    <div class="mb-3">
                        <label for="loanamount" class="form-label text-primary"> Loan Amount</label>
                        <input type="number" class="form-control" name="loanamount" id="loanamount">
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
<div class="modal fade" id="updateloanModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateloanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 pb-1">
                <h2 class="modal-title fs-5 text-primary" id="updateloanModalLabel">Update loan</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="updateloanform">
                <div class="modal-body">
                <div class="mb-3">
                        <label for="updateloantype" class="form-label text-primary"> Loan Type</label>
                        <input type="text" class="form-control" name="updateloantype" id="updateloantype">
                    </div>
                    <div class="mb-3">
                        <label for="updateloanamount" class="form-label text-primary"> Loan Amount</label>
                        <input type="number" class="form-control" name="updateloanamount" id="updateloanamount">
                    </div>
                </div>
                <div class="modal-footer pt-1 pb-1">
                    <input type="hidden" name="loanid" id="loanid">
                    <input type="submit" value="Update" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<script>
    const closedFace = document.querySelector('.closed');
    const openFace = document.querySelector('.open');

    closedFace.addEventListener('click', () => {
        if (openFace.classList.contains('open')) {
            openFace.classList.add('active');
            closedFace.classList.remove('active');
        }
    })

    openFace.addEventListener('click', () => {
        if (closedFace.classList.contains('closed')) {
            closedFace.classList.add('active');
            openFace.classList.remove('active');
        }
    })
</script>