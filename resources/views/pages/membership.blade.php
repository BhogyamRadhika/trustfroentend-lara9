@extends('layouts.landingpage')

@section('content')
<div class="myfixedbanner">
			<img class="banner-image landscape" src="{{asset('lab/img/membership.svg')}}" alt="img" />
			<img src="{{asset('lab/img/memberpotrait.svg')}}" alt="Banner" class="banner-image portrait">
		</div>

		<a href="https://wa.me/+919014638633?text=Hello%20I%20want%20to%20book%20a%20home%20collection%20service... 🔬😊"
			class="whatsapp-float" target="_blank">
			<img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" />
		</a>

		<div class="floating-scanner">
			<div class="scanner-content">
				<img src="{{asset('lab/img/eDOSwithouttext.png')}}" alt="Download TRUSTlab App" class="qr-code">
				<p>Download TRUSTlab App</p>
			</div>
		</div>



		<!-- <div class="process-container">
            
        
            <div class="step">
                <div class="step-content">
                    <h3>Step 1: Choose Your Test</h3>
                    <p>Select your desired test from our comprehensive list of diagnostic tests. You can browse tests or packages tailored to your needs.</p>
                </div>
                <img src="https://media.istockphoto.com/id/1460124878/photo/social-media-connection-and-woman-typing-on-a-phone-for-communication-app-and-chat-web-search.jpg?s=612x612&w=0&k=20&c=fJvxm6AuV1B0RkSKPx9BOuy-JQTevt1Ah0kySJ_GeRY=" alt="Choose Your Test" class="step-image">
            </div>

            
        
            <div class="step reverse">
                
                <div class="step-content">
                    <h3>Step 2: Schedule Your Collection</h3>
                    <p>Pick a date and time that works best for you. Our professionals are available for home visits at your convenience.</p>
                </div>
                <img src="https://www.dropoff.com/wp-content/uploads/2022/07/What-Is-Delivery-Scheduling-and-How-to-Organize-It-for-Your-Business-01-1024x600.jpg" alt="Schedule Your Collection" class="step-image">
            </div>
        
            <div class="step">
                <div class="step-content">
                    <h3>Step 3: Collection at Your Doorstep</h3>
                    <p>Our trained phlebotomist will arrive to collect the sample at your scheduled time, ensuring a safe and hygienic process.</p>
                </div>
                <img src="https://media.licdn.com/dms/image/D5612AQG2vfJStvLD-g/article-cover_image-shrink_720_1280/0/1681626969192?e=2147483647&v=beta&t=4PcYapX_pxrJ8fxK21dRCCI4fnVFHT9AkHSqSmm8W7k" alt="Get Your Results" class="step-image">
            </div>
        
            <div class="step reverse">
                <div class="step-content">
                    <h3>Step 4: Get Your Results</h3>
                    <p>Receive your results directly on your mobile app or through email. You can also access them anytime on our website.</p>
                </div>
                <img src="https://ada.com/_next/image/?url=https%3A%2F%2Fprismic-io.s3.amazonaws.com%2Fadahealth%2FYmMwNGJhMjYtNmRhZi00MDAzLWI3ODMtMjIxNTg5MjAxMDcw_blood-test-results.png%3Frect%3D0%2C0%2C1800%2C888%26w%3D2076%26h%3D1024%26fit%3Dclip%26q%3D90&w=1080&q=70" alt="Collection at Your Doorstep" class="step-image">

            </div>
        
            
        </div> -->

		<!-- "How It Works" Section -->

		<!-- Membership Benefits Section -->
		<section class="membership-benefits">
			<h2>Why Join TRUSTlife Membership?</h2>
			<p class="membership-description">Unlock exclusive benefits designed to support your health and wellness
				journey.</p>
			<hr style="opacity: 20%; margin-left: 20%; margin-right: 20%;" />

			<div class="benefits-cards">
				<div class="benefit-card">
					<img src="https://cdn.prod.website-files.com/655b9a852f3d2a5de3c90048/6647e96e01c5e8daeb6b474c_Comprehensive%20Blood%20Biomarker%20Panel.png"
						alt="Dedicated Team Icon" class="icon">
					<h3>Personalized Care Team</h3>
					<p>Get matched with a dedicated team to guide you on your wellness journey.</p>
					<a href="#">Meet Your Care Team</a>
				</div>
				<div class="benefit-card">
					<img src="https://cdn.prod.website-files.com/655b9a852f3d2a5de3c90048/6659e3b83afd923776b10223_Icon2c.png"
						alt="Advanced Diagnostics Icon" class="icon">
					<h3>Advanced Diagnostics</h3>
					<p>Access top-tier diagnostic tools for a comprehensive health analysis.</p>
					<a href="#">Explore Diagnostics</a>
				</div>
				<div class="benefit-card">
					<img src="https://cdn.prod.website-files.com/655b9a852f3d2a5de3c90048/6647e974f78380bd478fb264_Retinal%20Scan%20with%20AI%20read.png"
						alt="Concierge Care Icon" class="icon">
					<h3>Annual Membership Deals</h3>
					<p>Round-the-clock personalized support from our dedicated health team.</p>
					<a href="#">Learn More</a>
				</div>
				<div class="benefit-card">
					<img src="https://cdn.prod.website-files.com/655b9a852f3d2a5de3c90048/6712d8713597bba639b8b0b0_ai.svg"
						alt="App Icon" class="icon">
					<h3>TRUSTlife App & AI</h3>
					<p>Instant access to your health data and personalized insights via AI.</p>
					<a href="#">Discover the App</a>
				</div>
				<div class="benefit-card">
					<img src="https://cdn.prod.website-files.com/655b9a852f3d2a5de3c90048/6647e96d28b6e0709f3ada53_Electrocardiogram.png"
						alt="Therapeutics Icon" class="icon">
					<h3>Curated Health Checkup Packages</h3>
					<p>Access treatments tailored to support and optimize your health goals.</p>
					<a href="#">View Therapeutics</a>
				</div>
				<div class="benefit-card">
					<img src="https://cdn.prod.website-files.com/655b9a852f3d2a5de3c90048/6659e3b7bf05f98256561a2c_Icon11c.png"
						alt="Aesthetics Icon" class="icon">
					<h3>On-Call Doctor Consultation</h3>
					<p>Enhance your well-being with aesthetic treatments designed for vitality.</p>
					<a href="#">Explore Aesthetics</a>
				</div>
			</div>
		</section>


		<section class="py-24 ">
			<div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
				<div class="mb-12">
					<h2 class="font-manrope text-5xl text-center font-bold text-gray-900 mb-4">Choose your membership
						plan </h2>
					<!-- <p class="text-gray-500 text-center leading-6 mb-9">7 Days free trial. No credit card required.</p> -->
					<!--Switch-->
					<!-- <div class="flex justify-center items-center">
				<label class="min-w-[3.5rem] text-xl relative text-gray-900 mr-4 font-medium">Bill Monthly</label>
				<input type="checkbox" id="basic-with-description"
					class="relative shrink-0 w-11 h-6 p-0.5 bg-indigo-100 checked:bg-none checked:bg-indigo-100 rounded-full cursor-pointer transition-colors ease-in-out duration-200  focus:border-blue-600  appearance-none 

						before:inline-block before:w-5 before:h-5 before:bg-indigo-600 checked:before:bg-indigo-600 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform  before:transition before:ease-in-out before:duration-200 ">
				<label class="relative min-w-[3.5rem] font-medium text-xl text-gray-500 ml-4 ">
					Bill Yearly
				</label>
			</div> -->
					<!--Switch End-->
				</div>
				<!--Grid-->
				
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

				<div class="space-y-8 lg:grid lg:grid-cols-2 sm:gap-6 xl:gap-1 lg:space-y-0 lg:items-center">
					<!--Pricing Card-->

					<!--Pricing Card-->
					<div
						class="flex flex-col mx-auto max-w-sm text-gray-900 rounded-2xl bg-indigo-50 transition-all duration-500 hover:bg-indigo-100 ">
						<div
							class="bg-gradient-to-r from-indigo-600 to-violet-600 rounded-t-2xl p-3 text-center text-white text-3xl">
							TRUSTlife
						</div>
						<div class="p-6 xl:py-9 xl:px-12">
							<!-- <h3 class="font-manrope text-2xl font-bold mb-3">Advanced</h3> -->
							<form action="{{ route('membership.pay') }}" method="POST">
							@csrf
							<div class="flex items-center mb-6">
								<span class="font-manrope mr-2 text-6xl font-semibold text-indigo-600">₹999/-</span>
								<!-- <span class="text-xl text-gray-500 ">Joining fee</span> -->
							</div>
							<!--List-->
							<ul class="mb-12 space-y-6 text-left text-lg ">
								<li class="flex items-center space-x-4">
									<!-- Icon -->
									<svg class="flex-shrink-0 w-6 h-6 text-indigo-600" viewBox="0 0 30 30" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
											stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>One Time Joining Fee</span>
								</li>
								<li class="flex items-center space-x-4">
									<!-- Icon -->
									<svg class="flex-shrink-0 w-6 h-6 text-indigo-600" viewBox="0 0 30 30" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
											stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>FREE On-call doctor consultation</span>
								</li>
								<li class="flex items-center space-x-4">
									<!-- Icon -->
									<svg class="flex-shrink-0 w-6 h-6 text-indigo-600" viewBox="0 0 30 30" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
											stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>FREE 4 HBA1C tests – 1 per quater</span>
								</li>
								<li class="flex items-center space-x-4">
									<!-- Icon -->
									<svg class="flex-shrink-0 w-6 h-6 text-indigo-600" viewBox="0 0 30 30" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
											stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>Priority customer support</span>
								</li>
								<li class="flex items-center space-x-4">
									<!-- Icon -->
									<svg class="flex-shrink-0 w-6 h-6 text-indigo-600" viewBox="0 0 30 30" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
											stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>All Widget Access</span>
								</li>
							</ul>
							

	@if(auth()->check())
    <input type="hidden" name="plan" value="standered">
    <input type="hidden" name="amount" value="999">
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <input type="hidden" name="user_email" value="{{ auth()->user()->email }}">
    <button type="submit" 
            class="py-2.5 px-5 bg-indigo-600 shadow-sm rounded-full transition-all duration-500 text-base text-white font-semibold text-center w-fit block mx-auto hover:bg-indigo-700">
        Purchase Plan
    </button>
