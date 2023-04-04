<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel 9 + Bootstrap Template</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>

  @include('partials._navbar')



  <main>

    {{-- @foreach($music as $music)

    <div class="card" style="width: 18rem;">
      <img src="{{$music->poster}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$music->title}}</h5>
        <p class="card-text">{{$music->author}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    @endforeach --}}




    <div class="container d-flex flex-column jumbotron align-items-center justify-content-center text-center">
      <img class="my-1" src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
      <h1 class="my-1">
        Laravel 9
        <span class="fs-6 fw-light text-muted"> - Bootstrap Template</span>
      </h1>

    </div>
  </main>
</body>

</html>
