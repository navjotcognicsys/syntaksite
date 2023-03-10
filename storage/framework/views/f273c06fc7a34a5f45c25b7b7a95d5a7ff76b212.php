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
    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Careers</h3>
                <ul>
                    <li>
                        <a href="<?php echo e(url('/')); ?>" class="nav-link ">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li><a href="<?php echo e(route('careers_page')); ?>" class="nav-link ">Careers</a></li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li>Digital marekting</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="<?php echo e(asset('assets/images/shape/inner-shape.png')); ?>" alt="Images">
        </div>
    </div>
    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 column">
                        <div class="job-single-sec">
                            <div class="job-single-head2">
                                <div class="job-title2">
                                    <h3>Digital marekting executive </h3><span class="job-is ft">Full time</span>
                                </div>
                                <ul class="tags-jobs">
                                    <li><i class="la la-map-marker"></i> Indore, India</li>
                                    <li><i class="la la-money"></i> Monthly Salary : <span>Best In the Industry</span></li>
                                    <!-- <li><i class="la la-calendar-o"></i> Post Date: J</li> -->
                                </ul>
                                <span><strong>Roles</strong> : Digital marekting executive </span>
                            </div><!-- Job Head -->
                            <div class="job-details">
                                <h3> Digital Marketing Executive duties and responsibilities</h3>
                                <ul>
                                    <li> Build, plan and implement the overall digital marketing strategy</li>
                                    <li>Manage the strategy</li>
                                    <li> Manage and train the rest of the team</li>
                                    <li> Stay up to date with the latest technology and best practices
                                    </li>
                                    <li>Manage all digital marketing channels</li>
                                    <li> Measure ROI and KPIs</li>
                                    <li>Prepare and manage a digital marketing budget</li>
                                    <li> Oversee all the company's social media accounts</li>
                                    <li> Manage and improve online content, considering SEO and Google Analytics</li>
                                    <li> Build an inbound marketing plan</li>
                                    <li> Forecast sales performance trends</li>
                                    <li> Motivate the digital marketing team to achieve goals
                                    </li>
                                    <li> Monitor competition and provide suggestions for improvement
                                    </li>
                                </ul>
                                <h3>Digital Marketing Executive requirements</h3>
                                <ul>
                                    <li> 1-3 years of experience as a Digital Marketing Executive
                                    </li>
                                    <li> 1-3 years of experience in developing and implementing digital marketing strategies</li>
                                    <li> Good knowledge of all different digital marketing channels</li>
                                    <li> Good knowledge and experience with online marketing tools and best practices</li>
                                    <li> min 1years of hands-on experience with SEO/SEM, Google Analytics and CRM software</li>
                                    <li>Familiarity with web design</li>
                                    <li> Sense of ownership and pride in your performance and its impact on a company???s success</li>
                                    <li> Critical thinker and problem-solving skills</li>
                                    <li> Team player</li>
                                    <li> Good time-management skills</li>
                                    <li> Great interpersonal and communication skills
                                    </li>
                                </ul>

                            </div>
                            <div class="job-overview">
                                <h3>Job Overview</h3>
                                <ul>
                                    <li><i class="la la-money"></i>
                                        <h3>Offerd Salary</h3><span> Hike on last CTC </span>
                                    </li>
                                    <li><i class="la la-mars-double"></i>
                                        <h3>Gender</h3><span>Male/Female</span>
                                    </li>
                                    <li><i class="la la-thumb-tack"></i>
                                        <h3>Career Level</h3><span>Executive</span>
                                    </li>
                                    <li><i class="la la-puzzle-piece"></i>
                                        <h3>Industry</h3><span>IT</span>
                                    </li>
                                    <li><i class="la la-shield"></i>
                                        <h3>Experience</h3><span>1 to 3 Years</span>
                                    </li>
                                    <li><i class="la la-line-chart "></i>
                                        <h3>Qualification</h3><span>Bachelor Degree</span>
                                    </li>
                                </ul>
                            </div><!-- Job Overview -->
                            <!-- <div class="share-bar">
				 				<span>Share</span><a href="#" title="" class="share-fb"><i class="fa fa-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="fa fa-twitter"></i></a>
				 			</div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="job-single-head style2">
                            <div class="job-thumb"> <img src="<?php echo e(asset('assets/images/logos/logo-01.png')); ?>" alt="" height="118px" /> </div>
                            <div class="job-head-info">
                                <h4>Syntax Mantra</h4>
                                <span>289 Orbitto Mall Near C21 Mall Indore</span>
                                <p><i class="la la-unlink"></i> www.syntaxmantra.com</p>
                                <p><i class="la la-phone"></i> +91 9589501036</p>
                                <p><i class="la la-envelope-o"></i> hr@syntaxmantra.com</p>
                            </div>
                            <a href="#" title="" class="apply-job-btn" data-toggle="modal" data-target="#exampleModal"><i class="la la-paper-plane"></i>Apply for job</a>
                            <a href="https://www.linkedin.com/company/syntax-mantra-tecchnologies/" title="" class="apply-job-linkedin"><i class="fa fa-linkedin"></i>Apply with Linkedin</a>
                            <a href="<?php echo e(route('careers_page')); ?>" title="" class="viewall-jobs">View all Jobs</a>
                        </div><!-- Job Head -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apply For Digital Marketing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Your Name <span>*</span></label>
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Your Email <span>*</span></label>
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phone Number <span>*</span></label>
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Current Status<span>*</span></label>
                                            <select class="form-control">
                                                <option>Select Status</option>
                                                <option>Fresher</option>
                                                <option>Experienced</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Upload Your Resume <span>*</span></label>
                                            <input type="file" class="form-control">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Your Message <span>*</span></label>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                            Send Message <i class='bx bx-chevron-right'></i>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Syntax_site\resources\views/pages/digital-marketing-careers.blade.php ENDPATH**/ ?>