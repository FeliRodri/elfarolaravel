<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/71c70bdb80.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ asset('elfaro')}}">El Faro</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ asset('elfaro')}}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ asset('deportes')}}">Deportes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ asset('negocios')}}">Negocios</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Más Noticias
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ asset('documentales')}}">Documentales</a></li>
                                    <li><a class="dropdown-item" href="{{ asset('politica')}}">Politica</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{asset('saludBienestar')}}">Salud y Bienestar</a></li>
                                    <li><a class="dropdown-item" href="{{ asset('ultimasNoticias')}}">Últimas Noticias</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('enviaremail')}}">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('noticias')}}">Redacción</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li> -->
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="Search" placeholder="Buscar Noticias..."
                                aria-label="Search">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            </button>
                        </form>

                    </div>

                </div>
            </nav>

        </div>

        <div class="container">

            <div class="logo">
                <span class="titulo">El Faro</span>
                <div class="today-date">
                    <div class="clock">
                        <p class="fecha"></p>
                        <div class="line"></div>
                        <p class="time"></p>
                    </div>
                </div>
                <img src="{{ asset ('img/1608.m00.i125.n003.P.c25.350574899 Lighthouse on ocean or sea beach cartoon background vector illustration.jpg')}}"
                    width="350px" height="450px" class="rounded mx-auto d-block" alt="...">

                <div class="icons-socialnetwork">
                    <a href="#" class="btn-primary">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="btn-info">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="btn-dark">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="btn-success">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="#" class="btn-danger">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>

            </div>

        </div>




    </header>
    <main>
        <div class="container">
        <h1>@yield('titulo')</h1>
        </div>

        @yield('noticias-deportes')
        @yield('noticias-negocios')
        @yield('noticias-crud')
        @yield('enviaremail')

        
    </main>

    <footer>
        <div class="topbar">
            <img
                src="{{ asset ('img/1608.m00.i125.n003.P.c25.350574899 Lighthouse on ocean or sea beach cartoon background vector illustration.jpg')}}">
            <div class="socialnetwork">
                <a href="#">
                    <i class="fa-brands fa-square-facebook"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-square-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-square-instagram"></i>
                </a>
                <a href="#">
                    <i class="fa-solid fa-square-rss"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-square-youtube"></i>
                </a>
            </div>

        </div>
        <div class="sitemap">
            <div class="col">
                <ul>
                    <li>
                        <span>El Faro</span>
                    </li>
                    <li>
                        <a href="#">Chile</a>
                    </li>
                    <li>
                        <a href="#">América</a>
                    </li>
                    <li>
                        <a href="#">México</a>
                    </li>
                    <li>
                        <a href="#">Australia</a>
                    </li>
                    <li>
                        <a href="#">Europa</a>
                    </li>
                    <li>
                        <a href="#">RRSS</a>
                    </li>
                    <li>
                        <a href="#">Últimas Noticias</a>
                    </li>

                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <span>Contáctenos</span>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                    <li>
                        <a href="#">Redacción</a>
                    </li>
                    <li>
                        <a href="#">Contacto Comercial</a>
                    </li>
                    <li>
                        <a href="#">Media Kit</a>
                    </li>
                    <li>
                        <a href="#">Empleo</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <span>Redes Sociales</span>
                    </li>
                    <li>
                        <a href="#">Facebook</a>
                    </li>
                    <li>
                        <a href="#">Twitter</a>
                    </li>
                    <li>
                        <a href="#">Instagram</a>
                    </li>
                    <li>
                        <a href="#">YouTube</a>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <span>Servicios</span>
                    </li>
                    <li>
                        <a href="#">Términos y Condiciones</a>
                    </li>
                    <li>
                        <a href="#">Politicas de Privacidad</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sitemap-mobile">
            <div class="row">
                <div class="col">
                    <ul>
                        <li>
                            <span>El Faro</span>
                        </li>
                        <li>
                            <a href="#">Chile</a>
                        </li>
                        <li>
                            <a href="#">América</a>
                        </li>
                        <li>
                            <a href="#">México</a>
                        </li>
                        <li>
                            <a href="#">Australia</a>
                        </li>
                        <li>
                            <a href="#">Europa</a>
                        </li>
                        <li>
                            <a href="#">RRSS</a>
                        </li>
                        <li>
                            <a href="#">Últimas Noticias</a>
                        </li>

                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>
                            <span>Contáctenos</span>
                        </li>
                        <li>
                            <a href="#">Contacto</a>
                        </li>
                        <li>
                            <a href="#">Redacción</a>
                        </li>
                        <li>
                            <a href="#">Contacto Comercial</a>
                        </li>
                        <li>
                            <a href="#">Media Kit</a>
                        </li>
                        <li>
                            <a href="#">Empleo</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul>
                        <li>
                            <span>Redes Sociales</span>
                        </li>
                        <li>
                            <a href="#">Facebook</a>
                        </li>
                        <li>
                            <a href="#">Twitter</a>
                        </li>
                        <li>
                            <a href="#">Instagram</a>
                        </li>
                        <li>
                            <a href="#">YouTube</a>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>
                            <span>Servicios</span>
                        </li>
                        <li>
                            <a href="#">Términos y Condiciones</a>
                        </li>
                        <li>
                            <a href="#">Politicas de Privacidad</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="copyright">
            Todos los derechos reservados © 2023 El Faro.
        </div>
        <div class="socialnetwork-mobile">
            <a href="#">
                <i class="fa-brands fa-square-facebook"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-square-twitter"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-square-instagram"></i>
            </a>
            <a href="#">
                <i class="fa-solid fa-square-rss"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-square-youtube"></i>
            </a>
        </div>
    </footer>
    <script type="text/javascript" src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

<script src="{{ asset ('js/index.js')}}"></script>

</html>