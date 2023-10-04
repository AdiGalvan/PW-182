<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>@yield('titulo')</title>
</head>
<body>
    

<div class="row">
  <div class="col-4">
    <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
      <a class="p-1 rounded" href="/">Inicio</a>
      <a class="p-1 rounded" href="/vista1">Vista1</a>
      <a class="p-1 rounded" href="/vista2">Vista2</a>
      <a class="p-1 rounded" href="/vista3">Vista3</a>
    
    </div>
  </div>
  <div class="col-8">
    <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
      <h4 id="/">INICIO</h4>
      <p></p>
      <h4 id="/vista1">VISTA 1</h4>
      <p></p>
      <h4 id="/vista2">VISTA 2</h4>
      <p></p>
      <h4 id="/vista3">VISTA 3</h4>
      
      
      <p></p>
    </div>
  </div>
</div>
    
   

@yield('contenido')
    
</body>
</html>