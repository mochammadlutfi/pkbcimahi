@extends('frontend.layouts.master')
@section('title', $title)
@section('content')
@extends('frontend.layouts.breadcrumb')
	
	<div class="main-wrapper">
		<main class="main-container">
			<div class="container-fluid mt-50">
				<div class="brk-gallery">
					<div class="row">
						@for ($i = 0; $i < 8; $i++)
						<div class="col-sm-3 col-12">
							<div class="brk-gallery-card" data-brk-library="component__gallery">
								<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/gallary/gallery-1.png') }}" alt="alt" class="brk-gallery-card__img lazyload">
								<a href="{{ asset('assets/frontend/img/gallary/gallery-1.png') }}" data-fancybox="gallery" class="icon__btn icon__btn-white icon__btn-lg icon__btn-circled brk-gallery-card__central-btn">
									<i class="fas fa-search icon-inside" aria-hidden="true"></i>
									<span class="before"></span>
									<span class="after"></span>
								</a>
							</div>
						</div>
						@endfor
						<!-- <div class="col-12 text-center mt-80 mb-80">
							<a href="#" class="icon__btn icon__btn-anim icon__btn-md icon__btn-invert" data-brk-library="component__button">
								<span class="before"></span>
								<i class="fal fa-sync" aria-hidden="true"></i>
								<span class="after"></span>
								<span class="bg"></span>
							</a>
						</div> -->
					</div>
				</div>
			</div>
		</main>
	</div>
	<div class="col-xl-12">
			<section class="mb-50 mt-50">
				<div class="brk-pagination brk-pagination-one font__family-open-sans" data-brk-library="component__pagination">
					<nav class="navigation pagination" role="navigation">
						<h2 class="screen-reader-text">Навигация по записям</h2>
						<div class="nav-links">
							<a class="prev page-numbers" href="#">Предыдущая страница</a>
							<a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница </span>1</a>
							<span class="page-numbers current"><span class="meta-nav screen-reader-text">Страница </span>2</span>
							<a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница </span>3</a>
							<a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница </span>4</a>
							<a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница </span>5</a>
							<a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница </span>2</a>
							<span class="page-numbers dots">&hellip;</span>
							<a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница </span>24</a>
							<a class="next page-numbers" href="#">Следующая страница</a>
						</div>
					</nav>
				</div>
			</section>
		</div>
@stop
