@extends('layouts.master')

@section('sidebar')
    @parent
    : Lista de Usuarios
@stop

@section('content')
<h1>
    Usuarios 
</h1>

{{HTML::link('usuarios/nuevo', 'Crear usuario');}}

<ul>
  @foreach($usuarios as $usuario)
  <!-- Equivalente en Blade a <?php //foreach ($usuarios as $usuario) ?> -->
    <li >
       {{ HTML::link( 'usuarios/'.$usuario->id , $usuario->nombre.' '.$usuario->apellido ) }}
    </li>
    <!-- Equivalente en Blade a <?php //echo $usuario->nombre.' '.$usuario->apellido ?> -->
  @endforeach 
</ul>
@stop

<!-- La extensión es blade.php, esto quiere decir que el archivo puede usar el sistema de plantillas Blade y las sentencias PHP.-->
