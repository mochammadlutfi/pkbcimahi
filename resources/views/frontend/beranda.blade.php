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
			<h4 class="title__divider title__divider--line font__size-21 font__weight-bold font__family-montserrat line__height-24 text-center mb-40" data-brk-library="component__dividers"> 
				<span class="title__divider__wrapper">
					Berita Terbaru <span class="line brk-base-bg-gradient-right"></span>
				</span>
			</h4>
			<div class="row">
				@for ($i = 0; $i < 6; $i++)
					<div class="col-xl-4">
						<div class="post-rounded brk-base-box-shadow" data-brk-library="component__content_slider">  
							<div class="post-rounded__thumb lazyload" data-bg="{{ asset('assets/frontend/img/rounded-1.jpg') }}">
								<a href="#" class="btn btn-inside-out btn-inside-out-invert btn-lg border-radius-30 font__family-open-sans font__weight-bold letter-spacing--100 z-index-1 post-rounded__btn pl-70 pr-70" data-brk-library="component__button">  
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
				<a href="#" class="btn btn-inside-out btn-lg btn-inside-out-invert border-radius-30 font__weight-light pl-60 pr-60 brk-black-font-color" data-brk-library="component__button"> 
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
		<div class="brk-services-simple pb-md-110 pb-60" data-brk-library="slider__swiper">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					@for ($i = 0; $i < 6; $i++)
					<div class="swiper-slide">
						<div class="info-box-icon-simple d-flex flex-column align-items-center pt-60 pb-50 pl-50 pr-50 position-relative" data-brk-library="component__info_box">
							<span class="brk-abs-overlay brk-base-bg-gradient-50deg"></span>
							<div class="info-box-icon-simple__icon-wrapper d-flex align-items-center justify-content-center mb-45">
								<i class="far fa-file-alt" aria-hidden="true"></i>
							</div>
							<p class="font__family-montserrat info-box-icon-simple__title font__size-28 font__weight-bold line__height-30 mb-20 text-center">
								Scalable on Devices
								{{ $i }}
							</p>
							<p class="brk-dark-font-color font__size-16 info-box-icon-simple__about line__height-26 font__weight-normal mb-35 text-center">
								Aenean vulputate eleifend tellus. Renean leo ligula, porttitor euequat vitae, eleifend ac, enim.
							</p>
							<a href="#" class="btn btn-inside-out btn-lg border-radius-30 btn-shadow ml-0 mr-0 mt-0 mb-0 pl-60 pr-60" data-brk-library="component__button">
								<span class="before">read more</span><span class="text">Click Me</span><span class="after">read more</span>
							</a>
						</div>
					</div>
					@endfor
				</div>
			</div>
			<div class="text-center">
				<a href="#" class="btn btn-inside-out btn-lg btn-inside-out-invert border-radius-30 font__weight-light pl-60 pr-60 brk-black-font-color" data-brk-library="component__button"> 
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
				<article class="brk-team-mc lazyload brk-mc-light-blue" data-bg="{{ asset('assets/frontend/img/270x414_1.jpg') }} " data-brk-library="component__team"> 
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
				<article class="brk-team-mc lazyload brk-mc-light-blue" data-bg="{{ asset('assets/frontend/img/270x414_1.jpg') }} " data-brk-library="component__team"> 
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
				<article class="brk-team-mc lazyload brk-mc-light-blue" data-bg="{{ asset('assets/frontend/img/270x414_1.jpg') }} " data-brk-library="component__team"> 
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
<div class="brk-map" data-height="534" data-brk-library="component__map">
	<h4 class="title__divider title__divider--line font__size-21 font__weight-bold font__family-montserrat line__height-24 text-center mt-90 mb-40" data-brk-library="component__dividers">  
		<span class="title__divider__wrapper">
			Alamat Kami<span class="line brk-base-bg-gradient-right"></span>
		</span>
	</h4>
	<div class="brk-map__section">
		<div class="brk-map__canvas" data-address="Jl. Helikopter No.16-8, Melong, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40534" data-zoom="13" data-type="roadmap" data-marker="" data-offset-lat="" data-offset-lng="" data-lat="-6.923852" data-lng="107.554257" data-style="dark">
		</div>
	</div>
	<div class="brk-map__infoicon brk-map__infoicon_layout-four">
		<div class="brk-map__infoicon--text text-left">
			<h4 class="font__family-montserrat font__weight-light font__size-32 line__height-34 text-uppercase">Kami
				<br>
				<span class="font__weight-bold">Disini</span>
			</h4>
			<ul class="font__size-16 line__height-21 text-uppercase mt-10">
				<li>
					<i class="fa fa-phone"></i>
					<a href="tel:8800123456789">1 800 232 3485</a>
				</li>
				<li>
					<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
					<span>Jl. Helikopter No.16-8, Melong, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40534</span>
				</li>
			</ul>
		</div>
	</div>
</div>
<!--------------------------------------------------------------------- End of Maps -->
@stop