@else
    <!-- Show a message or redirect the user -->
    <p class="text-red-500 text-center">Please <a href="{{ route('login') }}" class="underline">log in</a> to purchase a plan.</p>
@endif

							</form>
						</div>
					</div>
					<!--Pricing Card-->
					<div
						class="flex flex-col mx-auto max-w-sm text-gray-900 rounded-2xl bg-indigo-50 transition-all duration-500 hover:bg-indigo-100 ">
						<div
							class="bg-gradient-to-r from-indigo-600 to-violet-600 rounded-t-2xl p-3 text-center text-white text-3xl">
							TRUSTlife
						</div>
						<div class="p-6 xl:py-9 xl:px-12">
							<!-- <h3 class="font-manrope text-2xl font-bold mb-3">Advanced</h3> -->
							<form action="{{ route('membership.pay') }}" method="POST">
							@csrf
							<div class="flex items-center mb-6">
								<span class="font-manrope mr-2 text-6xl font-semibold text-indigo-600">₹1999/-</span>
								<!-- <span class="text-xl text-gray-500 ">/ month</span> -->
							</div>
							<!--List-->
							<ul class="mb-12 space-y-6 text-left text-lg ">
								<li class="flex items-center space-x-4">
									<!-- Icon -->
									<svg class="flex-shrink-0 w-6 h-6 text-indigo-600" viewBox="0 0 30 30" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
											stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>FREE On-call doctor consultation</span>
								</li>
								<li class="flex items-center space-x-4">
									<!-- Icon -->
									<svg class="flex-shrink-0 w-6 h-6 text-indigo-600" viewBox="0 0 30 30" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
											stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>FREE On-call doctor consultation</span>
								</li>
								<li class="flex items-center space-x-4">
									<!-- Icon -->
									<svg class="flex-shrink-0 w-6 h-6 text-indigo-600" viewBox="0 0 30 30" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
											stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>1 Day transaction clearing </span>
								</li>
								<li class="flex items-center space-x-4">
									<!-- Icon -->
									<svg class="flex-shrink-0 w-6 h-6 text-indigo-600" viewBox="0 0 30 30" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
											stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>Priority customer support</span>
								</li>
								<li class="flex items-center space-x-4">
									<!-- Icon -->
									<svg class="flex-shrink-0 w-6 h-6 text-indigo-600" viewBox="0 0 30 30" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z"
											stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>All Widget Access</span>
								</li>
							</ul>
							@if(auth()->check())
    <input type="hidden" name="plan" value="platinum">
    <input type="hidden" name="amount" value="1999">
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <input type="hidden" name="user_email" value="{{ auth()->user()->email }}">
    <button type="submit" 
            class="py-2.5 px-5 bg-indigo-600 shadow-sm rounded-full transition-all duration-500 text-base text-white font-semibold text-center w-fit block mx-auto hover:bg-indigo-700">
        Purchase Plan
    </button>
@else
    <!-- Show a message or redirect the user -->
    <p class="text-red-500 text-center">Please <a href="{{ route('login') }}" class="underline">log in</a> to purchase a plan.</p>
@endif
							</form>
						</div>
					</div>
					<!--Grid End-->

				</div>
		</section>

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
					<h2 style="font-size: 28px; margin-bottom: 20px;">Access health anytime with the TRUSTlab Mobile App
					</h2>
					<p style="font-size: 16px; margin-bottom: 20px;">Book home collections, find test packages, access
						your health records, and more—right at your fingertips.</p>
					<!-- App Store Buttons -->
					<div class="download-buttons" style="display: flex; align-items: center; justify-content: center;">
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


		<section class="testimonialsection">

			<div class="testimonials-section">
				<div class="testimonials-header">
					<p>TESTIMONIALS</p>
					<h2>What People Say</h2>

				</div>

				<div class="testimonials-container">
					<div class="testimonial-cards">

						<div class="testimonial-card">
							<img src="{{asset('lab/img/riya.png')}}" alt="Person 1">
							<div class="testimonial-content">
								<h3>Riya Sharma</h3>
								<p class="title">Hyderabad</p>
								<div class="stars">★★★★☆</div>
								<p>Joining TRUSTlab membership program has been a game-changer for me. The exclusive
									health benefits, quick access to diagnostics, and special privileges have made my
									life so much easier. I feel like I’m in safe hands every step of the way!</p>
							</div>
						</div>


						<div class="testimonial-card">
							<img src="{{asset('lab/img/arjun.png')}}" alt="Person 2">
							<div class="testimonial-content">
								<h3>Arjun Kapoor</h3>
								<p class="title">Bengaluru</p>
								<div class="stars">★★★★☆</div>
								<p>The membership offers incredible value! From priority appointments to discounts on
									lab tests, I save both time and money while ensuring my health is always a priority.
									I highly recommend it to everyone.</p>
							</div>
						</div>


						<div class="testimonial-card">
							<img src="{{asset('lab/img/neha.png')}}" alt="Person 3">
							<div class="testimonial-content">
								<h3>Neha Patel</h3>
								<p class="title">Mumbai</p>
								<div class="stars">★★★★☆</div>
								<p>Being a member has given me peace of mind. I know that my family and I have access to
									top-quality healthcare services whenever needed, with added perks like free
									consultations and home sample collection.</p>
							</div>
						</div>


						<div class="testimonial-card">
							<img src="{{asset('lab/img/rahul.png')}}" alt="Person 4">
							<div class="testimonial-content">
								<h3>Rahul Varma</h3>
								<p class="title">Delhi</p>
								<div class="stars">★★★★☆</div>
								<p>This is more than just a membership – it’s a commitment to better health. The
									personalized support and exclusive privileges have exceeded my expectations. I feel
									confident and cared for!</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<!-- <section class="two-column-section">
    <div class="text-section">
        <h2>"A healthy person has a thousand wishes, a sick person only has one."</h2>
        <button class="cta-button">Learn More</button>
    </div>
    <div class="lastimage-section">
        <img src="img/wish.jpg" alt="Membership Benefits">
    </div>
