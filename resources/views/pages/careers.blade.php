@extends('layouts.landingpage')
<style>
    .button-container {
        display: flex;
        justify-content: flex-end;
        padding: 20px;
        margin-right: 3%;
    }

    .right-bottom {
        padding: 10px 20px;
        background: linear-gradient(to right, #1F2B7B, #27AE60);
        /* Gradient background */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
        /* transition: background 0.3s ease; */
    }

    .card {
        position: relative;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 350px;
        padding: 10px;
        margin: 2px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
    }

    .card h3 {
        margin: 0;
        color: #333;
        font-size: 1.25em;
        text-align: left;
        margin-left: 6px;
    }

    .card p {
        margin: 10px 0;
        color: #333;
        background-color: #fef6e7;
        padding: 5px;
        border-radius: 5px;
        font-size: 1em;
        font-weight: bold;
        text-align: left;
    }

    .card h5 {
        margin: 10px 0;
        color: #e67e22;
        background-color: #fef6e7;
        padding: 5px;
        border-radius: 5px;
        font-size: 1.15em;
        font-weight: bold;
        text-align: left;
    }

    .badge {
        position: absolute;
        top: -10px;
        right: 5px;
        background-color: #e74c3c;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.9em;
        font-weight: bold;
    }

    .card .price-container {
        display: flex;
        justify-content: left;
        align-items: left;
        margin: 10px 0;
    }

    .card .price {
        font-size: 1.2em;
        color: #e74c3c;
        margin-right: 10px;
        text-align: left;
    }

    .card .price del {
        color: #888;
        margin-right: 5px;
    }

    .card .offer-price {
        font-size: 1.4em;
        color: #27ae60;
        margin-right: 70px;
    }

    .card .buttons {
        display: flex;
        flex-direction: row;
        gap: 20px;
        margin-top: 10px;
    }

    .card .add-to-cart {
        background-color: #009247;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        /* margin-left: 10px; */
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .card .add-to-cart:hover {
        background-color: #009147;
    }

    .card .more-details {
        background-color: #1F2B7B;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .card .more-details:hover {
        background-color: #1F4B5B;
    }

    .image-container img {
        width: 100%;
        /* Default for smaller screens */
        height: auto;
        margin-bottom: 20px;
        background-color: white;
        /* Maintain aspect ratio */
    }

    @media (min-width: 768px) {
        .image-container img {
            width: 50%;
            /* For larger screens (desktops) */
        }
    }


    .healthcontainer {
        width: 80%;
        margin: 90px auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); */
    }

    .form-section {
        width: 60%;
        /* Adjust form width */
    }

    .formhead {
        text-align: center;
        margin-bottom: 25px;
        color: #1F2B7B;
    }

    .question {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        margin: 20px auto 0 auto;
    }

    .result {
        display: none;
        margin-top: 20px;
        padding: 10px;
        /* background-color: #1F2B7B; */
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .image-section {
        width: 35%;
        /* Adjust image container width */
    }

    .image-section img {
        max-width: 100%;
        align-items: center;
        border-radius: 10px;
        /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.01); */
    }



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

<div class="breadcrumbs overlay breadcrumbscareer">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Careers</h2>
                    <ul class="bread-list">
                        <li><a href="diagnosticsolutions.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Careers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="section-title" style="padding-top: 50px; letter-spacing: 0.02em; line-height: 2%;">
            <h6 style="margin-bottom: 20px;">
                At TRUSTlab, we are always on the lookout for talented individuals who share our passion for delivering
                exceptional healthcare services. <br />Even if you don't see a current opening that matches your skills,
                we encourage you to submit your CV through the form below.</h6>

            <h6 style="margin-bottom: 20px;">
                Our team regularly reviews all submissions, and if a relevant opportunity arises, we'll be sure to get
                in touch. Join us and be a part of a workplace that values Empathy, Happiness & Productivity. We look
                forward to hearing from you!</h6>
            <img src="img/section-img.png" alt="#" style="margin-bottom: -40px;">
        </div>
    </div>
</div>



<div class="career-section" style="background-image: url('img/loginbg.png')">
    <h2 style="color: white;">Join Our Team</h2>
    <p style="color: white;">Fill in your details and upload your resume to apply for exciting career opportunities!</p>

    <form action="submit_career_form.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
        </div>

        <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="number" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Enter your city" required>
        </div>

        <div class="form-group">
            <label for="resume">Upload Resume (PDF/DOC)</label>
            <input type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" required>
        </div>

        <button class="form-button" type="submit">Submit Application</button>
    </form>
</div>



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