@extends('layouts.header')

@section('title', 'Salud y Bienestar')

@section('titulo')
{{'Salud y Bienestar'}}
@stop 
@section('noticias-crud')

<main>
    <div class="container">
        <h2 class="fs-3"> Noticias de Salud y Bienestar añadidas recientemente</h2> <br>
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