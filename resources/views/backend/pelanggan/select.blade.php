@extends('backend.back')
@section('admincontent')
<div>
    <h1>pelanggan</h1>
</div>
<div>
    <div>
        <a href="{{ url('admin/kategori/create') }}" class="btn btn-primary">tambah data</a>
    </div>
  
    <table class="table">
        <thead>
            <tr>
                <th>no</th>
                <th>pelanggan</th>
                <th>alamat</th>
                <th>email</th>
                <th>telepon</th>
                <th>status</th>
               
            </tr>
        </thead>
        @php
            $no=1;

        @endphp
        <tbody>
          @foreach ($pelanggans as $pelanggan )
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $pelanggan->pelanggan }}</td>
                <td>{{ $pelanggan->alamat }}</td>
                <td>{{ $pelanggan->telepon }}</td>
                <td>{{ $pelanggan->email }}</td>
                @php
                   if ($pelanggan->aktif==0) {
                  $aktif='<a href="'.url('admin/pelanggan/'.$pelanggan->idpelanggan).'">BANNED</a>';
                   } else {
                    $aktif='<a href="'.url('admin/pelanggan/'.$pelanggan->idpelanggan).'">AKTIF</a>';
                   }
                   
                @endphp
                <td>{{ !! $aktif !! }}</td>
               
              </tr>
          @endforeach
        </tbody>
    </table>
</div>
<div class=" d-flex justify-content-center">
    {{ $pelanggan->withQuerystring()->links() }}
  </div>
@endsection