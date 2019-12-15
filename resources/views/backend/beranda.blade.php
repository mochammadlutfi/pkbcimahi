@extends('backend.layouts.master')


@section('content')
<div class="content">
    <div class="row invisible" data-toggle="appear">
        <!-- Row #1 -->
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-people fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="{{ $user }}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Data Pengguna</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600"><span data-toggle="countTo" data-speed="1000" data-to="">0</span></div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Pertanyaan Baru</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-envelope-open fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Total Pertanyaan</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-calendar fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="{{ $acara }}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Total Acara</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row invisible" data-toggle="appear">
        <!-- Row #2 -->
        <div class="col-md-12">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">
                        Statistik Tanya Jawab <small>Minggu Ini</small>
                    </h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="pull-all">
                        {!! $chart->container() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #2 -->
    </div>
</div>
@stop
@push('scripts')
<script src="{{ asset('assets/backend/js/plugins/chartjs/Chart.bundle.min.js') }}"></script>
{!! $chart->script() !!}
@endpush

