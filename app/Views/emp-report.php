
<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<main>
            <div class="container">
                <h1 class="title">View payment report</h1>
                <ul class=" emp" style="line-height: none;">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Salary Report</a></li>
                    
                </ul>
                <div class="hr"></div>
                <div class="personal-details mt-3">
                    <div class="heading">
                        <div class="color-top"></div>
                        <div class="begin">
                            <h2> Salary Report</h2>
                        </div>
                    </div>
                    <hr>
                    <form action="#">

                        <div class="row g-3">
                            
                            <div class="col-md-4">
                                <label>Year</label>
                                <select class=" form-select form-select-sm" aria-label="Default select example">
                                    <option value="May">2024</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Month</label>
                                <select class=" form-select form-select-sm" aria-label="Default select example">
                                    <option value="May">May</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <a href="#" style="width: 150px; position: relative; top: 24px;" class="btn btn-sm btn-success">Show report</a>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- <div class="event-table small-table mt-3">
                    <div class="color-top" style="left: -22px;"></div>
                
                    <table>
                        <thead>
                            <tr>
                                <th>Employee Name</th>
                                <th>Gross Pay</th>
                                <th>Net Pay</th>
                                <th>Total Allowances</th>
                                <th>Total Deductions</th>
                                <th>Status</th>
                                <th>Payslip</th>
                                <th>Month</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ssewankambo Derick</td>
                                <td>Shs 1000</td>
                                <td>Shs 50000</td>
                                <td>Shs 50000</td>
                                <td>Shs 50000</td>
                                <td class="text-success">Paid</td>
                                <td><span style="background-color: var(--skin-color); padding: 5px; border-radius: 3px; color: #fff;">Print Payslip</span></td>
                                <td>May</td>
                                <td>2024</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
            </div> -->
</div>
        </main>

<?= $this->endSection() ?>
