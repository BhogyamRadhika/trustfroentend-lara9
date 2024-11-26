@extends('layouts.landingpage')
<style>
    .timeline {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
    }

    .milestone {
        opacity: 0;
        /* Hidden initially */
        transform: translateY(20px);
        transition: opacity 0.6s ease, transform 0.6s ease;
        margin: 20px 0;
    }

    .milestone.visible {
        opacity: 1;
        /* Show when in view */
        transform: translateY(0);
    }
</style>
@section('content')
<a href="https://wa.me/+919014638633?text=Hello%20I%20want%20to%20book%20a%20home%20collection%20service... 🔬😊"
    class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" />
</a>


<!-- Hero Section -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Life @ TRUSTlab Diagnostics</h2>
                    <ul class="bread-list">
                        <li><a href="diagnosticsolutions.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Life @ TRUSTlab Diagnostics</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Section 1: Our Culture -->
<section class="content-section">
    <div class="content-container">
        <div class="text-column">
            <h2 class="carsection-title">Our Work Culture</h2>
            <h3 style="font-size: 1.65em;" class="caveat- whath3">Fosters an empathetic, happy & productive team —
                that’s the TRUSTlab difference.</h3>

            <p class="section-paragraph">At TrustLab Diagnostics, we prioritize work-life balance as a fundamental
                aspect of our workplace culture. We understand that a healthy equilibrium between professional
                responsibilities and personal life is essential for our employees’ well-being and productivity. We also
                believe that when our employees feel balanced and supported, they are more engaged, motivated, and
                productive, contributing to our collective success.</p>
        </div>
        <div class="image-column">
            <img src="img/arcwork.svg" alt="Our Culture" class="section-image">
        </div>
    </div>
</section>

<section class="content-section reverse">
    <div class="content-container">
        <div class="image-column">
            <img src="img/career4.svg" alt="Our People" class="section-image">
        </div>
        <div class="text-column">
            <h2 class="carsection-title">Our People</h2>
            <h3 style="font-size: 1.95em;" class="caveat whath3">are the driving force of our Company</h3>
            <p class="section-paragraph">Our diverse staff and their knowledge & commitment in achieving our mission and
                vision drives every single aspect of our organization. We select the very best well qualified
                individuals for every role that is assayed at TRUSTlab, to ensure that every service at every level
                across every department is performed with perfection & efficiency. The company is committed to
                respecting diversity in ethnic, gender, age & sexual orientation, personal characteristics & opinion
                seeking to recruit collaborators from local communities in order to incorporate their cultures into
                company practices, making TRUSTlab a Nation-wide business with a local presence and flavour. </p>
        </div>
    </div>
</section>

<!-- Section 2: Employee Benefits -->
<section class="content-section">
    <div class="content-container">
        <div class="text-column">
            <h2 class="carsection-title">Employee Benefits</h2>
            <ul class="benefits-list">
                <li>Comprehensive Health Insurance</li>
                <li>Flexible Work Hours</li>
                <li>Generous Paid Leave</li>
                <li>Menstrual Leave for Female Employees</li>
                <li>Professional Development Opportunities</li>
                <li>Wellness Programs</li>
                <li>Employee Engagement Activities</li>
            </ul>
        </div>
        <div class="image-column">
            <img src="img/Cricket.svg" alt="Employee Benefits" class="section-image">
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