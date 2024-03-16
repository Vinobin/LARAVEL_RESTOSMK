@extends('backend.back')

@section('admincontent')
<div class="row">
    <div class="col-4">
        <h1 class="text-center">login admin</h1>
        <form action="{{ url('admin/user') }}" method="post">
            @csrf
           
              <div class="mt-2">
                  <label class="form-label" for="">nama </label>
                      <input  class="form-control" value="{{ old('name')}}" type="text" name="name" id="">
                      <span class="text-danger">
                          @error('name')
                              {{ $message }}
                          @enderror
                      </span>
              </div>
              <div class="mt-2">
                  <label class="form-label" for="">level </label>
                    <select class="form-select" name="level" id=""></select>
                      <option value="manager">manager</option>
                      <option value="kasir">kasir</option>
                      <option value="admin">admin</option>
              </div>
                  <label class="form-label" for="">email </label>
                      <input  class="form-control" value="{{ old('email')}}" type="text" name="email" id="">
                      <span class="text-danger">
                          @error('email')
                              {{ $message }}
                          @enderror
                      </span>
                  <label class="form-label" for="">password </label>
                      <input  class="form-control" value="{{ old('password')}}" type="password" name="password" id="">
                      <span class="text-danger">
                          @error('password')
                              {{ $message }}
                          @enderror
                      </span>
              </div>
             
              <div class="mt-4">
                  <button class="btn btn-primary" type="submit">simpan</button>
              </div>
          </form>
    </div>
</div>
</div>
@endsection