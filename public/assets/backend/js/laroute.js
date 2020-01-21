(function () {

    var laroute = (function () {

        var routes = {

            absolute: false,
            rootUrl: 'http://127.0.0.1:8000',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"settings\/wpapi\/auth","name":"ammonkc\/wpapi::jwt-auth","action":"Ammonkc\WpApi\Http\Controllers\Auth\JwtAuthController@showLoginForm"},{"host":null,"methods":["POST"],"uri":"settings\/wpapi\/auth","name":"ammonkc\/wpapi::login","action":"Ammonkc\WpApi\Http\Controllers\Auth\JwtAuthController@login"},{"host":null,"methods":["GET","HEAD"],"uri":"settings\/wpapi\/logout","name":"ammonkc\/wpapi::logout","action":"Ammonkc\WpApi\Http\Controllers\Auth\JwtAuthController@logout"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/user","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"admin","name":"admin.","action":"App\Http\Controllers\Admin\Auth\LoginController@showLoginForm"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/login","name":"admin.login","action":"App\Http\Controllers\Admin\Auth\LoginController@showLoginForm"},{"host":null,"methods":["POST"],"uri":"admin\/login","name":"admin.","action":"App\Http\Controllers\Admin\Auth\LoginController@login"},{"host":null,"methods":["POST"],"uri":"admin\/logout","name":"admin.logout","action":"App\Http\Controllers\Admin\Auth\LoginController@logout"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/password\/reset","name":"admin.password.request","action":"App\Http\Controllers\Admin\Auth\ForgotPasswordController@showLinkRequestForm"},{"host":null,"methods":["POST"],"uri":"admin\/password\/email","name":"admin.password.email","action":"App\Http\Controllers\Admin\Auth\ForgotPasswordController@sendResetLinkEmail"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/password\/reset\/{token}","name":"admin.password.reset","action":"App\Http\Controllers\Admin\Auth\ResetPasswordController@showResetForm"},{"host":null,"methods":["POST"],"uri":"admin\/password\/reset","name":"admin.password.update","action":"App\Http\Controllers\Admin\Auth\ResetPasswordController@reset"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/email\/verify","name":"admin.verification.notice","action":"App\Http\Controllers\Admin\Auth\VerificationController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/email\/verify\/{id}","name":"admin.verification.verify","action":"App\Http\Controllers\Admin\Auth\VerificationController@verify"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/email\/resend","name":"admin.verification.resend","action":"App\Http\Controllers\Admin\Auth\VerificationController@resend"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/beranda","name":"admin.beranda","action":"App\Http\Controllers\Admin\HomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/tanya-jawab\/pertanyaan","name":"admin.QA.pertanyaan","action":"App\Http\Controllers\Admin\QAController@pertanyaan"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/tanya-jawab\/dijawab","name":"admin.QA.dijawab","action":"App\Http\Controllers\Admin\QAController@dijawab"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/tanya-jawab\/jawab\/{id}","name":"admin.QA.jawab","action":"App\Http\Controllers\Admin\QAController@jawab"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/tanya-jawab\/jawab\/edit\/{id}","name":"admin.QA.edit","action":"App\Http\Controllers\Admin\QAController@edit"},{"host":null,"methods":["POST"],"uri":"admin\/tanya-jawab\/simpan","name":"admin.QA.simpan","action":"App\Http\Controllers\Admin\QAController@simpan"},{"host":null,"methods":["POST"],"uri":"admin\/tanya-jawab\/update","name":"admin.QA.update","action":"App\Http\Controllers\Admin\QAController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/tanya-jawab\/kategori","name":"admin.QA.kategori","action":"App\Http\Controllers\Admin\QACategoryController@index"},{"host":null,"methods":["POST"],"uri":"admin\/tanya-jawab\/kategori\/simpan","name":"admin.QA.kategori_simpan","action":"App\Http\Controllers\Admin\QACategoryController@simpan"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/tanya-jawab\/kategori\/edit\/{id}","name":"admin.QA.kategori_edit","action":"App\Http\Controllers\Admin\QACategoryController@edit"},{"host":null,"methods":["POST"],"uri":"admin\/tanya-jawab\/kategori\/update","name":"admin.QA.kategori_update","action":"App\Http\Controllers\Admin\QACategoryController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/tanya-jawab\/kategori\/hapus\/{id}","name":"admin.QA.kategori_hapus","action":"App\Http\Controllers\Admin\QACategoryController@hapus"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/galeri","name":"admin.galeri","action":"App\Http\Controllers\Admin\GaleriController@index"},{"host":null,"methods":["POST"],"uri":"admin\/galeri\/simpan","name":"admin.galeri.simpan","action":"App\Http\Controllers\Admin\GaleriController@simpan"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/galeri\/edit\/{id}","name":"admin.galeri.edit","action":"App\Http\Controllers\Admin\GaleriController@edit"},{"host":null,"methods":["POST"],"uri":"admin\/galeri\/update","name":"admin.galeri.update","action":"App\Http\Controllers\Admin\GaleriController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/galeri\/hapus\/{id}","name":"admin.galeri.hapus","action":"App\Http\Controllers\Admin\GaleriController@hapus"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/galeri\/foto\/{id}","name":"admin.galeri.foto","action":"App\Http\Controllers\Admin\GaleriFotoController@index"},{"host":null,"methods":["POST"],"uri":"admin\/galeri\/foto\/tambah","name":"admin.galeri.foto_tambah","action":"App\Http\Controllers\Admin\GaleriFotoController@file_upload"},{"host":null,"methods":["POST"],"uri":"admin\/galeri\/foto\/hapus","name":"admin.galeri.foto_hapus","action":"App\Http\Controllers\Admin\GaleriFotoController@hapus_file"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/video","name":"admin.video","action":"App\Http\Controllers\Admin\VideoController@index"},{"host":null,"methods":["POST"],"uri":"admin\/video\/simpan","name":"admin.video.simpan","action":"App\Http\Controllers\Admin\VideoController@simpan"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/video\/edit\/{id}","name":"admin.video.edit","action":"App\Http\Controllers\Admin\VideoController@edit"},{"host":null,"methods":["POST"],"uri":"admin\/video\/update","name":"admin.video.update","action":"App\Http\Controllers\Admin\VideoController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/video\/hapus\/{id}","name":"admin.video.hapus","action":"App\Http\Controllers\Admin\VideoController@hapus"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/event","name":"admin.event","action":"App\Http\Controllers\Admin\EventController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/event\/tambah","name":"admin.event.tambah","action":"App\Http\Controllers\Admin\EventController@tambah"},{"host":null,"methods":["POST"],"uri":"admin\/event\/simpan","name":"admin.event.simpan","action":"App\Http\Controllers\Admin\EventController@simpan"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/event\/edit\/{id}","name":"admin.event.edit","action":"App\Http\Controllers\Admin\EventController@edit"},{"host":null,"methods":["POST"],"uri":"admin\/event\/update","name":"admin.event.update","action":"App\Http\Controllers\Admin\EventController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/event\/hapus\/{id}","name":"admin.event.hapus","action":"App\Http\Controllers\Admin\EventController@hapus"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slider","name":"admin.slider","action":"App\Http\Controllers\Admin\SliderController@index"},{"host":null,"methods":["POST"],"uri":"admin\/slider\/simpan","name":"admin.slider.simpan","action":"App\Http\Controllers\Admin\SliderController@simpan"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slider\/edit\/{id}","name":"admin.slider.edit","action":"App\Http\Controllers\Admin\SliderController@edit"},{"host":null,"methods":["POST"],"uri":"admin\/slider\/update","name":"admin.slider.update","action":"App\Http\Controllers\Admin\SliderController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slider\/hapus\/{id}","name":"admin.slider.hapus","action":"App\Http\Controllers\Admin\SliderController@hapus"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/member","name":"admin.member","action":"App\Http\Controllers\Admin\PenggunaController@index"},{"host":null,"methods":["POST"],"uri":"admin\/member\/simpan","name":"admin.member.simpan","action":"App\Http\Controllers\Admin\PenggunaController@simpan"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/member\/edit\/{id}","name":"admin.member.edit","action":"App\Http\Controllers\Admin\PenggunaController@edit"},{"host":null,"methods":["POST"],"uri":"admin\/member\/update","name":"admin.member.update","action":"App\Http\Controllers\Admin\PenggunaController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/member\/hapus\/{id}","name":"admin.member.hapus","action":"App\Http\Controllers\Admin\PenggunaController@hapus"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/pengguna","name":"admin.pengguna","action":"App\Http\Controllers\Admin\AdminController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/pengguna\/tambah","name":"admin.pengguna.tambah","action":"App\Http\Controllers\Admin\AdminController@tambah"},{"host":null,"methods":["POST"],"uri":"admin\/pengguna\/simpan","name":"admin.pengguna.simpan","action":"App\Http\Controllers\Admin\AdminController@simpan"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/pengguna\/edit\/{id}","name":"admin.pengguna.edit","action":"App\Http\Controllers\Admin\AdminController@edit"},{"host":null,"methods":["POST"],"uri":"admin\/pengguna\/update","name":"admin.pengguna.update","action":"App\Http\Controllers\Admin\AdminController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/pengguna\/hapus\/{id}","name":"admin.pengguna.hapus","action":"App\Http\Controllers\Admin\AdminController@hapus"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/fraksi","name":"admin.fraksi","action":"App\Http\Controllers\Admin\FraksiController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/fraksi\/tambah","name":"admin.fraksi.tambah","action":"App\Http\Controllers\Admin\FraksiController@tambah"},{"host":null,"methods":["POST"],"uri":"admin\/fraksi\/simpan","name":"admin.fraksi.simpan","action":"App\Http\Controllers\Admin\FraksiController@simpan"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/fraksi\/edit\/{id}","name":"admin.fraksi.edit","action":"App\Http\Controllers\Admin\FraksiController@edit"},{"host":null,"methods":["POST"],"uri":"admin\/fraksi\/update","name":"admin.fraksi.update","action":"App\Http\Controllers\Admin\FraksiController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/fraksi\/hapus\/{id}","name":"admin.fraksi.hapus","action":"App\Http\Controllers\Admin\FraksiController@hapus"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/pengaturan","name":"admin.pengaturan","action":"App\Http\Controllers\Admin\PengaturanController@umum"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"admin\/pengaturan\/umum","name":"admin.pengaturan.umum","action":"App\Http\Controllers\Admin\PengaturanController@umum"},{"host":null,"methods":["GET","HEAD"],"uri":"coba","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"login","name":"login","action":"App\Http\Controllers\Auth\LoginController@showLoginForm"},{"host":null,"methods":["POST"],"uri":"login","name":null,"action":"App\Http\Controllers\Auth\LoginController@login"},{"host":null,"methods":["POST"],"uri":"logout","name":"logout","action":"App\Http\Controllers\Auth\LoginController@logout"},{"host":null,"methods":["GET","HEAD"],"uri":"register","name":"register","action":"App\Http\Controllers\Auth\RegisterController@showRegistrationForm"},{"host":null,"methods":["POST"],"uri":"register","name":null,"action":"App\Http\Controllers\Auth\RegisterController@register"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset","name":"password.request","action":"App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm"},{"host":null,"methods":["POST"],"uri":"password\/email","name":"password.email","action":"App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset\/{token}","name":"password.reset","action":"App\Http\Controllers\Auth\ResetPasswordController@showResetForm"},{"host":null,"methods":["POST"],"uri":"password\/reset","name":"password.update","action":"App\Http\Controllers\Auth\ResetPasswordController@reset"},{"host":null,"methods":["GET","HEAD"],"uri":"email\/verify","name":"verification.notice","action":"App\Http\Controllers\Auth\VerificationController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"email\/verify\/{id}","name":"verification.verify","action":"App\Http\Controllers\Auth\VerificationController@verify"},{"host":null,"methods":["GET","HEAD"],"uri":"email\/resend","name":"verification.resend","action":"App\Http\Controllers\Auth\VerificationController@resend"},{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":"home","action":"App\Http\Controllers\User\HomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"event","name":"event","action":"App\Http\Controllers\User\EventController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"event\/{slug}","name":"event.detail","action":"App\Http\Controllers\User\EventController@detail"},{"host":null,"methods":["GET","HEAD"],"uri":"tanya-jawab","name":"QA","action":"App\Http\Controllers\User\QnAController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"tanya-jawab\/buat-pertanyaan","name":"QA.tambah","action":"App\Http\Controllers\User\QnAController@tambah"},{"host":null,"methods":["POST"],"uri":"tanya-jawab\/simpan","name":"QA.simpan","action":"App\Http\Controllers\User\QnAController@simpan"},{"host":null,"methods":["GET","HEAD"],"uri":"tanya-jawab\/{slug}","name":"QA.detail","action":"App\Http\Controllers\User\QnAController@detail"},{"host":null,"methods":["GET","HEAD"],"uri":"tanya-jawab\/kategori\/{slug}","name":"QA.kategori","action":"App\Http\Controllers\User\QnAController@kategori"},{"host":null,"methods":["GET","HEAD"],"uri":"galeri","name":"galeri","action":"App\Http\Controllers\User\GaleriController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"galeri\/{slug}","name":"galeri.detail","action":"App\Http\Controllers\User\GaleriController@detail"},{"host":null,"methods":["GET","HEAD"],"uri":"galeri\/p\/instagram","name":"galeri.instagram","action":"App\Http\Controllers\User\GaleriController@instagram"},{"host":null,"methods":["GET","HEAD"],"uri":"galeri\/p\/video","name":"galeri.video","action":"App\Http\Controllers\User\GaleriController@video"},{"host":null,"methods":["GET","HEAD"],"uri":"tentang\/sejarah-pendirian-pkb","name":"tentang.sejarah","action":"App\Http\Controllers\User\TentangController@sejarah"},{"host":null,"methods":["GET","HEAD"],"uri":"tentang\/naskah-deklarasi","name":"tentang.naskah_deklarasi","action":"App\Http\Controllers\User\TentangController@NaskahDeklarasi"},{"host":null,"methods":["GET","HEAD"],"uri":"tentang\/ad-art-pkb-2014","name":"tentang.ad_art","action":"App\Http\Controllers\User\TentangController@ADARTPKB2014"},{"host":null,"methods":["GET","HEAD"],"uri":"tentang\/makna-logo-pkb","name":"tentang.makna_logo","action":"App\Http\Controllers\User\TentangController@MaknaLogoPKB"},{"host":null,"methods":["GET","HEAD"],"uri":"tentang\/visi-dan-misi","name":"tentang.visi_misi","action":"App\Http\Controllers\User\TentangController@VisidanMisi"},{"host":null,"methods":["GET","HEAD"],"uri":"tentang\/mabda-siyasi","name":"tentang.mabda_siyasi","action":"App\Http\Controllers\User\TentangController@MabdaSiyasi"},{"host":null,"methods":["GET","HEAD"],"uri":"fraksi","name":"fraksi","action":"App\Http\Controllers\User\FraksiController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"fraksi\/detail","name":"fraksi.detail","action":"App\Http\Controllers\User\FraksiController@detail"},{"host":null,"methods":["GET","HEAD"],"uri":"profile","name":"Profile","action":"App\Http\Controllers\User\Auth\ProfileController@index"},{"host":null,"methods":["POST"],"uri":"profile\/update","name":"profile.update","action":"App\Http\Controllers\User\Auth\ProfileController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"daftar","name":"register","action":"App\Http\Controllers\Auth\RegisterController@showRegistrationForm"},{"host":null,"methods":["POST"],"uri":"daftar","name":null,"action":"App\Http\Controllers\Auth\RegisterController@register"},{"host":null,"methods":["GET","HEAD"],"uri":"lupa","name":"password.request","action":"App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm"},{"host":null,"methods":["POST"],"uri":"lupa\/email","name":"lupa.email","action":"App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail"},{"host":null,"methods":["GET","HEAD"],"uri":"lupa\/{token}","name":"password.reset","action":"App\Http\Controllers\Auth\ResetPasswordController@showResetForm"},{"host":null,"methods":["POST"],"uri":"lupa","name":"password.update","action":"App\Http\Controllers\Auth\ResetPasswordController@reset"}],
            prefix: '',

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                if (this.absolute && this.isOtherHost(route)){
                    return "//" + route.host + "/" + uri + qs;
                }

                return this.getCorrectUrl(uri + qs);
            },

            isOtherHost: function (route){
                return route.host && route.host != window.location.hostname;
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = this.prefix + '/' + uri.replace(/^\/?/, '');

                if ( ! this.absolute) {
                    return url;
                }

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

