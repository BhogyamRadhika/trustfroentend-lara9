@extends('layouts.landingpage')

@section('content')
<a href="https://wa.me/+919014638633?text=Hello%20I%20want%20to%20book%20a%20home%20collection%20service... 🔬😊"
            class="whatsapp-float" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" />
        </a>

        <!-- <div class="floating-scanner">
            <div class="scanner-content">
                <img src="img/eDOSwithouttext.png" alt="Download TRUSTlab App" class="qr-code">
                <p>Download TRUSTlab App</p>
            </div>
        </div> -->

        <!-- <div class="banner-container">
            
            <div class="carousel-section">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        
                    </div>
                    <div class="carousel-inner">
                       
                        <div class="carousel-item active">
                            <img src="img/change.svg" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/putTrust.svg" class="d-block w-100" alt="Slide 4">
                        </div>
                        
                    </div>
                    <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>

            
            <div class="form-section">
                <h3>Fill in the below form to download our Franchise Brochure</h3>
                <form>
                    <div class="form-group">
                        <label for="name">What's your name? <span style="color: red;">*</span></label>
                        <input type="text" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile number <span style="color: red;">*</span></label>
                        <input type="tel" id="mobile" placeholder="Enter your mobile number" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail <span style="color: red;">*</span></label>
                        <input type="mail" id="email" placeholder="Enter your E-mail" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Download Brochure">
                    </div>
                </form>
            </div>
        </div> -->

        <div class="myfixedbanner" style="margin-bottom: 5%;">
            <img class="banner-image landscape" src="{{asset('lab/img/partnershipw.svg')}}" alt="img" />
            <img src="{{asset('lab/img/partnerpotrait.svg')}}" alt="Banner" class="banner-image portrait">
        </div>


        <section class="why-partner-section">
            <h2>Why Partner with Trustlab?</h2>
            <hr style="opacity: 20%; margin-left: 20%; margin-right: 20%;" />
            <div class="grid-container milestone" style="margin-top: 40px;">
                <div class="grid-card">
                    <i class="fas fa-user-shield"></i>
                    <h3>Trusted Expertise</h3>
                    <p>Years of experience in diagnostic excellence and healthcare innovation.</p>
                </div>
                <div class="grid-card">
                    <i class="fas fa-microscope"></i>
                    <h3>Cutting-Edge Technology</h3>
                    <p>Advanced diagnostic tools and technology ensure reliable results.</p>
                </div>
                <div class="grid-card">
                    <i class="fas fa-network-wired"></i>
                    <h3>Nationwide Network</h3>
                    <p>Join a network that spans across regions, connecting communities to quality healthcare.</p>
                </div>
                <div class="grid-card">
                    <i class="fas fa-heart"></i>
                    <h3>Patient-Centered Care</h3>
                    <p>A dedicated approach to improving health outcomes for everyone.</p>
                </div>
                <div class="grid-card">
                    <i class="fas fa-vials"></i>
                    <h3>Comprehensive Services</h3>
                    <p>Offering a wide range of diagnostic tests and personalized services.</p>
                </div>
                <div class="grid-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Growth-Focused Partnership</h3>
                    <p>Work with us to drive mutual growth and make a meaningful impact in healthcare.</p>
                </div>
            </div>
        </section>



        <section class="content-section milestone">
            <div class="content-container">
                <div class="text-column">
                    <h2 class="carsection-title">Collaborate</h2>
                    <h3 style="font-size: 1.65em;" class="caveat- whath3">Drive with passion and make a difference in
                        healthcare.</h3>

                    <p class="section-paragraph">Partner with us to create a meaningful impact in healthcare. By
                        collaborating with our team, you gain access to a network of expertise, innovation and support
                        that drives the advancement of diagnostics and patient care. Together, we can leverage
                        resources, technology and shared knowledge to bring valuable health solutions to those who need
                        them. Let’s join forces to make healthcare more accessible, efficient and impactful for
                        communities everywhere.</p>
                </div>
                <div class="image-column">
                    <img src="{{asset('lab/img/collaborate.png')}}" alt="Our Culture" class="section-image">
                </div>
            </div>
        </section>



        <!--/ End Call to action -->

        <!-- Start Appointment -->
        <section class="appointment" id="bookappointment">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We're always here to talk to you. Call us Now - <span class="typewriter"
                                    id="typewriter-text" style="color:#009247;"></span></h2>
                            <img src="{{asset('lab/img/section-img.png')}}" alt="#">
                            <p>Our dedicated team is available around the clock to provide you with all the information
                                and
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
                        <div class="appointment-image milestone">
                            <img src="{{asset('lab/img/custom.png')}}" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- <video autoplay muted loop id="backgrounded-video">
            <source src="{{asset('lab/img/minimalbgv.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video> -->


        <!-- <div class="container">
            <hr />
        </div>

        <div style="text-align: center;" class="image-container">
            <img src="{{asset('lab/img/our-growth')}}.png" width="60%" style="padding: 50px; margin-bottom: 30px;" />

        </div> -->

        <!-- Start clients -->
        <!-- <div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="{{asset('lab/img/client1.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('lab/img/client2.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('lab/img/client3.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('lab/img/client4.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('lab/img/client5.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('lab/img/client1.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('lab/img/client2.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('lab/img/client3.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('lab/img/client4.png')}}" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
        <!--/Ens clients -->

        <section class="download-app-section"
            style="background-color: #ffffff; padding: 40px 0; text-align: center; margin-bottom: 20px;">
            <div class="container"
                style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
                <!-- Mobile App Image -->
                <div class="app-image" style="flex: 1; min-width: 300px; padding: 20px;">
                    <img src="{{asset('lab/img/mobilemockup.png')}}" alt="Download the TRUSTlab Mobile App"
                        style="max-width: 100%; height: auto;">
                </div>

                <!-- Download Text & Buttons -->
                <div class="app-details" style="flex: 1; min-width: 300px; padding: 20px;">
                    <h2 style="font-size: 28px; margin-bottom: 20px;">Access Health Anytime with the TRUSTlab Mobile App
                    </h2>
                    <p style="font-size: 16px; margin-bottom: 20px;">Book home collections, find test packages, access
                        your health records, and more—right at your fingertips.</p>
                    <!-- App Store Buttons -->
                    <div class="download-buttons">
                        <a href="your-app-store-link" target="_blank">
                            <img src="{{asset('lab/img/appstore.png')}}" alt="Download on the App Store"
                                style="width: 150px; margin-right: 10px;">
                        </a>
                        <a href="your-google-play-link" target="_blank">
                            <img src="{{asset('lab/img/playstore.png')}}" alt="Get it on Google Play" style="width: 150px;">
                        </a>
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
                            <p class="">Stay updated with our latest news and offers.<br> Subscribe to our newsletter
                                today!
                            </p>
                        </div>
                        <!-- End Newsletter Form -->
                    </div>
                    <div class="col-lg-6  col-12">
                        <!-- Start Newsletter Form -->
                        <div class="subscribe-form ">
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" class="common-input"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                    required="" type="email">
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