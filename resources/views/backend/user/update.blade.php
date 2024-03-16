@extends('backend.back')

@section('admincontent')
<div class="row">
    <div class="col-4">
        <h1 class="text-center">login admin</h1>
        <form action="{{ url('admin/user'.$user->id) }}" method="post">
            @csrf
            @method('PUT')
           
              <div class="mt-2">
                  <label class="form-label" for="">password </label>
                      <input  class="form-control" type="password" name="password" id="">
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