<!DOCTYPE html>
<html>

<head>
    <title>El Faro</title>
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
                    <a class="navbar-brand" href="elfaro">El Faro</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#inicio">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Portada | Secciones
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#documentales">Documentales</a></li>
                                    <li><a class="dropdown-item" href="#politica">Politica</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#saludBienestar">Salud y Bienestar</a></li>
                                    <li><a class="dropdown-item" href="#ultimasNoticias">Últimas Noticias</a></li>
                                    <li><a class="dropdown-item" href="#enviarEmail">Contacto</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Categorias de Noticias
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ asset('deportes')}}">Deportes</a></li>
                                    <li><a class="dropdown-item" href="{{ asset('documentales')}}">Documentales</a></li>
                                    <li>
                                    <li><a class="dropdown-item" href="{{ asset('negocios')}}">Negocios</a></li>
                                    <li>   
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ asset('saludBienestar')}}">Salud y Bienestar</a></li>
                                    <li><a class="dropdown-item" href="{{ asset('politica')}}">Politica</a></li>
                                    <li><a class="dropdown-item" href="{{ asset('ultimasNoticias')}}">Últimas Noticias</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                    <li><a class="dropdown-item">@auth
                                        {{Auth::user()->name}} 
                                     @endauth</a>
                                    </li>
                                </ul>
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

            <div class="logo" id="inicio">
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
        <br>
        <div class="row container">
            <div class="col-lg-10">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset ('img/boxeo.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Pelicula de Boxeo</h5>
                                <p>Mi cena con el verdadero Rocky Balboa antes de la pelea que inspiró a Stallone a
                                    filmar la película.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset ('img/cientifica.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Cientifica Chilena</h5>
                                <p>La científica chilena que lucha contra el cambio climático utilizando Inteligencia
                                    Artificial.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset ('img/bci.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Emprendedores</h5>
                                <p>Bci abre convocatoria para emprendedores y empresas que ofrezcan soluciones
                                    sostenibles</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
        <section id="news-feed" class="container">
            <div class="row">
                <div class="left-col">
                    <article>
                        <h1>El papa Francisco preside la misa del Domingo de Ramos desde la Plaza de San Pedro en el
                            Vaticano </h1>
                        <h2>Internacional</h2>
                        <p>Como en otras ocasiones y debido a que se desplaza en silla de ruedas por sus dolores de
                            rodilla, el Sumo Pontífice encabeza la ceremonia sentado en el centro del altar. Celebra la
                            eucaristía
                            Leonardo Sandri, vicedecano del colegio cardenalicio</p>
                        <figure>
                            <img src="{{ asset ('img/news.jpg')}}" alt="">
                            <figcaption>
                                <span>Por Felipe Rodriguez</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="right-col">
                    <article>
                        <h2>La ONU alertó sobre el impacto del narcotráfico en América Latina: "Es la peor región a
                            nivel de homicidios"
                        </h2>
                        <h3>Internacional</h3>
                        <figure>
                            <img src="{{ asset ('img/news2.jpg')}}" alt="">
                            <figcaption>
                                <span>Por Andres Asenjo</span>
                            </figcaption>
                        </figure>
                    </article>
                    <article>
                        <h2>
                            De la Gran Purga soviética que eliminó a miles de leninistas al interrogante de cuántos
                            chavistas sacrificará Nicolás Maduro
                        </h2>
                        <h3>Internacional</h3>
                        <figure>
                            <img src="{{ asset('img/news3.jpg')}}" alt="">
                            <figcaption>
                                <span>Por Pilar Sordo</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="row" id="documentales">
                <h1>Documentales</h1>
                <div class="col">
                    <article>
                        <h2>A medio siglo del rescate "milagroso" de los Andes que conmovió al mundo. Todo sobre el
                            avión Uruguayo.
                        </h2>
                        <h3>Documentales</h3>
                        <figure>
                            <img src="{{ asset('img/rescate-andes-e.jpg')}}" alt="">
                            <figcaption>
                                <span>Por Cecilia Castro</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col">
                    <article>
                        <h2>‘Cuando las aguas se juntan’: un documental sobre la respuesta de las mujeres colombianas a
                            la guerra"
                        </h2>
                        <h3>Documentales</h3>
                        <figure>
                            <img src="{{ asset('img/mujeresaguas.jpg')}}" alt="">
                            <figcaption>
                                <span>Por Jaime Toro</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>

            <div class="row" id="politica">
                <h1>Politica</h1>
                <div class="col">
                    <article>
                        <h2>Ricardo Lagos invita a Natalia Piergentili a “fraterno desayuno” tras respaldo a Ravinet y
                            molestias desde el PPD
                        </h2>
                        <h3>Politica</h3>
                        <figure>
                            <img src="{{ asset('img/ricardolagos.jpg')}}" alt="">
                            <figcaption>
                                <span>Por Camila Vallejos</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col">
                    <article>
                        <h2>Cámara aprueba proyecto que agiliza procesos administrativos de expulsión de migrantes
                            irregulares
                        </h2>
                        <h3>Politica</h3>
                        <figure>
                            <img src="{{ asset('img/camaradiputador.jpg')}}" alt="">
                            <figcaption>
                                <span>Por Gabriel Boric</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col">
                    <article>
                        <h2>Comisión de Seguridad de la Cámara despacha a Sala proyecto sobre “criterio Valencia”
                        </h2>
                        <h3>Politica</h3>
                        <figure>
                            <img src="{{ asset('img/criteriovalencia.jpg')}}" alt="">
                            <figcaption>
                                <span>Por Arnaldo Sepúlveda</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>

            <div class="row" id="saludBienestar">
                <h1>Salud y Bienestar</h1>
                <div class="col">
                    <article>
                        <h2>Estudio asegura que situaciones de estrés aumentan la edad biológica: cambios podrían ser
                            reversibles
                        </h2>
                        <h3>Salud y Bienestar</h3>
                        <figure>
                            <img src="{{ asset('img/studentstress-g74f050781_640.png')}}" alt="">
                            <figcaption>
                                <span>Por Javiera Palta</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col">
                    <article>
                        <h2>Llega a Chile la primera jeringa que no provoca dolor y no necesita agujas: ¿Cómo funciona?
                        </h2>
                        <h3>Salud y Bienestar</h3>
                        <figure>
                            <img src="{{ asset('img/vacuna-vaccination-concept-ge224379ed_640.jpg')}}" alt="">
                            <figcaption>
                                <span>Por Michelle Lopez</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col">
                    <article>
                        <h2>¿Por qué jamás debes mezclar ciertos medicamentos con cerveza artesanal?: estas pastillas
                            debes evitar
                        </h2>
                        <h3>Salud y Bienestar</h3>
                        <figure>
                            <img src="{{ asset('img/cerveza-beer-g52e97fbaa_640.jpg')}}" alt="">
                            <figcaption>
                                <span>Por Bernardita Villa</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="last-news" id="ultimasNoticias">

                <h1>Últimas Noticias</h1>
            </div>
            <div class="noticias" id="news">

            </div>
            <div class="row">
                <div class="video">
                    <h1> Los humanos como seres sociales | Sana Mente 2023 | Capítulo 4</h1>
                    <iframe width="839" height="472" src="https://www.youtube.com/embed/4ka151nvFxk"
                        title="Los humanos como seres sociales | Sana Mente 2023 | Capítulo 4" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="audio">
                <h1>Esta es la presentacion del Periodico Online "El Faro"</h1>
                <audio src="{{ asset('audio/periodico-elfaro.mp3')}}" controls></audio>
            </div>
            <div class="container">
                <div class="abs-center" id="enviarEmail">
                    <h1 class="titulo-email">Enviar e-mail</h1>
                    <form class="contact-form border p-4 form" action="contactform.php" method="post">
                        <div class="form-group">
                            <input type="text" name="nombre" placeholder="Nombre completo">
                            <input type="text" name="correo" placeholder="Tu e-mail">
                            <input type="text" name="asunto" placeholder="Asunto">
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="mensaje" cols="30" rows="7" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="enviar" name="enviar">Enviar Mail</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section id="news-feed-mobile">
            <a href="#">
                <article>
                    <h1>El papa Francisco preside la misa del Domingo de Ramos desde la Plaza de San Pedro en el
                        Vaticano</h1>
                    <figure>
                        <img src="{{ asset ('img/news.jpg')}}" />
                        <figcaption>
                            <span>Por Felipe Rodriguez</span>
                        </figcaption>
                    </figure>
                </article>
            </a>
            <a href="#">
                <article>
                    <h1>La ONU alertó sobre el impacto del narcotráfico en América Latina: "Es la peor región a nivel de
                        homicidios"</h1>
                    <figure>
                        <img src="{{ asset ('img/news2.jpg')}}" />
                        <figcaption>
                            <span>Por Andres Asenjo</span>
                        </figcaption>
                    </figure>
                </article>
            </a>
            <a href="#">
                <article>
                    <h1>De la Gran Purga soviética que eliminó a miles de leninistas al interrogante de cuántos
                        chavistas sacrificará Nicolás Maduro</h1>
                    <figure>
                        <img src="{{ asset('img/news3.jpg')}}" />
                        <figcaption>
                            <span>Por Andres Asenjo</span>
                        </figcaption>
                    </figure>
                </article>
                <article>
                    <h1>¿Por qué jamás debes mezclar ciertos medicamentos con cerveza artesanal?: estas pastillas
                        debes evitar
                    </h1>
                    <figure>
                        <img src="{{ asset('img/cerveza-beer-g52e97fbaa_640.jpg')}}" alt="">
                        <figcaption>
                            <span>Por Bernardita Villa</span>
                        </figcaption>
                    </figure>
                </article>
            </a>
            <a href="#">
                <div class="video">
                    <h1> Los humanos como seres sociales | Sana Mente 2023 | Capítulo 4</h1>
                    <iframe width="415" height="350" src="https://www.youtube.com/embed/4ka151nvFxk"
                        title="Los humanos como seres sociales | Sana Mente 2023 | Capítulo 4" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </a>
            <div class="container">
                <div class="abs-center" id="enviarEmail">
                    <h1 class="titulo-email">Enviar e-mail</h1>
                    <form class="contact-form border p-4 form" action="contactform.php" method="post">
                        <div class="form-group">
                            <input type="text" name="nombre" placeholder="Nombre completo">
                            <input type="text" name="correo" placeholder="Tu e-mail">
                            <input type="text" name="asunto" placeholder="Asunto">
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="mensaje" cols="30" rows="7" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="enviar" name="enviar">Enviar Mail</button>
                        </div>
                    </form>
                </div>
            </div>

        </section>
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
<script src="{{ asset ('js/ajax.js')}}"></script>

</html>