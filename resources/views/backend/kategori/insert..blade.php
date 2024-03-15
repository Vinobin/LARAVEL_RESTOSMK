@extends('backend.back')

@section('admincontent')
<div class="row">
    <div class="col-4">
        <h1 class="text-center">login admin</h1>
        <form action="{{ url('admin/kategori') }}" method="post">
            @csrf
            @if (Session::has('pesan'))
                <div class="alert alert-danger">
                  {{ Session::get('pesan') }}
                </div>
            @endif
              <div class="mt-2">
                  <label class="form-label" for="">kategori </label>
                      <input  class="form-control" value="{{ old('kategori')}}" type="text" name="kategori" id="">
                      <span class="text-danger">
                          @error('kategori')
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