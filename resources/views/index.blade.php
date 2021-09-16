@extends('layout._structs.struct')

@section('body')
class="d-flex h-100 text-center text-white bg-dark"
@endsection

@section('links')
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="./Cover Template · Bootstrap v5.0_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./Cover Template · Bootstrap v5.0_files/cover.css" rel="stylesheet">


@endsection

@section('content')
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0">Cover</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="">Login</a>
          <a class="nav-link" href="">Contact</a>
        </nav>
      </div>
    </header>
  
    <main class="px-3">
      <h1>Cover your page.</h1>
      <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
      <p class="lead">
        <a href="https://getbootstrap.com/docs/5.0/examples/cover/#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
      </p>
    </main>
  
    <footer class="mt-auto text-white-50">
      <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
    </footer>
  </div>
  
  
      
    
  
  <div id="volume-booster-visusalizer">
                      <div class="sound">
                          <div class="sound-icon"></div>
                          <div class="sound-wave sound-wave_one"></div>
                          <div class="sound-wave sound-wave_two"></div>
                          <div class="sound-wave sound-wave_three"></div>
                      </div>
                      <div class="segments-box">
                          <div data-range="1-20" class="segment"><span></span></div>
                          <div data-range="21-40" class="segment"><span></span></div>
                          <div data-range="41-60" class="segment"><span></span></div>
                          <div data-range="61-80" class="segment"><span></span></div>
                          <div data-range="81-100" class="segment"><span></span></div>
                      </div>
                  </div>

@endsection