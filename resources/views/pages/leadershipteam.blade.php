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
		flex: 1 1 calc(25% - 20px);
		/* 4 members per line */
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
			flex: 1 1 calc(50% - 20px);
			/* 2 members per line */
		}
	}

	@media (max-width: 480px) {
		.member {
			flex: 1 1 100%;
			/* 1 member per line */
		}
	}
</style>
@section('content')
<div class="breadcrumbs overlay breadcrumbslead">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2>Leadership Team</h2>
					<ul class="bread-list">
						<li><a href="diagnosticsolutions.html">Home</a></li>
						<li><i class="icofont-simple-right"></i></li>
						<li class="active">Leadership Team</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="leadercontainer">
	<div class="leadeshipteam">
		<div class="member">
			<img src="{{asset('lab/img/Venkat-Cherukuri')}}.jpg" alt="Person 1">
			<div class="name">Venkata Suman Cherukuri</div>
			<div class="designation">Chairman & Managing Director</div>
			<button class="read-more-btn" onclick="openModal('modalvenkat')">Read More</button>
		</div>
		<div class="member">
			<img src="{{asset('lab/img/drvinitha.jpg')}}" alt="Person 2">
			<div class="name">Dr. Vinitha Purushothaman</div>
			<div class="designation">Business Head</div>
			<button class="read-more-btn" onclick="openModal('modalvinitha')">Read More</button>

		</div>
	</div>


	<div class="leadeshipteam">
		<div class="member">
			<img src="{{asset('lab/img/aleem.jpg')}}" alt="Person 3">
			<div class="name">Dr. Abdul Aleem Mohammed</div>
			<div class="designation">Lab Head</div>
			<button class="read-more-btn" onclick="openModal('modalaleem')">Read More</button>

		</div>
		<!-- <div class="member">
					<img src="{{asset('lab/img/phani.jpg')}}" alt="Person 3">
					<div class="name">B V N Phani Kumar</div>
					<div class="designation">General Manager - Sales</div>
					<button class="read-more-btn" onclick="openModal('modalphani')">Read More</button>

				</div> -->

		<div class="member">
			<img src="{{asset('lab/img/prakash.jpg')}}" alt="Person 4">
			<div class="name">Prakash Chandra Dwivedi</div>
			<div class="designation">General Manager Sales</div>
			<button class="read-more-btn" onclick="openModal('modalprakash')">Read More</button>

		</div>

		<div class="member">
			<img src="{{asset('lab/img/AGM-HR')}}.png" alt="Person 4">
			<div class="name">Krishna Reddy Shanigaram</div>
			<div class="designation">AGM - Human Resources</div>
			<button class="read-more-btn" onclick="openModal('modalkrishna')">Read More</button>

		</div>
	</div>

	<div class="leadeshipteam">




		<!-- <div class="member">
					<img src="" alt="Person 3">
					<div class="name">Dr. Janakiram Bobbilapati</div>
					<div class="designation">Marketing Officer</div>
					<button class="read-more-btn" onclick="openModal('modalaleem')">Read More</button>
				</div> -->
	</div>


	<div class="modal" id="modalvenkat">
		<div class="modal-content">
			<span class="close-btn" onclick="closeModal('modalvenkat')">&times;</span>
			<div class="modal-left">
				<img src="{{asset('lab/img/Venkat-Cherukuri')}}.jpg" alt="Director 1" class="modal-director-image">
				<h3>Mr. Venkata Suman Cherukuri</h3>
				<p style="text-align: center;">Chairman & Managing Director</p>
				<hr>
			</div>
			<div class="modal-right">
				<p style="margin-bottom: 25px;" class="modalp">Mr. Venkata Suman Cherukuri is an internationally
					experienced technology executive with extensive business leadership, operations management,
					technology delivery, and consulting skills. He earned his Bachelor’s in Textile and
					Manufacturing Engineering from the Royal Melbourne Institute of Technology (RMIT) in 2000
					and an MBA from the Australian Graduate School of Management (AGSM), University of New South
					Wales, in 2004. With a demonstrated commitment to excellence, Venkata has extensive
					operational expertise in fostering corporate change and company development.</p>
				<p style="margin-bottom: 25px;" class="modalp">He has been instrumental in advising
					multinational enterprises, partnerships, and limited liability organizations on a multitude
					of topics, including strategy, mergers and acquisitions, quality management, operational
					management, risk management, and R&D finance.</p>
			</div>
		</div>
	</div>

	<div class="modal" id="modalvinitha">
		<div class="modal-content">
			<span class="close-btn" onclick="closeModal('modalvinitha')">&times;</span>
			<div class="modal-left">
				<img src="{{asset('lab/img/drvinitha.jpg')}}" alt="Director 1" class="modal-director-image">
				<h3>Dr. Vinitha Purushothaman</h3>
				<p style="text-align: center;">Business Head</p>
				<hr>
			</div>
			<div class="modal-right">
				<p style="margin-bottom: 25px;" class="modalp">Dr. Vinitha holds a Ph.D. in Chemical
					Engineering, with a specialization in the computational modeling of air quality and
					Geographic Information Systems (GIS). Her extensive research has focused on developing
					metrics to assess population exposure to ozone, addressing critical environmental and public
					health challenges.</p>
				<p style="margin-bottom: 25px;" class="modalp">As the head of the Business Relations at
					Trustlab, Dr. Vinitha plays a pivotal role in shaping the organization's initiatives,
					ensuring that data-driven strategies align with the company’s vision for sustainable growth
					and innovation in health diagnostics. Her leadership not only enhances Trustlab's
					operational effectiveness but also contributes to advancing public awareness and engagement.
				</p>
			</div>
		</div>
	</div>

	<div class="modal" id="modalkrishna">
		<div class="modal-content">
			<span class="close-btn" onclick="closeModal('modalkrishna')">&times;</span>
			<div class="modal-left">
				<img src="{{asset('lab/img/AGM-HR')}}.png" alt="Director 1" class="modal-director-image">
				<h3>Krishna Reddy Shanigaram</h3>
				<p style="text-align: center;">AGM - Human Resources</p>
				<hr>
			</div>
			<div class="modal-right">
				<p style="margin-bottom: 25px;" class="modalp">With 17 years of extensive experience in Human
					Resources, Krishna Reddy Shanigaram leads our HR department with a passion for fostering
					talent and enhancing organizational effectiveness. Throughout his career, he has worked with
					esteemed organizations such as Vijaya Diagnostic Limited, Dr. Agarwal's Health Care Limited,
					Care Hospitals, Vekomy Technologies and NICE Hospital each recognized for their excellence
					in HR operations.</p>
				<p style="margin-bottom: 25px;" class="modalp">Krishna has collaborated closely with top
					management to drive operational optimization and strategic HR business planning, playing a
					pivotal role in decision-making processes at the organizational level. His deep
					understanding of HR functions and commitment to aligning people strategies with business
					goals make him an invaluable asset to our team.
					Under his leadership, we are dedicated to building a dynamic workplace culture that
					attracts, develops, and retains top talent, ensuring our organization remains a leader in
					our industry.</p>
			</div>
		</div>
	</div>

	<div class="modal" id="modalphani">
		<div class="modal-content">
			<span class="close-btn" onclick="closeModal('modalphani')">&times;</span>
			<div class="modal-left">
				<img src="{{asset('lab/img/phani.jpg')}}" alt="Director 1" class="modal-director-image">
				<h3>B V N Phani Kumar</h3>
				<p style="text-align: center;">General Manager - Sales</p>
				<hr>
			</div>
			<div class="modal-right">
				<p style="margin-bottom: 25px;" class="modalp">BVN Phani Kumar is a seasoned professional with
					an illustrious 29-year career, bringing a unique blend of expertise in sales leadership,
					strategic financial acumen, and quality assurance in the diagnostics industry. Having honed
					his skills during his tenure with the Indian Air Force, Honeywell and later as Regional Head
					at ManipalTRUtest, Phani has consistently demonstrated his ability to drive transformative
					initiatives across multidisciplinary teams.</p>
				<p style="margin-bottom: 25px;" class="modalp">At TRUSTlab, Phani has been pivotal in catalysing
					synergies across departments, implementing advanced team fostering frameworks, and embedding
					a culture of operational excellence. His robust credentials include an MBA, certifications
					in supply chain management, ISO15189, and Six Sigma Green Belt, further solidifying his
					standing as a visionary leader in diagnostics sales.

					Phani’s ambition to elevate TRUSTlab into the echelon of India’s top diagnostic companies is
					both strategic and visionary, driven by his holistic approach to sales leadership and
					relentless pursuit of excellence.</p>
			</div>
		</div>
	</div>

	<div class="modal" id="modalprakash">
		<div class="modal-content">
			<span class="close-btn" onclick="closeModal('modalprakash')">&times;</span>
			<div class="modal-left">
				<img src="{{asset('lab/img/prakash.jpg')}}" alt="Director 1" class="modal-director-image">
				<h3>Prakash Chandra Dwivedi</h3>
				<p style="text-align: center;">General Manager - Sales</p>
				<hr>
			</div>
			<div class="modal-right">
				<p style="margin-bottom: 25px;" class="modalp">Mr. Prakash Dwivedi currently holds the position
					of General Manager - Sales & BD Professional at TRUSTlab Diagnostic Pvt. Ltd., Hyderabad. He
					has been associated with TRUSTlab since 2023. He holds double bachelor (BSc & LLB) & MBA in
					Business Operations from JNU
				</p>
				<p style="margin-bottom: 25px;" class="modalp">He has diverse experience of more than two
					decades in Diagnostic & Pharma Industry and his expertise in Sales, Marketing, Business
					Operations, M & A, Network expansion and P & L, working with Diagnostic Industry. He worked
					for Agilus Diagnostic (Formally SRL Diagnostic), Oncquest Laboratories (Dabur India
					Subsidiary), Vimta Clinical Diagnostic and Neuberg Diagnostic Pvt. Ltd and in the field of
					Retail & Genomic Businesses.
				</p>
			</div>
		</div>
	</div>

	<div class="modal" id="modalaleem">
		<div class="modal-content">
			<span class="close-btn" onclick="closeModal('modalaleem')">&times;</span>
			<div class="modal-left">
				<img src="{{asset('lab/img/aleem.jpg')}}" alt="Director 1" class="modal-director-image">
				<h3>Dr. Abdul Aleem Mohammed</h3>
				<p style="text-align: center;">Lab Head</p>
				<hr>
			</div>
			<div class="modal-right">
				<p style="margin-bottom: 25px;" class="modalp">With over a decade of experience in
					histopathology, cytopathology, and laboratory management, Dr. Abdul Aleem is dedicated to
					providing patient-centered, evidence-based diagnostic services. He holds an MBBS, MD, DNB,
					and DipRCPath (UK), and has been instrumental in enhancing diagnostic accuracy and patient
					outcomes through quality assurance programs and innovative practices at Trustlab
					Diagnostics.</p>
				<p style="margin-bottom: 25px;" class="modalp">Dr. Aleem has completed specialized training in
					cancer cytogenetics at Columbia University Irving Medical Center under the prestigious ASH
					International Visitor Training Fellowship, gaining advanced expertise in karyotyping and
					solid tumor FISH. His commitment to continuous improvement and multidisciplinary
					collaboration ensures that Trustlab Diagnostics remains at the forefront of high-quality
					pathology services.</p>
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