@extends('layouts.app')

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
                                {{ __('Listado de Noticias') }}
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
                                        
										<th>Categoría</th>
										<th>Título</th>
										<th>Descripción</th>
										<th>Imagen</th>
                                        <th width="300px">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($noticias as $noticia)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            
											<td>   
                                            {{$noticia->categoria->nombre}}
                                            </td>
											<td>{{ $noticia->titulo }}</td>
											<td>{{ $noticia->descripcion }}</td>
											<td><img src="{{ asset('storage').'/'.$noticia->imagen }}" width="200"></td>

                                            <td>
                                                <form action="{{ route('noticias.destroy',$noticia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('noticias.show',$noticia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ url('/noticias/'.$noticia->id.'/edit') }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('¿Realmente quieres borrar esta noticia?');" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
@endsection