</section> -->


		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12 thehomecontent">
						<div class="content div1 milestone">
							<p style="font-size: 1.2rem; font-weight: bold;">Your health is too important for a
								waiting room.</p>
							<h2>Think Home Collection <br>Think <span
									style="font-size: 50px; margin-top: -50px;">TRUSTlab!</span><br>Call
								@ 74400 75400</h2>
							<p>Experience the convenience and reliability of our home collection services.<br />
								TRUSTlab
								brings precise diagnostics right to your doorstep.</p>


							<!-- <div style="text-align: center;" class="image-container">
							<img src="img/BloodKit.png"  />
							
						</div> -->
							<div class="button milestone">
								<a href="contact.html" class="btn">Contact Now</a>
								<a href="membership.html" class="btn second">Learn More<i
										class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>

						<div class="div2 milestone">
							<div>
								<img src="{{asset('lab/img/2dbloodkit.png')}}" width="80%" class="image-content" />
							</div>
						</div>

					</div>
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
							<!-- <img src="img/section-img.png" alt="#"> -->
							<p>Our dedicated team is available around the clock to provide you with all the information
								and support you need.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
					<form class="form" action="{{route('contact.update')}}" method="POST">
                    @csrf
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


@endsection

@if(session('success'))
<script>
    alert('{{ session('success') }}');
</script>
@endif
@if(session('error'))
<script>
    alert('{{ session('error') }}');
</script>
@endif