<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        @include('backend.layouts.meta')

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{ asset('assets/backend/css/codebase.min.css') }}">
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-body-dark bg-pattern" style="background-image: url('assets/backend/media/various/bg-pattern-inverse.png');">
                    <div class="row mx-0 justify-content-center">
                        <div class="hero-static col-lg-6 col-xl-4">
                            <div class="content content-full overflow-hidden">
                                <!-- Header -->
                                <div class="py-30 text-center">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('assets/img/logo.png') }}" width="30%"/>
                                    </a>
                                </div>

                                <form class="js-validation-signin" action="{{ route('admin.login') }}" method="post">
                                    @csrf
                                    <div class="block block-rounded block-shadow">
                                        <div class="block-header block-default">
                                            <h3 class="block-title">Selamat Datang Kembali!</h3>
                                        </div>
                                        <div class="block-content">
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="login-username">Username / Email</label>
                                                    <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="login-username" name="email">
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="login-password">Password</label>
                                                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="login-password" name="password">
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-6 d-sm-flex align-items-center push">
                                                    <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                                        <input type="checkbox" class="custom-control-input" id="login-remember-me" name="remember">
                                                        <label class="custom-control-label" for="login-remember-me">Ingat Saya</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-sm-right push">

                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-12 text-sm-right push">
                                                    <button type="submit" class="btn btn-alt-primary btn-block">
                                                        <i class="si si-login mr-10"></i> Masuk
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <script src="{{ asset('assets/backend/js/codebase.core.min.js') }}"></script>
        <script src="{{ asset('assets/backend/js/codebase.app.min.js') }}"></script>

        <!-- Page JS Plugins -->
        <script src="{{ asset('assets/backend/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

        <!-- Page JS Code -->
        <script src="{{ asset('assets/backend/js/pages/op_auth_signin.min.js') }}"></script>

    </body>
</html>
