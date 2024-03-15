<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <style type="text/css">
.cards:hover {
  box-shadow: 0 4px 10px rgba(0,0,0,0.16), 0 4px 10px rgba(0,0,0,0.23);
}
  </style>
</head>
<body>

<div class="card  cards card-2 text-center p-2" style="width: 90%; min-height:90%">
  <div class="card-body">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">@yield('heading')</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('seller.home') }}">Seller Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('seller.register') }}">Register Now</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
      </li>
    </ul>
  </div>
</nav>
@yield('content')

  </div>
</div>
</body>
</html>



