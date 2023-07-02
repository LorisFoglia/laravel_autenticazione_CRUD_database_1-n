<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Progetto X</title>    
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>


<x-navbar />

@if(session('message'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{session('message')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif


<div class="myContainer">
    {{ $slot }}
</div>

   
</body>
</html>