@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/lists.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/blog.css ') }}">
@endsection
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
	                                <i class="fal fa-chevron-right icon"></i>
	                            </li>
	                            <li>
	                                <a href="{{ route('tentang.makna_logo') }}">Makna Logo PKB</a>
	                            </li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="main-wrapper">
	    <main class="main-container">
	        <div class="container mt-40 mb-80">
	            <div class="row justify-content-center">
	                <div class="col-12 col-lg-8 col-xl-8">
	                	<div class="brs-post brs-post_slider p-50" data-brk-library="component__blog">
		                    <div class="brs-posts-container pt-20">
		                        <div class="brk-post-full">
		                        	<div class="brs-post__description">	
		                        		Lambang Partai terdiri dari bola dunia yang dikelilingi sembilan bintang dengan tulisan nama partai pada bagian bawah, dengan bingkai dalam empat persegi bergaris ganda, dan tulisan PKB di bawahnya yang diberi bingkai luar dengan garis tunggal. Makna Lambang :
		                        		<ul class="list-inline-2" data-brk-library="component__list">
                                            <div class="mb-15">
                                                <li class="font__family-montserrat font__size-16">
                                                    <a href="#">
                                                        <span class="text font__weight-bold">
                                                            <span class="cirlce">
                                                                <span class="before">
                                                                    
                                                                </span>
                                                                <span class="after"></span>
                                                            </span>
                                                           Arti Gambar adalah sebagai berikut:
														</span>
                                                        <ul class="list-inline-1" data-brk-library="component__list">
															<li class="font__family-montserrat font__size-14 list-counter">
																<span class="before"></span>
																
																<a href="#">
																
																</a>
															</li>
															<li class="font__family-montserrat font__size-14 list-counter">
																<span class="before"></span>
																
																<a href="#">
																Bumi dan peta Indonesia, bermakna tanah air Indonesia yang merupakan basis perjuangan Partai dalam usahanya untuk mencapai tujuan partai
																</a>
															</li>
															<li class="font__family-montserrat font__size-14 list-counter">
																<span class="before"></span>
																
																<a href="#">
																Sembilan bintang bermakna idealisme partai yang memuat 9 (sembilan) nilai, yaitu kemerdekaan, keadilan, kebenaran, kejujuran, kerakyatan, persamaan, kesederhanaan, keseimbangan, dan persaudaraan
																</a>
															</li>
															<li class="font__family-montserrat font__size-14 list-counter">
																<span class="before"></span>
																
																<a href="#">
																Tulisan nama Partai dan singkatannya bermakna identitas diri partai yang berfungsi sebagai sarana perjuangan aspirasi politik rakyat Indonesia yang memiliki kehendak menciptakan tatanan kehidupan bangsa yang demokratis
																</a>
															</li>
															<li class="font__family-montserrat font__size-14 list-counter">
																<span class="before"></span>
																
																<a href="#">
																Bingkai segi empat dengan garis ganda yang sejajar bermakna garis perjuangan Partai yang menempatkan orientasi duniawi dan ukhrawi, material dan spiritual, lahir dan batin, secara sejajar.
																</a>
															</li>
														</ul>
                                                    </a>
                                                </li>
                                            </div>
                                             <div class="mb-15">
                                                <li class="font__family-montserrat font__size-16">
                                                    <a href="#">
                                                        <span class="text font__weight-bold">
                                                            <span class="cirlce">
                                                                <span class="before">
                                                                    
                                                                </span>
                                                                <span class="after"></span>
                                                            </span>
                                                           Arti warna adalah sebagai berikut:
														</span>
                                                        <ul class="list-inline-1" data-brk-library="component__list">
															<li class="font__family-montserrat font__size-14 list-counter">
																<span class="before"></span>
																
																<a href="#">
																
																</a>
															</li>
															<li class="font__family-montserrat font__size-14 list-counter">
																<span class="before"></span>
																
																<a href="#">
																Putih, bermakna kesucian, ketulusan dan kebenaran yang menjadi etos perjuangan partai
																</a>
															</li>
															<li class="font__family-montserrat font__size-14 list-counter">
																<span class="before"></span>
																
																<a href="#">
																Hijau, bermakna kemakmuran lahir dan batin bagi seluruh rakyat Indonesia yang menjadi tujuan perjuangan
																</a>
															</li>
															<li class="font__family-montserrat font__size-14 list-counter">
																<span class="before"></span>
																
																<a href="#">
																Kuning, bermakna kebangkitan Bangsa yang menjadi nuansa pembaharuan dan berpijak pada kemaslahatan umat manusia
																</a>
															</li>
															<li class="font__family-montserrat font__size-14 list-counter">
																<span class="before"></span>
																
																<a href="#">
																Asas dan Prinsip Perjuangan (menggantikan Tugas dan fungsi)
																</a>
															</li>
															<li class="font__family-montserrat font__size-14 list-counter">
																<span class="before"></span>
																
																<a href="#">
																Partai berasaskan Ketuhanan Yang Maha Esa, kemanusiaan yang adil dan beradab, persatuan Indonesia, kerakyatan yang dipimpin oleh hikmah kebijaksanaan dalam permusyawaratan/perwakilan, dan keadilan sosial bagi seluruh rakyat Indonesia. Sedangkan Prinsip perjuangan PKB adalah pengabdian kepada Allah Subhanahu wa Ta’ala, menjunjung tinggi kebenaran dan kejujuran, menegakkan keadilan, menjaga persatuan, menumbuhkan persaudaraan dan kebersamaan sesuai dengan nilai-nilai Islam Ahlusunnah Waljama’ah
																</a>
															</li>
														</ul>
                                                    </a>
                                                </li>
                                            </div>
                                        </ul>
		                        	</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4 col-xl-3">
	                    <div class="mb-60">
	                        <div class="brs-sidebar brs-sidebar_right">
	                            <div class="list-group">
	                                <a href="{{ url('tentang/sejarah-pendirian-pkb') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Sejarah Pendirian PKB</a>
	                                <a href="{{ url('tentang/naskah-deklarasi') }}" class="list-group-item list-group-item-action list-group-item-light"   style="color :black">Naskah Deklarasi</a>
	                                <a href="{{ url('tentang/mabda-siyasi') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Mabda Siyasi</a>
	                                <a href="{{ url('tentang/ad-art-pkb-2014') }}" class="list-group-item list-group-item-action list-group-item-light" style="color :black">AD ART PKB 2014</a>
	                                <a href="{{ url('tentang/makna-logo-pkb') }}" class="list-group-item list-group-item-action list-group-item-success active">Makna Logo PKB</a>
	                                <a href="{{ url('tentang/visi-dan-misi') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Visi dan Misi</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				</div>
			</div>
		</main>
	</div>
	@stop
	@push('scripts')
	    <!-- vendor -->
		<script src="{{ asset('assets/frontend/js/components/blog.js') }} "></script>
	@endpush
