@extends('backend.back')
@section('admincontent')
<div>
    <h1>menus</h1>
</div>
<div>
    <div>
        <a href="{{ url('admin/kategori/create') }}" class="btn btn-primary">tambah data</a>
    </div>
    <div class="row mt-5">
      <div class="col-4 mb-3">
        <form action="{{ url('admin/select') }}" method="get">
            <select class="form-select" name="idkategori" onchange="this.form.submit()">
                <option value="">silahkan pilih</option>
          
            @foreach ($kategoris as $kategori )
                <option value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
            @endforeach
        </select>
        </form>
      </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>no</th>
                <th>menu</th>
                <th>kategori</th>
                <th>deskripsi</th>
                <th>gambar</th>
                <th>harga</th>
                <th>ubah</th>
                <th>hapus</th>
            </tr>
        </thead>
        @php
            $no=1;

        @endphp
        <tbody>
          @foreach ($menus as $menu )
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $menu->kategori }}</td>
                <td>{{ $menu->menu }}</td>
                <td>{{ $menu->deskripsi }}</td>
                <td><img src="{{ asset('gambar/'.$menu->gambar) }}" alt=""></td>
                <td>{{ $menu->harga }}</td>
                <td><a href="{{ url('admin/menu/'.$menu->idmenu.'/edit') }}">ubah</a></td>
                <td><a href="{{ url('admin/menu/'.$menu->idmenu) }}">hapus</a></td>
              </tr>
          @endforeach
        </tbody>
    </table>
</div>
<div class=" d-flex justify-content-center">
    {{ $menus->withQuerystring()->links() }}
  </div>
@endsection