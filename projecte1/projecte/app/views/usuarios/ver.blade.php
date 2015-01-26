@extends('layouts.master')
 
@section('sidebar')
     @parent
    <div class="page-header">
    <h1> Información de usuario</h1>
    </div>
     
     
@stop
 
@section('content')
        
        <h1>
            Usuario {{$usuario->id}}
      
        </h1>
        
        {{ $usuario->nombre .' '.$usuario->apellido }}
        
        <br/>
        
        {{ $usuario->created_at}}
        
        <br/>
        
        {{ HTML::link('usuarios', 'Volver'); }}
@stop