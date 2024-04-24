{{-- @extends('layouts.header')

@section('template_title')
    Noticia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Noticia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('noticias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Titulo</th>
										<th>Seccion</th>
										<th>Descripcion</th>
										<th>Imagen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($noticias as $noticia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $noticia->titulo }}</td>
											<td>{{ $noticia->seccion }}</td>
											<td>{{ $noticia->descripcion }}</td>
											<td>{{ $noticia->imagen }}</td>

                                            <td>
                                                <form action="{{ route('noticias.destroy',$noticia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('noticias.show',$noticia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('noticias.edit',$noticia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $noticias->links() !!}
            </div>
        </div>
    </div>
@endsection --}}
@extends('layouts.header')

@section('title', 'Listado de Noticias')

@section('noticias-crud')

<main>
    <div class="container py-4">
        <h2>Listado de Noticias</h2> <br>
        <div class="card" style="width: 22rem;">
            <img src="{{ asset('img/boxeo.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Deportes</h5>
              <p class="card-text">Mi cena con el verdadero Rocky Balboa antes de la pelea que inspiró a Stallone a filmar la película</p>
              <a href="{{ asset('deportes')}}" class="btn btn-primary">Seccion de Deportes</a>
            </div>
        </div>
        <div class="container px-3 py-3">
            <h3>Crear una nueva noticia</h3>
            <a href="{{ url('noticias/create')}}" class="btn btn-primary btn-sm">Nueva Noticia</a>
        </div>
        
    </div>

    
        
</main>
@stop
