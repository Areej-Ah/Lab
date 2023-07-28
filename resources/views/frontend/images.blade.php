@extends('frontend.index2')
@section('page_name','our gallery')
@section('content')

<section class="hg_section ptop-80">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="row">
                            @foreach($images as $image)
							<div class="col-sm-4">
								<div class="portfolio-item kl-has-overlay">
									<div class="img-intro">
										<a href="{{ Storage::url($image->image) }}" data-type="image" data-lightbox="image" class="hoverLink" title="Image title"></a>

										<img src="{{ Storage::url($image->image) }}" class="img-responsive" title="Image title" alt="Image title" />

										<div class="overlay">
											<div class="overlay-inner">
												<span class="glyphicon glyphicon-picture"></span>
											</div>
										</div>
									</div>

									<div class="portfolio-entry">
										<h3 class="title">
											<a href="{{ Storage::url($image->image) }}" data-type="image" data-lightbox="image" class="hoverLink" title="">{!! $image->{'title_'.session('lang')} !!}</a>
										</h3>
									</div>
								</div>
							</div>
                            @endforeach





							<div class="clear">
							</div>








						</div>

						<ul class="pagination">
							<li class="pagination-prev"><span><span class="glyphicon glyphicon-menu-left"></span></span></li>

							<li class="active"><span>1</span></li>

							<li><a href="#"><span>2</span></a></li>

							<li class="pagination-next"><a href="#"><span class="glyphicon glyphicon-menu-right"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>


@endsection
