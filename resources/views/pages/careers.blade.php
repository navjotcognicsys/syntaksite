<x-app-layout>
  
    <!--Add Site Title Here -->

    @section('title')
            Best IT Support Services in Indore | Syntax Mantra
        @endsection
    <!--Add Meta Description Here -->

    @section('meta_description')
    Syntax Mantra is an IT Service Provider where we offer the best IT Support Services in Indore to all businesses to build, transform, & enhance their digital needs
    @endsection

    @section('content_section')
      <section>
         <div class="banner-four-area">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="banner-four-content">
                        <span>Syntax Mantra Institute</span>
                        <!--<h1 class="animate__animated animate__zoomInDown  animate__delay-2s"> Exceptional It Services Provider for Your Need</h1>-->
                        <h1 class="FDSJKH animate__animated animate__zoomInDown  animate__delay-2s"><b style="color: #32efcd;">Exceptional It Services</b> Provider for Your Need </h1>
                        <p>
                           Syntax Mantra provide the essential service  in the day-to-day operations of a contemporary business for Web development service.
                        </p>
                        <div class="banner-btn">
                           <a href="" class="default-btn btn-bg-two border-radius-50 ">Get A Quote <i class='bx bx-chevron-right'></i></a>
                           <!--<a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-btn popup-btn ml-20">-->
                           <!--   <i class="bx bx-play"></i>-->
                           <!--   <h3>Watch Video</h3>-->
                           <!--   <span>2 Minutes</span>-->
                           <!--</a>-->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 pe-0">
                     <div class="banner-four-img">
                        <img src="{{asset('assets/images/home-four/home-four-img.png')}}" alt="Images">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="contact-form-area pt-100 pb-70">
            <div class="container">
               <div class="section-title text-center">
                  <h4>INTERESTED TO BE A PART OF THE SYNTAX MANTRA TEAM APPLY NOW !</h4>
               </div>
               <div class="row pt-45">
                  <div class="col-lg-6">
                     <div class="contact-infoo mr-20">
                        <span>Digital Marketing and Training Center</span>
                        <h2>We Are Offering Digital Marketing Placement Course</h2>
                        <p>Great news for job seekers as well as for working professionals. Syntax Mantra is going to start a training program for Digital Marketing. Salient features of the program are listed below:</p>
                        <ul>
                            <li>
                                <div class="content">
                                    <h3> Training Duration: 60 days + 1 Month Live Project</h3>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <h3>Training Approach: Practical Based</h3>
                                </div>
                            </li>
                             <li>
                                <div class="content">
                                    <h3> Working on the live project(s) for a duration of 1 Month</h3>
                                </div>
                            </li>
                             <li>
                                <div class="content">
                                    <h3> Training from 5+ years experienced trainer</h3>
                                </div>
                            </li>
                             <li>
                                <div class="content">
                                    <h3> Problem-solving sessions</h3>
                                </div>
                            </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="contact-form">
                        <form  id="contactFor" action="{{url('/email')}}" method="post">
                           @csrf
                           @method('POST')
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label>Your First Name <span>*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your First Name" placeholder="First Name">
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label>Your Last Name <span>*</span></label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" required data-error="Please Enter Your Last Name" placeholder="Last Name">
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
                              <!--<div class="col-lg-12">-->
                              <!--   <div class="form-group">-->
                              <!--      <label>Your Subject <span>*</span></label>-->
                                    <!--<input type="text" >-->
                              <!--      <div class="help-block with-errors"></div>-->
                              <!--      <select name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject" >-->
                              <!--         <option value="">--Select Option--</option>-->
                              <!--         <option value="WebDevelopment">Web Development</option>-->
                              <!--         <option value="App Develpoment">App Develpoment</option>-->
                              <!--         <option value="UI/UX">UI/UX</option>-->
                              <!--         <option value="Graphic Designing">Graphic Designing</option>-->
                              <!--         <option value="Digital Marketing">Digital Marketing</option>-->
                              <!--         <option value="Other">Other</option>-->
                              <!--      </select>-->
                              <!--   </div>-->
                              <!--</div>-->
                              <div class="col-lg-12 col-md-12">
                                 <div class="form-group">
                                    <label>Your Message <span>*</span></label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-lg-12 ">
                                 <div class="form-group">
                                    <label>How Did You Hear About Us?</label><br>
                                    <input type="radio" id="Google" name="Hear" value="Google">
                                    <label for="Google">Google</label>
                                    <input type="radio" id="linkedin" name="Hear" value="linkedin">
                                    <label for="linkedin">linkedin</label>
                                    <input type="radio" id="Facebook" name="Hear" value="Facebook">
                                    <label for="Facebook">Facebook</label>
                                    <input type="radio" id="Instagram" name="Hear" value="Instagram">
                                    <label for="Instagram">Instagram</label>
                                    <input type="radio" id="Friend-Suggested" name="Hear" value="Friend-Suggested">
                                    <label for="Friend-Suggested">Friend Suggested</label>
                                    <input type="radio" id="Other" name="Hear" value="Other">
                                    <label for="Other">Other</label>
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
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="block">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="heading">
                        <h2>Our Hiring Process</h2>
                        <span>As we strive to create a more sustainable future, we are always looking for new colleagues to join us in powering the answer. Regardless of the outcome, we strive to make the hiring process a positive and professional experience for everyone involved. We have defined the various processes in our recruitment process below in order to better prepare you and give you with all required information.
                        </span>
                     </div>
                     <!-- Heading -->
                     <div class="how-to-sec">
                        <div class="how-to">
                           <span class="how-icon"><i class="la la-user"></i></span>
                           <h3>Share Your Resume </h3>
                           <p>Having someone recommend you or advocate for you can be as helpful as getting a referral or having someone vouch for you.</p>
                        </div>
                        <div class="how-to">
                           <span class="how-icon"><i class="la la-file-archive-o"></i></span>
                           <h3>Telephonic Round</h3>
                           <p>You must believe you are the best to be a great champion. If you aren't, act as if you are. </p>
                        </div>
                        <div class="how-to">
                           <span class="how-icon"><i class="la la-list"></i></span>
                           <h3>Walk-In-Interview</h3>
                           <p>We’re not just recruiting employees, but we are sowing the seeds of our reputation.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="block">
            <hr>
            <br><br><br>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="heading">
                        <h2>Featured Jobs</h2>
                        <span>Leading Employers already using job and talent.</span>
                     </div>
                     <!-- Heading -->
                     <div class="job-listings-sec">
                        <div class="job-listing">
                           <div class="job-title-sec">
                              <div class="c-logo"> <img src="{{asset('assets/images/services/4.png')}}" alt="" height="98" width="51"/> </div>
                              <h3><a href="{{url('/full_stack_dev')}}" title="">Full Stack Developer</a></h3>
                              <!-- <span>Massimo Artemisis</span> -->
                           </div>
                           <span class="job-lctn"><i class="la la-map-marker"></i>Indore, India</span>
                           <span class="fav-job"></span>
                           <span class="job-is ft">FULL TIME</span>
                        </div>
                        <!-- Job -->
                        <div class="job-listing">
                           <div class="job-title-sec">
                              <div class="c-logo"> <img src="{{asset('assets/images/services/5.png')}}" alt=""  height="98" width="51"/> </div>
                              <h3><a href="{{url('/wordpress_dev')}}" title="">Wordpress Developer</a></h3>
                              <!-- <span>MediaLab</span> -->
                           </div>
                           <span class="job-lctn"><i class="la la-map-marker"></i>Indore, India</span>
                           <span class="fav-job"></span>
                           <span class="job-is ft">Intern</span>
                        </div>
                        <!-- Job -->
                        <div class="job-listing">
                           <div class="job-title-sec">
                              <div class="c-logo"> <img src="{{asset('assets/images/services/3.png')}}" alt=""  height="98" width="51"/> </div>
                              <h3><a href="{{url('/digitalmarketingcareers')}}" title="">Digital Marketing Senior</a></h3>
                              <!-- <span>Tix Dog</span> -->
                           </div>
                           <span class="job-lctn"><i class="la la-map-marker"></i>Indore, India</span>
                           <span class="fav-job"></span>
                           <span class="job-is pt">Intern</span>
                        </div>
                        <!-- Job -->
                        <div class="job-listing">
                           <div class="job-title-sec">
                              <div class="c-logo"> <img src="{{asset('assets/images/services/2.png')}}" alt=""  height="98" width="51"/> </div>
                              <h3><a href="{{url('/graphic_designer')}}" title="">Graphic Designer </a></h3>
                              <!-- <span>StarHealth</span> -->
                           </div>
                           <span class="job-lctn"><i class="la la-map-marker"></i>Indore, India</span>
                           <span class="fav-job"></span>
                           <span class="job-is ft">FULL TIME</span>
                        </div>
                        <!-- Job -->
                        <div class="job-listing">
                           <div class="job-title-sec">
                              <div class="c-logo"> <img src="{{asset('assets/images/services/1.png')}}" alt="" height="98" width="51" /> </div>
                              <h3><a href="{{url('/Bussiness_dev')}}" title="">Bussiness Development Executive</a></h3>
                              <!-- <span>Altes Bank</span> -->
                           </div>
                           <span class="job-lctn"><i class="la la-map-marker"></i>Indore, India</span>
                           <span class="fav-job"></span>
                           <span class="job-is fl">Full Time</span>    
                        </div>
                        <!-- Job -->
                        <div class="job-listing">
                           <div class="job-title-sec">
                              <div class="c-logo"> <img src="{{asset('assets/images/services/3.png')}}" alt="" height="98" width="51" /> </div>
                              <h3><a href="{{url('/uiux')}}" title="">Ui/Ux Designer</a></h3>
                              <!-- <span>Vincent</span> -->
                           </div>
                           <span class="job-lctn"><i class="la la-map-marker"></i>Indore, India</span>
                           <span class="fav-job"></span>
                           <span class="job-is tp">Full Time</span>
                        </div>
                        <!-- Job -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="block">
            <div data-velocity="-.1" style="background: url(careers/images/resource/parallax3.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
            <!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="heading">
                        <h2>Quick Career Tips</h2>
                        <span>Found by employers communicate directly with hiring managers and recruiters.</span>
                     </div>
                     <!-- Heading -->
                     <div class="blog-sec">
                        <div class="row">
                           <div class="col-lg-4">
                              <div class="my-blog">
                                 <div class="blog-thumb">
                                    <a href="#" title=""><img src="{{asset('careers/images/resource/b1.jpg')}}" alt="" /></a>
                                    <div class="blog-metas">
                                       <a href="#" title="">March 29, 2017</a>
                                       <a href="#" title="">0 Comments</a>
                                    </div>
                                 </div>
                                 <div class="blog-details">
                                    <h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>
                                    <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                    <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="my-blog">
                                 <div class="blog-thumb">
                                    <a href="#" title=""><img src="{{asset('careers/images/resource/b2.jpg')}}" alt="" /></a>
                                    <div class="blog-metas">
                                       <a href="#" title="">March 29, 2017</a>
                                       <a href="#" title="">0 Comments</a>
                                    </div>
                                 </div>
                                 <div class="blog-details">
                                    <h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
                                    <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                    <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="my-blog">
                                 <div class="blog-thumb">
                                    <a href="#" title=""><img src="{{asset('careers/images/resource/b3.jpg')}}" alt="sdf" /></a>
                                    <div class="blog-metas">
                                       <a href="#" title="">March 29, 2017</a>
                                       <a href="#" title="">0 Comments</a>
                                    </div>
                                 </div>
                                 <div class="blog-details">
                                    <h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
                                    <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                    <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @endsection
</x-app-layout>