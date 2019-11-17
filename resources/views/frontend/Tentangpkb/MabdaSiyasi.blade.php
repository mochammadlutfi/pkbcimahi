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
										MABDA’ SIYASI</h2>
								</div>
							</div> -->
							<div class="brs-post__description">
								<ul class="list-inline-1" data-brk-library="component__list">
									<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
												Cita-cita proklamasi kemerdekaan bangsa Indonesia adalah terwujudnya suatu bangsa yang merdeka, bersatu, adil dan makmur sejahtera lahir dan batin, bermartabat dan sederajat dengan bangsa-bangsa lain didunia, serta mampu mewujudkan suatu pemerintahan Negara Kesatuan Republik Indonesia yang melindungi segenap bangsa Indonesia menuju tercapainya kesejahteraan umum, mencerdaskan kehidupan bangsa, keadilan sosial dan menjamin terpenuhinya hak asasi manusia serta ikut melaksanakan ketertiban dunia.
							
											</p>
									</li>
									<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20">
												Bagi Partai Kebangkitan Bangsa, wujud dari bangsa yang dicita-citakan itu adalah masyarakat yang terjamin hak asasi kemanusiaannya yang mengejawantahkan nilai-nilai kejujuran, kebenaran, kesungguhan dan keterbukaan bersumber pada hati nurani (as-shidqu), dapat dipercaya, setia dan tepat janji serta mampu memecahkan masalah-masalah sosial yang dihadapi (al-amanah wa al-wafa-u bi al-ahdli), bersikap dan bertindak adil dalam segala situasi (al-‘adalah), tolong menolong dalam kebajikan (al-ta’awun) serta konsisten menjalankan ketentuan yang telah disepakati bersama (al-istiqomah) musyawarah dalam menyelesaikan persoalan sosial (al-syuro) yang menempatkan demokrasi sebagai pilar utamanya dan persamaan kedudukan setiap warga negara didepan hukum (al-musawa) adalah prinsip dasar yang harus ditegakkan.
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
											<span class="before"></span>
											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20">
												Dalam mewujudkan apa yang selalu dicita-citakan tersebut, misi utama yang dijalankan Partai Kebangkitan Bangsa adalah tatanan masyarakat beradab yang sejahtera lahir dan batin, yang setiap warganya mampu mengejawantahkan nilai-nilai kemanusiaannya. Yang meliputi, terpeliharanya jiwa raga, terpenuhinya kemerdekaan, terpenuhinya hak-hak dasar manusia seperti pangan, sandang, dan papan, hak atas penghidupan/perlindungan pekerjaan, hak mendapatkan keselamatan dan bebas dari penganiayaan (hifdzu al-Nafs), terpeliharanya agama dan larangan adanya pemaksaan agama (hifdzu al-din), terpeliharanya akal dan jaminan atas kebebasan berekspresi serta berpendapat (hifdzu al-Aql), terpeliharanya keturunan, jaminan atas perlindungan masa depan generasi penerus (hifdzu al-nasl) dan terpeliharanya harta benda (hifdzu al-mal). Misi ini ditempuh dengan pendekatan amar ma’ruf nahi munkar yakni menyerukan kebajikan serta mencegah segala kemungkinan dan kenyataan yang mengandung kemunkaran.
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
											<span class="before"></span>
											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20">
												Penjabaran dari misi yang di emban guna mencapai terwujudnya masyarakat yang dicitakan tersebut tidak bisa tidak harus dicapai melalui keterlibatan penetapan kebijakan publik. Jalur kekuasaan menjadi amat penting ditempuh dalam proses mempengaruhi pembuatan kebijakan publik melalui perjuangan pemberdayaan kepada masyarakat lemah, terpinggirkan dan tertindas, memberikan rasa aman, tenteram dan terlindungi terhadap kelompok masyarakat minoritas dan membongkar sistem politik, ekonomi, hukum dan sosial budaya yang memasung kedaulatan rakyat. Bagi Partai Kebangkitan Bangsa, upaya mengartikulasikan garis perjuangan politiknya dalam jalur kekuasaan menjadi hal yang niscaya dan dapat dipertanggungjawabkan.
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20">
												Partai Kebangkitan Bangsa sadar dan yakin bahwa kekuasaan itu sejatinya milik Tuhan Yang Maha Esa. Kekuasaan yang ada pada diri manusia merupakan titipan dan amanat Tuhan yang dititipkan kepada manusia yang oleh manusia hanya bisa diberikan pada pihak lain yang memiliki keahlian dan kemampuan untuk mengemban dan memikulnya. Keahlian memegang amanat kekuasaan itu mensaratkan kemampuan menerapkan kejujuran, keadilan dan kejuangan yang senantiasa memihak kepada pemberi amanat.
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20">
												Dalam kaitan dengan kehidupan bermasyarakat, berbangsa dan bernegara kekuasaan yang bersifat demikian itu harus dapat dikelola dengan sebaik-baiknya dalam rangka menegakkan nilai-nilai agama yang mampu menebarkan rahmat, kedamaian dan kemaslahatan bagi semesta. Manifestasi kekuasaan itu harus dipergunakan untuk memperjuangkan pemberdayaan rakyat agar mampu menyelesaikan persoalan hidupnya dengan lebih maslahat. Partai Kebangkitan Bangsa berketetapan bahwa kekuasaan yang hakekatnya adalah amanat itu haruslah dapat dipertanggungjawabkan dihadapan Tuhan dan dapat dikontrol pengelolaannya oleh rakyat. Kontrol terhadap kekuasaan itu hanya mungkin dilakukan manakala kekuasaan tidak tak terbatas dan tidak memusat di satu tangan, serta berada pada mekanisme sistem yang institusionalistik, bukan bertumpu pada kekuasaan individualistik, harus selalu dibuka ruang untuk melakukan kompetisi kekuasaan dan perimbangan kekuasaan sebagai arena mengasah ide-ide perbaikan kualitas bangsa dalam arti yang sesungguhnya. Pemahaman atas hal ini tidak hanya berlaku saat memandang kekuasaan dalam tatanan kenegaraan, melainkan juga harus terefleksikan dalam tubuh internal partai.
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>
											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20">
												Partai Kebangkitan Bangsa menyadari bahwa sebagai suatu bangsa pluralistik yang terdiri dari berbagai suku, agama dan ras, tatanan kehidupan bangsa Indonesia harus senantiasa berpijak pada nilai-nilai Ketuhanan Yang Maha Esa, kemanusiaan yang adil dan beradab, persatuan Indonesia, kerakyatan yang dipimpin oleh hikmat kebijaksanaan dalam permusyawaratan/perwakilan, dan keadilan sosial bagi seluruh rakyat Indonesia. Penerapan nilai-nilai Pancasila tersebut haruslah dijiwai dengan sikap mengembangkan hubungan tali persaudaraan antar sesama yang terikat dengan ikatan keagamaan (ukhuwah diniyah), kebangsaan (ukhuwah wathoniyah), dan kemanusiaan (ukhwuah insaniyah), dengan selalu menjunjung tinggi semangat akomodatif, kooperatif dan integratif, tanpa harus saling dipertentangkan antara sesuatu dengan yang lainnya.
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>

											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20">
												Partai Kebangkitan Bangsa bercirikan humanisme religius (insaniyah diniyah), amat peduli dengan nilai-nilai kemanusiaan yang agamis, yang berwawasan kebangsaan. Menjaga dan melestarikan tradisi yang baik serta mengambil hal-hal yang baru yang lebih baik untuk ditradisikan menjadi corak perjuangan yang ditempuh dengan cara-cara yang santun dan akhlak karimah. Partai adalah ladang persemaian untuk mewujudkan masyarakat beradab yang dicitakan, serta menjadi sarana dan wahana sekaligus sebagai wadah kaderisasi kepemimpinan bangsa. Partai dalam posisi ini berkehendak untuk menyerap, menampung, merumuskan, menyampaikan dan memperjuangkan aspirasi rakyat guna menegakkan hak-hak rakyat dan menjamin pelaksanaan ketatanegaraan yang jujur, adil dan demokratis.
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
										<span class="before"></span>

											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20">
												Partai Kebangkitan Bangsa adalah partai terbuka dalam pengertian lintas agama, suku, ras, dan lintas golongan yang dimanestasikan dalam bentuk visi, misi, program perjuangan, keanggotaan dan kepemimpinan. Partai Kebangkitan Bangsa bersifat independen dalam pengertian menolak segala bentuk kekuasaan dari pihak manapun yang bertentangan dengan tujuan didirikannya partai.
											</p>
										</li>
									</ul>

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