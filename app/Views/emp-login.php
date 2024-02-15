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

    <div class="landing-img">
        
        <div class="login-form">
            <div class="event-form"> 
                <div class="theme-toggler" style="display: none;">
                    <!-- <span class="material-icons-sharp active">light_mode</span> -->
                    <span class="active"><i class="bx bx-sun"></i></span>
                    <!-- <span class="material-icons-sharp">dark_mode</span> -->
                    <span><i class="bx bx-moon"></i></span>
                </div>
                <div class="color-top"></div>
                <h2>Welcome, Sign Up</h2>
                <form method="post" action="<?= base_url('sendlogindetails'); ?>">
                    <div class="mb-2">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control form-control-sm form-name" placeholder="Enter your email...">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control form-control-sm form-name" placeholder="Enter your password...">
                    </div>
                    <div class="row  mb-2">
                        <div class="col form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember_me">
                            <label class="form-check-label" style="font-size: 12px;">Remember Me</label>
                        </div>
                        <div class="col">
                            <a style="text-decoration: none; font-size: 12px;" href="#">Forgot Password</a>
                        </div>
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-sm" style="background-color: var(--skin-color); color: #fff;">Login</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="login-image">
            <img src="public/emp-assets/img/login.jpg" alt>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="public/emp-assets/js/sidebar.js"></script>
    <script src="public/emp-assets/js/theme-color.js"></script>
    <script src="public/emp-assets/js/notification.js"></script>
    <script src="public/emp-assets/js/color-picker.js"></script>
</body>

</html>