@extends('layouts.master')


@section('sidebar')
    @parent
    : Lista de Coches
@stop

@section('content')
<h1>
    Coches
</h1>

<ul>
  @foreach($coches as $carro)
  <!-- Equivalente en Blade a <?php //foreach ($usuarios as $usuario) ?> -->
    <li >
       {{ HTML::link( 'coches/'.$carro->id , $carro->modelo.' '.$carro->placa ) }}
    </li>
    <!-- Equivalente en Blade a <?php //echo $usuario->nombre.' '.$usuario->apellido ?> -->
  @endforeach 
</ul>
@stop

<!-- La extensión es blade.php, esto quiere decir que el archivo puede usar el sistema de plantillas Blade y las sentencias PHP.-->

