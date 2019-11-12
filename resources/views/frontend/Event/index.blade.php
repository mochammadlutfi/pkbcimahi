@extends('frontend.layouts.master')
{{-- @section('title', $title) --}}
@section('content')

	<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-bg="{{ asset('assets/frontend/img/1920x258_1.jpg') }}" data-brk-library="component__breadcrumbs_css">
		<span class="brk-abs-bg-overlay brk-bg-grad opacity-80"></span>
		<div class="breadcrumbs__wrapper">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6">
						<div class="d-flex justify-content-lg-end justify-content-start pr-40 pr-xs-0 breadcrumbs__title">
							<h2 class="brk-white-font-color font__weight-semibold font__size-48 line__height-68 font__family-montserrat">
                                PKB Event's
							</h2>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="pt-25 pb-35 position-static position-lg-relative breadcrumbs__subtitle">
							<h3 class="brk-white-font-color font__family-montserrat font__weight-medium font__size-18 line__height-21 text-uppercase mb-15">
								Anda berada di
							</h3>
							<ol class="breadcrumb font__family-montserrat font__size-15 line__height-16 brk-white-font-color">
								<li>
									<a href="#">Beranda</a>
									<i class="fal fa-chevron-right icon"></i>
								</li>
								<li class="active">PKB Event's</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-80 mb-40">
		<div class="row">
			@foreach($event as $e)
				<div class="col-12 col-md-6 col-lg-4">
					<div class="brk-sc-bonus text-center pl-50 pr-50 pb-40 pt-50 d-flex flex-column mb-30" data-brk-library="component__shop_cards">
						<h6 class="brk-sc-bonus__subtitle font__family-montserrat brk-white-font-color font__size-14 font__weight-bold line__height-14 brk-bg-primary">
							{{ $e->tgl }}
						</h6>
						<h5 class="brk-sc-bonus__title font__family-montserrat font__size-21 font__weight-normal line__height-28 mb-15">
							<span class="text-uppercase font__weight-medium">{{ $e->judul }}</span>
						</h5>
						<p class="font__family-open-sans font__size-16 font__weight-normal line__height-26 brk-dark-font-color">
							ini deskripsi ini deskripsi  ini deskripsi  ini deskripsi  ini deskripsi
						</p>
						<a href="{{ route('event.detail', $e->slug) }}" class="brk-base-font-color font__family-open-sans font__size-16 font__weight-normal line__height-26 brk-sc-bonus__link mt-2">Lihat Event</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>



@stop
