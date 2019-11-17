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
									<a href="{{ url('/QnA') }}">Tentang</a>
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
										SEJARAH PENDIRIAN PARTAI KEBANGKITAN BANGSA (PKB)</h2>
								</div>
							</div> -->
							<div class="brs-post__description">
								<ol>
								  <li>
								    <div class="field field-name-title field-type-ds field-label-hidden" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; color: rgb(47, 72, 98); font-family: &quot;Hind Siliguri&quot;; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
								      <div class="field-items" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px;">
								        <div class="field-item even" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px;">
								          <p style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-top: 0px; margin-bottom: 0px;">Lambang Partai terdiri dari bola dunia yang dikelilingi sembilan bintang dengan tulisan nama partai pada bagian bawah, dengan bingkai dalam empat persegi bergaris ganda, dan tulisan PKB di bawahnya yang diberi bingkai luar dengan garis tunggal.</p>
								        </div>
								      </div>
								    </div>
								    <div class="field field-name-body field-type-text-with-summary field-label-hidden" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px; color: rgb(47, 72, 98); font-family: &quot;Hind Siliguri&quot;; font-size: 17px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">
								      <div class="field-items" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px;">
								        <div class="field-item even" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px;">
								          <div class="pasak2" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">
								            <p style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-top: 0px; margin-bottom: 0px;"><strong style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; font-weight: bold; margin-bottom: 0px;">Makna Lambang :</strong></p>
								          </div>
								          <div class="pasak2" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;"><strong style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; font-weight: bold; margin-bottom: 0px;">1. Arti Gambar adalah sebagai berikut:</strong></div>
								          <div class="pasak3" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">
								            <ol start="a." style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px;">
								              <li style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">Bumi dan peta Indonesia, bermakna tanah air Indonesia yang merupakan basis perjuangan Partai dalam usahanya untuk mencapai tujuan partai;</li>
								              <li style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">Sembilan bintang bermakna idealisme partai yang memuat 9 (sembilan) nilai, yaitu kemerdekaan, keadilan, kebenaran, kejujuran, kerakyatan, persamaan, kesederhanaan, keseimbangan, dan persaudaraan;</li>
								              <li style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">Tulisan nama Partai dan singkatannya bermakna identitas diri partai yang berfungsi sebagai sarana perjuangan aspirasi politik rakyat Indonesia yang memiliki kehendak menciptakan tatanan kehidupan bangsa yang demokratis;</li>
								              <li style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px;">Bingkai segi empat dengan garis ganda yang sejajar bermakna garis perjuangan Partai yang menempatkan orientasi duniawi dan ukhrawi, material dan spiritual, lahir dan batin, secara sejajar.</li>
								            </ol>
								          </div>
								          <div class="pasak2" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;"><strong style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; font-weight: bold; margin-bottom: 0px;">2. Arti warna adalah sebagai berikut:</strong></div>
								          <div class="pasak3" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px;">
								            <ol start="a" style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px;">
								              <li style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">Putih, bermakna kesucian, ketulusan dan kebenaran yang menjadi etos perjuangan partai;</li>
								              <li style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">Hijau, bermakna kemakmuran lahir dan batin bagi seluruh rakyat Indonesia yang menjadi tujuan perjuangan;</li>
								              <li style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">Kuning, bermakna kebangkitan Bangsa yang menjadi nuansa pembaharuan dan berpijak pada kemaslahatan umat manusia.</li>
								              <li style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">Asas dan Prinsip Perjuangan (menggantikan Tugas dan fungsi)</li>
								              <li style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px;">Partai berasaskan Ketuhanan Yang Maha Esa, kemanusiaan yang adil dan beradab, persatuan Indonesia, kerakyatan yang dipimpin oleh hikmah kebijaksanaan dalam permusyawaratan/perwakilan, dan keadilan sosial bagi seluruh rakyat Indonesia. Sedangkan Prinsip perjuangan PKB adalah pengabdian kepada <em style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px;">Allah Subhanahu wa Ta’ala,</em> menjunjung tinggi kebenaran dan kejujuran, menegakkan keadilan, menjaga persatuan, menumbuhkan persaudaraan dan kebersamaan sesuai dengan nilai-nilai Islam <em style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-bottom: 0px;">Ahlusunnah Waljama’ah</em></li>
								            </ol>
								          </div>
								        </div>
								      </div>
								    </div>
								  </li>
								</ol>
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
						<li class="font__family-montserrat font__size-16"><span class="before"></span><a href="#">Some list item
								name</a> <span class="after"></span></li>
						<li class="font__family-montserrat font__size-16"><span class="before"></span>Some list item name <span class="after"></span></li>
						<li class="font__family-montserrat font__size-16"><span class="before"></span>Some list item name <span class="after"></span></li>
						<li class="font__family-montserrat font__size-16"><span class="before"></span>Some list item name <span class="after"></span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

@stop