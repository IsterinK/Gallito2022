<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body{
            background-color: #111111;
            color: #fff;
        }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar navbar-dark bg-dark shadow-sm">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://lh3.googleusercontent.com/fife/AAWUweX7o5qeYSQI0eBpEIFRYqzzIwtq6Ygyj82i0JrCuvognFSrYdJXEsGTd8zzqsqtzeaWxGC3b8hkrmhan44AkapgWrlxBNogeIrb9DTeYjTwpJVV6RH8YH7ZXUgeowOYYPDC1CJPR24tyOuRm47q-23S-0Ed0-7L1XKbNwjBsfRxU9S4DjFpexbgEcvE4meYO_Z0i7s5NdOqcH02Vdtq_j8in5n_nbqZyJz8ZRVhFZyEKFHY6c373WIJ3E-zqJ2W6x4iIKDwE9yiunANH3dOshmHm-TD49t4aehOf9Vfkt1Q1smEJQF3wW8owjX_wgA6B1TAEe_nztrBspS8LuT2OPUszdLbHKr-zazTmqcF2WoJdHB3L0w9GwdKf07havWPJGpM7gNwCVP9rvWFCLiEy14-xxL3JwMQMWB3Z50h2UU9zhpDg0jIHITDkxH56xm2De98_fk1QgDIiuPVGaZCmMyG6GTdcwauWP7J6zT91tnR0-Ek489F117V2kgKGnisqQwg5iqnv4zyJwOncvhS1NuCj_tHAWE3KmwKrdAekKcuoa4ai_8uNV8EuB5vLjbLtC3g_ZIvMHL1IhetseiOs07ZAFGhB90uQLXFA6teaQnmUt6cedLITcRarXAGBTQdAZUMM8sqtJJrDGcFaBmufccoN4vxWBbs0alX_0WFo9s8Z_vgdWANA9Dlb_DsEdws6RNo7JoZUY1Ky4HeVpyA1EhZzrFPoEq7M0E=w1868-h903" width="60" height="60">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ "Publicaciones" }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.posts', Auth()->User()) }}">
                                        Ver publicaciones
                                    </a>

                                    <a class="dropdown-item" href="{{ route('posts.create') }}">
                                        Crear publicación
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        </div>
    </div>


    <footer class="text-center text-lg-start bg-dark text-muted">
        <section class="">
            <div class="container text-center text-md-start mt-4">
                <div class="row mt-1">
                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">
                        <center>
                            <br>
                            <p>
                                Red social dedicada a las personas pertenecientes a la UAM.
                            </p>

                            <p>
                                Desarrollado por: Manuel Gustavo Patiño Calderon, Esteban Patiño Gaviria
                            </p>

                            <p>
                                2022
                            </p>
                        </center>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>
