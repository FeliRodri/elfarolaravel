@extends('layouts.header')
@section('title', 'Deportes')
@section('titulo', 'Deportes')
@section('noticias-crud')


<main>
    <div class="container">
        <h2 class="fs-3"> Noticias de Deportes añadidas recientemente</h2> <br>
            <a href="{{ url('noticias/create')}}" class="btn btn-primary btn-sm">Nueva Noticia</a> 
    </div>
   
    <section id="news-feed" class="container py-4">
        <div class="row">
            @forelse ($noticias as $noticia)
            <div class="col-md-6 align-content-lg-start">
                        <article>
                            <h1 class="text-center-justify">{{$noticia->titulo}}</h1>
                            <h2>{{$noticia->nombre}}</h2>
                            <p class="text-justify-center text-sm-start text-break">{{$noticia->descripcion}}</p>
                            <figure>
                                <img src="{{ asset('storage').'/'.$noticia->imagen }}" width="300" class="img-fluid">
                            </figure>
                        </article>
            </div>
            @empty 
                <article>Sin noticias</article>
                @endforelse 
        </div> 
        
                 
    </section> 
    </main> 
@stop
@section('noticias-deportes')


        <section id="news-feed" class="container">
            <div class="row">
                <div class="left-col">
                    <article>
                        <h1>Así sería la Nueva Bombonera en la Isla Demarchi con capacidad para más de 100 mil personas
                        </h1>
                        <h2>Deportes</h2>
                        <p>El proyecto fue presentado por un sector de la oposición liderado por Jorge Reale</p>
                        <figure>
                            <img src="./img/estadio.jpg" alt="">
                            <figcaption>
                                <span>Por Julio Martinez</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="right-col">
                    <article>
                        <h2>Mi cena con el verdadero Rocky Balboa antes de la pelea que inspiró a Stallone a filmar la
                            película
                        </h2>
                        <h3>Deportes</h3>
                        <figure>
                            <img src="./img/boxeo.jpg" alt="">
                            <figcaption>
                                <span>Por Andres Iniesta</span>
                            </figcaption>
                        </figure>
                    </article>
                    <article>
                        <h2>
                            La drástica decisión que tomó Joana Sanz tras su separación de Dani Alves: “Afecta mi salud
                            mental”
                        </h2>
                        <h3>Deportes</h3>
                        <figure>
                            <img src="./img/danialves.jpg" alt="">
                            <figcaption>
                                <span>Por Ivan Zamorano</span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>

        </section>
@stop











