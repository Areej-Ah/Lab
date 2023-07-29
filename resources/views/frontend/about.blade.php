@extends('frontend.index2')
@section('page_name','ABOUT US')
@section('content')

<section class="hg_section hg_section--relative bg-white ptop-80 pbottom-80">
			<div class="container">
				<div class="row">

                    <div class="col-md-12 col-sm-12">
                          <div class="kl-title-block clearfix text-left tbk-symbol--icon tbk--colored tbk-icon-pos--left-title">
							<h3 class="tbk__title ansation fs-38 lh-38  fw-bold">
								<span class="tbk__symbol">
									<span class="tbk__icon glyphicon glyphicon-option-horizontal blue"></span>
								</span>
								Who We Are ?
							</h3>
						</div>
                    </div>

					<div class="col-md-8 col-sm-8">
						<div class="hg_accordion_element style3">

							<div class="th-accordion">
								<div class="acc-group">
									<a data-toggle="collapse" data-target="#acc13" class="" aria-expanded="true">About Us<span class="acc-icon"></span></a>

									<div id="acc13" class="collapse in" aria-expanded="true">
										<div class="content">
											<p>
                                                <div style="text-align: justify;">
                                                {!! $setting->{'about_'.session('lang')} !!}

                                                </div>
											</p>
										</div>
									</div>
								</div>

								<div class="acc-group">
									<a data-toggle="collapse" data-target="#acc14" class="collapsed">QUALITY POLICY<span class="acc-icon"></span></a>

									<div id="acc14" class="collapse ">
										<div class="content">
											<p>
                                                <div style="text-align: justify;">
                                                {!! $setting->{'quality_policy_'.session('lang')} !!}

                                                </div>
											</p>
										</div>
									</div>
								</div>

								<div class="acc-group">
									<a data-toggle="collapse" data-target="#acc15" class="collapsed">OBJECTIVE<span class="acc-icon"></span></a>

									<div id="acc15" class="collapse ">
										<div class="content">
											<p>
												<div style="text-align: justify;">
                                                {!! $setting->{'objective_'.session('lang')} !!}
                                                </div>
											</p>
										</div>
									</div>
								</div>

								<div class="acc-group">
									<a data-toggle="collapse" data-target="#acc16" class="collapsed">CORPORATE MISSION<span class="acc-icon"></span></a>

									<div id="acc16" class="collapse ">
										<div class="content">
								            <p  style="text-align: justify;">
                                            {!! $setting->{'corporate_mission_'.session('lang')} !!}
											</p>
										</div>
									</div>
								</div>


								<div class="acc-group">
									<a data-toggle="collapse" data-target="#acc17" class="collapsed">Our Mission and Vision <span class="acc-icon"></span></a>
									<div id="acc17" class="collapse ">
										<div class="content">
								            <p  style="text-align: justify;">
                                            {!! $setting->{'vision_'.session('lang')} !!}
											</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-4">
						<div class="adbox video mb-50">
							<img src="images/video-image.jpg" style="height: 640px; width: auto;" alt="" title="">

							<div class="video_trigger_wrapper">
								<div class="adbox_container">
									<a class="playVideo" data-lightbox="iframe" href="https://www.youtube.com/watch?v=WN_VGtBAmOM"></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

        <section class="hg_section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="hg_separator clearfix mb-65">
						</div>
					</div>

					<div class="col-md-9 col-sm-9">
						<div class="kl-title-block clearfix tbk--text-default tbk--left text-left tbk-symbol-- tbk-icon-pos--after-title">
							<h3 class="tbk__title montserrat fw-semibold tcolor">WORK WITH US</h3>
							<h4 class="tbk__subtitle">We'll do everything we can to make our next best client</h4>
						</div>
					</div>

					<div class="col-md-3 col-sm-3">
						<div class="th-spacer clearfix" style="height: 10px;">
						</div>

						<div class="zn_buttons_element text-left">
							<a class="btn-element btn btn-lined lined-custom btn-md btn-block " href="{{ url ('/contact') }}" style="margin:0 0 10px 0;"><span>Contact Us</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>


@endsection
