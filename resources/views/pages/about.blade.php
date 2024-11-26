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



		.text-blk {
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
			margin-left: 0px;
			line-height: 25px;
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		}

		.responsive-cell-block {
			min-height: 75px;
		}

		.responsive-container-block {
			min-height: 75px;
			height: fit-content;
			width: 100%;
			padding-top: 10px;
			padding-right: 10px;
			padding-bottom: 10px;
			padding-left: 10px;
			display: flex;
			flex-wrap: wrap;
			margin-top: 0px;
			margin-right: auto;
			margin-bottom: 0px;
			margin-left: auto;
			justify-content: flex-start;
		}

		.responsive-container-block.bigContainer {
			padding-top: 0px;
			padding-right: 50px;
			padding-bottom: 0px;
			padding-left: 50px;
			margin-top: 50px;
			margin-right: 0px;
			margin-bottom: 50px;
			margin-left: 0px;
		}

		.responsive-container-block.Container {
			max-width: 1320px;
			justify-content: space-evenly;
			align-items: center;
			padding-top: 10px;
			padding-right: 10px;
			padding-bottom: 0px;
			padding-left: 10px;
			position: relative;
			overflow-x: hidden;
			overflow-y: hidden;
			margin-top: 0px;
			margin-right: auto;
			margin-bottom: 0px;
			margin-left: auto;
		}

		.mainImg {
			width: 100%;
			height: 800px;
			object-fit: cover;
		}

		.blueDots {
			position: absolute;
			top: 150px;
			right: 15%;
			z-index: -1;
			left: auto;
			width: 80%;
			height: 500px;
			object-fit: cover;
		}

		.imgContainer {
			position: relative;
			width: 48%;
		}

		.responsive-container-block.textSide {
			width: 48%;
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
			z-index: 100;
		}

		.text-blk.heading {
			font-size: 36px;
			line-height: 40px;
			font-weight: 50;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 20px;
			margin-left: 0px;

		}

		.text-blk.subHeading {
			font-size: 16px;
			line-height: 26px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 20px;
			margin-left: 0px;
			color: black;
		}

		.cardImg {
			width: 31px;
			height: 31px;
		}

		.cardImgContainer {
			padding-top: 20px;
			padding-right: 20px;
			padding-bottom: 20px;
			padding-left: 20px;
			border-top-width: 1px;
			border-right-width: 1px;
			border-bottom-width: 1px;
			border-left-width: 1px;
			border-top-style: solid;
			border-right-style: solid;
			border-bottom-style: solid;
			border-left-style: solid;
			border-top-color: rgb(229, 229, 229);
			border-right-color: rgb(229, 229, 229);
			border-bottom-color: rgb(229, 229, 229);
			border-left-color: rgb(229, 229, 229);
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
			margin-top: 0px;
			margin-right: 10px;
			margin-bottom: 0px;
			margin-left: 0px;
		}

		.responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12 {
			display: flex;
			justify-content: center;
			align-items: center;
			padding-top: 10px;
			padding-right: 15px;
			padding-bottom: 10px;
			padding-left: 0px;
		}

		.text-blk.cardHeading {
			font-size: 18px;
			line-height: 28px;
			font-weight: 700;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 10px;
			margin-left: 0px;
		}

		.text-blk.cardSubHeading {
			color: rgb(153, 153, 153);
			line-height: 22px;
		}

		.explore {
			font-size: 18px;
			line-height: 20px;
			font-weight: 700;
			color: white;
			background-color: rgb(244, 152, 146);
			box-shadow: rgba(244, 152, 146, 0.25) 0px 10px 20px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
			cursor: pointer;
			border-top-width: 0px;
			border-right-width: 0px;
			border-bottom-width: 0px;
			border-left-width: 0px;
			border-top-style: initial;
			border-right-style: initial;
			border-bottom-style: initial;
			border-left-style: initial;
			border-top-color: initial;
			border-right-color: initial;
			border-bottom-color: initial;
			border-left-color: initial;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding-top: 17px;
			padding-right: 40px;
			padding-bottom: 17px;
			padding-left: 40px;
		}

		.explore:hover {
			background-image: initial;
			background-position-x: initial;
			background-position-y: initial;
			background-size: initial;
			background-repeat-x: initial;
			background-repeat-y: initial;
			background-attachment: initial;
			background-origin: initial;
			background-clip: initial;
			background-color: rgb(244, 182, 176);
		}

		#ixvck {
			margin-top: 60px;
			margin-right: 0px;
			margin-bottom: 0px;
			margin-left: 0px;
		}

		.redDots {
			position: absolute;
			bottom: -350px;
			right: -100px;
			height: 500px;
			width: 400px;
			object-fit: cover;
			top: auto;
		}

		@media (max-width: 1024px) {
			.responsive-container-block.Container {
				position: relative;
				align-items: flex-start;
				justify-content: center;
			}

			.mainImg {
				bottom: 0px;
			}

			.imgContainer {
				position: absolute;
				bottom: 0px;
				left: 0px;
				height: auto;
				width: 60%;
			}

			.responsive-container-block.textSide {
				margin-top: 0px;
				margin-right: 0px;
				margin-bottom: 0px;
				margin-left: auto;
				width: 70%;
			}

			.responsive-container-block.Container {
				flex-direction: column-reverse;
			}

			.imgContainer {
				position: relative;
				width: auto;
				margin-top: 0px;
				margin-right: auto;
				margin-bottom: 0px;
				margin-left: auto;
			}

			.responsive-container-block.textSide {
				margin-top: 0px;
				margin-right: 0px;
				margin-bottom: 20px;
				margin-left: 0px;
				width: 100%;
			}

			.responsive-container-block.Container {
				flex-direction: row-reverse;
			}

			.responsive-container-block.Container {
				flex-direction: column-reverse;
			}
		}

		@media (max-width: 768px) {
			.responsive-container-block.textSide {
				width: 100%;
				align-items: center;
				flex-direction: column;
				justify-content: center;
			}

			.text-blk.subHeading {
				text-align: center;
				font-size: 17px;
				max-width: 520px;
			}

			.text-blk.heading {
				text-align: center;
			}

			.imgContainer {
				opacity: 0.8;
			}

			.imgContainer {
				height: 500px;
			}

			.imgContainer {
				width: 30px;
			}

			.responsive-container-block.Container {
				flex-direction: column-reverse;
			}

			.responsive-container-block.Container {
				flex-wrap: nowrap;
			}

			.responsive-container-block.textSide {
				width: 100%;
				margin-top: 0px;
				margin-right: 0px;
				margin-bottom: 20px;
				margin-left: 0px;
			}

			.imgContainer {
				width: 90%;
			}

			.imgContainer {
				height: 450px;
				margin-top: 5px;
				margin-right: 33.9062px;
				margin-bottom: 0px;
				margin-left: 33.9062px;
			}

			.redDots {
				display: none;
			}

			.explore {
				font-size: 16px;
				line-height: 14px;
			}
		}

		@media (max-width: 500px) {
			.imgContainer {
				position: static;
				height: 450px;
			}

			.mainImg {
				height: 100%;
			}

			.blueDots {
				width: 100%;
				left: 0px;
				top: 0px;
				bottom: auto;
				right: auto;
			}

			.imgContainer {
				width: 100%;
			}

			.responsive-container-block.textSide {
				margin-top: 0px;
				margin-right: 0px;
				margin-bottom: 0px;
				margin-left: 0px;
			}

			.responsive-container-block.Container {
				padding-top: 0px;
				padding-right: 0px;
				padding-bottom: 0px;
				padding-left: 0px;
				overflow-x: visible;
				overflow-y: visible;
			}

			.responsive-container-block.bigContainer {
				padding-top: 10px;
				padding-right: 20px;
				padding-bottom: 10px;
				padding-left: 20px;
				padding: 0 30px 0 30px;
			}

			.redDots {
				display: none;
			}

			.text-blk.subHeading {
				font-size: 16px;
				line-height: 23px;
			}

			.text-blk.heading {
				font-size: 28px;
				line-height: 28px;
			}

			.responsive-container-block.textSide {
				margin-top: 40px;
				margin-right: 0px;
				margin-bottom: 50px;
				margin-left: 0px;
			}

			.imgContainer {
				margin-top: 5px;
				margin-right: auto;
				margin-bottom: 0px;
				margin-left: auto;
				width: 100%;
				position: relative;
			}

			.explore {
				padding-top: 17px;
				padding-right: 0px;
				padding-bottom: 17px;
				padding-left: 0px;
				width: 100%;
			}

			#ixvck {
				width: 90%;
				margin-top: 40px;
				margin-right: 0px;
				margin-bottom: 0px;
				margin-left: 0px;
				font-size: 15px;
			}

			.blueDots {
				bottom: 0px;
				width: 100%;
				height: 80%;
				top: 10%;
			}

			.text-blk.cardHeading {
				font-size: 16px;
				margin-top: 0px;
				margin-right: 0px;
				margin-bottom: 8px;
				margin-left: 0px;
				line-height: 25px;
			}

			.responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12 {
				padding-top: 10px;
				padding-right: 0px;
				padding-bottom: 10px;
				padding-left: 0px;
			}
		}


		@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');

		*,
		*:before,
		*:after {
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
		}

		.wk-desk-1 {
			width: 8.333333%;
		}

		.wk-desk-2 {
			width: 16.666667%;
		}

		.wk-desk-3 {
			width: 25%;
		}

		.wk-desk-4 {
			width: 33.333333%;
		}

		.wk-desk-5 {
			width: 41.666667%;
		}

		.wk-desk-6 {
			width: 50%;
		}

		.wk-desk-7 {
			width: 58.333333%;
		}

		.wk-desk-8 {
			width: 66.666667%;
		}

		.wk-desk-9 {
			width: 75%;
		}

		.wk-desk-10 {
			width: 83.333333%;
		}

		.wk-desk-11 {
			width: 91.666667%;
		}

		.wk-desk-12 {
			width: 100%;
		}

		@media (max-width: 1024px) {
			.wk-ipadp-1 {
				width: 8.333333%;
			}

			.wk-ipadp-2 {
				width: 16.666667%;
			}

			.wk-ipadp-3 {
				width: 25%;
			}

			.wk-ipadp-4 {
				width: 33.333333%;
			}

			.wk-ipadp-5 {
				width: 41.666667%;
			}

			.wk-ipadp-6 {
				width: 50%;
			}

			.wk-ipadp-7 {
				width: 58.333333%;
			}

			.wk-ipadp-8 {
				width: 66.666667%;
			}

			.wk-ipadp-9 {
				width: 75%;
			}

			.wk-ipadp-10 {
				width: 83.333333%;
			}

			.wk-ipadp-11 {
				width: 91.666667%;
			}

			.wk-ipadp-12 {
				width: 100%;
			}
		}

		@media (max-width: 768px) {
			.wk-tab-1 {
				width: 8.333333%;
			}

			.wk-tab-2 {
				width: 16.666667%;
			}

			.wk-tab-3 {
				width: 25%;
			}

			.wk-tab-4 {
				width: 33.333333%;
			}

			.wk-tab-5 {
				width: 41.666667%;
			}

			.wk-tab-6 {
				width: 50%;
			}

			.wk-tab-7 {
				width: 58.333333%;
			}

			.wk-tab-8 {
				width: 66.666667%;
			}

			.wk-tab-9 {
				width: 75%;
			}

			.wk-tab-10 {
				width: 83.333333%;
			}

			.wk-tab-11 {
				width: 91.666667%;
			}

			.wk-tab-12 {
				width: 100%;
			}
		}

		@media (max-width: 500px) {
			.wk-mobile-1 {
				width: 8.333333%;
			}

			.wk-mobile-2 {
				width: 16.666667%;
			}

			.wk-mobile-3 {
				width: 25%;
			}

			.wk-mobile-4 {
				width: 33.333333%;
			}

			.wk-mobile-5 {
				width: 41.666667%;
			}

			.wk-mobile-6 {
				width: 50%;
			}

			.wk-mobile-7 {
				width: 58.333333%;
			}

			.wk-mobile-8 {
				width: 66.666667%;
			}

			.wk-mobile-9 {
				width: 75%;
			}

			.wk-mobile-10 {
				width: 83.333333%;
			}

			.wk-mobile-11 {
				width: 91.666667%;
			}

			.wk-mobile-12 {
				width: 100%;
			}
		}
	</style>
