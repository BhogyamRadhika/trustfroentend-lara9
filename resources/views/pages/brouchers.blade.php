@extends('layouts.landingpage')

<style>
    .brochures-title {
        text-align: center;
        color: #1F2B7B;
        margin-bottom: 30px;
    }

    .brochures-description {
        text-align: center;
        font-size: 15px;
        margin-bottom: 20px;
        color: #555;
    }

    .brochures-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 50px;
    }

    .brochures-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .brochure-card {
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 10px;
        text-align: center;
        width: 300px;
        transition: transform 0.3s;
    }

    .brochure-card:hover {
        transform: scale(1.05);
    }

    .brochure-card img {
        width: 80%;
        height: 200px;
        border-radius: 10px 10px 0 0;
    }

    .brochure-title {
        color: #1F2B7B;
        margin: 15px 0 10px;
        font-size: 20px;
    }

    .brochure-text {
        font-size: 12px;
        color: #777;
    }

    .download-btn {
        background-color: #009247;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
        display: inline-block;
        transition: background-color 0.3s;
    }

    .download-btn:hover {
        background-color: #007b38;
        color: white;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .brochures-grid {
            flex-direction: column;
            align-items: center;
        }
    }

    @media (min-width: 769px) and (max-width: 1200px) {
        .brochures-grid {
            justify-content: space-between;
        }
    }
</style>
@section('content')
<a href="https://wa.me/+919014638633?text=Hello%20I%20want%20to%20book%20a%20home%20collection%20service... 🔬😊"
    class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" />
</a>


<!-- Start Call to action -->

<div class="brochures-container">
    <h1 class="brochures-title">Download Our Brochures</h1>

    <hr style="opacity: 20%;">
    <!-- <p class="brochures-description">Explore our digital brochures and download the ones that interest you.</p> -->

    <div class="brochures-grid">
        <div class="brochure-card">
            <img src="img/brouchers//allergy.png" alt="Brochure 1">
            <h3 class="brochure-title">Allergy Brochure</h3>
            <!-- <p class="brochure-text">Short description about Brochure 1</p> -->
            <a href="img/brouchers/Allergy-brocher.pdf" class="download-btn" download>Download PDF</a>
        </div>


        <div class="brochure-card">
            <img src="img/brouchers/diabetes.png" alt="Brochure 2">
            <h3 class="brochure-title">Diabetes Info</h3>
            <!-- <p class="brochure-text">Short description about Brochure 2</p> -->
            <a href="img/brouchers/Diabetes Brochure-8.pdf" class="download-btn" download>Download PDF</a>
        </div>

        <div class="brochure-card">
            <img src="img/brouchers/ihc.png" alt="Brochure 3">
            <h3 class="brochure-title">IHC Markers</h3>
            <!-- <p class="brochure-text">Short description about Brochure 3</p> -->
            <a href="img/brouchers/IHC.pdf" class="download-btn" download>Download PDF</a>
        </div>

        <div class="brochure-card">
            <img src="img/brouchers/karyotyping.png" alt="Brochure 3">
            <h3 class="brochure-title">Karyotyping</h3>
            <!-- <p class="brochure-text">Short description about Brochure 3</p> -->
            <a href="img/brouchers/Karyotyping.pdf" class="download-btn" download>Download PDF</a>
        </div>

        <div class="brochure-card">
            <img src="img/brouchers/penta.png" alt="Brochure 3">
            <h3 class="brochure-title">Penta Marker</h3>
            <!-- <p class="brochure-text">Short description about Brochure 3</p> -->
            <a href="img/brouchers/Penta-Marker.pdf" class="download-btn" download>Download PDF</a>
        </div>

        <div class="brochure-card">
            <img src="img/brouchers/respiratory.png" alt="Brochure 3">
            <h3 class="brochure-title">Respiratory Info</h3>
            <!-- <p class="brochure-text">Short description about Brochure 3</p> -->
            <a href="img/brouchers/Respiratory.pdf" class="download-btn" download>Download PDF</a>
        </div>

        <div class="brochure-card">
            <img src="img/brouchers/transplant.png" alt="Brochure 3">
            <h3 class="brochure-title">Transplant Immunology</h3>
            <!-- <p class="brochure-text">Short description about Brochure 3</p> -->
            <a href="img/brouchers/Transplant-Immunology.pdf" class="download-btn" download>Download PDF</a>
        </div>

        <!-- Add more brochures as needed -->
    </div>
</div>


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