@extends('layouts.landingpage')
@section('content')

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay breadcrumbsblog">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Our Blogs</h2>
							<ul class="bread-list">
								<li><a href="diagnosticsolutions.html">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Our Blogs</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<div class="col-12">
								<div class="single-main">
									<!-- News Head -->
									<div class="news-head">
										<img src="img/healthcare.png" alt="#">
									</div>
									<!-- News Title -->
									<h1 class="news-title"><a href="blog-single.html">The Importance of Preventive Health Care: Why Regular Health Checks Matter</a></h1>
									<!-- Meta -->
									<div class="meta">
										<div class="meta-left">
											<span class="author"><a href="#"><img src="img/drvinitha.jpg" alt="#">Dr. Vinitha</a></span>
											<span class="date"><i class="fa fa-clock-o"></i>14 Oct 2024</span>
										</div>
										<div class="meta-right">
											<span class="comments"><a href="#"><i class="fa fa-comments"></i>05 Comments</a></span>
											<span class="views"><i class="fa fa-eye"></i>33K Views</span>
										</div>
									</div>
									<!-- News Text -->
									<div class="news-text">
										<p>In today's fast-paced world, it's easy to overlook our health in favor of work, family, and daily responsibilities. However, maintaining good health isn’t just about reacting to illness—it's about being proactive. Preventive health care, which includes regular check-ups, screenings, and tests, is essential for catching potential health issues before they become severe. This blog will explore why preventive health care is crucial and how regular health checks can positively impact your well-being.</p>
										
										<div class="image-gallery">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-12">
													<div class="single-image">
														<img src="https://cdn.who.int/media/images/default-source/mca/mca-covid-19/coronavirus-2.tmb-1920v.jpg?sfvrsn=4dba955c_19" alt="#">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-12">
													<div class="single-image">
														<img src="https://www.biohealthclinic.co.uk/media/k2/items/cache/d61d44254608dd06ccdd2ff02982d14d_XL.jpg" alt="#">
													</div>
												</div>
											</div>
										</div>
										<p>Preventive health care aims to detect illnesses at an early stage, often before any symptoms appear. Early detection can make all the difference, especially for conditions like diabetes, hypertension, and even cancer. With regular health check-ups, you can manage risks and take the right steps to prevent more serious problems down the line.</p>
										<blockquote class="overlay">
											<p>Think of preventive health care as an investment in your future. Whether you're in your 20s, 40s, or 60s, regular health checks offer a window into your current well-being and what you can do to improve it. Prevention is always better than cure, and staying on top of your health can lead to a longer, healthier, and happier life.</p>					
										</blockquote>
										<p>Knowing that your health is in good hands can reduce anxiety and stress. Regular check-ups give you peace of mind, especially if you’ve been concerned about your family’s medical history or lifestyle risks.</p>
										<p>At TRUSTlab Diagnostics, we believe in empowering individuals to take control of their health. Our wide range of preventive health packages is designed to address the specific needs of every individual. From routine blood tests to specialized screenings, we’ve got you covered. Book a health check today and take the first step toward a healthier tomorrow.</p>
									</div>
									<div class="blog-bottom">
										<!-- Social Share -->
										<ul class="social-share">
											<li class="facebook"><a href="https://www.facebook.com/TRUSTlabDiagnostics" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
											<li class="twitter"><a href="https://x.com/TRUSTlabPvtLtd" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
											<!-- <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
											<li class="linkedin"><a href="https://www.linkedin.com/company/trustlabdiagnostics" target="_blank"><i class="fa fa-linkedin"></i></a></li>
											<!-- <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
										</ul>
										<!-- Next Prev -->
										<ul class="prev-next">
											<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
											<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
										</ul>
										<!--/ End Next Prev -->
									</div>
								</div>
							</div>
							
							<div class="col-12">
								<div class="comments-form">
									<h2>Leave Comments</h2>
									<!-- Contact Form -->
									<form class="form" method="post" action="mail/mail.php">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-user"></i>
													<input type="text" name="first-name" placeholder="First name" required="required">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-envelope"></i>
													<input type="text" name="last-name" placeholder="Last name" required="required">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-envelope"></i>
													<input type="email" name="email" placeholder="Your Email" required="required">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group message">
													<i class="fa fa-pencil"></i>
													<textarea name="message" rows="7" placeholder="Type Your Message Here" ></textarea>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group button">	
													<button type="submit" class="btn primary"><i class="fa fa-send"></i>Submit Comment</button>
												</div>
											</div>
										</div>
									</form>
									<!--/ End Contact Form -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<div class="form">
									<input type="email" placeholder="Search Here...">
									<a class="button" href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Blog Categories</h3>
								<ul class="categor-list">
									<li><a href="#">Women Health</a></li>
									<li><a href="#">Diagnostic Tranformations</a></li>
									<li><a href="#">Old Age Health</a></li>
									<li><a href="#">Nutrition</a></li>
									<li><a href="#">Men's Health</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Recent post</h3>
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="img/blood-home.png" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">We have annnocuced our new product.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>Jan 11, 2024</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="img/blog-sidebar2.jpg" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Top five way for solving teeth problems.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>Mar 05, 2024</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>59</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="img/blog-sidebar3.jpg" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">We provide highly business soliutions.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>June 09, 2023</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>44</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget side-tags">
								<h3 class="title">Tags</h3>
								<ul class="tag">
									<li><a href="#">business</a></li>
									<li><a href="#">wordpress</a></li>
									<li><a href="#">html</a></li>
									<li><a href="#">multipurpose</a></li>
									<li><a href="#">education</a></li>
									<li><a href="#">template</a></li>
									<li><a href="#">Ecommerce</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
@endsection