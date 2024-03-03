<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<!-- html for main part starts here -->
<main>
    <div class="container">
        <h1 class="title">Dashboard</h1>
        <ul class="breadcrumbs">
            <li><a href="#">Home</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Dashboard</a></li>
        </ul>
        <div class="hr"></div>

        <div class="mother-card">
            <div class="child-card">

            <a href="add-employee" style="text-decoration: none;">
                
            <div class="cards">
                    <div class="cards-body">
                        <div class="both-card-body">
                            <div class="down">
                                <div class="back">
                                    <i class='bx bx-category-alt icon'></i>
                                </div>

                            </div>
                            <div class="head">
                            <h2><?= $emp_count ?></h2>
                                <p>Employess</p>
                            </div>

                        </div>
                    </div>
                </div>
            </a>

                <div class="cards">
                    <div class="cards-body">
                        <div class="both-card-body">
                            <div class="down">
                                <div class="back">
                                    <i class="bx bx-user icon"></i>
                                </div>

                            </div>
                            <div class="head">
                                <h2>3</h2>
                                <p>Vacancy</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="cards">
                    <div class="cards-body">
                        <div class="both-card-body">
                            <div class="down">
                                <div class="back">
                                    <i class='bx bx-briefcase icon'></i>
                                </div>

                            </div>
                            <div class="head">
                                <h2>2</h2>
                                <p>Applications</p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

            <div class="child-card">
                <div class="cards">
                    <div class="cards-body">
                        <div class="both-card-body">
                            <div class="down">
                                <div class="back">
                                    <i class='bx bxs-report icon'></i>
                                </div>

                            </div>
                            <div class="head">
                            <h2>500</h2>
                                <p>Leaves</p>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="cards">
                    <div class="cards-body">
                        <div class="both-card-body">
                            <div class="down">
                                <div class="back">
                                    <i class='bx bx-user-x icon'></i>
                                </div>

                            </div>
                            <div class="head">
                                <h2>2</h2>
                                <p>Grievance</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="cards">
                    <div class="cards-body">
                        <div class="both-card-body">
                            <div class="down">
                                <div class="back">
                                    <i class='bx bx-dollar icon'></i>
                                </div>
                            </div>
                            <div class="head">
                            <h2>5</h2>
                                <p>Loans</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="calender">
            <div class="event-form">
                <div class="color-top"></div>
                <h2>Add an Event</h2>
                <form action="<?= base_url('insertintoevents') ?>" method="post">
                    <div class="mb-2">
                        <label for="title" class="form-label">Annoucement  Title</label>
                        <input class="form-control form-control-sm" type="text" placeholder="name" aria-label=".form-control-sm example">
                    </div>

                    <div class="mb-2">
                        <label for="start-date" class="form-label">Date for the Event</label>
                        <input class="form-control form-control-sm" type="date" placeholder="Start date" aria-label=".form-control-sm example">
                    </div>

                    <div class="mb-2">
                        <label for="end-date" class="form-label">Describe</label>
                        <textarea
                                        class="form-control"
                                        rows="3"></textarea>
                    </div>

                    <div class="mb-2 button">
                        <button type="submit" class="btn btn-sm" style="background: var(--skin-color); color: #fff">Add</button>
                    </div>
                </form>
            </div>
            <div class="event-table">
                <div class="color-top"></div>
                <h2>View Events</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Announcement Title</th>
                            <th>Date</th>
                            <th>Explanation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
              
                        <tr>
                            <td>Meeting</td>
                            <td>9/4/2023</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, doloremque.</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical" style="color: var(--skin-color);"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" class=" dropdown-item update btn-sm btn "><i class="bx bx-edit"></i> Edit</a>
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
        <div class="separete">
                    <!-- <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>To-Do List <img src="./public/assets/img/icon.png"></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="todo-app">
                            <div class="input-row">
                                <input type="text" id="input-box" placeholder="Add your text">

                                <button onclick="addTask()">Add</button>
                            </div> -->
                            <ul id="list-container">
                                <!-- <li class="checked">Task 1</li>
                                <li>Task 2</li>
                                <li>Task 3</li> -->
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Ratio of Male to Female</h2>
                            </div>
                        </div>
                        <hr>
                        <div class="todo-app">
                            <canvas id="doughnut" width="300" height="300"></canvas>
                        </div>
                    </div> -->
                </div>
    </div>
</main>
<!-- html for main part ends here -->
</section>

<?= $this->endSection() ?>