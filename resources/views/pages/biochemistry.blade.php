@extends('layouts.landingpage')
<style>
    .image-container img {
        width: 100%;
        /* Default for smaller screens */
        height: auto;
        /* Maintain aspect ratio */
    }

    @media (min-width: 768px) {
        .image-container img {
            width: 60%;
            /* For larger screens (desktops) */
        }
    }
</style>

@section('content')
<div style="text-align: center;" class="image-container">
    <img src="/img/clncl-biochem.png" style="padding: 50px;" />

</div>

<section>


    <!-- <div class="section-title">
                <h2>Directory of Services</h2>
                <img src="img/section-img.png" alt="#">
                
            </div> -->

    <div class="form-container" style="margin-top: 5%;">
        <h2 style="text-align: center; color: white;">Directory of Services</h2>
        <div>
            <div class="theimagecen">
                <img src="img/divider.png">
            </div>
            <form class="search-form">
                <div class="form-group">
                    <label for="keyword">Keyword</label>
                    <input type="text" id="keyword" name="keyword" placeholder="Enter keyword">
                </div>

                <div class="form-group">
                    <label for="test-name">Test Name</label>
                    <input type="text" id="test-name" name="test-name" placeholder="Enter test name">
                </div>

                <div class="form-group" style="margin-top: 15px;">
                    <label for="disease">Disease</label>
                    <select id="disease" name="disease">
                        <option value="">- Any -</option>
                        <option value="disease1">Abortions</option>
                        <option value="disease2">Allergy</option>
                        <option value="disease2">Anaemia</option>
                        <option value="disease2">Cancer</option>
                        <option value="disease2">Infection</option>
                    </select>
                </div>

                <div class="form-group" style="margin-top: 15px;">
                    <label for="speciality">Speciality</label>
                    <select id="speciality" name="speciality">
                        <option value="">- Any -</option>
                        <option value="speciality1">Allergy specialist</option>
                        <option value="speciality2">Cardiologist</option>
                        <option value="speciality2">Diabetologist</option>
                        <option value="speciality2">Gynaecologist</option>
                        <option value="speciality2">Nephrologist</option>

                    </select>
                </div>

                <div class="button-group">
                    <!-- <button type="submit" class="thebtn search-btn">Search</button> -->
                    <button href="https://edos.mytrustlab.com/" class="thebtn search-btn">Search</button>
                    <button type="reset" class="thebtn reset-btn">Reset</button>
                </div>
            </form>
        </div>

</section>

<!-- Start Call to action -->
<section class="call-action overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 thehomecontent">
                <div class="content div1">
                    <h2>Thinking Home Collection? <br>Think <span style="font-size: 50px;">TRUSTlab!</span><br>Call @
                        74400 75400</h2>
                    <p>Experience the convenience and reliability of our home collection services.<br /> TRUSTlab
                        brings precise diagnostics right to your doorstep.</p>


                    <!-- <div style="text-align: center;" class="image-container">
                                    <img src="img/BloodKit.png"  />
                        
                                </div> -->
                    <div class="button">
                        <a href="contact.html" class="btn">Contact Now</a>
                        <a href="contact.html" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>

                <div class="div2">
                    <div>
                        <img src="img/2dbloodkit.png" width="80%" class="image-content" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/ End Call to action -->

<!-- Start Appointment -->
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We're Always Here to Answer You. Call us Now - <span style="color:#009247;">74 400 75 400</span>
                    </h2>
                    <img src="img/section-img.png" alt="#">
                    <p>Our dedicated team is available around the clock to provide you with all the information and
                        support you need.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Name">
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="Email">
                                    </div>
                                </div> -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Phone">
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="nice-select form-control wide" tabindex="0"><span
                                                class="current">Department</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected ">Department</li>
                                                <li data-value="2" class="option">Cardiac Clinic</li>
                                                <li data-value="3" class="option">Neurology</li>
                                                <li data-value="4" class="option">Dentistry</li>
                                                <li data-value="5" class="option">Gastroenterology</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="nice-select form-control wide" tabindex="0"><span
                                                class="current">Doctor</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected ">Doctor</li>
                                                <li data-value="2" class="option">Dr. Akther Hossain</li>
                                                <li data-value="3" class="option">Dr. Dery Alex</li>
                                                <li data-value="4" class="option">Dr. Jovis Karon</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Date" id="datepicker">
                                    </div>
                                </div> -->
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-2 col-8">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-12">
                            <p>( Our team will be contacting you shortly! )</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="img/custom.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Newsletter Area -->
