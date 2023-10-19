<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<main>
            <div class="container">
                <h1 class="title">Create Payroll</h1>
                <ul class=" emp" style="line-height: none;">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Create Payroll</a></li>
                </ul>
                <div class="hr"></div>
                <div class="campany-details">
                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Employee Information</h2>
                            </div>
                        </div>
                        <hr>
                        <form action="#">

                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label>Department</label>
                                    <select class=" form-select form-select-sm" aria-label="Default select example">
                                        <option value="May">IT</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Employee Name</label>
                                    <select class=" form-select form-select-sm" aria-label="Default select example">
                                        <option value="May">May</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label>Year</label>
                                    <select class=" form-select form-select-sm" aria-label="Default select example">
                                        <option value="May">2024</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label>Month</label>
                                    <select class=" form-select form-select-sm" aria-label="Default select example">
                                        <option value="May">May</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <a href="#" style="width: 150px; position: relative; top: 24px;" class="btn btn-sm btn-success">Find</a>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>

                <div class="create-employee mt-1">
                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Total Allowances</h2>
                            </div>
                        </div>
                        <hr>
                        <form action="#">
                            <div id="dynamicRows" class="allowances"> <!-- Added "allowances" class -->
                                <!-- The first row (fixed) -->
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="branch">Title</label>
                                        <select class="form-select form-select-sm" aria-label="Default select example">
                                            <option selected>Select Allowances</option>
                                            <option value="2000">Shs 2000</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Amount</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-md-2 plus">
                                        <a href="#" class="add-row allowances"> <!-- Added "add-row" and "allowances" class -->
                                            <i style="font-size: 25px;" class="bx bx-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mt-2">
                                <a href="#" style="color: var(--white); background: var(--skin-color);" class="btn btn-sm">Add</a>
                            </div>
                        </form>
                    </div>
                
                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Total Deductions</h2>
                            </div>
                        </div>
                        <hr>
                        <form action="#">
                            <div id="dynamicRows" class="deductions"> <!-- Added "deductions" class -->
                                <!-- The first row (fixed) -->
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for "branch">Title</label>
                                        <select class="form-select form-select-sm" aria-label="Default select example">
                                            <option selected>Select Deductions</option>
                                            <option value="2000">Shs 2000</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Amount</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-md-2 plus">
                                        <a href="#" class="add-row deductions"> <!-- Added "add-row" and "deductions" class -->
                                            <i style="font-size: 25px;" class="bx bx-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mt-2">
                                <a href="#" style="color: var(--white); background: var(--skin-color);" class="btn btn-sm">Add</a>
                            </div>
                        </form>
                    </div>
                </div>
        
                <div class="campany-details">
                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Summary</h2>
                            </div>
                        </div>
                        <hr>
                        <form action="#">
                            <div class="row g-3 mb-3">
                                <div class="col">
                                    <label>Gross Pay</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Shs 3000">
                                </div>
                                <div class="col">
                                    <label>Total Allowances</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Shs 20,000">
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col">
                                    <label>Total Deductions</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Shs 3000">
                                </div>
                                <div class="col">
                                    <label>Net Salary</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Shs 20,000">
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col">
                                    <label for="branch">Payment Method</label>
                                    <select class=" form-select form-select-sm" aria-label="Default select example">
                                        <option selected>Select Payment Method</option>
                                        <option value="1">Bank</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="Department">Status<span>*</span></label>
                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                        <option selected>Select Status</option>
                                        <option value="1">Paid</option>
                                        <option value="2">Pending</option>
                                    </select>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
                <div class="submit" style="margin-left: 22px;">
                    <a href="#" class="btn btn-sm" style="background: var(--skin-color); color: #fff; width: 200px;">Create Payslip</a>
                </div>
            </div>
            </div>
        </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/sidebar.js"></script>
    <script src="./assets/js/theme-color.js"></script>
    <script src="./assets/js/notification.js"></script>
    <script src="./assets/js/color-picker.js"></script>
 <script>
    $(document).ready(function () {
        // Add a new row in the "Total Allowances" section
        $(document).on('click', '.add-row.allowances', function (event) {
            event.preventDefault(); // Prevent the default link behavior
            var html_code = '<div class="row g-3">';
            html_code += '<div class="col-md-6">';
            html_code += '<label for="branch">Title</label>';
            html_code += '<select class="form-select form-select-sm" aria-label="Default select example">';
            html_code += '<option selected>Select Allowances</option>';
            html_code += '<option value="2000">Shs 2000</option>';
            html_code += '</select>';
            html_code += '</div>';
            html_code += '<div class="col-md-4">';
            html_code += '<label>Amount</label>';
            html_code += '<input type="text" class="form-control form-control-sm">';
            html_code += '</div>';
            html_code += '<div class="col-md-2 plus">';
            html_code += '<a href="#" class="remove-row allowances"><i style="font-size: 25px;" class="bx bx-trash"></i></a>';
            html_code += '</div>';
            html_code += '</div>';
    
            $('#dynamicRows.allowances').append(html_code);
        });
    
        // Remove a row in the "Total Allowances" section
        $(document).on('click', '.remove-row.allowances', function (event) {
            event.preventDefault(); // Prevent the default link behavior
            if ($('#dynamicRows.allowances > .row.g-3').length > 1) {
                $(this).closest('.row.g-3').remove();
            }
        });
    
        // Add a new row in the "Total Deductions" section
        $(document).on('click', '.add-row.deductions', function (event) {
            event.preventDefault(); // Prevent the default link behavior
            var html_code = '<div class="row g-3">';
            html_code += '<div class="col-md-6">';
            html_code += '<label for="branch">Title</label>';
            html_code += '<select class="form-select form-select-sm" aria-label="Default select example">';
            html_code += '<option selected>Select Deductions</option>';
            html_code += '<option value="2000">Shs 2000</option>';
            html_code += '</select>';
            html_code += '</div>';
            html_code += '<div class="col-md-4">';
            html_code += '<label>Amount</label>';
            html_code += '<input type="text" class="form-control form-control-sm">';
            html_code += '</div>';
            html_code += '<div class="col-md-2 plus">';
            html_code += '<a href="#" class="remove-row deductions"><i style="font-size: 25px;" class="bx bx-trash"></i></a>';
            html_code += '</div>';
            html_code += '</div>';
    
            $('#dynamicRows.deductions').append(html_code);
        });
    
        // Remove a row in the "Total Deductions" section
        $(document).on('click', '.remove-row.deductions', function (event) {
            event.preventDefault(); // Prevent the default link behavior
            if ($('#dynamicRows.deductions > .row.g-3').length > 1) {
                $(this).closest('.row.g-3').remove();
            }
        });
    });
</script>  

<?= $this->endSection() ?>