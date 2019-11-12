@extends('frontend.layouts.master')
@section('title', $title)
@section('content')
@extends('frontend.layouts.breadcrumb')
	
	<div class="container mt-80">
		<div class="row">
			<div class="col-12 col-lg-8 col-xl-9 order-xs-2 order-lg-1">
				<div class="brs-posts-container brs-posts-container_right-divider">
					<div class="mb-60">
						<div class="brs-post brs-post_slider" data-brk-library="component__blog">
							<div class="brs-post__body">
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
							</div>
							<div class="brs-post__description">
								<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15">
									Bahwa cita-cita proklamasi kemerdekaan bangsa Indonesia adalah terwujudnya suatu bangsa yang merdeka, bersatu, adil dan makmur, serta untuk mewujudkan pemerintahan Negara Kesatuan Republik Indonesia yang melindungi segenap bangsa Indonesia dan untuk memajukan kesejahteraan umum, mencerdaskan kehidupan bangsa, serta ikut melaksanakan ketertiban dunia yang berdasarkan kemerdekaan, perdamaian abadi dan keadilan sosial.
								</p>

								<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15">
									Bahwa wujud dari bangsa yang dicita-citakan itu adalah masyarakat beradab dan sejahtera, yang mengejawantahkan nilai-nilai kejujuran, kebenaran, kesungguhan dan keterbukaan yang bersumber dari hati nurani, bisa dipercaya, setia dan tepat janji serta mampu memecahkan masalah sosial yang bertumpu pada kekuatan sendiri, bersikap dan bertindak adil dalam segala situasi, tolong menolong dalam kebajikan, serta konsisten menjalankan garis/ketentuan yang telah disepakati bersama.
								</p>

								<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15">
									Bahwa perwujudan dari cita-cita kemerdekaan tersebut menghendaki tegaknya demokrasi yang menjamin terciptanya tatanan kenegaraan yang adil serta pemerintahan yang bersih dan terpercaya, terjaminnya hak-hak asasi manusia, dan lestarinya lingkungan hidup bagi peningkatan harkat dan martabat bangsa Indonesia yang diridlai Allah Subhanahu wa Ta’ala. Bahwa untuk mewujudkan hal tersebut, diperlukan adanya wahana perjuangan yang kuat, mampu menyalurkan aspirasi dan menyatukan seluruh potensi bangsa yang majemuk, serta terlibat aktif dalam penyelenggaraan negara dengan berakhlaqul karimah. Maka dengan memohon rahmat, taufiq, hidayah, dan inayah Allah Subhanahu wa Ta’ala, didirikanlah PARTAI KEBANGKITAN BANGSA yang bersifat kebangsaan, demokratis dan terbuka.
								</p>

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