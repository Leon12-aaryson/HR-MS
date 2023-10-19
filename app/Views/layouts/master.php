<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR-MS</title>

    <link rel="stylesheet" href="public/assets/bootstrap/css/cdn.jsdelivr.net_npm_bootstrap@5.2.3_dist_css_bootstrap.min.css">
    <link href='public/assets/datatables/datatables.min.css' rel='stylesheet'>
    <link href='public/assets/datatables/responsive.bootstrap5.min.css' rel='stylesheet'>
    <link href='public/assets/bootstrap-icons/bootstrap-icons.css' rel='stylesheet'>
    <link href='public/assets/boxicons/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="public/assets/css/style.css">

    <!--========= Style switcher========= -->
    <link rel="stylesheet" href="public/assets/css/skin/color-3.css">
    <link rel="stylesheet" href="public/assets/css/skin/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="public/assets/css/skin/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="public/assets/css/skin/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="public/assets/css/skin/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="public/assets/css/skin/color-5.css" class="alternate-style" title="color-5" disabled>
</head>

<body>
    <!-- html for sidedar start here -->
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-ok-ru'></i>
            <span class="logo_name">HR<span style="color: var(--skin-color);">MS</span></span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="<?= base_url("/") ?>">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('employee'); ?>">
                    <i class="bx bx-user icon"></i>
                    <span class="link_name">Employee</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="<?= base_url('add-employee'); ?>" class="link_name">Employee</a></li>
                </ul>
            </li>

            <li>
                <a href="<?= base_url('payroll'); ?>">
                    <!-- It fails to load whenever i use base_url('employee') -->
                    <i class='bx bx-spreadsheet'></i>
                    <span class="link_name">Payroll</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="#" class="link_name">Payroll</a></li>
                </ul>
            </li>

            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bxs-report'></i>
                        <span class="link_name">Report</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li class="no-list"><a href="#" class="link_name">Report</a></li>
                    <li><a href="#">Monthly Attendance</a></li>
                    <li><a href="#">Leave</a></li>
                    <li><a href="#">Payroll</a></li>
                    <li><a href="#">Timesheet</a></li>

                </ul>
            </li>

            <li>
                <div class="icon-link">
                    <a href="<?= base_url('create-attendance'); ?>">
                        <i class='bx bx-timer'></i>
                        <span class="link_name">Attendance</span>
                    </a>
                </div>
            </li>

            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-check-square'></i>
                        <span class="link_name">Approval</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li class="no-list"><a href="#" class="link_name">Approval</a></li>
                    <li><a href="#">Answer grievance</a></li>
                    <li><a href="#">Loan Approval</a></li>
                    <li><a href="#">Manage Leave</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-briefcase'></i>
                    <span class="link_name">Jobs</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="#" class="link_name">Jobs</a></li>
                </ul>
            </li>

            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-walk'></i>
                        <span class="link_name">Shift</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li class="no-list"><a href="#" class="link_name">Shift</a></li>
                    <li><a href="#">Add shift</a></li>
                    <li><a href="#">shift Employee</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-message-dots'></i>
                    <span class="link_name">Message</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="#" class="link_name">Message</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-user-x'></i>
                    <span class="link_name">Disciplinary</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="#" class="link_name">Disciplinary</a></li>
                </ul>
            </li>

            <li>
                <a href="<?= base_url('branch-master'); ?>">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">HR system setup</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="<?= base_url('branch-master'); ?>" class="link_name">HR system setup</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- html for sidedar ends here -->





    <section class="content">
        <!-- html for nanbar start here -->
        <nav>
            <div class="two">
                <i class="bx bx-menu"></i>
                <input class="search" type="search" placeholder="Type to search"><i class='bx bx-search-alt-2'></i>
            </div>
            <div class="sec">
                <div class="theme-toggler">
                    <!-- <span class="material-icons-sharp active">light_mode</span> -->
                    <span class="active"><i class="bx bx-sun"></i></span>
                    <!-- <span class="material-icons-sharp">dark_mode</span> -->
                    <span><i class="bx bx-moon"></i></span>
                </div>
                <div class="manage">
                    <div class="notifications">
                        <div class="icon_wrap">
                            <a href="#">
                                <span><i class='bx bx-bell bx-tada'></i></span>
                                <span class="badge">5</span>
                            </a>
                        </div>
                        <div class="notification_dd">
                            <ul class="notification_ul">
                                <li class="starbucks success">
                                    <div class="notify_icon">
                                        <span class="icon"></span>
                                    </div>
                                    <div class="notify_data">
                                        <div class="title">
                                            Lorem, ipsum dolor.
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>11:05am</p>
                                    </div>
                                </li>
                                <li class="baskin_robbins failed">
                                    <div class="notify_icon">
                                        <span class="icon"></span>
                                    </div>
                                    <div class="notify_data">
                                        <div class="title">
                                            Lorem, ipsum dolor.
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>08:00am</p>
                                    </div>
                                </li>
                                <li class="mcd success">
                                    <div class="notify_icon">
                                        <span class="icon"></span>
                                    </div>
                                    <div class="notify_data">
                                        <div class="title">
                                            Lorem, ipsum dolor.
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>9/4/2023</p>
                                    </div>
                                </li>
                                <li class="pizzahut failed">
                                    <div class="notify_icon">
                                        <span class="icon"></span>
                                    </div>
                                    <div class="notify_data">
                                        <div class="title">
                                            Lorem, ipsum dolor.
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>9/4/2023</p>
                                    </div>
                                </li>
                                <li class="kfc success">
                                    <div class="notify_icon">
                                        <span class="icon"></span>
                                    </div>
                                    <div class="notify_data">
                                        <div class="title">
                                            Lorem, ipsum dolor.
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>9/4/2023</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="message">
                        <div class="icon_wrap">
                            <a href="#">
                                <span><i class='bx bx-envelope bx-tada'></i></span>
                                <span class="badge">2</span>
                            </a>
                        </div>
                        <div class="message_dd">
                            <ul class="message_ul">
                                <li class="starbucks success">
                                    <div class="notify_icon email-logo">
                                        <img src="public/assets/img/w.png" alt="">
                                    </div>
                                    <div class="notify_data">
                                        <div class="title">
                                            ssewankamboderick@gmail.com
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>11:05am</p>
                                    </div>
                                </li>
                                <li class="baskin_robbins failed">
                                    <div class="notify_icon email-logo">
                                        <img src="public/assets/img/w.png" alt="">
                                    </div>
                                    <div class="notify_data">
                                        <div class="title">
                                            ssewankamboderick@gmail.com
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>08:00am</p>
                                    </div>
                                </li>
                                <li class="mcd success">
                                    <div class="notify_icon email-logo">
                                        <img src="public/assets/img/w.png" alt="">
                                    </div>
                                    <div class="notify_data">
                                        <div class="title">
                                            rickrambo78@gmail.com
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>9/4/2023</p>
                                    </div>
                                </li>
                                <li class="pizzahut failed">
                                    <div class="notify_icon email-logo">
                                        <img src="public/assets/img/w.png" alt="">
                                    </div>
                                    <div class="notify_data">
                                        <div class="title">
                                            ssewankamboderick@gmail.com
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>9/4/2023</p>
                                    </div>
                                </li>
                                <li class="kfc success">
                                    <div class="notify_icon email-logo">
                                        <img src="public/assets/img/w.png" alt="">
                                    </div>
                                    <div class="notify_data">
                                        <div class="title">
                                            kikajjosda@gmail.com
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>9/4/2023</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <span class="style-switcher-toggler s-icon"><i class='bx bx-cog bx-spin'></i></span>
                    </div>
                    <div class="style-switcher">
                        <h4>Theme colors</h4>
                        <div class="colors">
                            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
                            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
                            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
                            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
                            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
                        </div>
                    </div>

                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Ssewankambo Derick</b></p>
                        <small class="text-muted1">Admin</small>
                    </div>
                    <div class="profile-photo icon_wrap" style="cursor: pointer;">
                        <img src="public/assets/img/face girl.jpg" alt="">
                    </div>

                    <div class="profile_dd">
                        <ul class="profile_ul">
                            <li><a class="logout" href="#"><span class="picon"><i class='bx bxs-user'></i></span>
                                    &nbsp;Profile</a></li>
                            <li><a class="logout" href="#"><span class="picon"><i class='bx bx-log-out'></i></span>&nbsp;Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- html for nanbar ends here -->




        <?= $this->renderSection('body-contents') ?>

        <!--Html for the footer-->
        <footer class="footer">
            <!-- <div class="hr"></div> -->
            <div class="last">
                <p>&copy;copyright all rights reserved by Ssewankambo Derick</p>
            </div>
        </footer>

        <script src="public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="public/assets/jquery-3.6.1.min.js"></script>
        <script src="public/assets/datatables/datatables.min.js"></script>
        <script src="public/assets/datatables/dataTables.responsive.min.js"></script>
        <script src="public/assets/datatables/pdfmake.min.js"></script>
        <script src="public/assets/datatables/vfs_fonts.js"></script>
        <script src="public/assets/js/sidebar.js"></script>
        <script src="public/assets/js/theme-color.js"></script>
        <script src="public/assets/js/notification.js"></script>
        <script src="public/assets/js/color-picker.js"></script>


