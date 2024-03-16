@extends('backend.back')

@section('admincontent')
<div><h2>insert data</h2></div>
<div class="row">
    <div class="col-4">
        <h1 class="text-center">login admin</h1>
        <form action="{{ url('admin/menu') }}" method="post" enctype="multipart/form-data">
            @csrf
            <select class="form-select" name="idkategori" >
              
          
            @foreach ($kategoris as $kategori )
                <option value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
            @endforeach
        </select>
              <div class="mt-2">
                  <label class="form-label" for="">menu </label>
                      <input  class="form-control" type="text" name="menu" id="">
                      <span class="text-danger">
                          @error('menu')
                              {{ $message }}
                          @enderror
                      </span>
              </div>
              <div class="mt-2">
                  <label class="form-label" for="">deskripsi </label>
                      <input  class="form-control" type="text" name="deskripsi" id="">
                      <span class="text-danger">
                          @error('deskripsi')
                              {{ $message }}
                          @enderror
                      </span>
              </div>
              <div class="mt-2">
                  <label class="form-label" for="">harga </label>
                      <input  class="form-control" type="text" name="harga" id="">
                      <span class="text-danger">
                          @error('harga')
                              {{ $message }}
                          @enderror
                      </span>
              </div>
            
            <div class="mt-2">
                <label class="form-label" for="">gambar </label>
                    <input  class="form-control" type="file" name="gambar" id="">
                    <span class="text-danger">
                        @error('gambar')
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