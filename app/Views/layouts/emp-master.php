<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="public/emp-assets/css/style.css">

    <link rel="stylesheet" href="public/emp-assets/css/skin/color-3.css">

    <!--========= Style switcher========= -->
    <link rel="stylesheet" href="public/emp-assets/css/skin/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="public/emp-assets/css/skin/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="public/emp-assets/css/skin/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="public/emp-assets/css/skin/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="public/emp-assets/css/skin/color-5.css" class="alternate-style" title="color-5" disabled>

    <link rel="stylesheet" href="public/emp-assets/css/clock.css" />
    <style>
        .event-form{
    position: relative;
    top: 210px;
    left: 188px;
    width: 350px;
}
    </style>
</head>

<body>

    <!-- html for sidedar start here -->
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-ok-ru'></i>
            <span class="logo_name">HR<span style="color: var(--skin-color);">MS</span></span>
        </div>
        <ul class="nav-links">
            <li class="active-bar">
                <a href="<?= base_url('emp-dashboard'); ?>">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="<?= base_url('emp-dashboard'); ?>" class="link_name">Dashboard</a></li>
                </ul>
            </li>

            <li>
                <a href="<?= base_url('emp-attendance'); ?>">
                    <i class='bx bx-timer icon'></i>
                    <span class="link_name">Attendance </span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="<?= base_url('emp-attendance'); ?>" class="link_name">Attendance</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('emp-leave'); ?>">
                    <i class='bx bx-walk icon'></i>
                    <span class="link_name">Leave</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="<?= base_url('emp-leave'); ?>" class="link_name">Leave</a></li>
                </ul>
            </li>

            <!-- <li>
                <a href="./loan.html">
                    <i class='bx bx-credit-card-front icon'></i>
                    <span class="link_name">Loan</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="loan.html" class="link_name">Loan</a></li>
                </ul>
            </li> -->

            <li>
                <a href="<?= base_url('emp-payroll') ?>">
                    <i class='bx bx-money icon'></i>
                    <span class="link_name">Payroll</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="payroll1.html" class="link_name">Payroll</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-log-out icon'></i>
                    <span class="link_name">Logout</span>
                </a>
                <ul class="sub-menu blank">
                    <li class="no-list"><a href="#" class="link_name">Logout</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- html for sidedar ends here -->


    <div class="content">
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
                                            Lorem ipsum dolor sit amet
                                            consectetur.
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
                                            Lorem ipsum dolor sit amet
                                            consectetur.
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
                                            Lorem ipsum dolor sit amet
                                            consectetur.
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
                                            Lorem ipsum dolor sit amet
                                            consectetur.
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
                                            Lorem ipsum dolor sit amet
                                            consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>9/4/2023</p>
                                    </div>
                                </li>
                                <li class="show_all">
                                    <p class="link">Show All Activities</p>
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
                                    <div class="notify_icon">
                                        <span class="icon"></span>
                                    </div>
                                    <div class="notify_data">
                                        <div class="title">
                                            ssewankamboderick@gmail.com
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet
                                            consectetur.
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
                                            ssewankamboderick@gmail.com
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet
                                            consectetur.
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
                                            rickrambo78@gmail.com
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet
                                            consectetur.
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
                                            ssewankamboderick@gmail.com
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet
                                            consectetur.
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
                                            kikajjosda@gmail.com
                                        </div>
                                        <div class="sub_title">
                                            Lorem ipsum dolor sit amet
                                            consectetur.
                                        </div>
                                    </div>
                                    <div class="notify_status">
                                        <p>9/4/2023</p>
                                    </div>
                                </li>
                                <li class="show_all">
                                    <p class="link">Show All Activities</p>
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
                        <small class="text-muted1">Employee</small>
                    </div>
                    <div class="profile-photo icon_wrap" style="cursor: pointer;">
                        <img src="public/emp-assets/img/face girl.jpg" alt>
                    </div>


                </div>
            </div>
        </nav>
        <!-- html for nanbar ends here -->

        <?= $this->renderSection('body-contents') ?>


        <footer class="footer">
        <!-- <div class="hr"></div> -->
        <div class="last">
            <p>&copy;copyright all rights reserved by
                Ssewankambo Derick</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="public/emp-assets/js/sidebar.js"></script>
    <script src="public/emp-assets/js/theme-color.js"></script>
    <script src="public/emp-assets/js/notification.js"></script>
    <script src="public/emp-assets/js/color-picker.js"></script>
    <script src="public/emp-assets/js/script.js" defer></script>
</body>

</html>
    </div>