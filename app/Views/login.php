<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: url("public/img/login.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            animation: animateBg 5s linear infinite;
        }
/*
        @keyframes animateBg {
            100% {
                filter: hue-rotate(360deg);
            }
        } */

        .form-box {
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2 {
            font-size: 2em;
            color: #fff;
            text-align: center;
        }

        .inputbox {
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid #fff;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1em;
            pointer-events: none;
            transition: 0.5s;
        }

        input:focus~label,
        input:valid~label {
            top: -5px;
        }

        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #fff;
        }

        .inputbox i {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: 20px;
        }

        .forget {
            margin: -15px 0 15px;
            font-size: 0.9em;
            color: #fff;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .forget label input {
            margin-right: 3px;
        }

        .forget a {
            color: #fff;
            text-decoration: none;
        }

        .forget a:hover {
            text-decoration: underline;
        }

        .button {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }

        .button:hover {
            color: #fff;
            background: #0e0e0e;
        }

        .register {
            font-size: 0.9em;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
        }

        .register p a:hover {
            text-decoration: underline;
        }

        .link {
            color: #fff;
            text-decoration: none;
            transition: 0.3s;
        }

        .link:hover {
            color: blue;
            text-decoration: underline;
        }

        .message {
            color: red;
            text-align: center;
            margin-top: 5px;
        }

        @media (max-width: 450px) {
            .form-box {
                width: 100%;
                height: 100vh;
                border: none;
                border-radius: 0px;
            }

            .inputbox {
                width: 320px;
            }
        }
    </style>
</head>

<body>
    <section>

        <div class="form-box">

            <div class="tab-content form-value" id="pills-tabContent">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            Admin
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            Employee
                        </button>
                    </li>
                </ul>
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <form action="" autocomplete="off" method="post" id="login" >
                        <h2>Admin Login</h2>
                        <?php
                           if (isset($validation)): ?>
                           <div style="color: red;">
                           <?=$validation->listErrors()?>
                           </div>
                        
                        <?php endif;?>

                        <div class="inputbox">
                            <i class="bx bx-envelope icon"></i>
                            <input autocomplete="false" type="email" name="email" class="" required />
                            <label>Email</label>
                        </div>
                        <div class="inputbox">
                            <i class="bx bx-show showHidePw"></i>
                            <input autocomplete="false" type="password" name="password" class="password" required />
                            <label>Password</label>
                        </div>
                        <div class="forget">
                            <label><input type="checkbox" />Remember Me </label><a href="#">Forgot Password</a>
                        </div>
                        <input type="submit" name="submit" value="login now" class="button" />
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <form action="<?= base_url('sendlogindetails'); ?>" autocomplete="off" method="post" id="login" enctype="multipart/form-data">
                        <h2>Employee Login</h2>

                        <div class="inputbox">
                            <i class="bx bx-envelope icon"></i>
                            <input autocomplete="false" type="email" name="email" required />
                            <label>Email</label>
                        </div>
                        <div class="inputbox">
                            <i class="bx bx-show showHidePw"></i>
                            <input autocomplete="false" type="password" name="password" class="password" required />
                            <label>Password</label>
                        </div>
                        <div class="forget">
                            <label><input type="checkbox" />Remember Me </label><a href="#">Forgot Password</a>
                        </div>
                        <input type="submit" name="submit" value="login now" class="button" />
                    </form>
                </div>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const pwShowHide = document.querySelectorAll(".showHidePw");
        const pwFields = document.querySelectorAll(".password");

        // JS code to show and hide a password
        pwShowHide.forEach((eye) => {
            eye.addEventListener("click", () => {
                pwFields.forEach((pwField) => {
                    if (pwField.type === "password") {
                        pwField.type = "text";

                        pwShowHide.forEach((icon) => {
                            icon.classList.replace("bx-show", "bx-low-vision");
                        });
                    } else {
                        pwField.type = "password";

                        pwShowHide.forEach((icon) => {
                            icon.classList.replace("bx-low-vision", "bx-show");
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>