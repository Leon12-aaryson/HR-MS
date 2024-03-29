<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<!-- html for main part starts here -->
<main>
    <div class="container">
        <h1 class="title">Manage Employee</h1>
        <ul class=" emp" style="line-height: none;">
            <li><a href="#">Home</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Employee</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active-list">Update Employee</a></li>

        </ul>
        <div class="hr"></div>
        <form action="<?= base_url('employee/update/'.$employee['employee_id']) ?>" method="post">
            <div class="create-employee mt-3">
                <div class="personal-details">
                    <div class="heading">
                        <div class="color-top"></div>
                        <div class="begin">
                            <h2>Personal Details</h2>
                        </div>
                    </div>
                    <hr>
                    <!-- <form action="#"> -->
                    <div class="row g-3">
                        <div class="col">
                            <label for="Name">Name<span>*</span></label>
                            <input type="text" class="form-control form-control-sm" value="<?= $employee['first_name'] ?>" name="first_name">
                        </div>
                        <div class="col">
                            <label for="Name">last Name<span>*</span></label>
                            <input type="text" class="form-control form-control-sm" value="<?= $employee['last_name'] ?>" name="last_name">
                        </div>
                        <div class="col">
                            <label for="Contact">Contact<span>*</span></label>
                            <input type="text" class="form-control form-control-sm" value="<?= $employee['contact_number'] ?>" name="contact_number">
                        </div>
                    </div>
                    <div class="row g-3 mt-1">
                        <div class="col">
                            <label for="Date of Birth">Date of Birth<span>*</span></label>
                            <input type="date" class="form-control form-control-sm" value="<?= $employee['date_of_birth'] ?>" name="dob">
                        </div>
                        <div class="col">
                            <label for="gender">Gender<span>*</span></label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox1" name="gender" value="M" <?= $employee['gender'] == 'M' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="inlineCheckbox1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" name="gender" value="F" <?= $employee['gender'] == 'F' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="inlineCheckbox2">Female</label>
                            </div>
                        </div>

                    </div>

                    <div class="row g-3 mt-1">
                        <div class="col">
                            <label for="Email">Email<span>*</span></label>
                            <input type="text" class="form-control form-control-sm" value="<?= $employee['email'] ?>" name="email">
                        </div>
                        <div class="col">
                            <label for="Password">Password<span>*</span></label>
                            <input type="password" class="form-control form-control-sm" placeholder="Enter employee new Password" name="password">
                        </div>
                    </div>

                    <!-- <div class="mt-3">
                                <label class="form-label" for="Upload">Upload Employee image<span>*</span></label>
                                <input type="file" class="form-control form-control-sm" id="inputGroupFile01">
                            </div> -->

                    <div class="mb-3 mt-3">
                        <label for="Address">Address</label>
                        <textarea class="form-control form-control-sm" rows="2" name="address">
                        <?= $employee['address'] ?>
                        </textarea>
                    </div>
                    <!-- </form> -->
                </div>

                <div class="personal-details">
                    <div class="heading">
                        <div class="color-top"></div>
                        <div class="begin">
                            <h2>Bank Details</h2>
                        </div>
                    </div>
                    <hr>
                    <!-- <form action="#"> -->
                    <div class="row g-3 ">
                        <div class="col">
                            <label>Account Holder Name<span>*</span></label>
                            <input type="text" class="form-control" value="<?= $employee['account_holder_name'] ?>" name="account_holder_name">
                        </div>
                        <div class="col">
                            <label>Account Number<span>*</span></label>
                            <input type="text" class="form-control" value="<?= $employee['account_number'] ?>" name="account_number">
                        </div>
                    </div>

                    <div class="row g-3 mt-1">
                        <div class="col">
                            <label>Bank Name<span>*</span></label>
                            <input type="text" class="form-control" value="<?= $employee['bank_name'] ?>" name="bank_name">
                        </div>
                        <div class="col">
                            <label>Bank Identifier Code<span>*</span></label>
                            <input type="text" class="form-control" value="<?= $employee['bank_identifier_code'] ?>" name="bank_identifier_code">
                        </div>
                    </div>

                    <div class="row g-3 mt-1 mb-5">
                        <div class="col">
                            <label>Branch Location<span>*</span></label>
                            <input type="text" class="form-control" value="<?= $employee['branch'] ?>" name="bank_branch">
                        </div>
                        <div class="col">
                            <label>Tax Payer Id<span>*</span></label>
                            <input type="text" class="form-control" value="<?= $employee['tax_payer_id'] ?>" name="tax_payer_id">
                        </div>
                    </div>
                    <!-- </form> -->
                </div>

            </div>
            <div class="campany-details">
                <div class="personal-details">
                    <div class="heading">
                        <div class="color-top"></div>
                        <div class="begin">
                            <h2>Campany Details</h2>
                        </div>
                    </div>
                    <hr>

                    <!-- <form action="#"> -->

                    <div class="row g-3 mb-3">
                        <div class="col">
                            <label for="branch">Select Branch<span>*</span></label>
                            <select class=" form-select form-select-sm" name="branch" id="managepayrollyear">
                                <option value="">Select Branch</option>
                                <?php foreach ($results['branch'] as $result) : ?>
                                    <?php if ($result['branch'] == $employee['branch']) : ?>
                                        <option selected value="<?= $result['branch'] ?>"><?= $result['branch'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $result['branch'] ?>"><?= $result['branch'] ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="Department">Select Department<span>*</span></label>
                            <select class="form-select form-select-sm" aria-label="Default select example" name="department" id="department">
                                <?php foreach ($results['department'] as $result) : ?>
                                    <?php if ($result['department_id'] == $employee['department']) : ?>
                                        <option selected value="<?= $result['department_id'] ?>"><?= $result['department_name'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $result['department_id'] ?>"><?= $result['department_name'] ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col">
                            <label for="designation">Select Designation<span>*</span></label>
                            <select class="form-select form-select-sm" aria-label="Default select example" name="designation" id="designation">
                                <option value="">Select Designation</option>
                                <?php foreach ($results['designation'] as $result) : ?>
                                    <?php if ($result['designation'] == $employee['designation']) : ?>
                                        <option selected value="<?= $result['designation'] ?>"><?= $result['designation'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $result['designation'] ?>"><?= $result['designation'] ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="col">
                            <label for="Department">Select Contract type<span>*</span></label>
                            <select class="form-select form-select-sm" aria-label="Default select example" name="contract" id="designation">
                                <option value="">Select Contract type</option>
                                <?php foreach ($results['contract'] as $result) : ?>
                                    <?php if ($result['contract_type'] == $employee['contract_type']) : ?>
                                        <option selected value="<?= $result['contract_type'] ?>"><?= $result['contract_type'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $result['contract_type'] ?>"><?= $result['contract_type'] ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col">
                            <label for="branch">Select Payment type<span>*</span></label>
                            <select class="form-select form-select-sm" aria-label="Default select example" name="payement" id="designation">
                                <option value="">Select Payement method</option>
                                <?php foreach ($results['payement'] as $result) : ?>
                                    <?php if ($result['payement_type'] == $employee['payement_type']) : ?>
                                        <option selected value="<?= $result['payement_type'] ?>"><?= $result['payement_type'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $result['payement_type'] ?>"><?= $result['payement_type'] ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="Department">Select Job type<span>*</span></label>
                            <select class="form-select form-select-sm" aria-label="Default select example" name="job" id="designation">
                                <option value="">Select job type</option>
                                <?php foreach ($results['job'] as $result) : ?>
                                    <?php if ($result['job_type'] == $employee['job_type']) : ?>
                                        <option selected value="<?= $result['job_type'] ?>"><?= $result['job_type'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $result['job_type'] ?>"><?= $result['job_type'] ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="branch">Select position<span>*</span></label>
                            <select class="form-select form-select-sm" aria-label="Default select example" name="position" id="designation">
                                <option value="">Select position</option>
                                <?php foreach ($results['position'] as $result) : ?>
                                    <?php if ($result['position_id'] == $employee['position']) : ?>
                                        <option selected value="<?= $result['position_id'] ?>"><?= $result['position_name'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $result['position_id'] ?>"><?= $result['position_name'] ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="col">
                            <label for="joining-date">Campany date of Joining</label>
                            <input class="form-control form-control-sm" type="date" value="<?= $employee['hire_date'] ?>" name="hiredate">
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
            <div class="submit" style="margin-left: 22px;">
                <button class="btn btn-sm" type="submit" style="background: var(--skin-color); color: #fff">Update</button>
            </div>
        </form>
    </div>
</main>


<!-- html for main part ends here -->

</section>

<?= $this->endSection() ?>