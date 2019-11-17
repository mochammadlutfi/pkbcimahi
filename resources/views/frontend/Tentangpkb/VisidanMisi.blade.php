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
										SEJARAH PENDIRIAN PARTAI KEBANGKITAN BANGSA (PKB)</h2>
								</div>
							</div> -->
							<div class="brs-post__description">
								<h4>Visi</h4>
								<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
									<ul class="list-inline-1" data-brk-library="component__list">
									<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
										Mewujudkan cita-cita kemerdekaan Republik Indonesia sebagaimana dituangkan dalam Pembukaan Undang-Undang Dasar 1945
									</li>
									<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
										Mewujudkan masyarakat yang adil dan makmur secara lahir dan batin, material dan spiritual
									</li>
									<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
										Mewujudkan tatanan politik nasional yang demokratis, terbuka, bersih dan berakhlakul karimah.
									</li>
								</p>
								<h4 class="mt-20">Misi</h4>
								<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
									<ul class="list-inline-1" data-brk-library="component__list">
									<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
										Bidang Ekonomi: menegakkan dan mengembangkan kehidupan ekonomi kerakyatan yang adil dan demokratis
									</li>
									<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
										Bidang Hukum: berusaha menegakkan dan mengembangkan negara hukum yang beradab, mampu mengayomi seluruh rakyat, menjunjung tinggi hak-hak asasi manusia, dan berkeadilan sosial
									</li>
									<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
											Bidang Sosial Budaya: berusaha membangun budaya yang maju dan modern dengan tetap memelihara jatidiri bangsa yang baik demi meningkatkan harkat dan martabat bangsa
										
									</li>
									<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
										Bidang Pendidikan: berusaha meningkatkan kualitas sumber daya manusia yang berakhlak mulia, mandiri, terampil, profesional dan kritis terhadap lingkungan sosial di sekitarnya, mengusahakan terwujudnya sistem pendidikan nasional yang berorientasi kerakyatan, murah dan berkesinambungan
									</li>
									<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
										
										Bidang Pertahanan: membangun kesadaran setiap warga negara terhadap kewajiban untuk turut serta dalam usaha pertahanan negara; mendorong terwujudnya swabela masyarakat terhadap perlakuan-perlakuan yang menimbulkan rasa tidak aman, baik yang datang dari pribadi-pribadi maupun institusi tertentu dalam masyarakat.								
									</li>
									
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