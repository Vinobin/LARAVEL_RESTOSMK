@extends('backend.back')

@section('admincontent')
<div class="row">
    <div>
        <h1>{{ number_format($order->detail) }}</h1>
    </div>
    <div class="col-4">
        <h1 class="text-center">login admin</h1>
        <form action="{{ url('admin/order'.$order->idorder) }}" method="post">
            @csrf
            @method('PUT')
            @if (Session::has('pesan'))
                <div class="alert alert-danger">
                  {{ Session::get('pesan') }}
                </div>
            @endif
              <div class="mt-2">
                  <label class="form-label" for="">total </label>
                      <input  class="form-control" min="{{ $order->total }}" value="{{$order->total}}" type="number" name="bayar" id="">
                      <span class="text-danger">
                          @error('kategori')
                              {{ $message }}
                          @enderror
                      </span>
              </div>
             
              <div class="mt-4">
                  <button class="btn btn-primary" type="submit">bayar</button>
              </div>
          </form>
    </div>
</div>
</div>
@endsection