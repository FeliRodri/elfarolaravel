{{-- @extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Noticia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Noticia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('noticias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('noticia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection --}}

@extends('layouts.header')

@section('title', 'Publicar noticia')

<br>
@section('noticias-crud')
<main>
    <div class="container py-4">
            <h2>Publicar noticia</h2> <br>
                @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

            <form action="{{ url('noticias')}}" method="post">

                @csrf

                <div class="mb-3 row">
                    <label for="titulo" class="col-sm-2 col-form-label">Titulo de noticia:</label>
                    <div class="d-grid mt-3">
                        <textarea class="form-control" name="titulo" id="titulo" value="{{ old('titulo') }}" placeholder="Titulo de la noticia">
                        </textarea>
                </div>

                </div>
                <div class="mb-3 row">
                    <label for="seccion" class="col-sm-2 col-form-label">Categoria:</label>
                    <div class="col-sm-5">
                        <select name="seccion" id="seccion" class="form-select" required>
                            <option value="">Seleccionar categoria</option>
                            @foreach($secciones as $seccion)
                            <option value="{{ $seccion->id }}">{{ $seccion->categoriaNoticia}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Subtitulo:</label>
                    <div class="d-grid mt-3">
                        <textarea class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" value="{{ old('descripcion')}}" required>
                        </textarea>
                    </div>
                
                </div>
                <div class="mb-3 row">
                    <label for="imagen" class="col-sm-2 col-form-label">Imagen:</label>
                    <div class="d-grid mt-3">
                        <form action="{{ route('noticias.store')}}" method="post" enctype="multipart/form-data">
                        <input type="file" class="form-control" name="imagen" id="imagen" value="{{ old('imagen')}}">
                        </form>
                    </div>
                </div>
                
                <div class="d-grid col-5 mx-left">
                     <button class="btn btn-primary" type="submit">Publicar Noticia</button>
                </div> <br>
                <a href="{{ url('noticias')}}" class="btn btn-secondary">Regresar</a>
            </form>
    </div>
</main>
@stop