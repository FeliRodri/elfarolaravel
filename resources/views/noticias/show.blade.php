@extends('layouts.header')

@section('noticias-crud')

<main>
    <div class="container py-4">
        <h2>Aqui se mostrarian las noticias en el futuro</h2> 
        <a href="{{ url('noticias')}}" class="btn btn-secondary">Regresar</a>
    </div>
        
</main>
@stop

{{-- @section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Noticia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('noticias') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $noticia->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Seccion:</strong>
                            {{ $noticia->seccion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $noticia->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $noticia->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection --}}
