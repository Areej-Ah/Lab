@extends('frontend.index2')
@section('page_name','OUR NEWS')
@section('content')

<section class="hg_section ptop-50">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="itemListView clearfix eBlog">
							<div class="itemList">
								<div class="itemContainer featured-post">
									<div class="zn_full_image">
										<img class="zn_post_thumbnail" src="images/n1.jpg" alt="">
									</div>

									<div class="itemFeatContent">
										<div class="itemFeatContent-inner">
											<div class="itemHeader">
												<h3 class="itemTitle">
													<a href="{{ url ('/new') }}" title="Progressively">News Title</a>
												</h3>

												<div class="post_details">
													<span class="catItemDateCreated">
													Friday, 07 August 2017 </span>

												</div>
											</div>
											<div class="clearfix">
											</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>

								<div class="itemContainer">
									<div class="itemHeader">
										<h3 class="itemTitle">
											<a href="{{ url ('/new') }}" title="Enthusiastically">News Title </a>
										</h3>

										<div class="post_details">
											<span class="catItemDateCreated">
											Friday, 21 August 2017 </span>

										</div>
									</div>

									<div class="itemBody">
										<div class="itemIntroText">
											<div class="hg_post_image">
												<a href="new.html" class="pull-left" title="Enthusiastically">
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


											<div class="itemReadMore">
												<a class="btn btn-fullcolor readMore" href="{{ url ('/new') }}" title="">Read more</a>
											</div>
										</div>
										<div class="clear">
										</div>

									</div>


									<div class="clear">
									</div>
								</div>
								<div class="clear"></div>


								<div class="itemContainer">
									<div class="itemHeader">
										<h3 class="itemTitle">
											<a href="new.html" title="Uniquely productize">New Title</a>
										</h3>

										<!-- Post details -->
										<div class="post_details">
											<span class="catItemDateCreated">
											Friday, 07 August 2017 </span>

										</div>
									</div>

									<div class="itemBody">
										<div class="itemIntroText">
											<div class="hg_post_image">
												<a href="new.html" class="pull-left" title="Uniquely productize">
													<img src="images/n1.jpg" class="" width="460" height="230" alt="Uniquely productize" title="Uniquely productize" />
												</a>
											</div>

											<p>
												Our microbiology laboratory have the expertise and capabilities to test ingredients, in-process and finish products. A variety of methods are available to meet your specifications, ensuring safe food, beverage and water. We offer a wide range of microbiology testing, using both reference and alternative methodologies, and have an experienced team to carry out these tests.
											</p>
										</div>
										<div class="clear">
										</div>

										<div class="itemBottom clearfix">


											<div class="itemReadMore">
												<a class="btn btn-fullcolor readMore" href="new.html" title="">Read more</a>
											</div>
										</div>
										<div class="clear">
										</div>
									</div>


									<div class="clear">
									</div>
								</div>
								<div class="clear">
								</div>

								<div class="itemContainer">
									<div class="itemHeader">
										<h3 class="itemTitle">
											<a href="new.html" title="Dramatically integrate">New title</a>
										</h3>

										<div class="post_details">
											<span class="catItemDateCreated">
											Friday, 07 August 2017 </span>

										</div>
									</div>

									<div class="itemBody">
										<div class="itemIntroText">
											<div class="hg_post_image">
												<a href="new.html" class="pull-left" title="Dramatically integrate">
													<img src="images/n3.jpg" class="" width="460" height="305" alt="Dramatically integrate" title="Dramatically integrate" />
												</a>
											</div>

											<p>
												Our microbiology laboratory have the expertise and capabilities to test ingredients, in-process and finish products. A variety of methods are available to meet your specifications, ensuring safe food, beverage and water. We offer a wide range of microbiology testing, using both reference and alternative methodologies, and have an experienced team to carry out these tests.
											</p>

										</div>
										<div class="clear">
										</div>

										<div class="itemBottom clearfix">


											<div class="itemReadMore">
												<a class="btn btn-fullcolor readMore" href="new.html" title="">Read more</a>
											</div>
										</div>
										<div class="clear">
										</div>
									</div>


									<div class="clear">
									</div>
								</div>
								<div class="clear">
								</div>
							</div>

							<ul class="pagination">
								<li class="pagination-prev">
									<span>
										<span></span>
									</span>
								</li>
								<li class="active">
									<span>1</span>
								</li>
								<li>
									<a href="#">
										<span>2</span>
									</a>
								</li>
								<li class="pagination-next">
									<a href="#">
										<span class="glyphicon glyphicon-menu-right"></span>
									</a>
								</li>
							</ul>
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
									<li><a href="videp.html">Video</a></li>
									<li><a href="photos.html">Photos</a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


@endsection
