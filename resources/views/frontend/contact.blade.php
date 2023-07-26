@extends('frontend.index2')
@section('page_name','CAREERS')
@section('content')

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
										   <a href="tel:0096650656565">0096650656565</a> <br/>
										   <a href="tel:0096650656565">0096650656565</a>
										</div>
									</div>
									<div class="col-sm-4">
										<h4 class="m_title">Email</h4>
										<div class="m_content">
										   <a href="mailto:jobs@jobs.com>">jobs@jobs.com</a>
										</div>
									</div>
									<div class="col-sm-4">
										<h4 class="m_title">Address</h4>
										<div class="m_content">
											Saudi Arabia - Ryiadh
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
