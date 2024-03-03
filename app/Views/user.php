<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<main>
            <div class="container">
                <h1 class="title">Manage Users</h1>
                <ul class=" emp" style="line-height: none;">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Users</a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-sm"
                            style="background: var(--skin-color); color: #fff">Add User</a></li>
                </ul>
                <div class="hr"></div>

                <div class="event-table mt-3">
                    <div class="color-top" style="left: -22px;"></div>

                    <table>
                        <thead>
                            <tr>
                                <th>S.n</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Status</th>
                                <th>User Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img width="50px" height="50px" style="object-fit: cover; border-radius: 3px;"
                                        src="public/emp-assets/img/face girl.jpg" alt=""></td>
                                <td>Ssewankambo Dercik</td>
                                <td>ssewankamboderick@gmil.com</td>
                                <td>mnvj52115f</td>
                                <td class="text-success">Active</td>
                                <td>Super Admin</td>
                                <td>

                                    <div class="dropdown">
                                        <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical" style="color: var(--skin-color);"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#" class=" dropdown-item update btn-sm btn "
                                                    data-bs-toggle="modal" data-bs-target="#edit"><i
                                                        class="bx bx-edit"></i> Edit</a>
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

            <!-- Add -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content modal-bg ">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New User</h1>
                            <button type="button" class="btn-close" style="color: var(--text-color);"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action>
                            <div class="modal-body">

                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control form-name"
                                        placeholder="Enter the user's names">
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control form-name"
                                        placeholder="Enter the User's Email">
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Password</label>
                                    <input disabled type="text" class="form-control form-name"
                                        placeholder="Auto generated">
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control form-name">
                                </div>

                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label for="branch">Status</label>
                                    <select class=" form-select" aria-label="Default select example">
                                        <option selected>Select Status</option>
                                        <option value="1">active</option>
                                        <option value="2">inactive</option>
                                    </select>
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label for="branch">User Type</label>
                                    <select class=" form-select" aria-label="Default select example">
                                        <option selected>Select user type</option>
                                        <option value="1">Super Admin</option>
                                        <option value="2">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm"
                                    style="background: var(--skin-color); color: #fff">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit -->
            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content modal-bg ">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                            <button type="button" class="btn-close" style="color: var(--text-color);"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action>
                            <div class="modal-body">

                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control form-name"
                                        placeholder="Enter the user's names">
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control form-name"
                                        placeholder="Enter the User's Email">
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Change Password</label>
                                    <input type="text" class="form-control form-name"
                                        placeholder="Auto generated">
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control form-name">

                                </div>
                                <div class="mb-2">
                                    <img width="150px" height="150px" style="object-fit: cover; border-radius: 5px;"
                                        src="public/assets/img/face girl.jpg" alt="">
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label for="branch">Status</label>
                                    <select class=" form-select" aria-label="Default select example">
                                        <option selected>Select Status</option>
                                        <option value="1">active</option>
                                        <option value="2">inactive</option>
                                    </select>
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label for="branch">User Type</label>
                                    <select class=" form-select" aria-label="Default select example">
                                        <option selected>Select user type</option>
                                        <option value="1">Super Admin</option>
                                        <option value="2">Admin</option>
                                    </select>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm"
                                    style="background: var(--skin-color); color: #fff">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </main>


<?= $this->endSection() ?>