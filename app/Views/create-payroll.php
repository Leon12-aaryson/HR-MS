<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<main>
            <div class="container">
                <h1 class="title">Create Payroll</h1>
                <ul class=" emp" style="line-height: none;">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="create-payroll.html" class="active">Create Payroll</a></li>
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
                                    <label>Desigination</label>
                                    <select class=" form-select form-select-sm" aria-label="Default select example">
                                        <option value="May">IT</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Employee Name</label>
                                    <select class=" form-select form-select-sm" aria-label="Default select example">
                                        <option value="May">ssewankambo derick</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label >Year</label>
                                  <input type="text" class="form-control form-select-sm form-name"
                                      placeholder="Enter the Year...">
                                </div>
                                <div class="col-md-3">
                                  <label >Month</label>
                                  <input type="text" class="form-control form-select-sm form-name"
                                      placeholder="Enter the Month...">
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
                                        <select class="form-select form-select-sm" name="deductions[]" id="deduct">
                                            <option selected>Select Allowances</option>
                                            <option value="Transport">Transport</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Amount</label>
                                        <input type="text" class="form-control form-control-sm" name="deduction_amount[]" id="deduct_amount">
                                    </div>
                                    <div class="col-md-2 plus">
                                        <a href="#" class="add-row allowances"> <!-- Added "add-row" and "allowances" class -->
                                            <i style="font-size: 25px;" class="bx bx-plus"></i>
                                        </a>
                                    </div>
                                </div>
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
                                        <select class="form-select form-select-sm" name="allowance[]" id="allow">
                                            <option selected>Select Deductions</option>
                                            <option value="NSSF">NSSF</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Amount</label>
                                        <input type="text" class="form-control form-control-sm" name="allowance_amount[]" id="allow_amount">
                                    </div>
                                    <div class="col-md-2 plus">
                                        <a href="#" class="add-row deductions"> <!-- Added "add-row" and "deductions" class -->
                                            <i style="font-size: 25px;" class="bx bx-plus"></i>
                                        </a>
                                    </div>
                                </div>
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
                                    <input type="text" placeholder="0.00" class="form-control form-control-sm" id="gross_pay">
                                </div>
                                <div class="col">
                                    <label>Total Allowances</label>
                                    <input type="text" class="form-control form-control-sm" id="total_allowance" name="total_allow" >
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col">
                                    <label>Total Deductions</label>
                                    <input type="text" class="form-control form-control-sm" id="total_deduction" name="total_deduct">
                                </div>
                                <div class="col">
                                    <label>Net Salary</label>
                                    <input type="text" class="form-control form-control-sm" id="net_salary">
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
                    <a href="#" class="btn btn-sm" style="background: var(--skin-color); color: #fff; width: 200px;">Save</a>
                </div>
            </div>


            </div>
        </main>
        <!-- html for main part ends here -->

    </section>
    <!--Html for the footer-->
    <footer class="footer">
        <!-- <div class="hr"></div> -->
        <div class="last">
            <p>&copy;copyright all rights reserved by Ssewankambo Derick</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/sidebar.js"></script>
    <script src="./assets/js/theme-color.js"></script>
    <script src="./assets/js/notification.js"></script>
    <script src="./assets/js/color-picker.js"></script>
    <script>
        $(document).ready(function() {
            // Function to calculate and update total allowance
            function updateTotalAllowance() {
                var total = 0;
                // Iterate through each amount input field and sum up the values
                $('#dynamicRows.allowances .row.g-3').each(function() {
                    var amount = $(this).find('.col-md-4 input').val();
                    // Convert amount to number and add to total
                    total += parseFloat(amount) || 0;
                });
                // Update the total allowance input field
                $('#total_allowance').val(total.toFixed(2)); // Round to 2 decimal places
            }

            // Add a new row in the "Total Allowances" section
            $(document).on('click', '.add-row.allowances', function(event) {
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
                updateTotalAllowance(); // Update total after adding a row
            });

            // Remove a row in the "Total Allowances" section
            $(document).on('click', '.remove-row.allowances', function(event) {
                event.preventDefault(); // Prevent the default link behavior
                if ($('#dynamicRows.allowances > .row.g-3').length > 1) {
                    $(this).closest('.row.g-3').remove();
                    updateTotalAllowance(); // Update total after removing a row
                }
            });

            // Listen for changes in amount input fields and update total
            $(document).on('input', '#dynamicRows.allowances .col-md-4 input', updateTotalAllowance);

            // Initial calculation of total allowance
            updateTotalAllowance();
        });


        $(document).ready(function() {
    // Function to calculate and update total deductions
    function updateTotalDeduction() {
        var total = 0;
        // Iterate through each amount input field and sum up the values
        $('#dynamicRows.deductions .row.g-3').each(function() {
            var amount = $(this).find('.col-md-4 input').val();
            // Convert amount to number and add to total
            total += parseFloat(amount) || 0;
        });
        // Update the total deduction input field
        $('#total_deduction').val(total.toFixed(2)); // Round to 2 decimal places
    }

    // Add a new row in the "Total Deductions" section
    $(document).on('click', '.add-row.deductions', function(event) {
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
        updateTotalDeduction(); // Update total after adding a row
    });

    // Remove a row in the "Total Deductions" section
    $(document).on('click', '.remove-row.deductions', function(event) {
        event.preventDefault(); // Prevent the default link behavior
        if ($('#dynamicRows.deductions > .row.g-3').length > 1) {
            $(this).closest('.row.g-3').remove();
            updateTotalDeduction(); // Update total after removing a row
        }
    });

    // Listen for changes in amount input fields and update total
    $(document).on('input', '#dynamicRows.deductions .col-md-4 input', updateTotalDeduction);

    // Initial calculation of total deduction
    updateTotalDeduction();
});

$(document).ready(function() {
    // Function to calculate net salary
    function calculateNetSalary() {
        // Get the values of gross pay, total deductions, and total allowances
        var grossPay = parseFloat($('#gross_pay').val()) || 0;
        var totalDeductions = parseFloat($('#total_deduction').val()) || 0;
        var totalAllowances = parseFloat($('#total_allowance').val()) || 0;

        // Calculate net salary by subtracting deductions and adding allowances to gross pay
        var netSalary = grossPay - totalDeductions + totalAllowances;

        // Update the net salary input field
        $('#net_salary').val(netSalary.toFixed(2)); // Round to 2 decimal places
    }

    // Listen for changes in gross pay, total deductions, and total allowances
    $(document).on('input', '#gross_pay, #total_deduction, #total_allowance', calculateNetSalary);

    // Initial calculation of net salary
    calculateNetSalary();
});

    </script>

<?= $this->endSection() ?>