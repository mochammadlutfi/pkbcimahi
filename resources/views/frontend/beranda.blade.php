@extends('frontend.layouts.master')
@section('title', $title)
@section('content')
<!------------------------------------------------------------------------ Slider -->
<div class="slider-thumbnailed-full height-100vh">  <!-- data-brk-library="slider__swiper" -->
	<div class="swiper-container slider-thumbnailed-full-for" data-brk-swiper='{"autoplay": {"delay": 4500}}'>
		<div class="swiper-wrapper">
			@for ($i = 0; $i < 3; $i++)
				<div class="swiper-slide swiper-lazy" data-background="{{ asset('assets/frontend/img/1920x1080_3.jpg') }}"></div>
				<div class="swiper-slide swiper-lazy" data-background="{{ asset('assets/frontend/img/1920x1080_2.jpg') }}"></div>
			@endfor
		</div>
		<div class="slider-thumbnailed-full-prev">Prev</div>
		<div class="slider-thumbnailed-full-next">Next</div>
	</div>
	<div class="slider-thumbnailed-full-nav">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				@for ($i = 0; $i < 3; $i++)
					<div class="swiper-slide" style="background-image:url({{ asset('assets/frontend/img/120x80_3.jpg') }})"></div>
					<div class="swiper-slide" style="background-image:url({{ asset('assets/frontend/img/120x80_6.jpg') }})"></div>
				@endfor
			</div>
		</div>
	</div>
</div>
<!------------------------------------------------------------------------ Slider -->
<!------------------------------------------------------------------------ News -->
<div class="main-wrapper">
	<main class="main-container">
		<div class="container mt-80">
			<h4 class="title__divider title__divider--line font__size-21 font__weight-bold font__family-montserrat line__height-24 text-center mb-40">  <!-- data-brk-library="component__dividers" -->
				<span class="title__divider__wrapper">
					Berita Terbaru <span class="line brk-base-bg-gradient-right"></span>
				</span>
			</h4>
			<div class="row">
				@for ($i = 0; $i < 6; $i++)
					<div class="col-xl-4">
						<div class="post-rounded brk-base-box-shadow" >  <!-- data-brk-library="component__content_slider" -->
							<div class="post-rounded__thumb lazyload" data-bg="{{ asset('assets/frontend/img/rounded-1.jpg') }}">
								<a href="#" class="btn btn-inside-out btn-inside-out-invert btn-lg border-radius-30 font__family-open-sans font__weight-bold letter-spacing--100 z-index-1 post-rounded__btn pl-70 pr-70">  <!-- data-brk-library="component__button" -->
									<span class="before">Read More</span><span class="text">Click Me</span><span class="after">Read More</span>
								</a>
							</div>
							<div class="post-rounded__text">
								<a href="#">
									<h3 class="font__family-montserrat font__weight-bold font__size-19">Aquatic: Stock Photography</h3>
								</a>
								<p class="font__family-open-sans font__size-16 brk-dark-font-color line__height-28">Deep below the ocean's surface there is a vibrant, vast ecosystem full of life: a rich diversity of marine life</p>
							</div>
						</div>
					</div>
				@endfor
			</div>

			<div class="text-center mb-40 mt-25">
				<a href="#" class="btn btn-inside-out btn-lg btn-inside-out-invert border-radius-30 font__weight-light pl-60 pr-60 brk-black-font-color" > <!-- data-brk-library="component__button" -->
					<span class="before">Berita Lainnya</span><span class="text">Berita Lainnya</span><span class="after">Berita Lainnya</span>
				</a>
			</div>

		</div>
	</main>
</div>
<!--------------------------------------------------------------------- End of News -->

