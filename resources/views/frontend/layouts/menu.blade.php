<header id="header" class="site-header style5 cta_button" data-header-style="5">
			<div class="container siteheader-container header--oldstyles">
				<div class="logo-container hasInfoCard logosize--yes">
					<h1 class="site-logo logo " id="logo">
						<a href="index.html">
							<img src="{{asset('frontend/lab/images/logo2.png')}}" class="logo-img" alt="Confirmation Lab" title="Confirmation Lab" />
						</a>
					</h1>

					<div id="infocard" class="logo-infocard">
						<div class="custom">
							<div class="row">
								<div class="col-sm-5">
									<p>&nbsp;

									</p>
									<p style="text-align: center;">
										<img src="{{asset('images/favicons/favicon-16x16.png')}}" class="" alt="Confirmation Lab" title="Confirmation Lab" />
									</p>
									<p style="text-align: center;">
										Confirmation Lab
									</p>
								</div>

								<div class="col-sm-7">
									<div class="custom contact-details">
										<p>
											<strong>T (00966) 555 55 00</strong><br>
											Email:&nbsp;<a href="mailto:sales@yourwebsite.com">sales@yourwebsite.com</a>
										</p>
										<p>
											Saudi Arabia <br>
											Ryiadh
										</p>
										<a href="http://goo.gl/maps/1OhOu" class="map-link" target="_blank" title="">
											<span class="glyphicon glyphicon-map-marker icon-white"></span>
											<span>Open in Google Maps</span>
										</a>
									</div>
									<div style="height:20px;">
									</div>
									<ul class="social-icons sc--clean">
										<li><a href="#" target="_blank" class="icon-twitter" title="Twitter"></a></li>
										<li><a href="#" target="_blank" class="icon-facebook" title="Facebook"></a></li>
										<li><a href="#" target="_blank" class="icon-instagram" title="Instagram"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="separator site-header-separator visible-xs mb-0"></div>

				<div class="header-links-container">
					<ul class="social-icons sc--clean topnav navRight">
						<li><a href="#" target="_blank" class="icon-facebook" title="Facebook"></a></li>
						<li><a href="#" target="_blank" class="icon-twitter" title="Twitter"></a></li>
						<li><a href="#" target="_blank" class="icon-instagram" title="Instagram"></a></li>
					</ul>

					<ul class="topnav navLeft topnav--lang">
						<li class="languages drop">
							<a href="#">
								<span class="globe glyphicon glyphicon-globe icon-white xs-icon"></span>
								<span class="hidden-xs">LANGUAGES</span>
							</a>
							<div class="pPanel">
								<ul class="inner">
									<li class="toplang-item">
										<a href="#">
											<img src="images/en.png" class="toplang-flag" alt="English" title="" /> English
										</a>
									</li>
									<li class="toplang-item">
										<a href="#">
											<img src="images/ar.png" class="toplang-flag" alt="Arabic" title="Arabic" /> Arabic
										</a>
									</li>

								</ul>
							</div>
						</li>
					</ul>
				</div>

				<div class="separator site-header-separator visible-xs"></div>

				<div id="search" class="header-search">
					<a href="#" class="searchBtn "><span class="glyphicon glyphicon-search icon-white"></span></a>
					<div class="search-container">
						<form id="searchform" class="header-searchform" action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)" target="_blank">
							<input type="hidden" id="q" name="q"/>
							<input name="s" maxlength="20" class="inputbox" type="text" size="20" value="SEARCH ..." onblur="if (this.value=='') this.value='SEARCH ...';" onfocus="if (this.value=='SEARCH ...') this.value='';">
							<button type="submit" id="searchsubmit" class="searchsubmit glyphicon glyphicon-search icon-white"></button>
							<span class="kl-field-bg"></span>
						</form>
					</div>
				</div>


				<div id="zn-res-menuwrapper">
					<a href="#" class="zn-res-trigger zn-header-icon"></a>
				</div>

				<div id="main-menu" class="main-nav zn_mega_wrapper ">
					<ul id="menu-main-menu" class="main-menu zn_mega_menu">
						<li><a href="{{ url ('/') }}">Home</a></li>
						<li><a href="{{ url ('/about') }}">About Us</a></li>
						<li class="menu-item-has-children"><a href="{{ url ('/services') }}">Our Services</a>
							<ul class="sub-menu clearfix">
								<li><a href="service.html">Service Title</a></li>
								<li><a href="service.html">Service Title</a></li>
							</ul>
						</li>
						<li><a href="{{ url ('/news') }}">Our News</a></li>
						<li class="menu-item-has-children"><a href="#">Our Gallery</a>
							<ul class="sub-menu clearfix">
								<li><a href="{{ url ('/videos') }}">Video</a></li>
								<li><a href="{{ url ('/images') }}">Photo</a></li>
							</ul>
						</li>
						<li><a href="{{ url ('/jobs') }}">Jobs</a></li>
						<li><a href="{{ url ('/contact') }}">Contact us</a></li>
					</ul>
				</div>
			</div>
</header>

