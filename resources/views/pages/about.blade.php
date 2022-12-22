<x-app-layout>
<!--Add Site Title Here -->

    @section('title')
        Best IT Support Services in Indore | Syntax Mantra
    @endsection
<!--Add Meta Description Here -->

    @section('meta_description')
    About Page
    @endsection

<!-- Button trigger modal -->

    @section('content_section')
    <div class="modal fade"  id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog model-sm">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <!-- <div class="col-md-6"> -->
                    <div class="col-lg-8">
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
                                                <label>Your Subject <span>*</span></label>
                                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
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
                                        <div class="col-lg-12 col-md-12">
                                            <div class="agree-label">
                                                <input type="checkbox" id="chb1">
                                                <label for="chb1">
                                                    Accept <a href="https://www.business-standard.com/terms-conditions">Terms & Conditions</a> And <a href="https://www.business-standard.com/terms-conditions">Privacy Policy.</a>
                                                </label>
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
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
            </div>
        </div>
    </div>

<!-- Button trigger modal -->

    <div class="about-area ptb-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="about-play">
                        <img src="{{asset('assets/images/about/it-solutions.png')}}" alt="About Images">
                        <div class="about-play-content">
                            <span>Watch Our Intro Video</span>
                            <h2>Perfect Solution for IT Services!</h2>
                            <!--<div class="play-on-area">-->
                            <!--    <a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-on popup-btn"><i class='bx bx-play'></i></a>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ml-25">
                        <div class="section-title">
                            <span class="sp-color2">Lots of Experience</span>
                            <h2>Our deep insight services</h2>
                            <p>
                                Syntax Mantra intends to code wrap your every desire with our extensive secured services.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <ul class="about-list text-start">
                                    <li><i class='bx bxs-check-circle'></i>We thrive to drive success for our clients.</li>
                                    <li><i class='bx bxs-check-circle'></i>We partner with small and medium-sized enterprises to build, transform, and enhance their digital needs.</li>
                                    <li><i class='bx bxs-check-circle'></i>Your hunt for good people stops here with our over-the-top digital branding and web designing services.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <ul class="about-list text-start about-list-2">
                                    <li><i class='bx bxs-check-circle'></i>Our strategy marks the industry so that you don't have to strive for growth. </li>
                                    <li><i class='bx bxs-check-circle'></i>Success is a journey and let us be your companions to drive you to the destination.</li>
                                    <!-- <li><i class='bx bxs-check-circle'></i>Good Quality Products Services</li> -->
                                </ul>
                            </div>
                        </div>
                        <!-- <p class="about-content-text">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-content mr-20">
                        <div class="section-title">
                            <span class="sp-color1">About Syntax Mantra</span>
                            <h2>We Provide Truly Prominent It Solutions.</h2>
                            <p>Syntax to craft Mantra to relax Syntax Mantra is the only mantra that frames your business with a unique code of advanced technology, transformation, and innovation. Syntax Mantra moves ahead as a software development company that transforms business with its unique Coding Mantra and makes any business stand in the crowd followed by loyalty, transparency, and trust.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class="flaticon-practice"></i>
                                        <h3>What we do!</h3>
                                    </div>
                                    <p>Our true intention is to grow with you. We shake hands with every possible industry and drive the process with smart efforts in order to make any project worthy.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class="flaticon-help"></i>
                                        <h3>What You Have To Do!</h3>
                                    </div>
                                    <p>Just sit back and let us chant this mantra for you and get the desired results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{asset('assets/images/about/aboutsolution.png')}}" alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="security-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2">IT Security & Computing</span>
                <h2>Searching for a Solution! Syntax Mantra Provide Truly Prominent IT Solutions</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-sm-6">
                    <div class="security-card">
                        <i class="flaticon-cyber-security"></i>
                        <h3><a   class="nav-link">Business Solution</a></h3>
                        <p>Your business isn't just a business. It's your way of life, your passion. It's also a form of funds for you and your team. We can create a security solution specifically for you to defend it.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="security-card">
                        <i class="flaticon-computer"></i>  
                        <h3><a  class="nav-link">Manage IT Service</a></h3>
                        <p>SyntaxMantra can handle all of your IT infrastructure components' daily control and reporting, as well as long-term improvement. We manage the complete IT infrastructure or any of its individual units.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="security-card">
                        <i class="flaticon-effective"></i>
                        <h3><a  class="nav-link">Product Analysis</a></h3>
                        <p>Product analysis dissects a product from beginning to end, looking at everything from its components, functions, technology and needs to its marketing materials, websites, and sales strategy.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="security-card">
                        <i class="flaticon-implement"></i>
                        <h3><a href="{{url('/analytic-solution')}}" class="nav-link">Analytic Solution</a></h3>
                        <p>Analytical solutions are represented as arithmetic expressions and demonstrate how characteristics and their interconnections influence the total result. components that are exceptional</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="security-card">
                        <i class="flaticon-consulting"></i>
                        <h3><a  class="nav-link">Finest <br>Quality</a></h3>
                        <p>Finest Quality is the process of determining whether or not a computer system or programme meets the defined requirements and gives the expected results. As you find flaws in the software product or project.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="security-card">
                        <i class="flaticon-consultant"></i>
                        <h3><a  class="nav-link">Risk Management</a></h3>
                        <p>IT risk management, often known as "information security risk management," refers to the policies, processes, and technologies that a corporation employs to decrease information technology .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="brand-area-two ptb-100">
        <div class="container">
            <div class="brand-slider owl-carousel owl-theme">
                <div class="brand-item">
                    <img src="{{asset('assets/images/brand-logo/logo.png')}}" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="{{asset('assets/images/brand-logo/cryptonet-logo.png')}}" alt="Images" height="85px">
                </div>
                <div class="brand-item">
                    <img src="{{asset('assets/images/brand-logo/Nandanvan-New-1.png')}}" alt="Images" height="85px">
                </div>
                <div class="brand-item">
                    <img src="{{asset('assets/images/brand-logo/painfx.png')}}" alt="Images" height="85px">
                </div>
                <div class="brand-item">
                    <img src="{{asset('assets/images/brand-logo/rising.png')}}" alt="Images" height="85px">
                </div>
                <div class="brand-item">
                    <img src="{{asset('assets/images/brand-logo/4pz logo.png')}}" alt="Images" height="85px">
                </div>
                 <div class="brand-item">
                    <img src="{{asset('assets/images/brand-logo/kids.png')}}" alt="Images" height="85px">
                </div>
                 <div class="brand-item">
                    <img src="{{asset('assets/images/brand-logo/3dmini.png')}}" alt="Images" height="85px">
                </div>
                 <div class="brand-item">
                    <img src="{{asset('assets/images/brand-logo/morden.png')}}" alt="Images" height="85px">
                </div>
                <!-- <div class="brand-item">-->
                <!--    <img src="assets/images/brand-logo/4pz logo.png" alt="Images">-->
                <!--</div>-->
            </div>
        </div>
    </div>

    <div class="counter-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2">Numbers Are Talking</span>
                <h2>Syntax Mantra Always coding roots</h2>
                <p>Syntax Mantra is serving various industries with its extremely smart efforts and bringing its clients to the top with professional web design & development, mobile app design & development, and the best digital marketing services in India. With years of experience, the company has marked its footprints with 360-degree online innovative services.</p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-3 col-6 col-md-3">
                    <div class="counter-another-content">
                        <i class="flaticon-web-development"></i>
                        <h3>425+</h3>
                        <span>Delivered Goods</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-md-3">
                    <div class="counter-another-content">
                        <i class="flaticon-consulting-1"></i>
                        <h3>245+</h3>
                        <span>IT Consulting</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-md-3">
                    <div class="counter-another-content">
                        <i class="flaticon-startup"></i>
                        <h3>350+</h3>
                        <span>Fully Launched</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-md-3">
                    <div class="counter-another-content">
                        <i class="flaticon-tick"></i>
                        <h3>655+</h3>
                        <span>Project Completed</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter-shape">
            <div class="shape1">
                <img src="{{asset('assets/images/shape/shape1.png')}}" alt="Images">
            </div>
            <div class="shape2">
                <img src="{{asset('assets/images/shape/shape2.png')}}" alt="Images">
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>