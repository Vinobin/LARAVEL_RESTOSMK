@extends('backend.back')
@section('admincontent')
<div>
    <h1>order detail</h1>
</div>

        <form action="{{ url('admin/orderdetail') }}" method="get">
            @csrf
          
    <div class="row">
              <div class="mt-2">
                  <label class="form-label" for="">tanggal mulai </label>
                      <input  class="form-control"  type="date" name="tglmulai" id="">
                     
              </div>
              <div class="mt-2">
                  <label class="form-label" for="">tanggal akhir </label>
                      <input  class="form-control"  type="date" name="tglakhir" id="">
                     
              </div>
             
              <div class="mt-4">
                  <button class="btn btn-primary" type="submit">cari</button>
              </div>
            </div>
          </form>
   
   <div>
    <table class="table">
        <thead>
            <tr>
                <th>no</th>
               
                <th>menu</th>
                 <th>tanggal</th>
                 <th>pelanggan</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>total</th>
              
            </tr>
        </thead>
        @php
            $no=1;

        @endphp
        <tbody>
          @foreach ($details as $detail )
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $detail->tglorder }}</td>
                <td>{{ $detail->pelanggan }}</td>
                <td>{{ $detail->menu }}</td>
                <td>{{ $detail->harga }}</td>
                <td>{{ $detail->jumlah }}</td>
                <td>{{ $detail->total }}</td>
                
              </tr>
          @endforeach
        </tbody>
    </table>
</div>
<div class=" d-flex justify-content-center">
    {{ $details->withQuerystring()->links() }}
  </div>
@endsection