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
									<a href="{{ url('/QnA') }}">Tentang</a>
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
	                        	<div class="row">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets/frontend/img/footer/dpw-pkb-ad-art-cover.jpg') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <ul class="list-inline-2" data-brk-library="component__list">
                                                    <div class="mb-15">
                                                        <li class="font__family-montserrat font__size-16 font__weight-bold">
                                                            <a href="#">
                                                                <span class="text">
                                                                    <span class="cirlce">
                                                                        <span class="before">
                                                                            
                                                                        </span>
                                                                        <span class="after"></span>
                                                                    </span>
                                                                   AD/ART Partai Kebangkitan Bangsa
                                                                </span>
                                                            </a>
                                                        </li>
                                                    <p class="ml-50">
                                                        Dewan Pimpinan Wilayah <br>
														Partai Kebangkitan Bangsa<br>
														Provinsi Jawa Barat<br>
														<br>
														Berdasarkan hasil Ketetapan Muktamar Partai Kebangkitan Bangsa Nomor: III/Muktamar/PKB/VIII/2014, ditetapkan di Surabaya pada tanggal 31 Agustus 2014.
                                                    </p>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
	                        	<div class="brs-post__description">	
									<embed src="{{ asset('assets/frontend/pdf/5111100012-Undergraduate_theses.pdf ')}}" width="100%" height="750" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
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
                                <a href="{{ url('tentang/ad-art-pkb-2014') }}" class="list-group-item list-group-item-action list-group-item-success active">AD ART PKB 2014</a>
                                <a href="{{ url('tentang/makna-logo-pkb') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Makna Logo PKB</a>
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
