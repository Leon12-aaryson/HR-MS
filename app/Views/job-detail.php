<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HR-MS - Job portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <?= link_tag('public/lib/animate/animate.min.css') ?>
    <?= link_tag('public/lib/owlcarousel/assets/owl.carousel.min.cs') ?>
    <?= link_tag('public/css/bootstrap.min.css') ?>
    <?= link_tag('public/css/style.css') ?>

    <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">HRMS</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="<?= base_url('landing-page'); ?>" class="nav-item nav-link">Home</a>
                </div>

            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job Detail</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="<?= base_url('landing-page'); ?>">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Job Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">

                            <div class="text-start ps-4">
                              <h3 class="mb-3"><?php echo $vacancy['position']; ?></h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker text-primary me-2"></i><?= esc($vacancy['address']) ?></span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php echo $vacancy['job_nature']; ?></span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i><?php echo $vacancy['salary']; ?></span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <?php echo $vacancy['description']; ?>
                            <h4 class="mb-3">Responsibility</h4>
                            <ul class="list-unstyled">
                            <?php echo $vacancy['responsibility']; ?>
                      
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                            <?php echo $vacancy['qualifications']; ?>
                           
                        </div>

                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <?php
                            $validation = \config\Services::validation(); ?>

                            <?php if (session()->getFlashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('success'); ?>
                                </div>

                            <?php endif; ?>
                            <?php if (session()->getFlashdata('error')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->getFlashdata('error'); ?>
                                </div>

                            <?php endif; ?>
                            <form action="<?= base_url('insert_job_detail') ?>" method="POST" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <label for="fname" class="form-label">Firt Name</label>
                                        <input type="text" value="<?= set_value('fname') ?> " name="fname" class="form-control <?= ($validation->getError('fname')) ? 'is-invalid' : '' ?>" placeholder="Your First Name">
                                        <?php
                                        if ($validation->getError('fname')) :
                                        ?>
                                            <div class="invalid-feedback"><?= $validation->getError('fname') ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for="lname" class="form-label">Last name</label>
                                        <input type="text" value="<?= set_value('lname') ?> " name="lname" class="form-control <?= ($validation->getError('lname')) ? 'is-invalid' : '' ?>" placeholder="Your Last Name">
                                        <?php
                                        if ($validation->getError('lname')) :
                                        ?>
                                            <div class="invalid-feedback"><?= $validation->getError('lname') ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" name="address" value="<?= set_value('address') ?> " class="form-control <?= ($validation->getError('address')) ? 'is-invalid' : '' ?>" placeholder="Your address">
                                        <?php
                                        if ($validation->getError('address')) :
                                        ?>
                                            <div class="invalid-feedback"><?= $validation->getError('address') ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" value="<?= set_value('email') ?> " class="form-control <?= ($validation->getError('email')) ? 'is-invalid' : '' ?>" placeholder="Your Email">
                                        <?php
                                        if ($validation->getError('email')) :
                                        ?>
                                            <div class="invalid-feedback"><?= $validation->getError('email') ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for="contact" class="form-label">Contact</label>
                                        <input type="text" name="contact" value="<?= set_value('contact') ?> " class="form-control <?= ($validation->getError('contact')) ? 'is-invalid' : '' ?>" placeholder="Your contact">
                                        <?php
                                        if ($validation->getError('contact')) :
                                        ?>
                                            <div class="invalid-feedback"><?= $validation->getError('contact') ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for="resume" class="form-label">Resume</label>
                                        <input type="file" name="resume" class="form-control <?= ($validation->getError('resume')) ? 'is-invalid' : '' ?>">
                                        <?php
                                        if ($validation->getError('resume')) :
                                        ?>
                                            <div class="invalid-feedback"><?= $validation->getError('resume') ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for="birth" class="form-label">Date of Birth</label>
                                        <input type="date" value="<?= set_value('date_of_birth') ?> " name="date_of_birth" class="form-control <?= ($validation->getError('birth')) ? 'is-invalid' : '' ?>">
                                        <?php
                                        if ($validation->getError('birth')) :
                                        ?>
                                            <div class="invalid-feedback"><?= $validation->getError('birth') ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for="gender" class="form-label <?= ($validation->getError('gender')) ? 'is-invalid' : '' ?>">Gender</label>
                                        <select name="gender" class="form-control">
                                            <option selected>Select Your Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <?php
                                        if ($validation->getError('gender')) :
                                        ?>
                                            <div class="invalid-feedback"><?= $validation->getError('gender') ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <input type="hidden" value="New" name="status">
                                    <input type="hidden" value="<?php echo $vacancy['position']; ?>" name="position">
                                    <input type="hidden" value="<?php echo $vacancy['job_nature']; ?>" name="job_nature">
                                    <div class="col-12">
                                        <label for="letter" class="form-label <?= ($validation->getError('letter')) ? 'is-invalid' : '' ?>">Coverletter</label>
                                        <textarea name="cover_letter" id="cover_letter" class="form-control" rows="3">Write your Coverletter</textarea>
                                        <script>
                                            CKEDITOR.replace('cover_letter');
                                        </script>
                                        <?php
                                        if ($validation->getError('letter')) :
                                        ?>
                                            <div class="invalid-feedback"><?= $validation->getError('letter') ?></div>
                                        <?php endif; ?>
                                    </div>
                                  
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Job Summery</h4>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On:   <?php echo $vacancy['publish_date']; ?></p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy:   <?php echo $vacancy['number_of_vacancy']; ?> Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature:   <?php echo $vacancy['job_nature']; ?></p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary:   <?php echo $vacancy['salary']; ?></p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location:  <?php echo $vacancy['address']; ?></p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line:   <?php echo $vacancy['deadline_date']; ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">HRMS</a>, All Right Reserved.
                            Designed By Sai pali first batch.
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <?= script_tag("public/lib/wow/wow.min.js") ?>
    <?= script_tag("public/lib/easing/easing.min.js") ?>
    <?= script_tag("public/lib/waypoints/waypoints.min.js") ?>
    <?= script_tag("public/lib/owlcarousel/owl.carousel.min.js") ?>
    <?= script_tag("public/js/main.js") ?>

</body>

</html>