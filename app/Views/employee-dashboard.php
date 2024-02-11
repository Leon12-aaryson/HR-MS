

<?= $this->extend('layouts/employee') ?>
<?= $this->section('body-contents') ?>
<main>
            <style>
                .employee-landing {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
                    gap: 1rem;
                    padding: 2%;
                }
            </style>
            <div class="container">
                <h1 class="title">Employee Dashboard</h1>
                <ul class=" emp" style="line-height: none;">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Dashboard</a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-sm"
                            style="background: var(--skin-color); color: #fff">Change
                            Password</a></li>
                </ul>
                <div class="hr"></div>

                <div class="employee-landing">
                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Daily Attendance</h2>
                            </div>
                        </div>
                        <hr>
                        <div class="containers">
                            <div class="clock">
                                <label style="--i: 1"><span>1</span></label>
                                <label style="--i: 2"><span>2</span></label>
                                <label style="--i: 3"><span>3</span></label>
                                <label style="--i: 4"><span>4</span></label>
                                <label style="--i: 5"><span>5</span></label>
                                <label style="--i: 6"><span>6</span></label>
                                <label style="--i: 7"><span>7</span></label>
                                <label style="--i: 8"><span>8</span></label>
                                <label style="--i: 9"><span>9</span></label>
                                <label style="--i: 10"><span>10</span></label>
                                <label style="--i: 11"><span>11</span></label>
                                <label style="--i: 12"><span>12</span></label>

                                <div class="indicator">
                                    <span class="hand hour"></span>
                                    <span class="hand minute"></span>
                                    <span class="hand second"></span>
                                </div>
                            </div>

                            <div id="start" class="btn" style="background: var(--skin-color); color: #fff">Start
                                time</div>

                            <p id="display-start"></p>
                            <p id="display-end"></p>
                        </div>
                    </div>

                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>Notice Board</h2>
                            </div>
                        </div>
                        <hr>
                        <div class="notice-list">
                            <div class="notice mb-2">
                                <div class="direction">
                                    <span>Fri, 08 MAY</span>
                                </div>
                                <div class="line-separate">

                                    <div class="point"></div>
                                </div>
                                <div class="notice-infor">
                                    <h2>Test Notice</h2>
                                    <h5><span>Fir, 08 May 2020 by</span>
                                        posted by Admin</h5>
                                    <h5>Hey Employee This is test
                                        Notice</h5>
                                </div>
                            </div>
                            <div class="notice mb-2">
                                <div class="direction">
                                    <span>Fri, 08 MAY</span>
                                </div>
                                <div class="line-separate">

                                    <div class="point"></div>
                                </div>
                                <div class="notice-infor">
                                    <h2>Test Notice</h2>
                                    <h5><span>Fir, 08 May 2020 by</span>
                                        posted by Admin</h5>
                                    <h5>Hey Employee This is test
                                        Notice</h5>
                                </div>
                            </div>

                            <div class="mb-2" style="display: flex; justify-content: center; gap: 1rem;">
                                <div>
                                    <div class="btn" style="background: var(--skin-color); color: #fff">Prev</div>
                                </div>
                                <div>
                                    <div class="btn" style="background: var(--skin-color); color: #fff">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="personal-details">
                        <div class="heading">
                            <div class="color-top"></div>
                            <div class="begin">
                                <h2>To-Do List <img src="./assets/img/icon.png"></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="todo-app">
                            <div class="input-row">
                                <input type="text" id="input-box" placeholder="Add your text">

                                <button onclick="addTask()">Add</button>
                            </div>
                            <ul id="list-container">
                                <!-- <li class="checked">Task 1</li>
                                <li>Task 2</li>
                                <li>Task 3</li> -->
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content modal-bg">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Change your
                                Password</h1>
                            <button type="button" class="btn-close" style="color: var(--text-color);"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action>
                            <div class="modal-body">
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Old
                                        Password</label>
                                    <input type="password" class="form-control form-name"
                                        placeholder="Enter your old password">
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">New
                                        Password</label>
                                    <input type="password" class="form-control form-name"
                                        placeholder="Enter your new password">
                                </div>
                                <div class="mb-2" style="width: 80%; margin: 0 auto;">
                                    <label class="form-label">Confirm
                                        Password</label>
                                    <input type="password" class="form-control form-name"
                                        placeholder="Confirm your password">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-sm"
                                        style="background: var(--skin-color); color: #fff">Change</button>
                                </div>
                        </form>
                    </div>

        </main>

        <?= $this->endSection() ?>