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
      
    <div class="build-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div class="build-content">
                        <div class="section-title">
                            <span>We're equipped with more than just coding skills.</span>
                            <h2>Let's Build Your Website!</h2>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-4 col-md-4">-->
                <!--    <div class="build-btn-area">-->
                <!--        <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Contact Us <i class='bx bx-chevron-right'></i></a>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <div class="row pt-45">
                <div class="col-lg-12">
                    <div class="play-btn-area">
                        <!--<a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="build-play popup-btn"><i class='bx bx-play'></i></a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Let's Send Us a Message Below</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4">
                    <div class="contact-info mr-20">
                        <span>Contact Info</span>
                        <h2>Let's Connect With Us</h2>
                        <p>Let us take charge to take your business to another height. Just fill in your details and our team will connect with you shortly.</p>
                        <ul>
                            <li>
                                <div class="content">
                                    <i class='bx bx-phone-call'></i>
                                    <h3>Phone Number</h3>
                                    <a href="tel:+91 7415252064">+91 7415252064</a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <i class='bx bxs-map'></i>
                                    <h3>Address</h3>
                                    <span>2nd Floor, Scheme No. 54, Plot. 76, PU-4 Indore (M.P) - 452010</span>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <i class='bx bx-message'></i>
                                    <h3>Contact Info</h3>
                                    <a href="mailto:info@syntaxmantra.com"">info@syntaxmantra.com</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form  id="contactFor" action="{{url('/email')}}" method="post">
                        @csrf
                                    @method('POST')
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
                                        <!--<input type="text" >-->
                                        <div class="help-block with-errors"></div>
                                        <select name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject" >
                                            <option value="">--Select Option--</option>
                                            <option value="WebDevelopment">Web Development</option>
                                            <option value="App Develpoment">App Develpoment</option>
                                            <option value="UI/UX">UI/UX</option>
                                            <option value="Graphic Designing">Graphic Designing</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
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
    @endsection
</x-app-layout>