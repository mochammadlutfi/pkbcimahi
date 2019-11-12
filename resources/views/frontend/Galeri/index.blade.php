@extends('frontend.layouts.master')
@section('title', $title)
@section('content')
@extends('frontend.layouts.breadcrumb')
	
	<section id="portfolio">
			<div class="brk-portfolio-galleries">
				<div class="row brk-gutters-5">
					@for ($i = 0; $i < 6; $i++)
					<div class="col-12 col-md-6">
						<div class="brk-portfolio-galleries__card" data-brk-library="component__portfolio_galleries">
							<img class="brk-abs-img lazyload" alt="alt" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/demo_photography/945x620_1.jpg') }}">
							<div class="brk-portfolio-galleries__label pt-60 pl-70 pr-60 pb-50">
								<h2 class="font__family-roboto font__size-56 font__weight-thin mb-2">Gallery {{ $i }} </h2>
								<h3 class="brk-dark-font-color font__family-montserrat font__size-12 font__weight-normal text-uppercase letter-spacing-100 mb-auto"> 18 photos</h3>
								<div class="brk-social-links brk-black-font-color font__size-13 brk-social-links_opacity" data-brk-library="component__social_links">
									<a href="#" class="brk-social-links__item">
										<i class="fab fa-facebook-f"></i>
									</a>
									<a href="#" class="brk-social-links__item">
										<i class="fab fa-twitter"></i>
									</a>
									<a href="#" class="brk-social-links__item">
										<i class="fab fa-google-plus-g"></i>
									</a>
									<a href="#" class="brk-social-links__item">
										<i class="fab fa-pinterest"></i>
									</a>
									<a href="#" class="brk-social-links__item">
										<i class="fab fa-linkedin-in"></i>
									</a>
									<a href="#" class="brk-social-links__item">
										<i class="fab fa-vk"></i>
									</a>
								</div>
								<a href=" {{ url('/galeri/detail') }} " class="text-uppercase font__family-montserrat font__size-12 font__weight-bold text-underline letter-spacing-100 mt-30"><u>Lihat Album</u></a>
							</div>
						</div>
					</div>
					@endfor
				</div>
			</div>
		</section>
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
