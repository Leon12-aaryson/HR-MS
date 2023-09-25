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
                    <li><a href="#"  class="btn btn-sm" style="background: var(--skin-color); color: #fff"><?= $link ?></a></li>
                </ul> 
                <div class="hr"></div>

               <div class="setup">
                <div class="list mt-3">
                    <ul>
                        <li class="<?= $active ?>">
                            <a  href="#">Branch Manager</a>
                            <i class='bx bxs-chevron-right arrow'></i>
                        </li>
                        <li><a href="<?= base_url('department'); ?>">Department</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="<?= base_url('designation'); ?>">Designation</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="<?= base_url('leave'); ?>">Leave Type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="<?= base_url(); ?>">Allowance type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="<?= base_url('loan'); ?>">Loan options</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="<?= base_url('shift'); ?>">Shift type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="<?= base_url('deduction'); ?>">Deduction option</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="<?= base_url('payement'); ?>">Payment Type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="<?= base_url('contract'); ?>">Contract Type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="<?= base_url('permission'); ?>">Permissions</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="<?= base_url('job'); ?>">Job Type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                    </ul>
                </div>
                <div>
                    <div class="event-table mt-3">                    
                        <table>
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Branch</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Main Branch</td>
                                    <td>
    
                                        <div class="dropdown">
                                            <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical" style="color: var(--skin-color);"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#" class=" dropdown-item update btn-sm btn"><i class="bx bx-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <button type="submit" class="dropdown-item btn-sm btn delete">
                                                        <i class="bx bx-trash"></i>
                                                        Delete
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
               </div>

            </div>
        </main>
        <!-- html for main part ends here -->

<?= $this->endSection() ?>