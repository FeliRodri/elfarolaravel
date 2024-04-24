@extends('layouts.header')
@section('title','Contacto')
@section('enviaremail')
<div class="container">
    <div class="abs-center" id="enviarEmail">
        <h1 class="titulo-email">Enviar e-mail</h1>
        <form class="contact-form border p-4 form" action="contactform" method="post">
            <div class="form-group">
                <input type="text" name="nombre" placeholder="Nombre completo">
                <input type="text" name="correo" placeholder="Tu e-mail">
                <input type="text" name="asunto" placeholder="Asunto">
            </div>
            <br>
            <div class="form-group">
                <textarea name="mensaje" cols="30" rows="7" placeholder="Mensaje"></textarea>
            </div>
            <div class="form-group">
                <button type="enviar" name="enviar">Enviar Mail</button>
            </div>
            <a href="{{ url('elfaro')}}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>
</div>
@stop
