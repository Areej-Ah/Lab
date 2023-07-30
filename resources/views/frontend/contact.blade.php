@extends('frontend.index2')
@section('page_name','CAREERS')
@section('content')
<div id="page_header" class="page-subheader site-subheader-cst uh_zn_def_header_style maskcontainer--mask6">
	<div class="bgback"></div>

	<div class="kl-bg-source">
		<div class="kl-video-container kl-bg-source__video">
			<div class="kl-video-wrapper video-grid-overlay">
				<div class="kl-video valign halign" style="width: 100%; height: 100%;" data-setup='{
					"position": "absolute",
					"loop": true,
					"autoplay": true,
					"muted": true,
					"mp4":"{{URL::asset('frontend/lab/videos/laboratory.mp4')}}", 
					"poster":"images/s1.jpg",
					"video_ratio": "1.7778"
					}'>
				</div>
			</div>
		</div>

		<div class="kl-bg-source__overlay" style="background:rgba(130,36,227,0.3); background: -moz-linear-gradient(left, rgba(130,36,227,0.3) 0%, rgba(51,158,221,0.4) 100%); background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(130,36,227,0.3)), color-stop(100%,rgba(51,158,221,0.4))); background: -webkit-linear-gradient(left, rgba(130,36,227,0.3) 0%,rgba(51,158,221,0.4) 100%); background: -o-linear-gradient(left, rgba(130,36,227,0.3) 0%,rgba(51,158,221,0.4) 100%); background: -ms-linear-gradient(left, rgba(130,36,227,0.3) 0%,rgba(51,158,221,0.4) 100%); background: linear-gradient(to right, rgba(130,36,227,0.3) 0%,rgba(51,158,221,0.4) 100%); ">
		</div>
	</div>

	<div class="th-sparkles"></div>

	<div class="ph-content-wrap">
		<div class="ph-content-v-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<ul class="breadcrumbs fixclear">
							<li><a href="{{ url ('/') }}">Home</a></li>
							<li>Contact Us</li>
						</ul>

						<div class="clearfix"></div>
					</div>

					<div class="col-sm-6">
						<div class="subheader-titles">
							<h2 class="subheader-maintitle">Contact Us</h2>
							<h4 class="subheader-subtitle">GET TO KNOW US BETTER</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="kl-bottommask kl-bottommask--mask3">
		<svg width="5000px" height="57px" class="svgmask " viewBox="0 0 5000 57" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<defs>
				<filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-mask3">
					<feOffset dx="0" dy="3" in="SourceAlpha" result="shadowOffsetInner1"></feOffset>
					<feGaussianBlur stdDeviation="2" in="shadowOffsetInner1" result="shadowBlurInner1"></feGaussianBlur>
					<feComposite in="shadowBlurInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite>
					<feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.4 0" in="shadowInnerInner1" type="matrix" result="shadowMatrixInner1"></feColorMatrix>
					<feMerge>
						<feMergeNode in="SourceGraphic"></feMergeNode>
						<feMergeNode in="shadowMatrixInner1"></feMergeNode>
					</feMerge>
				</filter>
			</defs>
			<path d="M9.09383679e-13,57.0005249 L9.09383679e-13,34.0075249 L2418,34.0075249 L2434,34.0075249 C2434,34.0075249 2441.89,33.2585249 2448,31.0245249 C2454.11,28.7905249 2479,11.0005249 2479,11.0005249 L2492,2.00052487 C2492,2.00052487 2495.121,-0.0374751261 2500,0.000524873861 C2505.267,-0.0294751261 2508,2.00052487 2508,2.00052487 L2521,11.0005249 C2521,11.0005249 2545.89,28.7905249 2552,31.0245249 C2558.11,33.2585249 2566,34.0075249 2566,34.0075249 L2582,34.0075249 L5000,34.0075249 L5000,57.0005249 L2500,57.0005249 L1148,57.0005249 L9.09383679e-13,57.0005249 Z" class="bmask-bgfill" filter="url(#filter-mask3)" fill="#ffffff"></path>
		</svg>
		<i class="glyphicon glyphicon-chevron-down"></i>
	</div>

