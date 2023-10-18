
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
                    <li><a href="#" class="active-list">Create Employee</a></li>
            
                </ul>
                <div class="hr"></div>

                <div class="create-employee mt-3">
                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Personal Details</h2>
                            </div>
                        </div>
                        <hr>
                        <form action="#">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="Name">Name<span>*</span></label>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Enter employee name">
                                </div>
                                <div class="col">
                                    <label for="Contact">Contact<span>*</span></label>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Enter employee contact">
                                </div>
                            </div>
                            <div class="row g-3 mt-1">
                                <div class="col">
                                    <label for="Date of Birth">Date of Birth<span>*</span></label>
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                                <div class="col">
                                    <label for="Contact">Gender<span>*</span></label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineCheckbox1"
                                            value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineCheckbox2"
                                            value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mt-1">
                                <div class="col">
                                    <label for="Email">Email<span>*</span></label>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Enter employee email">
                                </div>
                                <div class="col">
                                    <label for="Password">Password<span>*</span></label>
                                    <input type="password" class="form-control form-control-sm"
                                        placeholder="Enter employee new Password">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label class="form-label" for="Upload">Upload Employee image<span>*</span></label>
                                <input type="file" class="form-control form-control-sm" id="inputGroupFile01">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="Address">Address</label>
                                <textarea class="form-control form-control-sm" placeholder="Enter Employee Address"
                                    rows="2"></textarea>
                            </div>
                        </form>
                    </div>
                    
                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Bank Details</h2>
                            </div>
                        </div>
                        <hr>
                        <form action="#">
                            <div class="row g-3 ">
                                <div class="col">
                                    <label>Account Holder Name<span>*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Account Holder Name">
                                </div>
                                <div class="col">
                                    <label>Account Number<span>*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Account Number">
                                </div>
                            </div>

                            <div class="row g-3 mt-1">
                                <div class="col">
                                    <label>Bank Name<span>*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Bank Name">
                                </div>
                                <div class="col">
                                    <label>Bank Identifier Code<span>*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Bank Identifier code">
                                </div>
                            </div>

                            <div class="row g-3 mt-1 mb-5">
                                <div class="col">
                                    <label>Branch Location<span>*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Branch Location">
                                </div>
                                <div class="col">
                                    <label>Tax Payer Id<span>*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Tax Payer id">
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
                            <h2>Campany Details</h2>
                        </div>
                    </div>
                    <hr>
                    <form action="#">
                        
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label for="branch">Select Branch<span>*</span></label>
                                <select class=" form-select form-select-sm" aria-label="Default select example">
                                    <option selected>Select Branch</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="Department">Select Department<span>*</span></label>
                                <select class="form-select form-select-sm" aria-label="Default select example">
                                    <option selected>Select Department</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label for="branch">Select Designation<span>*</span></label>
                                <select class=" form-select form-select-sm" aria-label="Default select example">
                                    <option selected>Select Designation</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="Department">Select Contract type<span>*</span></label>
                                <select class="form-select form-select-sm" aria-label="Default select example">
                                    <option selected>Select Contract type</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label for="branch">Select Payment type<span>*</span></label>
                                <select class=" form-select form-select-sm" aria-label="Default select example">
                                    <option selected>Select Payment type</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="Department">Select Job type<span>*</span></label>
                                <select class="form-select form-select-sm" aria-label="Default select example">
                                    <option selected>Select Job type</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="branch">Select Permissions<span>*</span></label>
                                <select class=" form-select form-select-sm" aria-label="Default select example">
                                    <option selected>Select Permissions</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="joining-date" >Campany date of Joining</label>
                                <input class="form-control form-control-sm" type="date">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                <div class="submit" style="margin-left: 22px;">
            <a href="#" class="btn btn-sm" style="background: var(--skin-color); color: #fff">Create</a>
                </div>

            </div>
        </main>
        <!-- html for main part ends here -->

    </section>

<?= $this->endSection() ?>
