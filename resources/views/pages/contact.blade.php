@extends('layouts.landingpage')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                    <ul class="bread-list">
                        <li><a href="diagnosticsolutions.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Contact Us -->
<section class="contact-us section">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-us-left">

                        <img src="img/custom.png" alt="#">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-form">
                        <h2>Contact Us</h2>
                        <p>If you have any questions please feel free to contact us.</p>
                        <!-- Form -->
                        <form class="form" method="post" action="mail/mail.php">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">Send</button>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2"
                                                type="checkbox">Do you want to subscribe our Newsletter ?</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-info">
            <div class="row">
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont icofont-ui-call"></i>
                        <div class="content">
                            <h3>+91 74400 75400</h3>
                            <p>helpdesk@mytrustlab.com</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont-google-map"></i>
                        <div class="content">
                            <h3>Prakash Nagar, Begumpet</h3>
                            <p>Hyderabad, Telangana</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont icofont-wall-clock"></i>
                        <div class="content">
                            <h3>Mon - Sat: 7am - 7pm</h3>
                            <p>Sunday: 9am - 5pm</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
            </div>
        </div>
    </div>
</section>


<!--/ End Contact Us -->

<section class="our-locations" id="ourlocation">
    <h2 class="section-title">Our Lab Locations</h2>
    <div class="container">
        <hr style="opacity: 20%; margin-top: -25px; margin-bottom: 45px;" />
    </div>
    <div class="location-container">

        <div class="location-card">
            <h3 class="location-title">Hyderabad NRL</h3>
            <p class="address">
                No.31, 2 2RT, Street No. 5, Prakash Nagar, Begumpet, Hyderabad, Telangana - 500016
            </p>
            <div class="location-contact">
                <a href="tel:+919876543210" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543210
                </a>
                <a href="https://goo.gl/maps/example1" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Mahbubnagar</h3>
            <p class="address">
                No. 1-4-143/4, Situated at Kamala Nehru Colony, Near Geetha Hotel, Mahbubnagar, Telangana
            </p>
            <div class="location-contact">
                <a href="tel:+919876543210" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543210
                </a>
                <a href="https://goo.gl/maps/example1" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Nizamabad</h3>
            <p class="address">
                No. 5-6-342&343, Second floor Thriveni Building, Saraswathi Nagar, Nizamabad, Telangana
            </p>
            <div class="location-contact">
                <a href="tel:+919876543211" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543211
                </a>
                <a href="https://goo.gl/maps/example2" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>
        <div class="location-card">
            <h3 class="location-title">Hanumakonda</h3>
            <p class="address">
                No. 6-1-77, First floor, Near Lashkar Bazar, Hanumakonda, Warangal, Telangana - 506001
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Karimnagar</h3>
            <p class="address">
                No. 3-6-398, Subash Nagar <br /> Karimnagar, Telangana - 505001
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Khammam</h3>
            <p class="address">
                No 15-12-91, Shri Krishna Nagar, VDOS Colony, Khanapurah Haveli, Khammam - 507001
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Guntur</h3>
            <p class="address">
                1'st Floor, Maa Plaza, FF1, OLD Bank Road, kothapeta, <br />Guntur city - 522001
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Rajahmundry</h3>
            <p class="address">
                No. 801-10, A.V.A Road, Janya Sri Garden, beside kerala ayurveda Hospital, Rajahmundry - 533103
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Vijayawada</h3>
            <p class="address">
                No. 29-14-55 PRAKSAM ROAD, Govinda Rajulu Naidu Street 5, near Pushpa Hotel Centre, Vijayawada 520010
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Visakhapatnam</h3>
            <p class="address">
                KGH Up Rd, Jagadamba Junction, <br />Visakhapatnam, Andhra Pradesh 530020
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Ananthapur</h3>
            <p class="address">
                No. 13/2, 392/4, NTR Marg, near RTC Bus Stand, Old Town,<br /> Anantapur, Andhra Pradesh 515001
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Kurnool</h3>
            <p class="address">
                Address<br /> Address
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Bengaluru</h3>
            <p class="address">
                No. 547/548, 2nd Floor, Intermediate Ring Road, Amarjyothi Layout, Domlur, Bengaluru 560072
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Jammu</h3>
            <p class="address">
                275 Kishna nagar, Opposite science college, Canal Road, <br />Jammu -180016
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Chandigarh</h3>
            <p class="address">
                1st floor, S.C.O. No. 6, Sector 24-D,<br /> Chandigarh - 160023
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Noida</h3>
            <p class="address">
                C-270, IndustriaL Area, Sectors -63, Gautam Budha Nagar,<br /> Noida 201301
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

        <div class="location-card">
            <h3 class="location-title">Patna</h3>
            <p class="address">
                2nd Floor, No. 13-1-14, Nasib Market, Ashiana - Digha Rd, Ashiana, Magistrate Colony, Khajpura, Patna,
                Bihar 800025
            </p>
            <div class="location-contact">
                <a href="tel:+919876543212" class="call-link">
                    <img src="img/callicon.png" alt="Call Icon" class="phone-icon"> +91-9876543212
                </a>
                <a href="https://goo.gl/maps/example3" target="_blank" class="location-link">
                    View on Map
                </a>
            </div>
        </div>

    </div>
</section>
@endsection