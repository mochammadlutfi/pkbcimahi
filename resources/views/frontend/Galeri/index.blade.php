@extends('frontend.layouts.master')
@section('title', $title)
@section('content')
<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-bg="{{ asset('assets/frontend/img/1920x258_1.jpg') }}" data-brk-library="component__breadcrumbs_css">
		<span class="brk-abs-bg-overlay brk-bg-grad opacity-80"></span>
		<div class="breadcrumbs__wrapper">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6">
						<div class="d-flex justify-content-lg-end justify-content-start pr-40 pr-xs-0 breadcrumbs__title">
							<h2 class="brk-white-font-color font__weight-semibold font__size-48 line__height-68 font__family-montserrat">
								{{ $title }}
							</h2>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="pt-25 pb-35 position-static position-lg-relative breadcrumbs__subtitle">
							<h3 class="brk-white-font-color font__family-montserrat font__weight-medium font__size-18 line__height-21 text-uppercase mb-15">
								You are here
							</h3>
							<ol class="breadcrumb font__family-montserrat font__size-15 line__height-16 brk-white-font-color">
								<li>
									<a href="{{ url('/') }}">Beranda</a>
									<i class="fal fa-chevron-right icon"></i>
								</li>
								<li>
									<a href="#">Galeri</a>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="portfolio">
			<div class="brk-portfolio-galleries">
				<div class="row brk-gutters-5">
					@foreach($galeri as $g)
					<div class="col-12 col-md-6">
						<div class="brk-portfolio-galleries__card" data-brk-library="component__portfolio_galleries">
							<img class="brk-abs-img lazyload" alt="alt" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('uploads/'.$g->foto) }}">
							<div class="brk-portfolio-galleries__label pt-60 pl-70 pr-60 pb-50">
								<h2 class="font__family-roboto font__size-56 font__weight-thin mb-2">{{ $g->nama }}</h2>
								<h3 class="brk-dark-font-color font__family-montserrat font__size-12 font__weight-normal text-uppercase letter-spacing-100 mb-auto">{{ $g->fotonya->count() }} Foto</h3>
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
								<a href=" {{ route('galeri.detail', $g->slug) }} " class="text-uppercase font__family-montserrat font__size-12 font__weight-bold text-underline letter-spacing-100 mt-30"><u>Lihat Album</u></a>
							</div>
						</div>
					</div>
					@endforeach
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