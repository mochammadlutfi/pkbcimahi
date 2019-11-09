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
								<li class="active">Tanya Jawab</li>
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
						<a href="#" class="btn btn-inside-out btn-lg btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered" data-brk-library="component__button">
							<i class="fa fa-comments" aria-hidden="true"></i>
							<span class="before">Buat Pertanyaan</span><span class="text">Buat Pertanyaan</span><span class="after">Buat Pertanyaan</span>
						</a>

						<a href="#" class="btn btn-inside-out btn-lg btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered" data-brk-library="component__button">
							<i class="fa fa-edit" aria-hidden="true"></i>
							<span class="before">Cari Pertanyaan Berdasarkan Topik</span><span class="text">Cari Pertanyaan Berdasarkan Topik</span><span class="after">Cari Pertanyaan Berdasarkan Topik</span>
						</a>

						<h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60 mb-10">Diskusi Kesehatan Terbaru</h3>
						<hr>
						@for ($i = 0; $i < 6; $i++)
						<div>
							<div class="brk-reply-item" data-brk-library="component__blog_page_css">
								<a href="#" class="brk-reply-item__user">
									<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/55x55_1.jpg') }}" alt="alt" class="lazyload">
								</a>
								<div class="brk-reply-item__content">
									<a href="{{ url('/detail_forum') }}" class="font__size-md-20 font__size-18 line-height-1-5 font__weight-bold">Ari Dokter teh sehat?</a>
									<div class="d-sm-flex justify-content-sm-between">
										<div class="brk-reply-item__header">
											<p class="brk-reply-item__header-like">
												<i class="far fa-comments"></i>
												<span>0</span>
											</p>
											<p class="brk-reply-item__header-reply">
												<i class="far fa-clock"></i>
												<span class="font__weight-bold">10:00. Aug 12, 17</span>
											</p>
										</div>
										<p href="#" class="font__size-md-17 font__size-15 line-height-1-5">Oleh: Rebeca Oliva</p>
									</div>
									<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
										Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
									</div>
									<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
										<i class="fa fa-check-circle mt-1"></i> Dijawab Oleh:<a href="#"> Hatake Kakashi</a>
									</div>
								</div>
							</div>
						</div>
						@endfor
					</div>
				</div>
			</div>
		</div>
	</div>
	
@stop