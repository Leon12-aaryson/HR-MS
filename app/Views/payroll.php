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
            <li><a href="<?= base_url('create-payroll'); ?>"  class="btn btn-sm" style="background: var(--skin-color); color: #fff">Create Payroll</a></li>
        </ul> 
        <div class="hr"></div>

        <div class="top-form mb-4">
            <form action="#">
              <div class="row g-3 mt-1">
                <div class="col-md-4">
                    <label>Year</label>
                    <select class=" form-select form-select-sm" aria-label="Default select example">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Month</label>
                    <select class=" form-select form-select-sm" aria-label="Default select example">
                        <option value="May">May</option>
                    </select>
                </div>
                  <div class=" col-md-4">
                   <a href="#" style="width: 150px; position: relative; top: 24px;" class="btn btn-sm btn-success">Find</a>
                  </div>
              </div>
            </form>
        </div>

        <div class="event-table small-table mt-3">
            <div class="color-top" style="left: -22px;"></div>
        
            <table>
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
                <tbody>
                    <tr>
                        <td>Ssewankambo Derick</td>
                        <td>Shs 20,000</td>
                        <td>2023</td>
                        <td>May</td>
                        <td>Paid</td>
                        <td>

                            <div class="dropdown">
                                <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical" style="color: var(--skin-color);"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button type="submit" class="dropdown-item btn-sm btn delete">
                                            <i class="bx bx-trash"></i>
                                            Delete
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item btn-sm btn" >
                                            <i class='bx bx-download'></i>
                                        Download Payslip
                                    </button>
                                        </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</main>

<?= $this->endSection() ?>