@section('content')
<div class="breadcrumbs overlay breadcrumbswho">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>About Us</h2>
							<ul class="bread-list">
								<li><a href="diagnosticsolutions.html">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">About Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="responsive-container-block bigContainer">
			<div class="responsive-container-block Container">
				<div class="imgContainer">
					<img class="blueDots"
						src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/aw3.svg">
					<img class="mainImg" src="{{asset('lab/img/aboutdot.svg')}}">
				</div>
				<div class="responsive-container-block textSide">
					<p class="text-blk heading whath3">
						A firm stride into the future
					</p>
					<p class="text-blk subHeading">
						Since its founding in 2021, TRUSTlab Diagnostics is committed to revolutionizing the healthcare
						industry through precision diagnostics and compassionate care. Founded on the principles of
						accuracy, reliability, and patient-centric service, we strive to deliver excellence in every
						test we conduct.
					</p>

					<p class="text-blk subHeading">
						TRUSTlab has worked relentlessly towards achieving greater standards of testing capabilities,
						adding to its ever-growing test-menu in conjunction with cutting-edge technologies, qualified &
						skilled professionals, customized processes of optimization.
					</p>


					<p class="text-blk subHeading">
						We have increased our footprint from a single lab in Hyderabad to over 20 labs across India,
						each equipped with State-of-the-Art diagnostic equipment, to make avilable world-class testing
						outcomes to more and more people Pan India.
					</p>

					<p class="text-blk subHeading">
						We continue to live up to our responsibilities, following the most ethical practices and take
						great pride in our quality of service. Whether you are a medical professional, a patient or
						someone just seeking to stay healthy – TRUSTlab is always there where you need us: close at
						hand!
					</p>



					<!-- <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
				  <div class="cardImgContainer">
					<img class="cardImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/id2.svg">
				  </div>
				  <div class="cardText">
					<p class="text-blk cardHeading">
					  Value
					</p>
					<p class="text-blk cardSubHeading">
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				  </div>
				</div>
				<div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
				  <div class="cardImgContainer">
					<img class="cardImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/id2.svg">
				  </div>
				  <div class="cardText">
					<p class="text-blk cardHeading">
					  Value
					</p>
					<p class="text-blk cardSubHeading">
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				  </div>
				</div>
				<div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
				  <div class="cardImgContainer">
					<img class="cardImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/id2.svg">
				  </div>
				  <div class="cardText">
					<p class="text-blk cardHeading">
					  Value
					</p>
					<p class="text-blk cardSubHeading">
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				  </div>
				</div>
				<div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
				  <div class="cardImgContainer">
					<img class="cardImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/id2.svg">
				  </div>
				  <div class="cardText">
					<p class="text-blk cardHeading">
					  Value
					</p>
					<p class="text-blk cardSubHeading">
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				  </div>
				</div> -->

					<!-- <button class="explore">
					Explore our Services
				  </button> -->
					<!-- <div class="get-quote">
					<a href="diagnosticsolutions.html" class="btn">Explore our Services</a>
				</div> -->

				</div>
				<img class="redDots" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/cw3.svg">
			</div>
		</div>

		<div class="video-container container" style="padding: 50px;">
			<video id="myVideo" class="video" controls controlsList="nodownload" poster="{{asset('lab/img/bgintro.png')}}">
				<source src="{{asset('lab/img/Intro.mp4')}}" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>

		<hr style="opacity: 16%;">

		<div style="text-align: center;">
			<img src="{{asset('lab/img/who.svg')}}" width="100%" />

		</div>



		<hr style="opacity: 25%;">


		<div style="text-align: center; padding-bottom: 5%;" class="image-container">
			<img src="{{asset('lab/img/core-values.png')}}" width="10%" style="padding: 20px;" />

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

</section>
<!-- /End Newsletter Area -->
@endsection