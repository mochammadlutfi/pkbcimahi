@extends('frontend.layouts.master')
@section('title', $event->judul)
@section('content')

	<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-bg="{{ asset('assets/frontend/img/1920x258_1.jpg') }}" data-brk-library="component__breadcrumbs_css">
		<span class="brk-abs-bg-overlay brk-bg-grad opacity-80"></span>
		<div class="breadcrumbs__wrapper">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6">
						<div class="d-flex justify-content-lg-end justify-content-start pr-40 pr-xs-0 breadcrumbs__title">
							<h2 class="brk-white-font-color font__weight-semibold font__size-48 line__height-68 font__family-montserrat">
								{{$event->judul}}
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
									<a href="{{ url('beranda') }}">Beranda</a>
									<i class="fal fa-chevron-right icon"></i>
								</li>
								<li>
									<a href="{{ url('event') }}">Event</a>
									<i class="fal fa-chevron-right icon"></i>
								</li>
								<li class="active">{{ $event->judul }}</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-80">
		<div class="row">
			<div class="col-12 col-lg-8 col-xl-9 order-xs-2 order-lg-1">
				<div class="brs-posts-container brs-posts-container_right-divider">
					<div class="mb-60">
						<div class="brs-post brs-post_slider" data-brk-library="component__blog">
							<div class="brs-post__body">
								<div class="brs-post__slider-container">
									<div class="brs-post__slider-item">
										<img src="{{ asset('uploads/'.$event->featured_img) }}" alt="girl-with-camera" class="brs-post__img">
										<div class="brs-post__overlay"></div>
									</div>
								</div>
								<div class="brs-post__info-wrapper brs-post__info-wrapper-bg">
									<div class="brs-post__information font__family-montserrat font__weight-semibold font__size-13 line__height-14">
										<a href="#" class="brs-post__date">
											<i class="far fa-clock brs-post__date-icon"></i>{{ $event->tgl }}
										</a>
									</div>
									<h2 class="brs-post__title font__family-montserrat font__size-24 font__weight-bold line__height-28 text-left">
										{{ $event->judul }}</h2>
								</div>
							</div>
							<div class="brs-post__description">
								<?= $event->deskripsi; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop
