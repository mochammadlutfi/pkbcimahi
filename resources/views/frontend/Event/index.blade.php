@extends('frontend.layouts.master')
@section('title', $title)
@section('content')
@extends('frontend.layouts.breadcrumb')
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
