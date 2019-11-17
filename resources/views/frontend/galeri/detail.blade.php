@extends('frontend.layouts.master')
{{-- @section('title') --}}
@section('content')

	<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-bg="{{ asset('assets/frontend/img/1920x258_1.jpg') }}" data-brk-library="component__breadcrumbs_css">
		<span class="brk-abs-bg-overlay brk-bg-grad opacity-80"></span>
		<div class="breadcrumbs__wrapper">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6">
						<div class="d-flex justify-content-lg-end justify-content-start pr-40 pr-xs-0 breadcrumbs__title">
							<h2 class="brk-white-font-color font__weight-semibold font__size-48 line__height-68 font__family-montserrat">
								{{ $album->nama }}
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
									<a href="{{ url('/') }}">Beranda</a>
									<i class="fal fa-chevron-right icon"></i>
								</li>
								<li>
									<a href="{{ route('galeri') }}">Galeri</a>
									<i class="fal fa-chevron-right icon"></i>
								</li>
								<li class="active">{{ $album->nama }}</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-wrapper">
		<main class="main-container">
			<div class="container-fluid mt-50">
				<div class="brk-gallery">
					<div class="row">
						@foreach($foto as $f)
						<div class="col-sm-3 col-12">
							<div class="brk-gallery-card">
								<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/gallary/gallery-1.png') }}" alt="alt" class="brk-gallery-card__img lazyload">
								<a href="{{ asset('uploads/'.$f->foto) }}" data-fancybox="gallery" class="icon__btn icon__btn-white icon__btn-lg icon__btn-circled brk-gallery-card__central-btn">
									<i class="fas fa-search icon-inside" aria-hidden="true"></i>
									<span class="before"></span>
									<span class="after"></span>
								</a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</main>
	</div>
@stop
