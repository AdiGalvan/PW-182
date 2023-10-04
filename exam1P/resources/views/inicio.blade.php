
@extends('layouts.plantilla_examen')

@section('titulo,'Inicio')// si se define de esta forma se cierra automaticamente, no es necsesario cerrar

@section('contenido')

<h1 class="display-1 text-center text-warning" > INICIO </h1>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">EXAMEN</h5>
    <p class="card-text">CONTENIDO DEL EXAMEN .</p>
    <a href="#" class="btn btn-primary"></a>
    <a href="#" class="btn btn-primary"></a>
    <a href="#" class="btn btn-primary"></a>
  </div>
</div>

@endsection('contenido')
