@extends('layouts.header')

<br>
@section('noticias-crud')
<main>
    <div class="container py-4">
        <h1>La noticia ha sido publicada correctamente</h1>
        <a href="{{ url('noticias/show')}}" class="btn btn-secondary">Regresar</a>
    </div>
</main>
@stop