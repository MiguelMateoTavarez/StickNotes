<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!--Fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="row">
    <div class="col-sm">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}"><i class="fas fa-list-ul"></i> Ver notas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('create') }}"><i class="fas fa-pen"></i> Nota nueva</a>
            </li>
        </ul>
    </div>
</div>
    @yield('content')
</body>
</html>