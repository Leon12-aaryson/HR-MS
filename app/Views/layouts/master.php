<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR-MS</title>
  
    <?= link_tag("public/assets/bootstrap/css/cdn.jsdelivr.net_npm_bootstrap@5.2.3_dist_css_bootstrap.min.css") ?>
    <?= link_tag("public/assets/datatables/datatables.min.css") ?>
    <?= link_tag("public/assets/datatables/responsive.bootstrap5.min.css") ?>
    <?= link_tag("public/assets/bootstrap-icons/bootstrap-icons.css") ?>
    <?= link_tag("public/assets/boxicons/css/boxicons.min.css") ?>
    <?= link_tag("public/assets/css/style.css") ?>
    <?= link_tag('public/assets/sweetalert/css/sweetalert.min.css') ?>

    <!--========= Style switcher========= -->
    <?= link_tag("public/assets/css/skin/color-3.css") ?>
    <!-- <link rel="stylesheet" href="public/assets/css/skin/color-1.css" class="alternate-style" title="color-1" disabled> -->
    <?= link_tag("public/assets/css/skin/color-1.css") ?>
    <link rel="stylesheet" href="public/assets/css/skin/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="public/assets/css/skin/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="public/assets/css/skin/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="public/assets/css/skin/color-5.css" class="alternate-style" title="color-5" disabled>
    <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/65c8cdc68d261e1b5f5ec2af/1hmc67kaa';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
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
                <a href="<?= base_url("home") ?>">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>

            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bxs-report'></i>
                        <span class="link_name">Recruitment</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li class="no-list"><a href="#" class="link_name">Recruitment</a></li>
                    <li><a href="<?= base_url('application'); ?>">Application</a></li>
                    <li><a href="<?= base_url('vacancy'); ?>">Vacancy</a></li>
                </ul>
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
                    <li><a href="<?= base_url('leave-approve'); ?>">Manage Leave</a></li>
                    <li><a href="<?= base_url('manage-loan'); ?>">Loan Approval</a></li>
                    <li><a href="<?= base_url('manage-leave'); ?>">Manage Leave</a></li>

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
                    <li><a href="<?= base_url('attendance-report'); ?>">Monthly Attendance</a></li>
                    <li><a href="<?= base_url('leave-report'); ?>">Leave</a></li>
                    <li><a href="<?= base_url('payroll-report'); ?>">Payroll</a></li>

                </ul>
            </li>
            <li>
                <a href="<?= base_url('user'); ?>">
                    <i class='bx bx-user'></i>
                    <span class="link_name">Users</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="<?= base_url('user'); ?>" class="link_name">Users</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('disciplinary'); ?>">
                    <i class='bx bx-user-x'></i>
                    <span class="link_name">Disciplinary</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="<?= base_url('disciplinary'); ?>" class="link_name">Disciplinary</a></li>
                </ul>
            </li>

            <li>
                <a href="<?= base_url('department'); ?>">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">HR system setup</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="<?= base_url('department'); ?>" class="link_name">HR system setup</a></li>
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
                                        
                                    </div>
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

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <?= script_tag("public/assets/jquery-3.6.1.min.js") ?>
        <?= script_tag("public/assets/bootstrap/js/bootstrap.bundle.min.js") ?>
        <?= script_tag("public/assets/datatables/datatables.min.js") ?>
        <?= script_tag("public/assets/datatables/dataTables.responsive.min.js") ?>
        <?= script_tag("public/assets/datatables/pdfmake.min.js") ?>
        <?= script_tag("public/assets/datatables/vfs_fonts.js") ?>
        <?= script_tag("public/assets/js/sidebar.js") ?>
        <?= script_tag("public/assets/js/theme-color.js") ?>
        <?= script_tag("public/assets/js/notification.js") ?>
        <?= script_tag("public/assets/js/color-picker.js") ?>
        <?= script_tag("public/assets/sweetalert/js/sweetalert2@11.js") ?>
        <?= script_tag("public/assets/jquery.validate.min.js") ?>
        <?= script_tag("public/assets/js/script.js") ?>
        <?= script_tag("public/assets/js/chart.js") ?>
        <?= script_tag("public/assets/js/ajax.js") ?>
         
        <script>
            $(document).ready(function() {
                fetch_payroll('no');
                });

             

        


            function fetch_payroll(is_date_search, year = '', month = '') {
                // Manage Payroll
                let managepayrollDataTable = $("#managepayrollDataTable").DataTable({
                    "processing": true,
                    "serverSide": true,
                    "stateSave": false, // Remembers data table state
                    "order": [],

                    "dom": '<"row"<"col-md-6"><"col-md-6"f>>' +
                        '<"row"<"col-md-12"t>>' +
                        '<"row"<"col-md-5"i><"col-md-7"p>>',

                    "ajax": {
                        url: "fetchmanagepayroll",
                        method: "POST",
                        data: {
                            is_date_search: is_date_search,
                            year: year,
                            month: month
                        }
                    },
                    "columnDefs": [{
                        "orderable": false,
                        "targets": [5]
                    }],
                })

            }

            $("#managepayrollfind").click(function() {
                let year = $("#managepayrollyear").val();
                let month = $("#managepayrollmonth").val();

                if (year != '') {

                    $("#managepayrollDataTable").DataTable().destroy();
                    fetch_payroll('yes', year, month);

                } else {
                    // Here i will reinitialize the table if no dates specified
                    Swal.fire({
                        title: "Search error",
                        text: "You have to select a year",
                        icon: "error"
                    }).then(() => {

                        $("#managepayrollDataTable").DataTable().destroy();
                        fetch_payroll('no');
                    });
                }

            })

        </script>

</body>

</html>