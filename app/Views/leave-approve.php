<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<main>
            <div class="container">
                <h1 class="title">Manage Leaves</h1>
                <ul class=" emp" style="line-height: none;">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Leave</a></li>
                </ul> 
                <div class="hr"></div>

                <div class="event-table mt-3">
                    <div class="color-top" style="left: -22px;"></div>
                
                    <table>
                        <thead>
                            <tr>
                                <th>Employee's Name</th>
                                <th>Leave Type</th>
                                <th>Duration</th>
                                <th>Leave Status</th>
                                <th>Comment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ssewankambo Derick</td>
                                <td>Medical</td>
                                <td>9/02/2024-8/03/2024</td>
                                <td class="text-warning">Pending</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, nesciunt!</td>
                                <td>

                                    <div class="dropdown">
                                        <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical" style="color: var(--skin-color);"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#" class=" dropdown-item update btn-sm btn"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bx bx-edit"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-item btn-sm btn" data-bs-toggle="modal" data-bs-target="#view"> <i class="bx bx-show"></i>View</a>
    
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
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-bg">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5"
                            id="exampleModalLabel">Edit
                            Leave</h1>
                        <button type="button" class="btn-close"
                            style="color: var(--text-color);"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                   <form action="">
                    <div class="modal-body">

                     
                        <div class="mb-2"
                        style="width: 80%; margin: 0 auto;">
                        <label class="form-label">Status</label>
                        <select class=" form-select form-select-sm" aria-label="Default select example">
                            <option selected>Change Status</option>
                            <option value="1">Pending</option>
                            <option value="1">Accepted</option>
                            <option value="1">Declined</option>
                        </select>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                            class="btn btn-secondary btn-sm"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm"
                            style="background: var(--skin-color); color: #fff">Apply</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>

<?= $this->endSection() ?>