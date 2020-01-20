@extends('backend.layouts.master')

@section('content')
<div class="content">
    <nav class="breadcrumb bg-white push">
        <a class="breadcrumb-item" href="{{ route('admin.beranda') }}">Home</a>
        <span class="breadcrumb-item">Pengaturan</span>
        <span class="breadcrumb-item active">Umum</span>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Pengaturan Umum</h3>
                </div>
                <div class="block-content">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <form id="form_general" method="post" action = "" onsubmit="return false;">
                                <div class="form-group">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-4" for="app_name">Nama Situs</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="app_name" name="app_name" placeholder="Masukan Nama Situs" value="{{ settings()->get('app_name') }}">
                                            <div class="invalid-feedback" id="error-app_name">Invalid feedback</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4" for="app_url">URL Situs</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="field-app_url" name="app_url" placeholder="Masukan URL Situs" value="{{ settings()->get('app_url') }}">
                                            <div class="invalid-feedback" id="error-app_url">Invalid feedback</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4" for="app_description">Deskripsi Situs</label>
                                        <div class="col-8">
                                            <textarea name="app_description" class="form-control" id="app_description" rows="5">{{ settings()->get('app_description') }}</textarea>
                                            <div class="invalid-feedback" id="error-app_description">Invalid feedback</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4" for="app_logo">Logo</label>
                                        <div class="col-8">
                                            <div class="row mb-10">
                                                <div class="col-5">
                                                    <img id="logo_preview" src="{{ asset(settings()->get('app_logo')) }}" width="100%"/>
                                                </div>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input js-custom-file-input-enabled" id="field-app_logo" name="app_logo" data-toggle="custom-file-input">
                                                <label class="custom-file-label label-logo" for="field-app_logo">Pilih File..</label>
                                                <div class="invalid-feedback" id="error-app_logo">Invalid feedback</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4" for="app_description">Favicon</label>
                                        <div class="col-8">
                                            <div class="row mb-10">
                                                <div class="col-1">
                                                    <img id="icon_preview" src="{{ asset(settings()->get('app_favicon')) }}" width="100%"/>
                                                </div>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input js-custom-file-input-enabled" id="field-app_favicon" name="app_favicon" data-toggle="custom-file-input">
                                                <label class="custom-file-label label-favicon" for="field-app_favicon">Pilih File..</label>
                                                <div class="invalid-feedback" id="error-app_favicon">Invalid feedback</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4" for="social_facebook">Facebook Page URL</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="social_facebook" name="social_facebook" placeholder="Masukan Facebook URL" value="{{ settings()->get('social_facebook') }}">
                                            <div class="invalid-feedback" id="error-social_facebook">Invalid feedback</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4" for="social_instagram">Instagram URL</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="social_instagram" name="social_instagram" placeholder="Masukan Instagram URL" value="{{ settings()->get('social_instagram') }}">
                                            <div class="invalid-feedback" id="error-social_instagram">Invalid feedback</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4" for="social_youtube">Youtube Channel URL</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="social_youtube" name="social_youtube" placeholder="Masukan Youtube Channel URL" value="{{ settings()->get('social_youtube') }}">
                                            <div class="invalid-feedback" id="error-social_youtube">Invalid feedback</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4" for="social_twitter">Twitter URL</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="social_twitter" name="social_twitter" placeholder="Masukan Twitter URL" value="{{ settings()->get('social_twitter') }}">
                                            <div class="invalid-feedback" id="error-social_twitter">Invalid feedback</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4" for="social_linkedin">LinkedIn URL</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="social_linkedin" name="social_linkedin" placeholder="Masukan Linkedin URL" value="{{ settings()->get('social_linkedin') }}">
                                            <div class="invalid-feedback" id="error-social_linkedin">Invalid feedback</div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-8  ml-auto">
                                            <button type="submit" class="btn btn-alt-primary btn-block"><i class="si si-paper-plane"></i>Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
    <!-- END Update Product -->
</div>
@stop
@push('scripts')
<script src="{{ asset('assets/backend/js/pages/pengaturan.js') }}"></script>
@endpush
