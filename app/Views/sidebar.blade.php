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
                    <li><a href="#"  class="btn btn-sm" style="background: var(--skin-color); color: #fff" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><?= $link ?></a></li>
                </ul> 
                <div class="hr"></div>

               <div class="setup">
                <div class="list mt-3">
                    <ul>
                        <li >
                            <a  href="#">Branch Manager</a>
                            <i class='bx bxs-chevron-right arrow'></i>
                        </li>
                        <li class="<?= $active ?>"><a href="#">Department</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li class="<?= $active ?> open closed"><a href="#">Designation</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li class="<?= $active ?> open closed"><a href="#">Leave Type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li class="<?= $active ?>"><a href="#">Payslip Type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li class="<?= $active ?>"><a href="#">Allowance type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li  class="<?= $active ?>"><a href="#">Loan options</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li class="<?= $active ?>"><a href="#">Shift type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li class="<?= $active ?>"><a href="#">Deduction option</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li class="<?= $active ?>"><a href="#">Payment Type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="#">Contract Type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="#">Permissions</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="#">Job Type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                    </ul>
                </div>
                <div>
                   
                </div>
               </div>

            </div>
        </main>

<?= $this->endSection() ?>