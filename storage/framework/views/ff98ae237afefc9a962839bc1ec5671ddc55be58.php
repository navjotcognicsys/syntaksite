<!doctype html>
<html lang="en">
<head>
    <!----------------------   Site Title  -------------------->
    <title> <?php echo $__env->yieldContent('title'); ?> </title> 
    <!----------------------   Site Title  -------------------->

    <!----------------------    Meta Links  -------------------->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description'); ?>">
    <!----------------------    Meta Links  -------------------->
   <!----------------------    Style Links List  -------------------->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/boxicons.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/meanmenu.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">

    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/favicon.png')); ?>">
    <!----------------------    Careers page style and js  -------------------->

     <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/asset_career/css/bootstrap-grid.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/asset_career/css/icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/asset_career/css/animate.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/asset_career/css/style.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/asset_career/css/responsive.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/asset_career/css/chosen.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/asset_career/css/colors/colors.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/asset_career/css/bootstrap.css')); ?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" /> -->

    <!----------------------    Style Links List  -------------------->

    <!-------------------       Animation Css     -------- -------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-------------------       Animation Css     -------- -------------->

    <!-------------------       Bootstrap Links     -------- -------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-------------------       Bootstrap Links     -------- -------------->

    <!-------------------       Styling     -------- -------------->
    <style>
        .FDSJKH{
            font-family: 'Roboto';
            color:#21d2f2;
            font-size:59px;
        } 
        .responsive{
            height:100%;
            width:auto;
        }
        .infr{
        padding-bottom:79px;
        }
        .buss{
            padding-bottom:41px;
        }
        .one{
            padding-bottom:50px;
        }
        .thre{
            padding-bottom:256px;
        }
        .ic{
            color:#31c0c2;
            font-size:43px;
            Background-color:#e5f3ff;
            box-sizing: border-box;
            border-radius:16px;
        }

        .icc{
            text-align:center;
        }

        .ic:hover {
            color:#e5f3ff;
            background-color:#31c0c2;
        }

        .social-btns .btn:before {
            top: 90%;
            left: -110%;
        }

        .social-btns .btn .fa {
            transform: scale(0.8);
        }

        .social-btns .btn.facebook:before {
            background-color: #3b5998;
        }

        .social-btns .btn.facebook .fa {
            color: #3b5998;
        }

        .social-btns .btn.twitter:before {
            background-color: #3cf;
        }

        .social-btns .btn.twitter .fa {
            color: #3cf;
        }

        .social-btns .btn.google:before {
            background:linear-gradient(45DEG, #405DE6, #5851DB, #833ab4, #c13584, #e1306c , #fd1d1f)
        }

        .social-btns .btn.google .fa {
            color: #bc2a8d;
        }

        .social-btns .btn.dribbble:before {
            background-color: #f26798;
        }

        .social-btns .btn.dribbble .fa {
            color: #f26798;
        }

        .social-btns .btn.skype:before {
            background-color: #00aff0;
        }

        .social-btns .btn.skype .fa {
            color: #00aff0;
        }

        .social-btns .btn:focus:before,
        .social-btns .btn:hover:before {
            top: -10%;
            left: -10%;
        }

        .social-btns .btn:focus .fa,
        .social-btns .btn:hover .fa {
            color: #fff;
            transform: scale(1);
        }

        .social-btns {
            height: 90px;
            margin: auto;
            font-size: 0;
            text-align: center;
            position: absolute;
            top: 319px;
            bottom: 0;
            left: 0;
            right: 0;
        }

        @media  only screen and (max-width: 600px) {
            .social-btns {
                height: 90px;
                margin: auto;
                font-size: 0;
                text-align: center;
                position: absolute;
                top: 366px;
                bottom: 0;
                left: 0;
                right: 0;
            }
        }
        .social-btns .btn {
            display: inline-block;
            background-color: #fff;
            width: 50px;
            height: 50px;
            line-height: 32px;
            margin: 0 10px;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-radius: 28%;
            box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
            opacity: 0.99;
        }

        .social-btns .btn:before {
            content: '';
            width: 120%;
            height: 120%;
            position: absolute;
            transform: rotate(45deg);
        }

        .social-btns .btn .fa {
            font-size: 38px;
            vertical-align: middle;
        }
        .disk{
            list-style-type:disc;  
        }
    </style>
    <!-------------------       Styling     -------- -------------->

    <!-------------------       Global site tag (gtag.js) - Google Analytics      -------- -------------->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8NH59LREDY"></script>
    <!-------------------       Global site tag (gtag.js) - Google Analytics      -------- -------------->

    <!-------------------       G Tag Script      -------- -------------->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-8NH59LREDY');
    </script>
    <!-------------------       G Tag Script      -------- -------------->

</head>
<body>

    <!-------------------       Site Preloader      -------- -------------->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
    <!-------------------       Site Preloader      -------- -------------->

    <!-------------------       Navbar Menu      -------- -------------->
    <div class="navbar-area">
        <div class="mobile-nav">
            <a href="<?php echo e(route('home')); ?>" class="logo">
                <img src="<?php echo e(asset('assets/images/logos/logo-1.png')); ?>" alt="Company Logo" height="39px" width="auto">
            </a>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <div class="container-max">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                            <img src="<?php echo e(asset('assets/images/logos/logo-1.png')); ?>" alt="Company Logo" height="35px" width="auto">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('home')); ?>"  class="<?php echo e(Request::is('home') ? 'nav-link active' : ''); ?>">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('about')); ?>" class="<?php echo e(Request::is('about') ? 'nav-link active' : ''); ?>">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('service')); ?>" class="<?php echo e(Request::is('service') ? 'nav-link active' : ''); ?>">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('blog')); ?>" class="<?php echo e(Request::is('blog') ? 'nav-link active' : ''); ?>">
                                        Blog
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('careers_page')); ?>" class="<?php echo e(Request::is('careers-page') ? 'nav-link active' : ''); ?>">
                                        Careers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(url('/contact')); ?>" class="<?php echo e(Request::is('contact') ? 'nav-link active' : ''); ?>">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="side-nav-responsive">
            <div class="container-max">
                <div class="dot-menu">
                    <div class="circle-inner">
                        <div class="in-circle circle-one"></div>
                        <div class="in-circle circle-two"></div>
                        <div class="in-circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="side-nav-inner">
                        <div class="side-nav justify-content-center align-items-center">
                            <div class="side-nav-item nav-side">
                                <div class="search-box">
                                    <i class='bx bx-search'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------       Navbar Menu      -------- -------------->
        
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-layer"></div>
                <div class="search-layer"></div>
                <div class="search-layer"></div>
                <div class="search-close">
                    <span class="search-close-line"></span>
                    <span class="search-close-line"></span>
                </div>
                <div class="search-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                </div>
            </div> 
        </div>
    </div>
    <?php echo $__env->yieldContent('content_section'); ?>

    <!-------------------      Footer Section      -------- -------------->
    <footer class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top pt-100 pb-70">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="<?php echo e(route('home')); ?>">
                                    <img src="<?php echo e(asset('assets/images/logos/footer-logo.png')); ?>" alt="Images" height="50px" width="auto">
                                </a>
                            </div>
                            <p>
                                Syntax Mantra is the only mantra that frames your business with a unique code of advanced technology, transformation, and innovation. Syntax Mantra moves ahead as a software development company that transforms business with its unique Coding Mantra and makes any business stand in the crowd followed by loyalty, transparency, and trust.
                            </p>
                            <div class="footer-call-content">
                                <h3>Talk to Our Support</h3>
                                <span><a href="tel:+91 9589501036">+91 9589501036</a></span>
                                <i class='bx bx-headphone'></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget pl-2">
                            <h3>Services</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="<?php echo e(route('webdevelopment')); ?>" target="_blank">
                                        <i class='bx bx-chevron-right'></i>
                                        Web Development
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('mobiledevelopment')); ?>" target="_blank">
                                        <i class='bx bx-chevron-right'></i>
                                        Mobile Development
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('UIUXproto')); ?>" target="_blank">
                                        <i class='bx bx-chevron-right'></i>
                                        Ui/Ux Prototyping
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('graphicdesignproto')); ?>" target="_blank">
                                        <i class='bx bx-chevron-right'></i>
                                        Graphic Designing Prototyping
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('digitalmarketing')); ?>" target="_blank">
                                        <i class='bx bx-chevron-right'></i>
                                        Digital Marketing
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('retailbranding')); ?>" target="_blank">
                                        <i class='bx bx-chevron-right'></i>
                                        Retail Branding
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="content">
                                <br><br><br>
                                <!-- <p style="text-align: center;"> Visit</p> -->
                                <p> <a> 2nd Floor, Scheme No. 54, Plot. 76, PU-4 Indore (M.P) - 452010</a></p>
                                <!-- <span>10 Dec 2020</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget pl-5">
                            <h3>Our Blog</h3>
                            <ul class="footer-blog">
                                <li>
                                    <a href="#">
                                        <img src="<?php echo e(asset('assets/images/blog/blog-img-footer.jpg')); ?>" alt="Images" height="51px">
                                    </a>
                                    <div class="content">
                                        <h3><a href="#">Product Idea Solution For New Generation</a></h3>
                                        <span>04 Dec 2020</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo e(asset('assets/images/blog/blog-img-footer2.jpg')); ?>" alt="Images">
                                    </a>
                                    <div class="content">
                                        <h3><a href="#">New Device Invention for Digital Platform</a></h3>
                                        <span>07 Dec 2020</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo e(asset('assets/images/blog/blog-img-footer3.jpg')); ?>" alt="Images">
                                    </a>
                                    <div class="content">
                                        <h3><a href="#">Business Strategy Make His Goal Acheive</a></h3>
                                        <span>10 Dec 2020</span>
                                    </div>
                                </li>
                             </ul>
                            <div class="icc">
                                <div class="social-btns">
                                    <a class="btn facebook" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn twitter" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn google" href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a class="btn skype" href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                         </div> 
                    </div>
                </div>
            </div>
            <div class="copy-right-area">
                <div class="copy-right-text">
                    <p>
                        Copyright ©2021. All Rights Reserved by
                        <a href="<?php echo e(route('home')); ?>" target="_blank">Syntax Mantra Technologies
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-------------------      Footer Section      -------- -------------->

    <!-------------------      Script Links Section      -------- -------------->
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/meanmenu.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.ajaxchimp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/form-validator.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/contact-form-script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <!-------------------      Script Links Section      -------- -------------->

</body>
</html><?php /**PATH C:\xampp\htdocs\Syntax_site\resources\views/components/app-layout.blade.php ENDPATH**/ ?>