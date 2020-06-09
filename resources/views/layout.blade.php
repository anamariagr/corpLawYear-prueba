<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="icon" type="image/png"  href="{{asset("img/favicon_corp.png")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("css/app.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("css/styles.css")}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        <header class="navbar navcorp">
            <a href="/" class="icon_corplaw"></a>
            <div class="navbar-nav-scroll">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}#consul">Consulta en línea</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}#services">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('lawyers')}}">Abogados</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('customers')}}">Clientes </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}#contact">Contacto</a></li>
                </ul>
            </div>
            <div>
                @guest
                    <button class="btn_8-4 btn_white "  id="login_buttom"  onclick="showLoginContainer()">Ingresar</button>
                    <button class="btn_8-4 btn_red" id="register_buttom" onclick="showRegisterContainer()" >Registrarme</button>
                @endguest
                @auth
                <div class="row">
                    <div class="col-6 pr-0">
                        <div class="icon_user">
                            <img src="{{asset('img/icon_user.png')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="dropdown">
                            <div class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{auth()->user()->name}}
                           </div>
                           <p>usuario</p>
                             <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Cerrar sesión</button>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
                @endauth
            </div>
        </header>
        <div class="container_fluid">
            <div class="row text-center register login_container" style="display: none">
                <div class="col-4">
                    <img src="{{asset('img/login.png')}}">
                </div>
                <div class="col-3 robot_font">
                    <div class="row">
                        <div class="col-12 item_text_login">
                            <h3 class="">Antes de continuar</h3>
                            <h4>por favor, inicia sesión</h4>
                            <div class="col-4 line_red_login"></div>
                            <div class="col-11 text_login_continue text-center m-auto">
                                <p class="helvetica-light">Ingresa tu información para iniciar sesión
                                    o inicia sesión por:
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 ">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row form-group mt-5 pt-5">
                            <div class="col-12 mb-2">
                                <input placeholder="Correo electrónico" id="email_1" type="email_3" class="input_complate_name form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 mb-2">
                                <input placeholder="Contraseña" id="password_2" type="password" class="input_complate_name form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="row form-group">
                            @if (Route::has('password.request'))
                            <a class="lost_password_text btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Olvidé mi contraseña') }}
                            </a>
                            @endif

                            <div class="col-12">
                                <button type="submit"  class="btn_10 btn_red ml-0 mt-3" onclick="openSlider('register', 1)">
                                    {{ __('Ingresar') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row text-center register_container register " style="display: none">
                <div class="col-4">
                    <img src="{{asset('img/login.png')}}">
                </div>
                <div class="col-3 robot_font">
                    <div class="row">
                        <div class="col-12 item_text_login">
                            <h3 class="">Regístrate para acceder</h3>
                            <h4>a nuestros servicios en línea.</h4>
                            <div class="col-4 line_red_login"></div>
                            <div class="col-11 text_login_continue text-center m-auto">
                                <p class="helvetica-light">Ingresa tu información para registrarte
                                    o regístrate por:
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row form_regiter">
                            <div class="col-12">
                                <p class="font_incio">Ir al Inicio de sesión</p>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="row">
                                    <div class="col-12">
                                        <input placeholder="Email para guardar conversación" id="email_2" type="email" class="input_email form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 mb-2">
                                <input placeholder="Nombre completo" id="name" type="text" class="input_complate_name form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 mb-2">
                                <div class="row input_phone_pass">
                                    <div class="col-2"></div>
                                    <div class="col-5">
                                        <input placeholder="Número celular" id="number" type="text" class=" number_input form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-5">
                                        <input placeholder="Contraseña" id="password_1" type="password" class="password form-control"  name="password" required autocomplete="new-password">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 text_options conditions">
                                <div class="d-lg-flex">
                                    <input id="check_2" type="checkbox" name="check" value="1">
                                    <p class="mt-2">Acepto términos y condiciones</p>
                                </div>
                                <div class="d-lg-flex">
                                    <input id="check" type="checkbox" name="check" value="1">
                                    <p class="mt-2">Recibir notificaciones cuando recibo respuesta</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 btn_register">
                                <button type="submit" class="btn_10 btn_red ml-0 mt-3">
                                    {{ __('Registrarme') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @yield("content")
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <ul class="text_info_footer">
                            <li>
                                <a href="/">
                                    <div  class="icon_corplaw_footer"></div>
                                </a>
                            </li>
                            <li><a href="">Bogotá: Cll 94 # 00 - 00 Oficina 401</a></li>
                            <li><a href="">000 000 0000.   </a><span><a href="">0    000 000</a></span></li>
                            <li><a href="">gerencia@corplawyers.co</a></li>
                        </ul>
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col-5">
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="item_one_straight">
                                            <li><a href="/services/derecho_informatico">Derecho informático</a></li>
                                            <li><a href="/services/derecho_laboral">Derecho laboral</a></li>
                                            <li><a href="/services/derecho_comercial">Derecho comercial</a></li>
                                            <li><a href="/services/derecho_corporativo">Derecho corporativo</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="ul_propied">
                                            <li><a href="/services/propiedad_intelectual">Propiedad intelectual</a></li>
                                            <li><a href="/services/protección_consumidor">Protección al consumidor</a></li>
                                            <li><a href="/services/protección_de_datos_personales">Protección de datos personales</a></li>
                                            <li><a href="/services/protección_competencia_empresarial">Protección a la competencia empresarial</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="row">
                                    <div class="col-4">
                                        <ul class="ul_prosess">
                                            <li><a href="/services/procesos_insolvencia">Procesos de insolvencia</a></li>
                                            <li><a href="/services/derecho_constitucional">Derecho constitucional</a></li>
                                            <li><a href="/services/derecho_administrativo">Derecho administrativo</a></li>
                                            <li><a href="/services/derecho_disciplinario">Derecho disciplinario</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <ul class="ul_straight">
                                            <li><a href="/services/derecho_tributario">Derecho tributario</a></li>
                                            <li><a href="/services/derecho_penal">Derecho penal</a></li>
                                            <li><a href="/services/derecho_civil">Derecho civil</a></li>
                                            <li><a href="/services/derecho_inmobiliario">Derecho inmobiliario</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <ul class="ul_procedure">
                                            <li><a href="/services/trámites_notariales">Trámites notariales</a></li>
                                            <li><a href="/services/resolución_de_conflictos">Resolución de conflictos</a></li>
                                            <li><a href="/services/compliance">Compliance</a></li>
                                            <li><a href="/responsabilidad_social">Responsabilidad social (probono)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center social">
                    <div>
                        <p class="text-center">Síguenos en nuestras redes</p>
                    </div>
                    <a href="#"><img src="{{asset("/img/face.png")}}"></a>
                    <a href="#"><img src="{{asset("/img/TwitterLogo.png")}}"></a>
                    <a href="#"><img src="{{asset("/img/Link.png")}}"></a>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center color_footer_year">
                    <div class="col-12 d-lg-flex space_evenly">
                        <a href="#" class="text-center">
                            Términos y condiciones
                        </a>
                        <a href="#" class="text-center">
                            Políticas de cookies
                        </a>
                        <a href="#" class="text-center">
                            2020 © Copyright Corplawyers
                        </a>
                        <a  href="#"class="text-center">
                            Políticas de privacidad
                        </a>
                        <a  href="#"class="text-center">
                            Autorización tratamiento de datos
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="js/slick.min.js"></script>
        <script src="{{asset("js/swiper.min.js")}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script>
                                    $(".section_header").click(function (element) {

                                        var target = $(element.target)

                                        if (target.attr("id") != "login_buttom") {

                                            if ($(".login_container").is(":visible")) {
                                                $(".login_container").toggle();
                                            }
                                        }

                                        if (target.attr("id") != "register_buttom") {
                                            if ($(".register_container").is(":visible")) {
                                                $(".register_container").toggle();
                                            }

                                        }

                                        console.log(target.parent("register_container"));
                                    })


                                    function showLoginContainer() {
                                        $(".login_container").toggle();
                                        if ($(".register_container").is(":visible")) {
                                            $(".register_container").toggle();
                                            $(".navcorp").addClass("white");
                                        } else {
                                            $(".navcorp").toggleClass("white");
                                        }



                                    }

                                    function showRegisterContainer() {
                                        $(".register_container").toggle();

                                        if ($(".login_container").is(":visible")) {
                                            $(".login_container").toggle();
                                            $(".navcorp").addClass("white");
                                        } else {
                                            $(".navcorp").toggleClass("white");
                                        }



                                    }



        </script>
    </body>
</html>