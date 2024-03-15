<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN ADMIN APLIKASI RESTORAN</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
     <div class="container">
        <div class="row">
            <div class="col-4">
                <h1 class="text-center">login admin</h1>
                <form action="{{ url('/postlogin') }}" method="post">
                    @csrf
                    @if (Session::has('pesan'))
                        <div class="alert alert-danger">
                          {{ Session::get('pesan') }}
                        </div>
                    @endif
                      <div class="mt-2">
                          <label class="form-label" for="">email </label>
                              <input  class="form-control" value="{{ old('email')}}" type="email" name="email" id="">
                              <span class="text-danger">
                                  @error('email')
                                      {{ $message }}
                                  @enderror
                              </span>
                      </div>
                      <div class="mt-2">
                          <label class="form-label" for="">password </label>
                              <input class="form-control" type="password" name="password" id="">
                              <span class="text-danger">
                                  @error('password')
                                      {{ $message }}
                                  @enderror
                              </span>
                      </div>
                      <div class="mt-4">
                          <button class="btn btn-primary" type="submit">login</button>
                      </div>
                  </form>
            </div>
        </div>
     </div>





    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>