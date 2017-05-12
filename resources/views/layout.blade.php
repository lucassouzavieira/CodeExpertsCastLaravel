<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('pagetitle')</title>
  <!-- Fonts -->
  <link href="{{ url('css/app.css') }}" rel="stylesheet" type="text/css">
  <!-- Styles -->
  <style>
  html, body {
    background-color: #fff;
    color: #636b6f;
    font-weight: 500;
    height: 100vh;
    margin: 0;
  }

  .links li{
    display: inline;
  }

  li > a {
    text-decoration: none;
    font-size: 16px;
  }

  .navbar-right {
    margin-right: 1%;
  }
  </style>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <p>CodeExperts Cast</p>
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li><a href="{{ url('/home') }}">Home</a><li>
        @else
        <li><a href="{{ url('/login') }}">Entrar</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="{{ url('/register') }}">Registrar</a><li>
        @endif
      </ul>
    </div>
  </nav>
  <div class="content">
    @yield('content')
  </div>
</body>
</html>