</div>
<section class="hg_section pb-80">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="step-boxes-3">
					<div class="process_box" data-align="left">
						<div class="number">
							<span class="glyphicon glyphicon-earphone"></span>
						</div>

						<div class="content">
							<h4 class="stp_title">Contact Us</h4>
							<div class="col-sm-4">
								<h4 class="m_title">Call</h4>
								<div class="m_content">
									<a href="tel:0096650656565">{!! $setting->phone !!}</a> <br/>
									<a href="tel:0096650656565">{!! $setting->mobile !!}</a>
								</div>
							</div>
							<div class="col-sm-4">
								<h4 class="m_title">Email</h4>
								<div class="m_content">
									<a href="mailto:jobs@jobs.com>">{!! $setting->employment_email !!}</a>
								</div>
							</div>
							<div class="col-sm-4">
								<h4 class="m_title">Address</h4>
								<div class="m_content">
								{!! $setting->{'location_'.session('lang')} !!}
								</div>
								<br/>
							</div>
						</div>

						<div class="clear">
						</div>
					</div>

					<div class="process_box" data-align="right">
						<div class="number">
							<span class="glyphicon glyphicon-send"></span>
						</div>

						<div class="content">
							<h4 class="stp_title" style="text-align: left;">leave your comment below</h4>


								<div class="contactForm">
									<form action="php_helpers/_contact-process.php" method="post" class="contact_form row" enctype="multipart/form-data">
										<div class="cf_response"></div>
										<p class="col-sm-6 kl-fancy-form">
											<input type="text" name="name" id="cf_name" class="form-control" placeholder="Please enter your first name" value="" tabindex="1" maxlength="35" required>
											<label class="control-label">FIRSTNAME</label>
										</p>
										<p class="col-sm-6 kl-fancy-form">
											<input type="text" name="lastname" id="cf_lastname" class="form-control" placeholder="Please enter your first last name" value="" tabindex="1" maxlength="35" required>
											<label class="control-label">LASTNAME</label>
										</p>
										<p class="col-sm-12 kl-fancy-form">
											<input type="text" name="email" id="cf_email" class="form-control h5-email" placeholder="Please enter your email address" value="" tabindex="1" maxlength="35" required>
											<label class="control-label">EMAIL</label>
										</p>
										<p class="col-sm-12 kl-fancy-form">
											<input type="text" name="subject" id="cf_subject" class="form-control" placeholder="Enter the subject message" value="" tabindex="1" maxlength="35" required>
											<label class="control-label">SUBJECT</label>
										</p>
										<p class="col-sm-12 kl-fancy-form">
											<textarea name="message" id="cf_message" class="form-control" cols="30" rows="10" placeholder="Your message" tabindex="4" required></textarea>
											<label class="control-label">MESSAGE</label>
										</p>

										<div class="g-recaptcha" data-sitekey="6Les_VEfAAAAALRq2tRlLna6CGMNvMvm8cCQf6T0"></div>

										<p class="col-sm-12">
											<button class="btn btn-fullcolor" type="submit">Send</button>
										</p>

									</form>
								</div>

						</div>

						<div class="clear">
						</div>
					</div>



					<div class="process_box" data-align="left">

						<div class="number">
							<span class="glyphicon glyphicon-inbox"></span>
						</div>

						<div class="content">
							<h4 class="stp_title">for jobs :</h4>

							<p class="fs-18">
								To apply for available jobs, please contact us with your CV:<br><br>


								<a href="mailto: jobs@admon.com" target="_blank"> Click Here </a>

							</p>
						</div>

						<div class="clear">
						</div>
					</div>

					<div class="process_box last" data-align="right">
						<div class="number">
							<span class="glyphicon glyphicon-flag"></span>

						</div>

						<div class="content" style="float: none;">
							<h4 class="stp_title" style="text-align: left;">Our Locations</h4>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14504.53261085816!2d46.660878950000004!3d24.6535447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssa!4v1648406937308!5m2!1sen!2ssa"  frameborder="0" style="border:0; width:100%; height:400px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>

						<div class="clear">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
