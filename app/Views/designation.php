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
                        <li><a href="#">Department</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li class="<?= $active ?>"><a href="#">Designation</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="#">Leave Type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="#">Payslip Type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="#">Allowance type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="#">Loan options</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="#">Shift type</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="#">Deduction option</a>
                        <i class='bx bxs-chevron-right arrow'></i></li>
                        <li><a href="#">Payment Type</a>
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
                    <div class="event-table mt-3">                    
                        <table>
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Designation1</td>
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
         <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 text-primary" id="staticBackdropLabel">Add Designation</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                      <label for="exampleInput1" class="form-label text-primary">Designation</label>
                      <input type="text" class="form-control" id="exampleInput1">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-primary">Add</button>
            </div>
            </div>
        </div>
     </div>

<?= $this->endSection() ?>