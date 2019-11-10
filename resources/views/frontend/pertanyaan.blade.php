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
					<div class="brk-reply mb-20" data-brk-library="component__forum_post">
						<h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60">Silahkan Masukan Pertanyaan Anda</h3>
						<form action="#" class="brk-reply__form brk-form-strict" data-brk-library="component__form">
							<div class="row">
								<div class="col-lg-6 col-12">
									<input name="name" type="text" placeholder="Judul topik">
								</div>
								<div class="col-12">
									<textarea name="textarea" placeholder="Pertanyaan"></textarea>
								</div>
							</div>
							<a href="{{ url('/forum') }}" class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold btn-icon-right m-0 mt-25" data-brk-library="component__button">
								<i class="fa fa-times"></i>
								<span class="before">Batal</span><span class="text">Batal</span><span class="after">Batal</span>
							</a>
							<button class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold btn-icon-right m-0 mt-25" data-brk-library="component__button">
								<i class="fas fa-long-arrow-alt-right icon-inside"></i>
								<span class="before">Kirim Pertanyaan</span><span class="text">Kirim Pertanyaan</span><span class="after">Kirim Pertanyaan</span>
							</button>
						</form>
					</div>
					<h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60 mb-10">Diskusi Dengan Fraksi Terbaru</h3>
					@for ($i = 0; $i < 6; $i++)
						<div>
							<div class="brk-reply-item" data-brk-library="component__blog_page_css">
								<a href="#" class="brk-reply-item__user">
									<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/55x55_1.jpg') }}" alt="alt" class="lazyload">
								</a>
								<div class="brk-reply-item__content">
									<a href="{{ url('/detail_forum') }}" class="font__size-md-20 font__size-18 line-height-1-5 font__weight-bold">ini Judul tOPIK?</a>
									<div class="d-sm-flex justify-content-sm-between">
										<div class="brk-reply-item__header">
											<a class="brk-reply-item__header-like">
												<i class="far fa-comments"></i>
												<span>0</span>
											</a>
											<a class="brk-reply-item__header-reply">
												<i class="far fa-clock"></i>
												<span class="font__weight-bold">10:00. Aug 12, 17</span>
											</a>
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
		<div class="col-12 col-lg-8 col-xl-9 order-xs-2 order-lg-1">
			<div class="mt-15 mb-80">
				<div class="brk-pagination brk-pagination-large" data-brk-library="component__pagination">
					<a href="{{ url('/forum') }}" class="text-center"><span class="brk-next-link">Selengkapnya<i class="fa fa-angle-right"></i></span></a>
				</div>
			</div>
		</div>
	</div>
	
@stop