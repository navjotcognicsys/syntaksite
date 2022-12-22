<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

<!--Add Site Title Here -->

<?php $__env->startSection('title'); ?>
        Best IT Support Services in Indore | Syntax Mantra
    <?php $__env->stopSection(); ?>
<!--Add Meta Description Here -->

    <?php $__env->startSection('meta_description'); ?>
    Syntax Mantra is an IT Service Provider where we offer the best IT Support Services in Indore to all businesses to build, transform, & enhance their digital needs
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content_section'); ?>
    <section>
        <div class="banner-area-two">
            <div class="container-fluid">
                <div class="container-max">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="banner-content">
                                <h1> IT Service With Excellent Quality With Syntax Mantra</h1>
                                <!-- <p>
                                Web Design & Development To make you fast, Let us work smart. It’s not just about designing a usual web design, it’s all about reflecting your business alive. Syntax Mantra thrives to make your audience’s digital appearance beyond their expectations. Our web design and development services follow the strategize process to make your business shine on the web.
                            </p> -->
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img src="<?php echo e(asset('assets/images/home-three/home-three-img.png')); ?>" alt="Images">
                                <div class="banner-img-shape">
                                    <img src="<?php echo e(asset('assets/images/home-three/home-three-shape.png')); ?>" alt="Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="banner-sub-slider owl-carousel owl-theme">
                    <div class="banner-sub-item">
                        <img src="<?php echo e(asset('assets/images/home-three/home-three-sub1.jpg')); ?>" alt="Images">
                        <div class="content">
                            <h3>200+</h3>
                            <span>Satisfied Clients</span>
                        </div>
                    </div>
                    <div class="banner-sub-item">
                        <img src="<?php echo e(asset('assets/images/home-three/home-three-sub2.jpg')); ?>" alt="Images">
                        <div class="content">
                            <h3>10+</h3>
                            <span>Country Worldwide</span>
                        </div>
                    </div>
                    <div class="banner-sub-item">
                        <img src="<?php echo e(asset('assets/images/home-three/home-three-sub3.jpg')); ?>" alt="Images">
                        <div class="content">
                            <h3>500+</h3>
                            <span>Project Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
    <div class="section-title text-center">
        <span class="sp-color2">Our Services</span>
        <h2>What We Provoid</h2>
        <p class="margin-auto">
            Web Design & Development To make you fast, Let us work smart. It’s not just about designing a usual web design, it’s all about reflecting your business alive. Syntax Mantra thrives to make your audience’s digital appearance beyond their expectations. Our web design and development services follow the strategize process to make your business shine on the web.
        </p>

    </div>
    </section> -->

    <section class="services-style-area pt-100 pb-70">
        <div class="container">
            <!-- <div class="section-title text-center">
                <br>
                <h2>Web Development</h2>
                <hr>
            </div> -->
            <div class="row pt-45">
                <div class="col-lg-12 col-sm-6">
                    <div class="services-card services-style-bg">
                        <i class="flaticon-consultant"></i>
                        <div class="row">
                            <div class="col-md-5">
                                <h3><a href="<?php echo e(route('webdevelopment')); ?>">Web Development</a> </h3>
                            </div>
                            <div class="col-md-5">
                                <img src="<?php echo e(asset('assets/images/services/webdev.png')); ?>" height="90px" width="auto">
                            </div>
                        </div>
                        <p>Web development, often known as website development, involved in the creation, construction, and maintenance of websites and web applications. </p>
                    </div>
                </div>

                <!-- <div class="section-title text-center">
                    <br>
                    <h2>App Development</h2>
                    <hr>  
                </div> -->
                <div class="col-lg-12 col-sm-6">
                    <div class="services-card services-style-bg">
                        <i class="flaticon-stats"></i>
                        <div class="row">
                            <div class="col-md-5">
                                <h3><a href="<?php echo e(route('mobiledevelopment')); ?>">Mobile Development </a> </h3>
                            </div>
                            <div class="col-md-5">
                                <img src="<?php echo e(asset('assets/images/services/iconss.png')); ?>" height="90px" width="auto">
                            </div>
                        </div>
                        <p>Syntax Mantra has created ideal MVP solutions for growth-oriented firms, resulting in funding from top investors.</p>
                    </div>
                </div>

                <!--                
                <div class="section-title text-center">
                    <br>
                    <h2>App Development</h2>
                    <hr>  
                </div> -->
                <div class="col-lg-12 col-sm-6">
                    <div class="services-card services-style-bg">
                        <i class="flaticon-computer"></i>
                        <div class="row">
                            <div class="col-md-5">
                                <h3><a href="<?php echo e(route('UIUXproto')); ?>">UI/UX Prototyping </a> </h3>
                            </div>
                            <div class="col-md-5">
                                <img src="<?php echo e(asset('assets/images/services/webdev.png')); ?>" height="90px" width="auto">
                            </div>
                        </div>
                        <p>A prototype tool allows a designer to weave together images, navigational components, and interactions to create a concrete depiction.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6">
                    <div class="services-card services-style-bg">
                        <i class="flaticon-web-development"></i>
                        <div class="row">
                            <div class="col-md-5">
                                <h3><a href="<?php echo e(route('graphicdesignproto')); ?>">Graphic Designing Prototyping </a> </h3>
                            </div>
                            <div class="col-md-5">
                                <img src="<?php echo e(asset('assets/images/services/webdev.png')); ?>" height="90px" width="auto">
                            </div>
                        </div>
                        <p>Prototyping is an experimental process in which design teams turn ideas from paper to digital into tangible objects. </p>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6">
                    <div class="services-card services-style-bg">
                        <i class="flaticon-structure"></i>
                        <div class="row">
                            <div class="col-md-5">
                                <h3><a href="<?php echo e(route('digitalmarketing')); ?>">Digital Marketing </a> </h3>
                            </div>
                            <div class="col-md-5">
                                <img src="<?php echo e(asset('assets/images/services/webdev.png')); ?>" height="90px" width="auto">
                            </div>
                        </div>
                        <p>Syntax Mantra Internet Marketing Business is a dynamic, adaptable, full-service digital marketing agency that does not rely on gimmicks to attract new clients.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6">
                    <div class="services-card services-style-bg">
                        <i class="flaticon-data-analytics"></i>
                        <div class="row">
                            <div class="col-md-5">
                                <h3><a href="<?php echo e(route('retailbranding')); ?>">Retail Branding </a> </h3>
                            </div>
                            <div class="col-md-5">
                                <img src="<?php echo e(asset('assets/images/services/webdev.png')); ?>" height="90px" width="auto">
                            </div>
                        </div>
                        <p>Syntax Mantra Technologies offers Retail branding as a brand-based approach in which a retailer's "products" are his storefronts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="talk-area-two ptb-100">
            <div class="container">
                <div class="talk-content text-center">
                    <div class="section-title text-center">
                        <span class="sp-color1">Let's Talk</span>
                        <h2>We're adding a variety of it services to help you succeed.</h2>
                    </div>
                    <a href="<?php echo e(url('/contact')); ?>" class="default-btn btn-bg-one border-radius-5">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    
    <div class="faq-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center"><br><br>
                <h2>A Life Cycle For Product Development</h2>
                <p class="margin-auto">The Software Development Life Cycle (SDLC) is a method for designing, developing, and testing high-quality software .</p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-6">
                    <div class="faq-content">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-minus'></i>
                                        What is a Managed Security Services?
                                    </a>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        What is a Data Analysis?
                                    </a>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        How Can Make Secure My Website?
                                    </a>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        What is a Infrastructure?
                                    </a>
                                    <div class="accordion-content show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-content">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        How Can We Help Your Business?
                                    </a>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        Why It Staff Management?
                                    </a>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        How Working Process Is Simplified?
                                    </a>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        Product Engineering & Services?
                                    </a>
                                    <div class="accordion-content show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                            dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Syntax_site\resources\views/pages/services.blade.php ENDPATH**/ ?>