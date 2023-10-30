   
@extends('layouts.plantilla')

@section('titulo','registrar_libro')

@section('contenido')

        <title>REGISTRAR LIBRO</title>


        <h1 class="display-4 text-center text-danger mt-5" > REGISTRAR LIBRO </h1>
        
    <p></p>
    <p></p>

    <div class="container mt-5 col-md-8">

        @if(session()->has('confirmacion'))

        <div class="alert alert-secondary alert-dismissible fade show text-center" role="alert">
          <strong> {{ session('confirmacion') }} </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
  
        @endif 


    <div class="card">
        <div class="card-header text-primary fs-5 fw-semibold text-center">
            <form method="POST" action="/guardarLibro">
                @csrf

                <div class="mb-3">
      <label class="form-label">ISBN:</label>
      <input type="number" name="txtIsbn" class="form-control" value= "{{old('txtIsbn')}}">
      <p class="text-danger fst-italic"> {{$errors->first('txtIsbn')}} </p>
    </div>
    
        <label class="form-label">Titulo</label>
        <input type="text" name="txtTitulo" class="form-control" value= "{{old('txtTitulo')}}">
        <p class="text-danger fst-italic"> {{$errors->first('txtTitulo')}} </p>
      

        <label class="form-label">Autor</label>
        <input type="text" name="txtAutor" class="form-control" value= "{{old('txtAutor')}}">
        <p class="text-danger fst-italic"> {{$errors->first('txtAutor')}} </p>
     
      
        <label class="form-label">Páginas</label>
        <input type="number" name="txtPaginas" class="form-control" value= "{{old('txtPaginas')}}">
        <p class="text-danger fst-italic"> {{$errors->first('txtPaginas')}} </p>
      
      
        <label class="form-label">Editorial</label>
        <input type="text" name="txtEditorial" class="form-control" value= "{{old('txtEditorial')}}">
        <p class="text-danger fst-italic"> {{$errors->first('txtEditorial')}} </p>
      

        <label class="form-label">Email editorial</label>
        <input type="email" name="txtEmail" class="form-control" value= "{{old('txtEmail')}}">
        <p class="text-danger fst-italic"> {{$errors->first('txtEmail')}} </p>

    <div class="card-footer text-body-secondary">
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-outline-success" type="button">Guardar Libro</button>
        
      </div>
    </div>

    </div>
    </div>
</div>
   
    @endsection('contenido')
