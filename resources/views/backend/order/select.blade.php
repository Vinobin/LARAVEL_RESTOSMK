@extends('backend.back')
@section('admincontent')

<div>
    <h1>order</h1>
</div>
<div>
 
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
                <th>pelanggan</th>
                <th>tanggal</th>
                <th>total</th>
                <th>bayar</th>
                <th>kembali</th>
                <th>status</th>
              
            </tr>
        </thead>
        @php
            $no=1;

        @endphp
        <tbody>
          @foreach ($orders as $order )
              <tr>
                <td>{{ $no++ }}</td>
                <td><a href="{{ url('admin/menu/'.$order->idorder.'/edit') }}">{{ $order->pelanggan }}</a></td>
                <td>{{ $order->tglrder }}</td>
                <td>{{ $order->total }}</td>
                <td>{{ $order->bayar }}</td>
                <td>{{ $order->kembali }}</td>
                @php
                    $status="LUNAS";
                    if ($order->status==0) {
                       $status='<a href="'.url('admin/order/'.$order->idorder).'">bayar</a>';
                    }
                @endphp
                <td>{!! $status !!}</td>
              
              
               
              </tr>
          @endforeach
        </tbody>
    </table>
</div>
<div class=" d-flex justify-content-center">
    {{ $orders->withQuerystring()->links() }}
  </div>
@endsection