<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<main>
            <div class="container">
                <h1 class="title">Manage Displinary</h1>
                <ul class=" emp" style="line-height: none;">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Displinary</a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-sm"
                        style="background: var(--skin-color); color: #fff">Add Displine case</a></li>
                </ul> 
                <div class="hr"></div>

                <div class="event-table mt-3">
                    <div class="color-top" style="left: -22px;"></div>
                
                    <table class="table" id="disciplinaryTable">
                        <thead>
                            <tr>
                                <th>Displinary Case</th>
                                <th>Victim's Name</th>
                                <th>Punishment</th>
                                <th>Description</th>
                                <th>Warning letter</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                    </table>
                </div>

            </div>
            
            <!-- Add -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content modal-bg ">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New Displinary Case</h1>
                            <button type="button" class="btn-close" style="color: var(--text-color);"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url('insert_disciplinary') ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">

                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label for="branch">Displinary Case</label>
                                    <input type="text" class="form-control form-name" name="displicary_case" placeholder="Enter the discplinary case">
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Victim's Name</label>
                                    <input type="text" class="form-control form-name" name="victim_name" placeholder="Enter the Victim name">
                            </div>
                            <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                <label class="form-label">Punishment</label>
                                <input type="text" class="form-control form-name" name="punishment" placeholder="Enter the punishment granted">
                        </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Upload warning letter</label>
                                    <input type="file" name="letter" class="form-control form-name">
                            </div>
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-sm" 
                                    style="background: var(--skin-color); color: #fff">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
  
         
             <!-- view -->
             <div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
             <div class="modal-dialog ">
                 <div class="modal-content modal-bg ">
                     <div class="modal-header">
                         <h1 class="modal-title fs-5" id="exampleModalLabel">View Dicpline case</h1>
                         <button type="button" class="btn-close" style="color: var(--text-color);"
                             data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                         <div class="modal-body">

                             <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                  <h5>Description</h5>
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsam quisquam temporibus voluptatibus, accusantium natus ducimus deserunt reiciendis, numquam explicabo impedit, ab ut officiis praesentium non commodi ea sapiente rerum.</p>
                             </div>
                            
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary btn-sm"
                                 data-bs-dismiss="modal">Close</button>
                         </div>
                 </div>
             </div>
         </div>
            </div>
        </main>

<?= $this->endSection() ?>