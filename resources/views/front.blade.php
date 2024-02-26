<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APLIKASI RESTORAN</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
   <div class="container">
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a href="/"><img style="width:300px" src="{{ asset('gambar/logo.png') }}" alt=""></a>
                <ul class="navbar-nav gap-5">
                    <li class="nav-item">cart</li>
                    <li class="nav-item"><a href="{{ url('register') }}">register</a></li>
                    <li class="nav-item">email</li>
                    <li class="nav-item">login</li>
                    <li class="nav-item">logout</li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">
    <div class="col-2">
        <ul class="list-group">
            @foreach ($kategoris as $kategori)
            <li class="list-group-item"><a href="{{ url('show/'.$kategori->idkategori) }}">{{ $kategori->kategori }}"</a></li>
          
            @endforeach
    </ul>
    </div>
    </div>
    <div>
        kategori
    </div>
    <div class="col-8">
      @yield('content')
     
    </div>
   </div>
   <div>
    footer
   </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>