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

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bootstrap Music</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Album</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Artisti
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Italiani</a></li>
              <li><a class="dropdown-item" href="#">Stranieri</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Collaborazioni</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Nome brano o album" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form>
      </div>
    </div>
  </nav>




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