</body>
<script>
    /**@abstract
     * Employee
     */
    let employeeDataTable = $("#employeeDataTable").dataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],
        "ajax": {
            url: "fetchemployees",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [7]
        }],
        // <'col-sm-12 col-md-6'B> // Enabling buttons
        dom: "<'row gx-0 pl-0'<'col-sm-12 col-md-3'l>\
                    <'col-sm-12 col-md-6'>\
                    <'col-sm-12 col-md-3'f>>" +
            "<'row gx-0'<'col-sm-12'tr>>" +
            "<'row gx-0'<'col-sm-12 col-md-5'i>\
                    <'col-sm-12 col-md-7'p>>",
        buttons: [{
                extend: 'excelHtml5',
                text: 'Excel <i class="bi bi-file-earmark-excel"></i> ',
                titleAttr: 'Export to Excel',
                className: 'btn btn-sm btn-danger',
                exportOptions: {
                    columns: [0, 1],
                    search: 'applied',
                    order: 'applied',
                }
            },
            {
                extend: 'pdfHtml5',
                text: 'PDF <i class="bi bi-file-earmark-pdf"></i> ',
                titleAttr: 'Export to PDF',
                className: 'btn btn-sm btn-danger',
                filename: 'employees_pdf',
                exportOptions: {
                    columns: [0, 1],
                    search: 'applied',
                    order: 'applied',
                }
            },
            {
                extend: 'print',
                text: 'Print <i class="bi bi-printer"></i> ',
                titleAttr: 'Print',
                className: 'btn btn-sm btn-danger',
                exportOptions: {
                    columns: [0, 1],
                    search: 'applied',
                    order: 'applied',
                }
            },
            {
                extend: "copyHtml5",
                text: 'Copy <i class="bi bi-file-earmark"></i> ',
                titleAttr: 'Copy',
                className: 'btn btn-sm btn-danger',
                exportOptions: {
                    columns: [0, 1]
                }
            },
        ]

    });


    /**@abstract
     * HR System Setup
     */

    // Branch Manager
    let branchmanagerDataTable = $("#branchmanagerDataTable").dataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],
        "ajax": {
            url: "fetchbranchmanager",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })

    // Department
    let departmentDataTable = $("#departmentDataTable").dataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],
        "ajax": {
            url: "fetchdepartment",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [4]
        }],
    })

    // Designation
    let designationDataTable = $("#designationDataTable").dataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],
        "ajax": {
            url: "fetchdesignation",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })

    // Leave Type
    let leaveDataTable = $("#leaveDataTable").dataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],
        "ajax": {
            url: "fetchleave",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })

    // Loan
    let loanDataTable = $("#loanDataTable").dataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],
        "ajax": {
            url: "fetchloan",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })

    // Shift type
    let shiftypeDataTable = $("#shiftypeDataTable").dataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],
        "ajax": {
            url: "fetchshiftype",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })

    // Deduction Options
    let deductionDataTable = $("#deductionDataTable").dataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],
        "ajax": {
            url: "fetchdeduction",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })

    // Payment
    let paymentDataTable = $("#paymentDataTable").dataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],
        "ajax": {
            url: "fetchpayment",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })

    // Contract
    let contractDataTable = $("#contractDataTable").dataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],
        "ajax": {
            url: "fetchcontract",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })


</script>

</html>