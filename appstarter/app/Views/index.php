
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

                        <div class="cards">
                            <div class="cards-body">
                                <div class="both-card-body">
                                    <div class="down">
                                        <div class="back">
                                            <i class='bx bx-category-alt icon'></i>
                                        </div>

                                    </div>
                                    <div class="head">
                                        <h2>10</h2>
                                        <p>Departments</p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="cards">
                            <div class="cards-body">
                                <div class="both-card-body">
                                    <div class="down">
                                        <div class="back">
                                            <i class="bx bx-user icon"></i>
                                        </div>

                                    </div>
                                    <div class="head">
                                        <h2>200</h2>
                                        <p>Employees</p>
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
                                        <h2>50</h2>
                                        <p>Jobs</p>
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
                                        <h2>5</h2>
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
                                        <p>Disciplinary</p>
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
                                        <h2>30</h2>
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
                        <form action="#">
                            <div class="mb-2">
                                <label for="title" class="form-label">Event's Name</label>
                                <input class="form-control form-control-sm" type="text" placeholder="name"
                                    aria-label=".form-control-sm example">
                            </div>

                            <div class="mb-2">
                                <label for="start-date" class="form-label">Start Date</label>
                                <input class="form-control form-control-sm" type="date" placeholder="Start date"
                                    aria-label=".form-control-sm example">
                            </div>

                            <div class="mb-2">
                                <label for="end-date" class="form-label">End Date</label>
                                <input class="form-control form-control-sm" type="date" placeholder="End date"
                                    aria-label=".form-control-sm example">
                            </div>

                            <div class="mb-2">
                                <label for="Time" class="form-label">Time</label>
                                <input class="form-control form-control-sm" type="time" placeholder="Time"
                                    aria-label=".form-control-sm example">
                            </div>

                            <div class="mb-2 button">
                                <button class="btn btn-sm"
                                    style="background: var(--skin-color); color: #fff">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="event-table">
                        <div class="color-top"></div>
                        <h2>View Events</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Event Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Meeting</td>
                                    <td>9/4/2023</td>
                                    <td></td>
                                    <td>11:pm</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical" style="color: var(--skin-color);"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#" class=" dropdown-item update btn-sm btn "><i
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
            </div>
        </main>
        <!-- html for main part ends here -->
    </section>

    <?= $this->endSection() ?>
