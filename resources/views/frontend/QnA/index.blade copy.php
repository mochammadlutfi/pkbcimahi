@extends('frontend.layouts.master')
@section('title', $title)
@section('content')
<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload"
    data-bg="{{ asset('assets/frontend/img/1920x258_1.jpg') }}" data-brk-library="component__breadcrumbs_css">
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
									<a href="{{ url('/QnA') }}">QnA</a>
								</li>
							</ol>
						</div>
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
                    @if(Auth::guard('web')->check())
                    <a href="{{ route('QA.tambah') }}"
                        class="btn btn-inside-out btn-lg btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered"
                        data-brk-library="component__button">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <span class="before">Buat Pertanyaan</span><span class="text">Buat Pertanyaan</span><span
                            class="after">Buat Pertanyaan</span>
                    </a>
                    @else
                    <a href="{{ route('login') }}"
                        class="btn btn-inside-out btn-lg btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered"
                        data-brk-library="component__button">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <span class="before">Buat Pertanyaan</span><span class="text">Buat Pertanyaan</span><span
                            class="after">Buat Pertanyaan</span>
                    </a>
                    @endif
                    <h3
                        class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60 mb-10">
                        Diskusi Dengan Fraksi Terbaru</h3>

                    @foreach($pertanyaan as $p)
                    <div>
                        <div class="brk-reply-item" data-brk-library="component__blog_page_css">
                            <a href="#" class="brk-reply-item__user">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="{{ asset('assets/frontend/img/55x55_1.jpg') }}" alt="alt"
                                    class="lazyload">
                            </a>
                            <div class="brk-reply-item__content">
                                <a href="{{ route('QA.detail', $p->slug) }}"
                                    class="font__size-md-20 font__size-18 line-height-1-5 font__weight-bold">{{ $p->judul }}</a>
                                <div class="d-sm-flex justify-content-sm-between">
                                    <div class="brk-reply-item__header">
                                        <a class="brk-reply-item__header-like">
                                            <i class="far fa-comments"></i>
                                            <span>0</span>
                                        </a>
                                        <a class="brk-reply-item__header-reply">
                                            <i class="far fa-clock"></i>
                                            <span class="font__weight-bold">{{ $p->created_at }}</span>
                                        </a>
                                    </div>
                                    <span class="font__size-md-12 line-height-1-5">Oleh: {{ $p->user->name }}</span>
                                </div>
                                <div
                                    class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
                                    {{ $p->deskripsi }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-12">
    <section class="mb-50 mt-50">
        <div class="brk-pagination brk-pagination-one font__family-open-sans" data-brk-library="component__pagination">
            <nav class="navigation pagination" role="navigation">
                <h2 class="screen-reader-text">Навигация по записям</h2>
                <div class="nav-links">
                    <a class="prev page-numbers" href="#">Предыдущая страница</a>
                    <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница
                        </span>1</a>
                    <span class="page-numbers current"><span class="meta-nav screen-reader-text">Страница
                        </span>2</span>
                    <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница
                        </span>3</a>
                    <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница
                        </span>4</a>
                    <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница
                        </span>5</a>
                    <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница
                        </span>2</a>
                    <span class="page-numbers dots">&hellip;</span>
                    <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">Страница
                        </span>24</a>
                    <a class="next page-numbers" href="#">Следующая страница</a>
                </div>
            </nav>
        </div>
    </section>
</div>

@stop
