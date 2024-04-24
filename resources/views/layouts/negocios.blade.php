@extends('layouts.header')
@section('title', 'Negocios')
@section('titulo', 'Negocios')

@section('noticias-crud')

<main>
    <div class="container">
        <h2 class="fs-3"> Noticias de Negocios añadidas recientemente</h2> <br>
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
@section('noticias-negocios')
<section id="news-feed" class="container">
    <div class="row">
        <div class="left-col">
            <article>
                <h1>Casi 30 startups chilenas participaron de evento latinoamericano de emprendimiento
                </h1>
                <h2>Negocios</h2>
                <p>Fintech, edtch, agrotech, heathtech, biotech, y tecnologías transversales como inteligencia
                    artificial e IoT (Internet de las cosas) son algunas de las materias de las empresas
                    chilenas que participaron en StarCo, en Bogotá.</p>
                <figure>
                    <img src="./img/fintech.jpg" alt="">
                    <figcaption>
                        <span>Por Andronico Lucksic</span>
                    </figcaption>
                </figure>
            </article>
        </div>
        <div class="right-col">
            <article>
                <h2>Bci abre convocatoria para emprendedores y empresas que ofrezcan soluciones sostenibles
                </h2>
                <h3>Negocios</h3>
                <figure>
                    <img src="./img/bci.jpg" alt="">
                    <figcaption>
                        <span>Por Miguel Piñera</span>
                    </figcaption>
                </figure>
            </article>
            <article>
                <h2>
                    La científica chilena que lucha contra el cambio climático utilizando Inteligencia
                    Artificial
                </h2>
                <h3>Negocios</h3>
                <figure>
                    <img src="./img/cientifica.jpg" alt="">
                    <figcaption>
                        <span>Por Naria Oyanedel</span>
                    </figcaption>
                </figure>
            </article>
        </div>
    </div>

</section>
@stop