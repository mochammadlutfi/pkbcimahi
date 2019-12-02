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
								 </span>
										</li>
								<li>
									<a href="{{ url('/QnA') }}">Tentang</a>
								 </span>
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
									<h4>Visi</h4>
									<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
										<ul class="list-inline-2" data-brk-library="component__list">
										 <li class="font__family-montserrat font__size-16 ">
                                                         
                                            <span class="text">
                                                <span class="cirlce">
                                                    <span class="before">
                                                        
                                                    </span>
                                                    <span class="after"></span>
                                                </span>
											Mewujudkan cita-cita kemerdekaan Republik Indonesia sebagaimana dituangkan dalam Pembukaan Undang-Undang Dasar 1945
										 </span>
										</li>
										 <li class="font__family-montserrat font__size-16 ">
                                                         
                                            <span class="text">
                                                <span class="cirlce">
                                                    <span class="before">
                                                        
                                                    </span>
                                                    <span class="after"></span>
                                                </span>
											Mewujudkan masyarakat yang adil dan makmur secara lahir dan batin, material dan spiritual
										 </span>
										</li>
										 <li class="font__family-montserrat font__size-16 ">
                                                         
                                            <span class="text">
                                                <span class="cirlce">
                                                    <span class="before">
                                                        
                                                    </span>
                                                    <span class="after"></span>
                                                </span>
											Mewujudkan tatanan politik nasional yang demokratis, terbuka, bersih dan berakhlakul karimah.
										 </span>
										</li>
									</p>
									<h4 class="mt-20">Misi</h4>
									<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
										<ul class="list-inline-1" data-brk-library="component__list">
										 <li class="font__family-montserrat font__size-16 ">
                                                         
                                        <span class="text">
                                            <span class="cirlce">
                                                <span class="before">
                                                    
                                                </span>
                                                <span class="after"></span>
                                            </span>
											Bidang Ekonomi: menegakkan dan mengembangkan kehidupan ekonomi kerakyatan yang adil dan demokratis
										 </span>
										</li>
										 <li class="font__family-montserrat font__size-16 ">
                                                         
	                                        <span class="text">
	                                            <span class="cirlce">
	                                                <span class="before">
	                                                    
	                                                </span>
	                                                <span class="after"></span>
	                                            </span>
											Bidang Hukum: berusaha menegakkan dan mengembangkan negara hukum yang beradab, mampu mengayomi seluruh rakyat, menjunjung tinggi hak-hak asasi manusia, dan berkeadilan sosial
										 </span>
										</li>
										 <li class="font__family-montserrat font__size-16 ">
                                                         
                                            <span class="text">
                                                <span class="cirlce">
                                                    <span class="before">
                                                        
                                                    </span>
                                                    <span class="after"></span>
                                                </span>
												Bidang Sosial Budaya: berusaha membangun budaya yang maju dan modern dengan tetap memelihara jatidiri bangsa yang baik demi meningkatkan harkat dan martabat bangsa
											
										 </span>
										</li>
										 <li class="font__family-montserrat font__size-16 ">
                                                         
	                                        <span class="text">
	                                            <span class="cirlce">
	                                                <span class="before">
	                                                    
	                                                </span>
	                                                <span class="after"></span>
	                                            </span>
											Bidang Pendidikan: berusaha meningkatkan kualitas sumber daya manusia yang berakhlak mulia, mandiri, terampil, profesional dan kritis terhadap lingkungan sosial di sekitarnya, mengusahakan terwujudnya sistem pendidikan nasional yang berorientasi kerakyatan, murah dan berkesinambungan
										 </span>
										</li>
										<div class="mb-15">
											<li class="font__family-montserrat font__size-16 ">
	                                           <span class="text">
		                                            <span class="cirlce">
		                                                <span class="before">
		                                                    
		                                                </span>
		                                                <span class="after"></span>
		                                            </span>
		                                            Bidang Pertahanan: membangun kesadaran setiap warga negara terhadap kewajiban untuk turut serta dalam usaha pertahanan negara; mendorong terwujudnya swabela masyarakat terhadap perlakuan-perlakuan yang menimbulkan rasa tidak aman, baik yang datang dari pribadi-pribadi maupun institusi tertentu dalam masyarakat.
											 	</span>
											</li>
											
										</div>
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
                                <a href="{{ url('tentang/ad-art-pkb-2014') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">AD ART PKB 2014</a>
                                <a href="{{ url('tentang/makna-logo-pkb') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Makna Logo PKB</a>
                                <a href="{{ url('tentang/visi-dan-misi') }}" class="list-group-item list-group-item-action list-group-item-success active" >Visi dan Misi</a>
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