<section class="newsletter section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6  col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-text ">
                    <h6>Sign up for our newsletter</h6>
                    <p class="">Stay updated with our latest news and offers.<br> Subscribe to our newsletter today!
                    </p>
                </div>
                <!-- End Newsletter Form -->
            </div>
            <div class="col-lg-6  col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-form ">
                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                        <input name="EMAIL" placeholder="Your email address" class="common-input"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required=""
                            type="email">
                        <button class="btn">Subscribe</button>
                    </form>
                </div>
                <!-- End Newsletter Form -->
            </div>
        </div>


        <hr style="margin-top: 40px;">

        <div class="footcontainer">
            <!-- <h2>Blood Tests Near You</h2> -->
            <div class="footcolumns">
                <div>
                    <p>• Blood Test in Hyderabad</p>
                    <p>• Blood Test in Secunderabad</p>
                    <p>• Blood Test in Tarnaka</p>
                    <p>• Blood Test in Banjara Hills</p>
                    <p>• Blood Test in Jubliee Hills</p>
                    <p>• Blood Test in Hi-Tech City</p>
                    <p>• Blood Test in Begumpet</p>
                    <p>• Blood Test in Ameerpet</p>
                    <p>• Blood Test in Punjagutta</p>
                    <p>• Blood Test in Sanathnagar</p>
                    <p>• Blood Test in Erragadda</p>
                    <p>• Blood Test in Borabanda</p>
                    <p>• Blood Test in Moti Nagar</p>
                    <p>• Blood Test in Prakash Nagar</p>
                    <!-- Add more items here -->
                </div>

                <div>
                    <p>• Blood Test in Gachibowli</p>
                    <p>• Blood Test in Nanakramguda</p>
                    <p>• Blood Test in Madhapur</p>
                    <p>• Blood Test in Kothaguda</p>
                    <p>• Blood Test in Film Nagar</p>
                    <p>• Blood Test in Yousufguda</p>
                    <p>• Blood Test in Srinagar colony</p>
                    <p>• Blood Test in Kukatpally</p>
                    <p>• Blood Test in Allwyn Colony</p>
                    <p>• Blood Test in Bachupally</p>
                    <p>• Blood Test in KPHB Colony</p>
                    <p>• Blood Test in Nizampet</p>
                    <p>• Blood Test in Pragathi Nagar</p>
                    <p>• Blood Test in Moosapet</p>
                    <!-- Add more items here -->
                </div>

                <div>
                    <p>• Blood Test in Chilkalguda</p>
                    <p>• Blood Test in Kavadiguda</p>
                    <p>• Blood Test in Padmarao Nagar</p>
                    <p>• Blood Test in Pan bazar</p>
                    <p>• Blood Test in Parsigutta</p>
                    <p>• Blood Test in Patny</p>
                    <p>• Blood Test in Rani Gunj</p>
                    <p>• Blood Test in RP Road</p>
                    <p>• Blood Test in Sindhi Colony</p>
                    <p>• Blood Test in Sitaphalmandi</p>
                    <p>• Blood Test in Warsiguda</p>
                    <p>• Blood Test in Addagutta</p>
                    <p>• Blood Test in Tukaramgate</p>
                    <p>• Blood Test in Malkajgiri</p>
                    <!-- Add more items here -->
                </div>

                <div>
                    <p>• Blood Test in Bowenpally</p>
                    <p>• Blood Test in Karkhana</p>
                    <p>• Blood Test in Marredpally</p>
                    <p>• Blood Test in Sikh Village</p>
                    <p>• Blood Test in Trimulgherry</p>
                    <p>• Blood Test in Vikrampuri</p>
                    <p>• Blood Test in Nagaram</p>
                    <p>• Blood Test in Dammaiguda</p>
                    <p>• Blood Test in Rampally</p>
                    <p>• Blood Test in Alwal</p>
                    <!-- Add more items here -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Newsletter Area -->
@endsection