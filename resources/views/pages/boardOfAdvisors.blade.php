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
            width: 50%;
            /* For larger screens (desktops) */
        }
    }

    /* body {
    margin: 0;
    padding: 0;
    height: 100vh;
    background-image: url('/img/minimalbg.png');
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
} */

    .management-section {
        text-align: center;
        padding: 50px;
    }

    .cards-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
        /* margin-top: -20px; */
        margin-bottom: 20px;
    }

    .management-card {
        background-color: #fff;
        border-radius: 15px;
        padding: 20px;
        width: 300px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        position: relative;
    }

    .management-card img {
        width: 190px;
        height: 190px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        border: 4px solid #4caf50;
        /* Green border for the image */
    }

    .management-card h3 {
        margin: 8px 0;
        font-size: 17px;

    }

    .management-card p {
        font-size: 14px;
        color: #777;
    }

    .read-more-btn {
        background: linear-gradient(90deg, #4caf50, #3f51b5);
        border: none;
        padding: 10px 20px;
        border-radius: 30px;
        color: white;
        cursor: pointer;
        margin-top: 15px;
        transition: background-color 0.3s;
    }

    .read-more-btn:hover {
        background: linear-gradient(90deg, #388e3c, #303f9f);
    }

    /* Modal styling */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        justify-content: center;
        align-items: center;
        transition: opacity 2s ease;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        width: 60%;
        max-width: 800px;
        display: flex;
        gap: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        position: relative;
        transition: transform 2s ease;
    }

    .modal-left {
        width: 100%;
        text-align: center;
    }

    .modal-right {
        width: 100%;
        align-items: center;
    }

    .modal-director-image {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
        border: 4px solid #4caf50;
    }

    .modal h3 {
        margin: 10px 0;
        font-size: 18px;
        color: #2c3e85;
    }

    .modal p {
        font-size: 14px;
        color: #555;
        line-height: 1.6;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 25px;
        color: #aaa;
        cursor: pointer;
    }

    .close-btn:hover {
        color: #000;
    }

    /* Responsive design for mobile */
    @media (max-width: 768px) {
        .modal-content {
            flex-direction: column;
            width: 90%;
        }

        .modal-left {
            width: 100%;
            margin-bottom: 20px;
        }

        .modal-right {
            width: 100%;
        }
    }

    #backgrounded-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensures the video covers the entire background */
        z-index: -1;
        /* Keeps the video behind all other elements */
    }
</style>

@section('content')

<div class="breadcrumbs overlay breadcrumbsadv">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Advisory Board</h2>
                    <ul class="bread-list">
                        <li><a href="diagnosticsolutions.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Advisory Board</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="management-section">
    <!-- <h2>Management</h2> -->
    <!-- <div class="section-title">
                <h2>Management</h2>
                <img src="img/section-img.png" alt="#">
                <p>Discover our wide range of test packages tailored to meet your health needs. We offer
                    reliable diagnostics for complete peace of mind.</p>
            </div> -->
    <div class="cards-container">
        <!-- First Card -->
        <div class="management-card">
            <img src="{{asset('lab/img/dr_rajah.png')}}" alt="Director 1" class="director-image">
            <h3>Dr. Rajah V Koppala</h3>
            <p>Advisory Board Member</p>
            <p>Interventional Radiologist</p>
            <button class="read-more-btn" onclick="openModal('modalrajah')">Read More</button>
        </div>

        <!-- Second Card -->
        <div class="management-card">
            <img src="{{asset('lab/img/SrinivasTirupati.png')}}" alt="Director 2" class="director-image">
            <h3>Srinivas Tirupati</h3>
            <p>Advisory Board Member</p>
            <p>Entreprenuer</p>
            <button class="read-more-btn" onclick="openModal('modal2')">Read More</button>
        </div>

    </div>
</div>

<!-- Modal 1 -->
<div class="modal" id="modalrajah">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modalrajah')">&times;</span>
        <div class="modal-left">
            <img src="{{asset('lab/img/dr_rajah.png')}}" alt="Director 1" class="modal-director-image">
            <h3>Dr. Rajah V Koppala</h3>
            <p>Interventional Radiologist</p>
            <hr>
        </div>
        <div class="modal-right">
            <p style="margin-bottom: 25px;">Dr. Rajah V Koppala is a Vascular Surgeon,Interventional Radiologist
                and Radiologist in Jubilee Hills, Hyderabad and has an experience of 29 years in these fields.
                Dr. Rajah V Koppala practices at Avis Hospitals in Jubilee Hills, Hyderabad and Apollo Spectra
                Hospital in Alwarpet, Chennai. He completed MBBS from Osmania Medical College, Hyderabad in
                1995,MD - Vascular Interventional Radiology from ENGLAND in 1998 and MD - Radio
                Diagnosis/Radiology from ENGLAND in 1998.</p>
            <p style="margin-bottom: 25px;">He is a member of Radiological Society of North America,Royal
                College Of Radiologists-UK,British Society of Interventional Radiology. and Singapore
                Radiological Society. Some of the services provided by the doctor are: Bleeding Internally,Vena
                Cava Filter,Diagnostic Cardiovascular Imaging,Pediatrics and Stent Graft </p>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal" id="modal2">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal2')">&times;</span>
        <div class="modal-left">
            <img src="{{asset('lab/img/SrinivasTirupati.png')}}" alt="Director 2" class="modal-director-image">
            <h3>Srinivas Tirupati</h3>
            <p>Entreprenuer</p>
            <hr>
        </div>
        <div class="modal-right">
            <p style="margin-bottom: 25px;">Mr. Srinivas Tirupati serves as Managing Partner of STEM Mineral
                Resources LLP. Mr. Tirupati serves as strategic advisor to a few major mining companies. He has
                worked in senior positions in various global firms, including stints in UBS, Tata’s and SAB
                Miller. He has also served as a Civil Servant (Group A Officer) with the Government of India.
            </p>

            <p style="margin-bottom: 25px;">
                As a senior management professional, a businessman and promoter of various companies in India,
                he has business interests in sectors such as Power, Real Estate, Agriculture and Healthcare. Mr.
                Tirupati is an Engineer with a post-graduate in management from Carnegie Mellon University, USA.
            </p>
        </div>
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

<script>
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
    }

    // Function to close the modal
    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }
</script>
<script>

    function toggleDrawer() {
        const drawer = document.getElementById("drawer");
        drawer.classList.toggle("open");
    }

    function toggleDropdown(element) {
        const dropdown = element.nextElementSibling;
        const arrow = element.querySelector('.arrow');

        if (dropdown.style.maxHeight) {
            dropdown.style.maxHeight = null;
            arrow.style.transform = "rotate(0deg)";
        } else {
            dropdown.style.maxHeight = dropdown.scrollHeight + "px";
            arrow.style.transform = "rotate(180deg)";
        }
    }

    function navigateTo(url) {
        window.location.href = url;
    }


</script>
@endsection