<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<!-- html for main part starts here -->
<main>
    <div class="container">
        <h1 class="title">Manage Payroll</h1>
        <ul class=" emp" style="line-height: none;">
            <li><a href="#">Home</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Manage Payroll</a></li>
            <li><a href="<?= base_url('create-payroll'); ?>" class="btn btn-sm" style="background: var(--skin-color); color: #fff">Create Payroll</a></li>
        </ul>
        <div class="hr"></div>

        <div class="top-form mb-4">
            <form action="" method="post" id="managepayrollform">
                <div class="row g-3 mt-1">
                    <div class="col-md-4">
                        <label>Year</label>
                        <select class=" form-select form-select-sm" name="managepayrollyear" id="managepayrollyear">
                            <option value="">Select Year</option>
                            <?php foreach ($results['year'] as $result) : ?>
                                <option value="<?= $result['year'] ?>"><?= $result['year'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Month</label>
                        <select class="form-select form-select-sm" name="managepayrollmonth" id="managepayrollmonth">
                            <option value="">Select Month</option>
                            <?php foreach ($results['month'] as $result) : ?>
                                <option value="<?= $result['month'] ?>"><?= date('F', mktime(0, 0, 0, $result['month'])) ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class=" col-md-4">
                        <input type="button" style="width: 150px; position: relative; top: 24px;" class="btn btn-sm btn-success" value="Find" name="managepayrollfind" id="managepayrollfind">
                    </div>
                </div>
            </form>
        </div>

        <div class="event-table small-table mt-3">
            <div class="color-top" style="left: -22px;"></div>
            <table id="managepayrollDataTable">
                <thead>
                    <tr>
                        <th>Employee Name</th>
                        <th>Amount</th>
                        <th>Year</th>
                        <th>Month</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</main>

<?= $this->endSection() ?>