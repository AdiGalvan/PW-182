   
@extends('layouts.plantilla')

@section('titulo','Formulario')

@section('contenido')

<h3 class="display-1 text-center text-danger mt-5" > FORMULARIO </h3>

<div class="container mt-5 col-md-8">

  @if(session()->has('confirmacion'))



  <div class="alert alert-secondary alert-dismissible fade show text-center" role="alert">
    <strong> {{ session('confirmacion') }} </strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  @endif 

  @if($errors->any())
  @foreach ($errors->all() as $error)
  <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    <strong> {{ $error }} </strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  @endforeach

  @endif

<div class="card" >
  <div class="card-header text-primary fs-5 fw-semibold text-center">
    Introduce tus recuerdos aquí...
  </div>

  <div class="card-body">
  <form method="POST" action="/guardarRecuerdo">
    @csrf <!--geenra un toquen para procesar la peticion por metodo POST-->

  <div class="mb-3">
    <label class="form-label">Titulo: </label>
    <input type="text" name="txtTitulo" class="form-control" value= "{{old('txtTitulo')}}">
   <p class="text-danger fst-italic"> {{$errors->first('txtTitulo')}} </p>
  </div>

  <div class="mb-3">
  <label class="form-label">Recuerdos: </label>
    <input type="text" name="txtRecuedo" class="form-control" value="{{old('txtRecuerdo')}}">
    <p class="text-warning fst-italic">  {{$errors->first('txtRecuerdo')}} </p>
  </div>

  
  </div>

  <div class="card-footer text-body-secondary">
  <div class="d-grid gap-2">
  <button type="submit" class="btn btn-outline-success" type="button">Guardar Recuerdo</button>
  
</div>
</form>
  </div>

</div><!--div tarjeta-->

</div> <!--div container-->

<!-- shift + alt + a : para comentarios -->


@endsection('contenido')

