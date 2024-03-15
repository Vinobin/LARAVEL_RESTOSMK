@extends("front")

@section('content')
@if (session('cart'))
    <div>
        <div>
            <a class="btn btn-danger" href="{{ url('batal') }}">batal</a>
        </div>
        @php
            $no=1;
            $total=0;  
        @endphp
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>menu</th>
                    <th>harga</th>
                    <th>jumlah</th>
                    <th>total</th>
                    <th>hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach (session('cart') as $idmenu=>$menu )
                <tr>
                    <td>{{ no++ }}</td>
                    <td>{{ $menu['menu'] }}</td>
                    <td>{{ $menu['harga'] }}</td>
                    <td>
                        <span><a href="{{ url('kurang/'.$['idmenu']) }}">[-]</a></span>
                        {{ $menu['jumlah'] }}
                        <span><a href="{{ url('tambah/'.$['idmenu']) }}">[+]</a></span>
                    </td>
                    <td>{{ $menu['jumlah'] * $menu['harga'] }}</td>
                    <td><a href="{{ url('hapus/'.$['idmenu']) }}"></a>hapus</td>
                </tr>
                    
                @endforeach
                @php
                   
                    $total=$total +($menu['jumlah'] *$menu['harga']);
                @endphp
                <tr>
                    <td colspan="4">total pembayaran</td>
                    <td>{{ total }}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <a class="btn btn-success" href="{{ url('checkout') }}">checkout</a>
        </div>
    </div>
@else
    <script>
        window.location.href="/";
    </script>
@endif
@endsection