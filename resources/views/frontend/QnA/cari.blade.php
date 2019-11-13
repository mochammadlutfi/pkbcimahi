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
									<a href="{{ url('/QnA') }}">QnA</a>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="pt-40 pb-40 position-relative bg-repeat lazyload" data-bg="{{ asset('assets/frontend/img/demo_shop_electronics/1.png') }}">
			<div class="brk-layer brk-base-bg-gradient-14 position-absolute opacity-90"></div>
			<form action="#" class="brk-subscribe-mail container position-relative z-index-3" data-brk-library="component__form,recaptcha">
				<div class="row">
					<div class="col-12 col-lg-5">
						<div class="brk-form-transparent mt-10 mb-10">
							<input type="text" placeholder="Cari Topik" class="w-100" name="FNAME">
						</div>
					</div>
					<div class="col-12 col-lg-2">
						<!-- <button class="btn btn-inside-out btn-lg mx-0 my-0 border-radius-25 btn-inside-out-invert w-100 mt-10 mb-10 font__weight-bold" data-brk-library="component__button">
							<span class="before">Cari</span><span class="text">Cari</span><span class="after">Cari</span>
						</button> -->
						<a href="{{ url('/QnA_cari') }}" class="btn btn-inside-out btn-lg mx-0 my-0 border-radius-25 btn-inside-out-invert w-100 mt-10 mb-10 font__weight-bold" data-brk-library="component__button">
							<span class="before">Cari</span><span class="text">Cari</span><span class="after">Cari</span>
						</a>
					</div>
				</div>
			</form>
	</section>
	<div class="container mt-80">
		<div class="row">
			<div class="col-12 col-lg-8 col-xl-9 order-xs-2 order-lg-1">
				<div class="brs-posts-container brs-posts-container_right-divider">
					<div class="mb-60">
						<a href="{{ url('/QnA_pertanyaan') }}" class="btn btn-inside-out btn-lg btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered" data-brk-library="component__button">
							<i class="fa fa-comments" aria-hidden="true"></i>
							<span class="before">Buat Pertanyaan</span><span class="text">Buat Pertanyaan</span><span class="after">Buat Pertanyaan</span>
						</a>

						<!-- <a href="#" class="btn btn-inside-out btn-lg btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered" data-brk-library="component__button">
							<i class="fa fa-edit" aria-hidden="true"></i>
							<span class="before">Cari Pertanyaan Berdasarkan Topik</span><span class="text">Cari Pertanyaan Berdasarkan Topik</span><span class="after">Cari Pertanyaan Berdasarkan Topik</span>
						</a> -->

						<h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60 mb-10">Hasil Pencarian dari "bla bla"</h3>
						
						@for ($i = 0; $i < 6; $i++)
						<div>
							<div class="brk-reply-item" data-brk-library="component__blog_page_css">
								<a href="#" class="brk-reply-item__user">
									<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/55x55_1.jpg') }}" alt="alt" class="lazyload">
								</a>
								<div class="brk-reply-item__content">
									<a href="{{ url('/QnA_detail') }}" class="font__size-md-20 font__size-18 line-height-1-5 font__weight-bold">Ini Judul Topik</a>
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
		</div>
		<!-- <div class="col-12 col-lg-8 col-xl-9 order-xs-2 order-lg-1">
			<div class="mt-15 mb-80">
				<div class="brk-pagination brk-pagination-large" data-brk-library="component__pagination">
					<a href="#" class="text-center"><span class="brk-prev-link"><i class="fa fa-angle-left"></i>Lampau</span></a>
					<a href="#" class="text-center"><span class="brk-next-link">Terbaru<i class="fa fa-angle-right"></i></span></a>
				</div>
			</div>
		</div> -->
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