<!------------------------------------------------------------------------ Event -->
<section class="pb-40">
	<div class="pt-lg-110 pt-40 position-relative brk-bg-center-cover lazyload" data-bg="{{ asset('assets/frontend/img/demo_creative_agency/1920x1080_1.jpg') }}">
		<div class="brk-abs-bg-overlay brk-bg-gradient-40deg-92"></div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-4">
					<h2 class="brk-white-font-color font__family-montserrat font__size-85 line__height-64 font__weight-bold text-center text-sm-left pb-sm-40 pb-15">Event</h2>
				</div>
				<div class="col-12 offset-0 col-sm-7 offset-sm-1">
					<p class="brk-white-font-color opacity-80 font__size-16 line__height-26 mt-15 pb-lg-80 pb-40 text-center text-sm-left">
						Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
						dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra.
					</p>
				</div>
			</div>
		</div>
		<div class="brk-services-simple pb-md-110 pb-60" > 
			<!-- data-brk-library="slider__swiper" -->
			<div class="swiper-container">
				<div class="swiper-wrapper">
					@for ($i = 0; $i < 6; $i++)
					<div class="swiper-slide">
						<div class="brk-sc-bonus text-center pl-50 pr-50 pb-40 pt-50 d-flex flex-column mb-30" >
							<!-- data-brk-library="component__shop_cards" -->
							<h6 class="brk-sc-bonus__subtitle font__family-montserrat brk-white-font-color font__size-14 font__weight-bold line__height-14 brk-bg-primary">
								Senin, {{ $i }} Febuary 2019
							</h6>
							<h5 class="brk-sc-bonus__title font__family-montserrat font__size-21 font__weight-normal line__height-28 mb-15">
								<span class="text-uppercase font__weight-medium">Ini Judul Event</span>
							</h5>
							<p class="font__family-open-sans font__size-16 font__weight-normal line__height-26 brk-dark-font-color">
								ini deskripsi ini deskripsi  ini deskripsi  ini deskripsi  ini deskripsi 
							</p>
							<a href="{{ url('/event_detail') }}" class="brk-base-font-color font__family-open-sans font__size-16 font__weight-normal line__height-26 brk-sc-bonus__link mt-2">Lihat Event</a>
						</div>
					</div>
					@endfor
				</div>
			</div>
			<div class="text-center">
				<a href="{{ url('/event') }}" class="btn btn-inside-out btn-lg btn-inside-out-invert border-radius-30 font__weight-light pl-60 pr-60 brk-black-font-color" > 
					<!-- data-brk-library="component__button" -->
					<span class="before">Event Lainnya</span><span class="text">Event Lainnya</span><span class="after">Event Lainnya</span>
				</a>
			</div>
			<div class="brk-services-simple__navigation">
				<div class="services-simple-button-prev"><i class="fas fa-angle-left"></i></div>
				<div class="services-simple-pagination"></div>
				<div class="services-simple-button-next"><i class="fas fa-angle-right"></i></div>
			</div>
		</div>
	</div>
</section>
<!------------------------------------------------------------------ End of Event -->

<!------------------------------------------------------------------------ Team -->
<section>
	<div class="container mb-100">
		<div class="text-left">
			<h3 class="font__family-montserrat font__size-28 font__weight-bold">
				<span class="heading__number">#</span> Fraksi
			</h3>
		</div>
	</div>
	<div class="container ml-250">
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<article class="brk-team-mc lazyload brk-mc-light-blue" data-bg="{{ asset('assets/frontend/img/270x414_1.jpg') }} " > 
					<!-- data-brk-library="component__team" -->
					<h4>
						<a href="#" class="font__family-montserrat font__weight-light font__size-24 line__height-26">
							Mark Heffner
						</a>
						<span class="font__family-montserrat font__weight-ultralight font__size-16 line__height-21">
							Web Design
						</span>
					</h4>
					<div class="brk-team-mc__content">
						<div class="mc-description font__family-open-sans font__size-16 line__height-26">Lorem ipsum dolor sit met,
							consecte dipiscing elit. Aenean commodo ligula eget dolor.
						</div>
						<ul class="mc-social">
							<li><span>Social:</span></li>
							<li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="mc-btn-bg-action"><span></span></div>
					<button class="mc-btn-action"><i class="far fa-bars"></i></button>
				</article>
			</div>
			<div class="col-lg-3 col-sm-6">
				<article class="brk-team-mc lazyload brk-mc-light-blue" data-bg="{{ asset('assets/frontend/img/270x414_1.jpg') }} " > 
					<!-- data-brk-library="component__team" -->
					<h4>
						<a href="#" class="font__family-montserrat font__weight-light font__size-24 line__height-26">
							Mark Heffner
						</a>
						<span class="font__family-montserrat font__weight-ultralight font__size-16 line__height-21">
							Web Design
						</span>
					</h4>
					<div class="brk-team-mc__content">
						<div class="mc-description font__family-open-sans font__size-16 line__height-26">Lorem ipsum dolor sit met,
							consecte dipiscing elit. Aenean commodo ligula eget dolor.
						</div>
						<ul class="mc-social">
							<li><span>Social:</span></li>
							<li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="mc-btn-bg-action"><span></span></div>
					<button class="mc-btn-action"><i class="far fa-bars"></i></button>
				</article>
			</div>
			<div class="col-lg-3 col-sm-6">
				<article class="brk-team-mc lazyload brk-mc-light-blue" data-bg="{{ asset('assets/frontend/img/270x414_1.jpg') }} " > 
					<!-- data-brk-library="component__team" -->
					<h4>
						<a href="#" class="font__family-montserrat font__weight-light font__size-24 line__height-26">
							Mark Heffner
						</a>
						<span class="font__family-montserrat font__weight-ultralight font__size-16 line__height-21">
							Web Design
						</span>
					</h4>
					<div class="brk-team-mc__content">
						<div class="mc-description font__family-open-sans font__size-16 line__height-26">Lorem ipsum dolor sit met,
							consecte dipiscing elit. Aenean commodo ligula eget dolor.
						</div>
						<ul class="mc-social">
							<li><span>Social:</span></li>
							<li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="mc-btn-bg-action"><span></span></div>
					<button class="mc-btn-action"><i class="far fa-bars"></i></button>
				</article>
			</div>
		</div>
	</div>
</section>
<!-------------------------------------------------------------------End of Team -->

<!------------------------------------------------------------------------ Maps -->

<!--------------------------------------------------------------------- End of Maps -->
	<section class="pb-50 brk-bg-color-dark-5" style="padding-top: 50px">
		<div class="container">
				<div class="text-center">
					<h2 class="brk-white-font-color font__family-montserrat font__size-36 line__height-40 font__weight-bold mb-50 mt-10">Partner Kami</h2>
					<div class="brk-logos mb-10">
						<!-- data-brk-library="component__portfolio_page-styles" -->
						<div class="row">
							<a href="#" class="brk-logos__item col-6 col-md-2 justify-content-center align-items-center d-flex p-4">
								<span class="brk-logos__item-l-t-angle"></span>
								<span class="brk-logos__item-r-t-angle"></span>
								<span class="brk-logos__item-r-b-angle"></span>
								<span class="brk-logos__item-l-b-angle"></span>
								<img src="{{ asset('assets/frontend/img/footer/1.png') }}" class="brk-logos__img" alt="alt">
							</a>
							<a href="#" class="brk-logos__item col-6 col-md-2 justify-content-center align-items-center d-flex p-4">
								<span class="brk-logos__item-l-t-angle"></span>
								<span class="brk-logos__item-r-t-angle"></span>
								<span class="brk-logos__item-r-b-angle"></span>
								<span class="brk-logos__item-l-b-angle"></span>
								<img src="{{ asset('assets/frontend/img/footer/2.png') }}" class="brk-logos__img" alt="alt">
							</a><a href="#" class="brk-logos__item col-6 col-md-2 justify-content-center align-items-center d-flex p-4">
								<span class="brk-logos__item-l-t-angle"></span>
								<span class="brk-logos__item-r-t-angle"></span>
								<span class="brk-logos__item-r-b-angle"></span>
								<span class="brk-logos__item-l-b-angle"></span>
								<img src="{{ asset('assets/frontend/img/footer/3.png') }}" class="brk-logos__img" alt="alt">
							</a>
							<a href="#" class="brk-logos__item col-6 col-md-2 justify-content-center align-items-center d-flex p-4">
								<span class="brk-logos__item-l-t-angle"></span>
								<span class="brk-logos__item-r-t-angle"></span>
								<span class="brk-logos__item-r-b-angle"></span>
								<span class="brk-logos__item-l-b-angle"></span>
								<img src="{{ asset('assets/frontend/img/footer/4.png') }}" class="brk-logos__img" alt="alt">
							</a>
							<a href="#" class="brk-logos__item col-6 col-md-2 justify-content-center align-items-center d-flex p-4">
								<span class="brk-logos__item-l-t-angle"></span>
								<span class="brk-logos__item-r-t-angle"></span>
								<span class="brk-logos__item-r-b-angle"></span>
								<span class="brk-logos__item-l-b-angle"></span>
								<img src="{{ asset('assets/frontend/img/footer/5.png') }}" class="brk-logos__img" alt="alt">
							</a><a href="#" class="brk-logos__item col-6 col-md-2 justify-content-center align-items-center d-flex p-4">
								<span class="brk-logos__item-l-t-angle"></span>
								<span class="brk-logos__item-r-t-angle"></span>
								<span class="brk-logos__item-r-b-angle"></span>
								<span class="brk-logos__item-l-b-angle"></span>
								<img src="{{ asset('assets/frontend/img/footer/6.png') }}" class="brk-logos__img" alt="alt">
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="container">
				<div class="text-center">
					<div class="brk-logos mb-80" data-brk-library="component__portfolio_page-styles">
						<div class="row">
							
							<a href="#" class="brk-logos__item col-6 col-md-3 justify-content-center align-items-center d-flex p-4">
								<span class="brk-logos__item-l-t-angle"></span>
								<span class="brk-logos__item-r-t-angle"></span>
								<span class="brk-logos__item-r-b-angle"></span>
								<span class="brk-logos__item-l-b-angle"></span>
								<img src="img/portfolio-page/porgress-1.png" class="brk-logos__img" alt="alt">
							</a>
							
						</div>
					</div>
				</div>
			</div> -->
		</section>
@stop
