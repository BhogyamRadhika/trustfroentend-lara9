@extends('layouts.landingpage')
<style>
    .hero-section {
        background-color: #1F2B7B;
        color: white;
        padding: 100px 20px;
        text-align: center;
    }

    .hero-content {
        max-width: 800px;
        margin: 0 auto;
    }

    .carsection-title {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: #1F2B7B;
    }

    .section-subtitle {
        font-size: 1.2rem;
        margin-bottom: 10px;
        color: #f1f1f1;
    }

    .highlight {
        color: #ffffff;
    }

    /* Content Sections */
    .content-section {
        padding: 60px 20px;
        background-color: white;
    }

    .content-section.reverse {
        background-color: #f1f1f1;
    }

    .content-container {
        display: flex;
        flex-direction: row;
        max-width: 1200px;
        margin: 0 auto;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
    }

    .text-column {
        flex: 1;
    }

    .section-paragraph {
        margin-top: 20px;
        font-size: 1rem;
        line-height: 1.6;
    }

    .image-column {
        flex: 1;
    }

    .section-image {
        width: 100%;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Employee Benefits List */
    .benefits-list {
        list-style-type: none;
        padding: 0;
        margin-top: 20px;
    }

    .benefits-list li {
        font-size: 1rem;
        margin-bottom: 10px;
        position: relative;
        padding-left: 20px;
        color: #1F2B7B;
    }

    .benefits-list li:before {
        content: '✓';
        color: #009247;
        position: absolute;
        left: 0;
        top: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .content-container {
            flex-direction: column;
        }

        .hero-section {
            padding: 60px 20px;
        }

        .carsection-title {
            font-size: 2rem;
        }

        .section-subtitle {
            font-size: 1rem;
        }
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


    .job-openings-section {
        padding: 60px 20px;
        background-color: white;
    }

    .job-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        max-width: 1200px;
        margin: 0 auto;
    }

    .job-card {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 350px;
        margin: 20px;
        padding: 20px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .job-card:hover {
        transform: translateY(-5px);
    }

    .job-title {
        font-size: 1.05rem;
        color: #1F2B7B;
        margin-bottom: 10px;
    }

    .job-location {
        font-size: 1rem;
        color: #009247;
        margin-bottom: 20px;
    }

    .job-description {
        font-size: 0.8rem;
        color: #333;
        margin-bottom: 20px;

    }

    .apply-button {
        background-color: #009247;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .apply-button:hover {
        background-color: #1F2B7B;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .job-container {
            flex-direction: column;
            align-items: center;
        }

        .job-card {
            max-width: 90%;
        }

        .section-title {
            font-size: 2rem;
        }

        .section-subtitle {
            font-size: 1rem;
        }
    }
</style>
@section('content')

<a href="https://wa.me/+919014638633?text=Hello%20I%20want%20to%20book%20a%20home%20collection%20service... 🔬😊"
    class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" />
</a>


<!-- Hero Section -->
<div class="breadcrumbs overlay breadcrumbscurr">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Current Opportunities</h2>
                    <ul class="bread-list">
                        <li><a href="diagnosticsolutions.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Current Opportunities</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Job Listings Section -->
<section class="job-openings-section">
    <div class="job-container">
        <!-- Job 1 -->
        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Executive-Business Development</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">As a Business Development Executive you will be responsible for driving sales
                    activities within assigned territory by managing sales team, performing sales forecasts, ensuring
                    sales revenue and profit growth.</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

        <!-- Job 2 -->
        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Lab Supervisor</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">The Laboratory Supervisor is responsible for overseeing the operations of the
                    laboratory on a day-to-day basis, per shift, to ensure highest test quality while meeting regulatory
                    and compliance requirements.</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

        <!-- Job 3 -->
        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Executive-Graphic Designer</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">As an Executive - Graphic Design, you are responsible for developing visual
                    ideas and designs using digital tools or manual methods, that portray the company’s visual outlook
                    on online and offline platforms...</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

        <!-- Job 4 -->
        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Executive-Information Technology</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">As an Executive – Information Technology, you will work in a position using
                    computer-based information systems. You will work with both network and software applications and
                    computer hardware.</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Executive- Logistics</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">As an Executive - Logistics, you are responsible for ensuring that pathology
                    samples are picked up and are delivered to the right lab location on time, and in the most
                    cost-effective way. You will oversee the distribution...</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Executive Assistant</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">As an Executive Assistant you will provide high-level executive support in a
                    one-on-one working relationship. You will serve as the primary point of contact for internal and
                    external stakeholders on all matters...</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Executive Purchase</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">As an Executive Purchases you are primarily responsible to manage the
                    company’s supply of products and services. As an Executive Purchases your responsibilities include
                    strategizing to find cost-effective deals...</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Executive Stores</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">As an Executive-Stores you are essential for maintaining an efficient and
                    organized inventory management system. With the constant flow of goods and products in and out, it
                    is crucial to have someone who...</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Executive Assistant</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">As an Executive Assistant you will provide high-level executive support in a
                    one-on-one working relationship. You will serve as the primary point of contact for internal and
                    external stakeholders on all matters...</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Manager Quality</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">As Manager Quality you are responsible for TRUSTlab Diagnostics labs, PAN
                    INDIA. You will provide technical advice on evidence-based methods and strategies, current
                    practices, and established laboratory standards ...</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Executive-Risk Management</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">As an Executive-Risk Management, you will add value by assisting TRUSTlab in
                    implementing and improving compliance, governance and risk management-related processes and controls
                    within TRUSTlab....</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

        <div class="job-card">
            <div class="job-content">
                <h2 class="job-title">Executive-Digital Marketing</h2>
                <p class="job-location">Hyderabad, India</p>
                <p class="job-description">As an Executive-Digital Marketing, you will be generating new, creative
                    content ideas to market company products and services . Creating high-quality content. Collaborating
                    with other marketing teams...</p>
                <button class="apply-button">Apply Now</button>
            </div>
        </div>

    </div>
</section>

<hr style="opacity: 25%;" />

<!-- Section 1: Our Culture -->


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




<!-- <div class="container" style="text-align: center;">
			<img src="img/TRUST_Flaag_map.gif"/>
		</div> -->
<!-- End Blog Area -->

<!-- Start clients -->
<!-- <div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client5.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client4.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
<!--/Ens clients -->



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