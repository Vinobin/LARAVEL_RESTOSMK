<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin page  APLIKASI RESTORAN</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
       <div class="mt-4">
         <nav>
            <div class="container-fluid">
                <h1>admin page</h1>
                <ul class="navbar-nav gap-5">
                    <li class="nav-item">{{ Auth::user()->email }}</li>
                    <li class="nav-item">level :{{ Auth ::user()->level }}</li>
                    <li class="nav-item"><a href="{{ url('admin/logout') }}">logout</a></li>
                </ul>
            </div>
         </nav>
        <div class="row">
             <div class="col-10">
           <ul class="list-group">
            @if (Auth::user()->level=='admin')
            <li class="list-group-item"><a href="">user</a></li>
            @endif
            @if (Auth::user()->level=='kasir')
            <li class="list-group-item"><a href="">order</a></li>
            <li class="list-group-item"><a href="">order detail</a></li>
            @endif
            @if (Auth::user()->level=='manager')
            <li class="list-group-item"><a href="{{ url('admin/kategori') }}">kategori</a></li>
            <li class="list-group-item"><a href="{{ url('admin/menu') }}">menu</a></li>
            <li class="list-group-item"><a href="">pelanggan</a></li>
            <li class="list-group-item"><a href="{{ url('admin/order') }}">order</a></li>
            <li class="list-group-item"><a href="{{ url('admin/orderdetail') }}">order detail</a></li>
            @endif
           
           </ul>
             </div>
             <div class="col-4">
      @yield('admincontent')
             </div>
        </div>
       </div>
       <div class="bg-light mt5">
        <p class="text-center">@smk.com</p>
        </div>
    </div>




    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>