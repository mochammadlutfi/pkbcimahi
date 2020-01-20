

<div class="brk-header-mobile" style="height: 120px">
	<div class="brk-header-mobile__open brk-header-mobile__open_white">
		<span></span>
	</div>
	<div class="brk-header-mobile__logo">
		<a href="/">
			<img class="brk-header-mobile__logo-1 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/logo-dark.png') }} " alt="alt" style="height: 100px">


			<img class="brk-header-mobile__logo-2 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/logo-dark.png') }} " alt="alt" style="height: 100px">
		</a>
	</div>
</div>


<header class="brk-header d-lg-flex flex-column brk-header_style-1 brk-header_color-dark brk-library-rendered d-flex top-bar-active pb-1000" data-brk-library="component__header" >

	<!-- <header class="brk-header d-lg-flex flex-column brk-header_style-1 brk-header_color-white" style="display: none;" data-logo-src="img/logo-dark-2.png" data-bg-mobile="img/brk-bg-mobile-menu.jpg" data-sticky-hide="0" data-brk-library="component__header"> -->


	<div class="brk-header__top-bar brk-header_border-bottom order-lg-1 order-2  brk-header__top-bar_color-white" data-top="3" style="height: 46px; background-color: #09713c">
		<div class="brk-header__title font__family-montserrat font__weight-bold">Contact Us</div>
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6 align-self-lg-stretch text-left">
					<div class="brk-header__element brk-header__element_skin-1 brk-header__item">
						<a href="#" class="brk-header__element--wrap">
							<i class="far fa-envelope"></i>
							<span class="brk-header__element--label">info@pkbcimahi.or.id</span>
						</a>
					</div>
					<div class="brk-header__element brk-header__element_skin-1 brk-header__item">
						<div class="brk-header__element--wrap">
							<i class="far fa-clock"></i>
							<span class="brk-header__element--label">Sen-Sab (8.00 - 18.00)</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 align-self-lg-stretch text-left text-lg-right">
<!-- jika tidak login login --------------------------------------------------------------------->
                    @if(Auth::guard('web')->check())
                    {{-- <div class="brk-header__element brk-header__element_skin-1 brk-header__item">
                        <a href="{{ route('login') }}" class="brk-header__element--wrap">
                            <i class="fas fa-user"></i>
                            <span class="brk-header__element--label">{{ auth()->user()->name }}</span>
                        </a>
                    </div> --}}
                    <div class="brk-header__element brk-header__element_skin-1 brk-header__item">
					    <div class="brk-header__element--wrap  dropdown">
                        <a type="button" class="dropdown-toggle" data-toggle="dropdown">
                            {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('profile') }}">Profil</a>
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                                document.querySelector('#logout-form').submit();">
                                Keluar
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        </div>
                    </div>
                    @else
<!-- Jika sudah login --------------------------------------------------------------------->
					<!-- <div class="brk-header__element brk-header__element_skin-1 brk-header__item">
						<a href="{{ url('/profile') }}" class="brk-header__element--wrap">
							<i class="fas fa-user"></i>
							<span class="brk-header__element--label">Profile</span>
						</a>
					</div>
					<div class="brk-header__element brk-header__element_skin-1 brk-header__item">
						<a href="{{ url('/login') }}" class="brk-header__element--wrap">
							<i class="fas fa-sign-in-alt"></i>
							<span class="brk-header__element--label">Logout</span>
						</a>
					</div> -->
