    <?= $this->extend('layouts/master') ?>
    <?= $this->section('body-contents') ?>

    <main>
        <div class="container">
            <h1 class="title">Update Payroll</h1>
            <ul class=" emp" style="line-height: none;">
                <li><a href="#">Home</a></li>
                <li class="divider">/</li>
                <li><a href="create-payroll.html" class="active">Update Payroll</a></li>
            </ul>
            <div class="hr"></div>

            <form action="<?= base_url('insert_in_to_payroll') ?>" method="post" enctype="multipart/form-data">
                <div class="campany-details">
                <div class="campany-details">
                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Employee Information</h2>
                            </div>
                        </div>
                        <hr>


                        <div class="row g-3">
                            <div class="col-md-6">
                                <label>Desigination</label>

                                <select class="form-select form-select-sm" name="designation">
                                    <option value="0" selected> select the desigination</option>
                                    <?php foreach ($results['designation'] as $result) : ?>
                                        <option value="<?= $result['designation_id'] ?>"><?= $result['designation'] ?></option>
                                    <?php endforeach ?>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <label>Employee Name</label>
                                <select class=" form-select form-select-sm" name="employee">
                                <option value="0" selected> select the Employee name</option>
                                    <option value="63">George Woods</option>
                                </select>
                            </div>
                        </div>

                    </div>

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
                        <div id="dynamicRows" class="allowances">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="branch">Title</label>
                                    <select class="form-select form-select-sm" name="allowance[]" id="deduct">
                                        <option selected>Select Allowances</option>
                                        <option value="2">transport</option>
                                        <option value="4">food</option>
                                        <option value="5">rent</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Amount</label>
                                    <input type="text" class="form-control form-control-sm" id="deduct_amount">
                                </div>
                                <div class="col-md-2 plus">
                                    <a href="#" class="add-row allowances"> <!-- Added "add-row" and "allowances" class -->
                                        <i style="font-size: 25px;" class="bx bx-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Total Deductions</h2>
                            </div>
                        </div>
                        <hr>

                        <div id="dynamicRows" class="deductions"> <!-- Added "deductions" class -->
                            <!-- The first row (fixed) -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label>Title</label>
                                    <select class="form-select form-select-sm" name="deduction[]" id="allow">
                                        <option selected>Select Deductions</option>
                                        <option value="2">NSSF</option>
                                        <option value="4">PAYE</option>
                                        <option value="5">punishment</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Amount</label>
                                    <input type="text" class="form-control form-control-sm" id="allow_amount">
                                </div>
                                <div class="col-md-2 plus">
                                    <a href="#" class="add-row deductions"> <!-- Added "add-row" and "deductions" class -->
                                        <i style="font-size: 25px;" class="bx bx-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>



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

                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label>Gross Pay</label>
                                <input type="text" placeholder="0.00" class="form-control form-control-sm" id="gross_pay">
                            </div>
                            <div class="col">
                                <label>Total Allowances</label>
                                <input type="text" class="form-control form-control-sm" id="total_allowance" name="total_allow">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label>Total Deductions</label>
                                <input type="text" class="form-control form-control-sm" id="total_deduction" name="total_deduct">
                            </div>
                            <div class="col">
                                <label>Net Salary</label>
                                <input type="text" name="net_salary" class="form-control form-control-sm" id="net_salary">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label for="branch">Payment Method</label>
                                <select class=" form-select form-select-sm" name="payment_type">
                                    <option selected>Select Payment Method</option>
                                    <option value="1">Bank</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="Department">Status<span>*</span></label>
                                <select class="form-select form-select-sm" name="status">
                                    <option selected>Select Status</option>
                                    <option value="paid">Paid</option>
                                    <option value="pending">Pending</option>
                                </select>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="submit" style="margin-left: 22px;">
                    <input class="btn btn-sm" type="submit" style="background: var(--skin-color); color: #fff ; width: 200px; " value="save" />
                </div>
            </form>
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
                html_code += '<select class="form-select form-select-sm" name="allowance[]">';
                html_code += '<option selected>Select Allowances</option>';
                html_code += '<option value="2">transport</option>';
                html_code += '<option value="4">food</option>';
                html_code += '<option value="5">rent</option>';
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
                html_code += '<select class="form-select form-select-sm" name="deduction[]">';
                html_code += '<option selected>Select Deductions</option>';
                html_code += '<option value="2">NSSF</option>';
                html_code += '<option value="4">PAYE</option>';
                html_code += '<option value="5">punishment</option>';
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