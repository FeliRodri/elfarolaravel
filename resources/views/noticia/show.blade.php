@extends('layouts.app')

@section('template_title')
    {{ $noticia->name ?? "{{ __('Show') Noticia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Noticia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('noticias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $noticia->categoria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $noticia->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $noticia->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img src="{{ asset('storage').'/'.$noticia->imagen }}" width="400">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
