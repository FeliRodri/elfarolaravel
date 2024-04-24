<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::select('categoria_id', $categorias , $noticia->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $noticia->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::textarea('descripcion', $noticia->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
             {{Form::label('imagen')}}
             <input type="file" name="imagen" id="imagen" value="{{ $noticia->imagen}}" required>
             {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        {{-- <div class="form-group">
            {{ Form::label('imagen') }} 
            {{ Form::file('imagen', $noticia->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? 'is-invalid' : ''), 'placeholder' => 'imagen']) }} 
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
            <img src="{{ asset('storage').'/'.$noticia->imagen }}" width="200">
        </div> --}}

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary my-1">{{ __('Submit') }}</button>
    </div>
</div>