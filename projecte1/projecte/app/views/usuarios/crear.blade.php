@extends('layouts.master')

@section('sidebar')
<!--@parent-->
<div class="page-header">
    <h1>Formulario de <small>usuario</small></h1>
</div>
@stop

@section('content')
<h1>
    Crear Usuario
</h1>
{{ Form::open(array('url' => 'usuarios/crear')) }}
<div class="form-group" id='priority'>
    {{Form::label('nombre', 'Nombre')}}
    {{Form::text('nombre', '')}}
</div>
<div class="form-group" id='priority'>
    {{Form::label('apellido', 'Apellido')}}
    {{Form::text('apellido', '')}}
</div>
{{Form::submit('Guardar')}}
{{ Form::close() }}


{{ HTML::link('usuarios', 'Volver'); }}
@stop