
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de Gestão">
    <meta name="author" content="Daniel dos Santos Carneiro">
    <meta name="generator" content="DaniSan 1.0">
    <title>Gestão 1.0</title>
    
@yield('styles')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="{{ asset('icons/apple-touch-icon.png') }}" sizes="180x180">
<link rel="icon" href="{{ asset('icons/favicon-32x32.png') }}" sizes="32x32" type="image/png">
<link rel="icon" href="{{ asset('icons/favicon-16x16.png') }}" sizes="16x16" type="image/png">
<link rel="manifest" href="{{ asset('icons/manifest.json') }}">
<link rel="mask-icon" href="{{ asset('icons/safari-pinned-tab.svg') }}" color="#712cf9">
<link rel="icon" href="{{ asset('icons/favicon.ico') }}">
<meta name="theme-color" content="#712cf9">


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

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Nome da Compania</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">SAIR</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
   @include('components.navigate')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('content')
    </main>
  </div>
</div>


    @yield('scripts')
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
      <script src="js/dashboard.js"></script>
      <script src="js/handleDeleteProduct.js"></script>
  </body>
</html>
