@extends('frontend.layouts.master')
@section('title', $title)
@section('content')
@extends('frontend.layouts.breadcrumb')
	
	<div class="container mt-80">
		<div class="row">
			<div class="col-12 col-lg-8 col-xl-9 order-xs-2 order-lg-1">
				<div class="brs-posts-container brs-posts-container_right-divider">
					<div class="mb-60">
						<div>
							<a href="{{ url('/QnA') }}" class="font__size-md-22 font__size-20 line-height-1-5 font__weight-bold"><i class="fa fa-arrow-circle-left mt-1 mr-3"></i>Kembali Ke Diskusi</a>	
						</div>
						<a href="{{ url('/QnA_pertanyaan') }}" class="btn btn-inside-out btn-lg btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered" data-brk-library="component__button">
							<i class="fa fa-comments" aria-hidden="true"></i>
							<span class="before">Buat Pertanyaan</span><span class="text">Buat Pertanyaan</span><span class="after">Buat Pertanyaan</span>
						</a>
						
						<h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60">Ini Judul Topik</h3>
						<div>
							<div class="brk-reply-item" data-brk-library="component__blog_page_css">
								<a href="#" class="brk-reply-item__user">
									<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/55x55_1.jpg') }}" alt="alt" class="lazyload">
								</a>
								<div class="brk-reply-item__content">
									<div class="d-sm-flex justify-content-sm-between">
										<div class="brk-reply-item__header">
											<a href="#" class="brk-reply-item__header-like">
												<i class="fas fa-reply"></i>
												<span>Balas Pertanyaan</span>
											</a>
											<a href="#" class="brk-reply-item__header-reply">
												<i class="far fa-clock"></i>
												<span class="font__weight-bold">10:00. Aug 12, 17</span>
											</a>
										</div>
										<a href="#" class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">Rebeca Oliva</a>
									</div>
									<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
										Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
									</div>
									<div class="d-flex align-items-start mt-20">
										<span class="font-dark-color-2 font__Family-montserrat font__size-15 line-height-1-5 font__weight-semibold text-uppercase mr-10 brk-post-full__fixed-width">Bagikan:</span>
										<div class="brk-social-links brk-social-links_bordered-post brk-dark-font-color font__size-13" data-brk-library="component__social_links">
											<a href="#" class="brk-social-links__item">
												<i class="fab fa-facebook-f"></i>
											</a>
											<a href="#" class="brk-social-links__item">
												<i class="fab fa-twitter"></i>
											</a>
											<a href="#" class="brk-social-links__item">
												<i class="fab fa-google-plus-g"></i>
											</a>
											<a href="#" class="brk-social-links__item">
												<i class="fab fa-pinterest"></i>
											</a>
											<a href="#" class="brk-social-links__item">
												<i class="fab fa-linkedin-in"></i>
											</a>
											<a href="#" class="brk-social-links__item">
												<i class="fab fa-vk"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="ml-100">
								<div class="brk-reply-item" data-brk-library="component__blog_page_css">
									<a href="#" class="brk-reply-item__user">
										<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/55x55_1.jpg') }}" alt="alt" class="lazyload">
									</a>
									<div class="brk-reply-item__content">
										<div class="d-sm-flex justify-content-sm-between">
											<div class="brk-reply-item__header">
												<a href="#" class="brk-reply-item__header-like">
													<i class="fas fa-reply"></i>
													<span>Balas Pertanyaan</span>
												</a>
												<a class="brk-reply-item__header-reply">
													<i class="far fa-clock"></i>
													<span class="font__weight-bold">10:00. Aug 12, 17</span>
												</a>
											</div>
											<a href="#" class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">Hatake Kakashi</a>
										</div>
										<div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
											tolong foto profilenya jangan ngikutin saya
										</div>
									</div>
							</div>
							</div>

							</div>
						</div>
						<div class="brk-reply mt-40 mb-60" data-brk-library="component__forum_post">
							<h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60">Jawab Pertanyaan</h3>
							<form action="#" class="brk-reply__form brk-form-strict" data-brk-library="component__form">
								<div class="row">
									<div class="col-12">
										<textarea name="textarea" placeholder="Some text"></textarea>
									</div>
								</div>
								<button class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold btn-icon-right m-0 mt-25" data-brk-library="component__button">
									<i class="fas fa-long-arrow-alt-right icon-inside"></i>
									<span class="before">Kirim Jawaban</span><span class="text">Click Me</span><span class="after">Kirim Jawaban</span>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@stop