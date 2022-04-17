<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/993b00a956.js" crossorigin="anonymous"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{'frontend/css/style.css'}}" />
    

    <title>Antonije</title>
  </head>
  <body>
    <!-- nav -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <nav class="navbar navbar-expand-sm fixed-top">
      <a href="" class="navbar-brand ms-auto"><img src="{{asset('slike/logo.png')}}" alt=""></a>
      <article class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('frontend.gallery')}}">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </article>
    </nav>

    <!-- header -->
    <header id="home">
      <article class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12 text-center text-white"></div>
        </div>
      </article>
    </header>