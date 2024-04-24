
@extends('layouts.header')
@section('title', 'prueba')
@section('titulo', 'prueba')

@section('noticias-crud')

@forelse ($noticias as $noticia)
    <div class="row align-items-lg-start px-4 py-3 col-md-10">
    <article>
        <h1 class="text-center-justify">{{$noticia->titulo}}</h1>
        <h2>{{$noticia->nombre}}</h2>
        <p>{{$noticia->descripcion}}</p>
        <figure>
            <img src="{{ asset('storage').'/'.$noticia->imagen }}" width="400">
        </figure>
    </article>
    </div> 
    @empty 
    <article>Sin noticias</article>
    @endforelse 
    


@stop 