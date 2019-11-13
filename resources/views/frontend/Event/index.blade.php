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
									<a href="#">Event</a>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-80 mb-40">
		<div class="row">
			@for ($i = 1; $i < 10; $i++)
				<div class="col-12 col-md-6 col-lg-4">
					<div class="brk-sc-bonus text-center pl-50 pr-50 pb-40 pt-50 d-flex flex-column mb-30" data-brk-library="component__shop_cards">
						<h6 class="brk-sc-bonus__subtitle font__family-montserrat brk-white-font-color font__size-14 font__weight-bold line__height-14 brk-bg-primary">
							Senin, {{ $i }} Febuary 2019
						</h6>
						<h5 class="brk-sc-bonus__title font__family-montserrat font__size-21 font__weight-normal line__height-28 mb-15">
							<span class="text-uppercase font__weight-medium">Ini Judul Event</span>
						</h5>
						<p class="font__family-open-sans font__size-16 font__weight-normal line__height-26 brk-dark-font-color">
							ini deskripsi ini deskripsi  ini deskripsi  ini deskripsi  ini deskripsi 
						</p>
						<a href="{{ url('event_detail') }}" class="brk-base-font-color font__family-open-sans font__size-16 font__weight-normal line__height-26 brk-sc-bonus__link mt-2">Lihat Event</a>
					</div>
				</div>
			@endfor
		</div>
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