<!-- --------------- --------------------------------------------------------------------->
					<div class="brk-header__element brk-header__element_skin-1 brk-header__item">
						<a href="{{ route('login') }}" class="brk-header__element--wrap">
							<i class="fas fa-user"></i>
							<span class="brk-header__element--label">Masuk</span>
						</a>
					</div>

					<div class="brk-header__element brk-header__element_skin-1 brk-header__item">
						<a href="{{ route('register') }}" class="brk-header__element--wrap">
							<i class="fas fa-sign-in-alt"></i>
							<span class="brk-header__element--label">Daftar</span>
						</a>
                    </div>
                    @endif
				</div>
			</div>
		</div>
	</div>
	<div class="brk-header__main-bar brk-header_border-bottom order-lg-2 order-1 bg-white" style="height: 72px;">
		<div class="container-fluid">
			<div class="row no-gutters align-items-center">
				<!-- <div class="col-lg-auto align-self-lg-stretch d-none d-lg-block">
					<div class="brk-open-top-bar brk-header__item active">
						<div class="brk-open-top-bar__circle"></div>
						<div class="brk-open-top-bar__circle"></div>
						<div class="brk-open-top-bar__circle"></div>
					</div>
				</div> -->
				<div class="col-lg align-self-lg-stretch">
					<nav class="brk-nav brk-header__item rendered">
						<ul class="brk-nav__menu">
							<li class="brk-nav__children brk-nav__drop-down-effect">
								<a href="#">
									<span>Berita</span>
								</a>
							</li>

							<li class="brk-nav__children brk-nav__drop-down-effect">
								<a href="#">
									<span>Tentang</span>
								</a>
								<ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat brk-location-screen-left">
									<li class="dd-effect" style="opacity: 1; left: 0px;">
										<a href="{{ route('tentang.sejarah') }}">Sejarah Pendirian PKB</a>
									</li>
									<li class="dd-effect" style="opacity: 1; left: 0px;">
										<a href="{{ route('tentang.naskah_deklarasi') }}">Naskah Deklarasi</a>
									</li>
									<li class="dd-effect" style="opacity: 1; left: 0px;">
										<a href="{{ route('tentang.mabda_siyasi') }}">Mabda Siyasi</a>
									</li>
									<li class="dd-effect" style="opacity: 1; left: 0px;">
										<a href="{{ route('tentang.ad_art') }}">AD ART PKB 2014</a>
									</li>
									<li class="dd-effect" style="opacity: 1; left: 0px;">
										<a href="{{ route('tentang.makna_logo') }}">Makna Logo PKB</a>
									</li>
									<li class="dd-effect" style="opacity: 1; left: 0px;">
										<a href="{{ route('tentang.visi_misi') }}">Visi dan Misi</a>
									</li>
								</ul>
							</li>
							<li class="brk-nav__children brk-nav__drop-down-effect">
								<a href="{{ route('fraksi') }}">
									<span>Fraksi</span>
								</a>
							</li>
							<li class="brk-nav__children brk-nav__drop-down-effect">
								<a href="{{ route('galeri') }}">
									<span>Galeri</span>
                                </a>
                                <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat brk-location-screen-left">
									<li class="dd-effect" style="opacity: 1; left: 0px;">
										<a href="{{ route('galeri') }}">Album</a>
									</li>
									<li class="dd-effect" style="opacity: 1; left: 0px;">
										<a href="{{ route('galeri.video') }}">Video</a>
                                    </li>
									<li class="dd-effect" style="opacity: 1; left: 0px;">
										<a href="{{ route('galeri.instagram') }}">Instagram</a>
                                    </li>
                                </ul>
							</li>
							<li class="brk-nav__children brk-nav__drop-down-effect">
								<a href="{{ route('event') }}">
									<span>Event</span>
								</a>
							</li>
							<li class="brk-nav__children brk-nav__drop-down-effect">
								<a href="{{ route('QA') }}">
									<span>Tanya Jawab</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-2 align-self-lg-center d-none d-lg-block">
					<div class="text-center">
						<a href="/" class="brk-header__logo brk-header__item @@modifier">
							<img class="brk-header__logo-1 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/logo-dark.png') }} " alt="alt" style="max-width:65%">

							<img class="brk-header__logo-2 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/logo-dark.png') }} " alt="alt" style="max-width:65%">
						</a>
					</div>
				</div>
				<div class="col-lg-5 align-self-lg-stretch text-lg-right">
					<div class="brk-call-us brk-header__item">
						<a href="tel:18002323485" class="brk-call-us__number"><i class="fa fa-phone" aria-hidden="true"></i> 1 800 232 3485</a>
						<a href="tel:18002323485" class="brk-call-us__link"><i class="fa fa-phone" aria-hidden="true"></i></a>
					</div>
					<div class="brk-social-links brk-header__item brk-location-screen-right">
						<div class="brk-social-links__open">
							<i class="fa fa-share-alt"></i>
							<div class="brk-social-links__title">Bagikan situs web kami</div>
						</div>
						<div class="brk-social-links__block">
							<div class="brk-social-links__header">
								<span class="font__family-montserrat font__weight-bold font__size-18">Bagikan situs web kami</span>
							</div>
							<div class="brk-social-links__content">
								<a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
								<a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
								<a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
