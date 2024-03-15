@extends('front')
@section('content')
    <div class="row">
        <div class="col-6">
            <form action="{{ url('/postregister') }}" method="post">
                <div class="mt-2">
                    <label class="form-label" for="">pelanggan</label>
                        <input class="form-control" value="{{ old('pelanggan')}}" type="text" name="pelanggan" id="">
                        <span class="text-danger">
                            @error('pelanggan')
                                {{ $message }}
                            @enderror
                        </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">alamat</label>
                        <input class="form-control" value="{{ old('alamat')}}" type="text" name="alamat" id="">
                        <span class="text-danger">
                            @error('alamat')
                                {{ $message }}
                            @enderror
                        </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">telepon </label>
                        <input class="form-control" value="{{ old('telepon')}}" type="text" name="telepon" id="">
                        <span class="text-danger">
                            @error('telepon')
                                {{ $message }}
                            @enderror
                        </span>
                </div>
                <div class="mt-2">
                    <label class="form-label" for="">jenis kelamin </label>
                        <select class="form-select" name="jeniskelamin" id="">
                            <option value="l">L</option>
                            <option value="p" selected>P</option>
                        </select>
                </div>
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
                    <button class="btn btn-primary" type="submit">register</button>
                </div>
            </form>
        </div>
    </div>
@endsection