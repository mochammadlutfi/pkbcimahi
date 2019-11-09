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
								Anda berada di
							</h3>
							<ol class="breadcrumb font__family-montserrat font__size-15 line__height-16 brk-white-font-color">
								<li>
									<a href="#">Beranda</a>
									<i class="fal fa-chevron-right icon"></i>
								</li>
								<li>
									<a href="#">Tanya Jawab</a>
									<i class="fal fa-chevron-right icon"></i>
								</li>
								<li class="active">{{ $title }}</li>
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
						<div>
							<a href="" class="font__size-md-22 font__size-20 line-height-1-5 font__weight-bold"><i class="fa fa-arrow-circle-left mt-1 mr-3"></i>Kembali Ke Diskusi</a>	
						</div>
						<a href="#" class="btn btn-inside-out btn-lg btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered" data-brk-library="component__button">
							<i class="fa fa-comments" aria-hidden="true"></i>
							<span class="before">Buat Pertanyaan</span><span class="text">Buat Pertanyaan</span><span class="after">Buat Pertanyaan</span>
						</a>
						
						<h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60">Ari Dokter teh sehat?</h3>
						<div>
							<div class="brk-reply-item" data-brk-library="component__blog_page_css">
								<a href="#" class="brk-reply-item__user">
									<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/55x55_1.jpg') }}" alt="alt" class="lazyload">
								</a>
								<div class="brk-reply-item__content">
									<div class="d-sm-flex justify-content-sm-between">
										<div class="brk-reply-item__header">
											<a href="#" class="brk-reply-item__header-like">
												<i class="fas fa-reply"></i>
												<span>Balas Pertanyaan</span>
											</a>
											<a href="#" class="brk-reply-item__header-reply">
												<i class="far fa-clock"></i>
												<span class="font__weight-bold">10:00. Aug 12, 17</span>
											</a>
										</div>
										<a href="#" class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">Rebeca Oliva</a>
									</div>
									<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
										Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
									</div>
									<!-- <div class="col-lg-5 align-self-lg-stretch text-lg-right">

									</div> -->
								</div>
								
							</div>
							<div class="ml-100">
								<div class="brk-reply-item" data-brk-library="component__blog_page_css">
									<a href="#" class="brk-reply-item__user">
										<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/55x55_1.jpg') }}" alt="alt" class="lazyload">
									</a>
									<div class="brk-reply-item__content">
										<div class="d-sm-flex justify-content-sm-between">
											<div class="brk-reply-item__header">
												<a href="#" class="brk-reply-item__header-like">
													<i class="fal fa-heart"></i>
													<span>0</span>
												</a>
												<a href="#" class="brk-reply-item__header-reply">
													<i class="fas fa-reply"></i>
													<span class="font__weight-bold">Reply</span>
												</a>
											</div>
											<a href="#" class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">Hatake Kakashi</a>
										</div>
										<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
											Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
										</div>
									</div>
							</div>
							</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@stop