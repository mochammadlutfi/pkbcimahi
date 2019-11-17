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
									<a href="#">Tentang</a>
								</li>
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
							<!-- <div class="brs-post__body">
								<div class="brs-post__slider-container">
									<div class="brs-post__slider-item">
										<img src="{{ asset('assets/frontend/img/blog/slider-post.png') }}" alt="girl-with-camera" class="brs-post__img">
										<div class="brs-post__overlay"></div>
									</div>
								</div>
								<div class="brs-post__info-wrapper brs-post__info-wrapper-bg">
									<div class="brs-post__information font__family-montserrat font__weight-semibold font__size-13 line__height-14">
										<a href="#" class="brs-post__date">
											<i class="far fa-clock brs-post__date-icon"></i>Aug 12, 17
										</a>
									</div>
									<h2 class="brs-post__title font__family-montserrat font__size-24 font__weight-bold line__height-28 text-left">
										NASKAH DEKLARASI</h2>
								</div>
							</div> -->
							<div class="brs-post__description">
								<div class="wpb_text_column wpb_content_element " style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px; color: rgb(47, 72, 98); font-family: &quot;Hind Siliguri&quot;; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
								  <!-- <h4 style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin: 30px 0px 20px; color: rgb(21, 65, 110); line-height: 1.1; text-transform: uppercase; font-family: &quot;Hind Vadodara&quot;; font-weight: 700; font-style: normal; font-size: 24px; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">NASKAH DEKLARASI</h4> -->
								  <p style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-top: 0px; margin-bottom: 20px; color: rgb(47, 72, 98); font-family: &quot;Hind Siliguri&quot;; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">Bahwa cita-cita proklamasi kemerdekaan bangsa Indonesia adalah terwujudnya suatu bangsa yang merdeka, bersatu, adil dan makmur, serta untuk mewujudkan pemerintahan Negara Kesatuan Republik Indonesia yang melindungi segenap bangsa Indonesia dan untuk memajukan kesejahteraan umum, mencerdaskan kehidupan bangsa, serta ikut melaksanakan ketertiban dunia yang berdasarkan kemerdekaan, perdamaian abadi dan keadilan sosial.</p>
								  <p style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-top: 0px; margin-bottom: 20px; color: rgb(47, 72, 98); font-family: &quot;Hind Siliguri&quot;; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">Bahwa wujud dari bangsa yang dicita-citakan itu adalah masyarakat beradab dan sejahtera, yang mengejawantahkan nilai-nilai kejujuran, kebenaran, kesungguhan dan keterbukaan yang bersumber dari hati nurani, bisa dipercaya, setia dan tepat janji serta mampu memecahkan masalah sosial yang bertumpu pada kekuatan sendiri, bersikap dan bertindak adil dalam segala situasi, tolong menolong dalam kebajikan, serta konsisten menjalankan garis/ketentuan yang telah disepakati bersama.</p>
								  <p style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-top: 0px; margin-bottom: 0px; color: rgb(47, 72, 98); font-family: &quot;Hind Siliguri&quot;; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">Bahwa perwujudan dari cita-cita kemerdekaan tersebut menghendaki tegaknya demokrasi yang menjamin terciptanya tatanan kenegaraan yang adil serta pemerintahan yang bersih dan terpercaya, terjaminnya hak-hak asasi manusia, dan lestarinya lingkungan hidup bagi peningkatan harkat dan martabat bangsa Indonesia yang diridlai <em style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">Allah Subhanahu wa Ta’ala.</em> Bahwa untuk mewujudkan hal tersebut, diperlukan adanya wahana perjuangan yang kuat, mampu menyalurkan aspirasi dan menyatukan seluruh potensi bangsa yang majemuk, serta terlibat aktif dalam penyelenggaraan negara dengan berakhlaqul karimah. Maka dengan memohon rahmat, taufiq, hidayah, dan inayah <em style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">Allah Subhanahu wa Ta’ala,</em> didirikanlah <strong style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; font-weight: bold; margin-bottom: 0px;">PARTAI KEBANGKITAN BANGSA&nbsp;</strong>yang bersifat kebangsaan, demokratis dan terbuka.</p>
								</div>
								<div class="wpb_text_column wpb_content_element " style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px; color: rgb(47, 72, 98); font-family: &quot;Hind Siliguri&quot;; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
								  <br>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-xl-3 order-xs-1 order-lg-2">
				<div class="brs-sidebar brs-sidebar_right" data-brk-library="component__widgets">
					<ul class="list-inline-3" data-brk-library="component__list">
						<li class="font__family-montserrat font__size-16 active"><span class="before"></span><a href="{{ url('/sejarah') }}">Sejarah Pendirian</a> <span class="after"></span></li>
						<li class="font__family-montserrat font__size-16 active"><span class="before"></span><a href="{{ url('/naskahdeklarasi') }}">Naskah Deklarasi</a> <span class="after"></span></li>
						<li class="font__family-montserrat font__size-16 active"><span class="before"></span><a href="{{ url('/mabdasiyasi') }}">Mabda Siyasi</a> <span class="after"></span></li>
						<li class="font__family-montserrat font__size-16 active"><span class="before"></span><a href="{{ url('/adartpkb2014') }}">AD ART PKB 2014</a> <span class="after"></span></li>
						<li class="font__family-montserrat font__size-16 active"><span class="before"></span><a href="{{ url('/maknalogopkb') }}">Makna Logo</a> <span class="after"></span></li>
						<li class="font__family-montserrat font__size-16 active"><span class="before"></span><a href="{{ url('/visidanmisi') }}">Visi dan Misi</a> <span class="after"></span></li>

					</ul>
				</div>
			</div>
		</div>
	</div>

@stop