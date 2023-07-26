@extends('frontend.index2')
@section('page_name','OUR NEWS')
@section('content')

<section class="hg_section ptop-50">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="itemListView clearfix eBlog">
							<div class="itemList">
								<div class="itemContainer">
									<div class="itemHeader">
										<h3 class="itemTitle">
											<a href="blog-post.html" title="Enthusiastically">News Title </a>
										</h3>

										<div class="post_details">
											<span class="catItemDateCreated">
											Friday, 21 August 2017 </span>

										</div>
									</div>

									<div class="itemBody">
										<div class="itemIntroText">
											<div class="hg_post_image">
												<a href="blog-post.html" class="pull-left" title="Enthusiastically">
													<img src="images/n2.jpg" class="" width="457" height="320" alt="Enthusiastically" title="Enthusiastically" />
												</a>
											</div>
											<p>
												Our microbiology laboratory have the expertise and capabilities to test ingredients, in-process and finish products. A variety of methods are available to meet your specifications, ensuring safe food, beverage and water. We offer a wide range of microbiology testing, using both reference and alternative methodologies, and have an experienced team to carry out these tests.
											</p>
										</div>

										<div class="clear">
										</div>

										<div class="itemBottom clearfix">

										</div>
										<div class="clear">
										</div>

									</div>


									<div class="clear">
									</div>
								</div>

							</div>


						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div id="sidebar-widget" class="sidebar">
							<div class="widget widget_search">
								<div class="search gensearch__wrapper">
									<form id="searchform" class="gensearch__form" action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)" target="_blank">
										<input id="s" name="s" maxlength="20" class="inputbox gensearch__input" type="text" size="20" value="SEARCH ..." onblur="if (this.value=='') this.value='SEARCH ...';" onfocus="if (this.value=='SEARCH ...') this.value='';"><button type="submit" id="searchsubmit" value="go" class="gensearch__submit glyphicon glyphicon-search"></button>
									</form>
								</div>
							</div>
							<div class="widget widget_recent_entries">
								<div class=" latest_posts style3">
									<h3 class="widgettitle title">Recent News</h3>
									<ul class="posts">
										<li class="lp-post">
											<a href="new.html" class="hoverBorder pull-left">
												<span class="hoverBorderWrapper">
													<img src="images/n1.jpg" style="width: 70px; height: auto;" alt="News Title">
													<span class="theHoverBorder"></span>
												</span>
											</a>
											<h4 class="title">
												<a href="new.html" title="News Title">News Title</a>
											</h4>

										</li>
										<li class="lp-post">
											<a href="new.html" class="hoverBorder pull-left">
												<span class="hoverBorderWrapper">
													<img src="images/n3.jpg" style="width: 70px; height: auto;" alt="News Title">
													<span class="theHoverBorder"></span>
												</span>
											</a>
											<h4 class="title">
												<a href="new.html" title="News Title">News Title</a>
											</h4>

										</li>
										<li class="lp-post">
											<a href="new.html" class="hoverBorder pull-left">
												<span class="hoverBorderWrapper">
													<img src="images/n2.jpg" style="width: 70px; height: auto;" alt="News Title">
													<span class="theHoverBorder"></span>
												</span>
											</a>
											<h4 class="title">
												<a href="new.html" title="News Title">News Title</a>
											</h4>

										</li>
										<li class="lp-post">
											<a href="new.html" class="hoverBorder pull-left">
												<span class="hoverBorderWrapper">
													<img src="images/n3.jpg" style="width: 70px; height: auto;" alt="News Title">
													<span class="theHoverBorder"></span>
												</span>
											</a>
											<h4 class="title">
												<a href="new.html" title="News Title">News Title</a>
											</h4>

										</li>

									</ul>
								</div>
							</div>


							<div class="widget widget_categories">
								<h3 class="widgettitle title">Our Services</h3>
								<ul class="menu">
									<li class="cat-item"><a href="service.html">Microbiology Department</a></li>
									<li class="cat-item"><a href="service.html">Chemistry Department</a></li>

								</ul>
							</div>
							<div class="widget widget_meta">
								<h3 class="widgettitle title">Our Gallery</h3>
								<ul>
									<li><a href="video.html">Video</a></li>
									<li><a href="photos.html">Photos</a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection
