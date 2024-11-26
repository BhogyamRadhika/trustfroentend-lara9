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


        .leadercontainer {
            width: 70%;
            max-width: 1200px;
            margin: 50px auto;
            text-align: center;
        }

        .headcontainer {
            width: 40%;
            max-width: 1200px;
            margin: 50px auto;
            text-align: center;
        }

        h1 {
            color: #1F2B7B;
            margin-bottom: 20px;
        }
        .modalp {
            color: #555;
            margin-bottom: 40px;
            /* width: 90%; */
            text-align: justify;
        }
        .leadeshipteam {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .member {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
            flex: 1 1 calc(25% - 20px); /* 4 members per line */
            position: relative;
        }
        .member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 2px solid #27AE60;
            transition: all 0.3s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .member:hover img {
            transform: scale(1.1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .member:hover {
            transform: translateY(-5px);
        }
        .name {
            font-weight: bold;
            color: #1F2B7B;
            margin-top: 10px;
        }
        .designation {
            color: #27AE60;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .member {
                flex: 1 1 calc(50% - 20px); /* 2 members per line */
            }
        }
        @media (max-width: 480px) {
            .member {
                flex: 1 1 100%; /* 1 member per line */
            }
        }
       
    </style>
@section('content')

<div class="breadcrumbs overlay breadcrumbsdoc">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Our Doctors</h2>
                    <ul class="bread-list">
                        <li><a href="diagnosticsolutions.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Our Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="leadercontainer">
    <div class="leadeshipteam">
        <div class="member">
            <img src="img/aleem.jpg" alt="Person 1">
            <div class="name">Dr. Abdul Aleem Mohammed</div>
            <div class="designation">Lab Head</div>
            <button class="read-more-btn" onclick="openModal('modalaleem')">Read More</button>
        </div>
        <div class="member">
            <img src="img/drvisala.png" alt="Person 1">
            <div class="name">Dr.C.Vishala Sarma</div>
            <div class="designation">Consultant Microbiologist</div>
            <button class="read-more-btn" onclick="openModal('modalvisala')">Read More</button>
        </div>
        <div class="member">
            <img src="img/DrKVarun.jpg" alt="Person 1">
            <div class="name">Dr. K. Varun</div>
            <div class="designation">MBBS, MD Pathology</div>
            <button class="read-more-btn" onclick="openModal('modalvarun')">Read More</button>
        </div>

    </div>


    <div class="leadeshipteam">

        <div class="member">
            <img src="img/drvenkatesh.jpg" alt="Person 1">
            <div class="name">Dr. Venkatesh Pettem</div>
            <div class="designation">MD Pathology</div>
            <button class="read-more-btn" onclick="openModal('modalvenkatesh')">Read More</button>
        </div>
        <div class="member">
            <img src="img/dranusha.png" alt="Person 1">
            <div class="name">Dr. Anusha</div>
            <div class="designation">HOD Biochemistry</div>
            <button class="read-more-btn" onclick="openModal('modalanusha')">Read More</button>
        </div>

        <div class="member">
            <img src="img/DrPRaviKumar.png" alt="Person 1">
            <div class="name">Dr. P. Ravi Kumar</div>
            <div class="designation">Consultant Pathologist</div>
            <button class="read-more-btn" onclick="openModal('modalvenkat')">Read More</button>
        </div>

    </div>

    <div class="leadeshipteam">
        <div class="member">
            <img src="img/DrSwetaGupta.png" alt="Person 1">
            <div class="name">Dr. Sweta Gupta</div>
            <div class="designation">Consultant Pathologist</div>
            <!-- <button class="read-more-btn" onclick="openModal('modalvenkat')">Read More</button> -->
        </div>
        <div class="member">
            <img src="img/DrAnujaDasgupta.png" alt="Person 1">
            <div class="name">Dr. Anuja Das Gupta</div>
            <div class="designation">Consultant Pathologist</div>
            <!-- <button class="read-more-btn" onclick="openModal('modalvenkat')">Read More</button> -->
        </div>
        <div class="member">
            <img src="img/DrBookyaKishan.png" alt="Person 1">
            <div class="name">Dr. Bookya Kishan</div>
            <div class="designation">Consultant Pathologist</div>
            <!-- <button class="read-more-btn" onclick="openModal('modalvenkat')">Read More</button> -->
        </div>
        <div class="member">
            <img src="img/DrKasaLakshmi.png" alt="Person 1">
            <div class="name">Dr. Kasa Lakshmi</div>
            <div class="designation">Consultant Pathologist</div>
            <!-- <button class="read-more-btn" onclick="openModal('modalvenkat')">Read More</button> -->
        </div>
        <!-- <div class="member">
                    <img src="img/Venkat-Cherukuri.jpg" alt="Person 1">
                    <div class="name">Doctor Name</div>
                    <div class="designation">Doctor Designation</div>
                    <button class="read-more-btn" onclick="openModal('modalvenkat')">Read More</button>
                </div> -->
    </div>

    <!-- 	<div class="leadeshipteam">
                <div class="member">
                    <img src="img/Venkat-Cherukuri.jpg" alt="Person 1">
                    <div class="name">Doctor Name</div>
                    <div class="designation">Doctor Designation</div>
                    <button class="read-more-btn" onclick="openModal('modalvenkat')">Read More</button>
                </div>
				<div class="member">
                    <img src="img/Venkat-Cherukuri.jpg" alt="Person 1">
                    <div class="name">Doctor Name</div>
                    <div class="designation">Doctor Designation</div>
                    <button class="read-more-btn" onclick="openModal('modalvenkat')">Read More</button>
                </div>
				<div class="member">
                    <img src="img/Venkat-Cherukuri.jpg" alt="Person 1">
                    <div class="name">Doctor Name</div>
                    <div class="designation">Doctor Designation</div>
                    <button class="read-more-btn" onclick="openModal('modalvenkat')">Read More</button>
                </div>
				<div class="member">
                    <img src="img/Venkat-Cherukuri.jpg" alt="Person 1">
                    <div class="name">Doctor Name</div>
                    <div class="designation">Doctor Designation</div>
                    <button class="read-more-btn" onclick="openModal('modalvenkat')">Read More</button>
                </div> -->
</div>


<div class="modal" id="modalaleem">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modalaleem')">&times;</span>
        <div class="modal-left">
            <img src="img/aleem.jpg" alt="Director 1" class="modal-director-image">
            <h3>Dr. Abdul Aleem Mohammed</h3>
            <p style="text-align: center;">Lab Head</p>
            <hr>
        </div>
        <div class="modal-right">
            <p style="margin-bottom: 25px;" class="modalp">With over a decade of experience in histopathology,
                cytopathology, and laboratory management, Dr. Abdul Aleem is dedicated to providing patient-centered,
                evidence-based diagnostic services. He holds an MBBS, MD, DNB, and DipRCPath (UK), and has been
                instrumental in enhancing diagnostic accuracy and patient outcomes through quality assurance programs
                and innovative practices at Trustlab Diagnostics. </p>
            <p style="margin-bottom: 25px;" class="modalp">Dr. Aleem has completed specialized training in cancer
                cytogenetics at Columbia University Irving Medical Center under the prestigious ASH International
                Visitor Training Fellowship, gaining advanced expertise in karyotyping and solid tumor FISH. His
                commitment to continuous improvement and multidisciplinary collaboration ensures that Trustlab
                Diagnostics remains at the forefront of high-quality pathology services.</p>
        </div>
    </div>
</div>

<div class="modal" id="modalvisala">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modalvisala')">&times;</span>
        <div class="modal-left">
            <img src="img/drvisala.png" alt="Director 1" class="modal-director-image">
            <h3>Dr.C.Vishala Sarma</h3>
            <p style="text-align: center;">Consultant Microbiologist</p>
            <hr>
        </div>
        <div class="modal-right">
            <p style="margin-bottom: 25px;" class="modalp">Dr.C.Vishala Sarma working as Consultant Microbiologist has a
                rich and varied expertise in the field of Clinical Microbiology, gained over the years through
                experience in Teaching Medical Institutions, Hospitals, Diagnostic and Research laboratories, after
                procuring MD - Microbiology postgraduate degree from Gandhi Medical College, Hyderabad, Telangana in
                2007.</p>
            <p style="margin-bottom: 25px;" class="modalp">Her zeal of teaching keeps her focused in updating of recent
                advances in the field of expertise including maintenance of laboratory standards as per ISO and NABL
                guidelines. Her fields of specific interest include Immunology and Molecular Biology.</p>
        </div>
    </div>
</div>

<div class="modal" id="modalvarun">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modalvarun')">&times;</span>
        <div class="modal-left">
            <img src="img/DrKVarun.jpg" alt="Director 1" class="modal-director-image">
            <h3>Dr. K. Varun</h3>
            <p style="text-align: center;">MBBS, MD Pathology</p>
            <hr>
        </div>
        <div class="modal-right">
            <p style="margin-bottom: 25px;" class="modalp">Dr. K. Varun has been passionate about pathology since his
                third year of medical school. Since 2018, he has worked at several renowned diagnostic centers, where he
                has gained extensive knowledge and experience in the field of diagnostics. Dr. Varun is dedicated to
                providing accurate and reliable diagnostic services to his patients.</p>
            <p style="margin-bottom: 25px;" class="modalp">He possesses extensive experience in the fields of hematology
                and cytology, with particular expertise in the interpretation of pap smears. Additionally, Dr. Varun has
                substantial experience in quality control procedures, ensuring the highest standards in diagnostic
                accuracy.</p>
        </div>
    </div>
</div>

<div class="modal" id="modalvenkatesh">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modalvenkatesh')">&times;</span>
        <div class="modal-left">
            <img src="img/drvenkatesh.jpg" alt="Director 1" class="modal-director-image">
            <h3>Dr Venkatesh Pettem</h3>
            <p style="text-align: center;">MD Pathology</p>
            <hr>
        </div>
        <div class="modal-right">
            <p style="margin-bottom: 25px;" class="modalp">Dr. Venkatesh Pettem, MD in Pathology from Navodaya Medical
                College, Raichur (under RGUHS, Karnataka), brings over 4 years of dedicated experience in the field of
                diagnostics. His expertise spans across a wide range of diagnostic practices, and he has honed his
                skills at prominent institutions such as Vijaya Diagnostic Centre in Karimnagar.</p>
            <p style="margin-bottom: 25px;" class="modalp">Dr. Venkatesh is passionate about maintaining rigorous
                quality controls, contributing to a safe, reliable, and patient-focused diagnostic process.</p>
        </div>
    </div>
</div>

<div class="modal" id="modalanusha">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modalanusha')">&times;</span>
        <div class="modal-left">
            <img src="img/dranusha.png" alt="Director 1" class="modal-director-image">
            <h3>Dr. Anusha</h3>
            <p style="text-align: center;">HOD Biochemistry</p>
            <hr>
        </div>
        <div class="modal-right">
            <p style="margin-bottom: 25px;" class="modalp">Dr. Anusha is a competent, dedicated, and result-driven
                medical professional with over 4 years of experience in clinical biochemistry and specialized
                departments such as maternal markers, newborn screening (NBS), and protein electrophoresis.</p>
            <p style="margin-bottom: 25px;" class="modalp">In addition to her technical skills, Dr. Anusha has hands-on
                experience working with a wide array of internal and external stakeholders, making her a versatile
                professional in the field. Her ability to collaborate effectively with laboratory teams, clinicians, and
                external partners underscores her commitment to delivering quality outcomes.</p>
        </div>
    </div>
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