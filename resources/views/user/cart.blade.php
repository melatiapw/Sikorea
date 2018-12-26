@extends('layouts.layout-home')

@section('content')

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Gambar</th>
                    <th class="product-name">Produk</th>
                    <th class="product-spec">Spesifikasi</th>
                    <th class="product-price">Harga</th>
                    <th class="product-remove">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                @if($detail)
                @foreach ($detail as $d)
                  <tr>
                    <td class="product-thumbnail">
                      @if($d->desain==NULL)
                        <p>Tidak mengunggah desain</p>
                      @else
                        <img src="{{ Storage::url($d->desain) }}" alt="Image placeholder" class="img-fluid">
                      @endif
                    </td>

                    <td class="product-name">
                      <h2 class="h5 text-black">Kaos</h2>
                    </td>
                    <td>
                      Bahan : {{ $d->bahan_join->nama_bahan }}
                      <br>
                      Warna : {{ $d->warna_bahan_join->nama_warna_bahan }}/{{ $d->pilihan_warna_bahan }}
                      <br>
                      Sablon : {{ $d->sablon_join->nama_sablon }}/{{ $d->warna_sablon_join->nama_warna_sablon}}/{{ $d->pilihan_warna_sablon }}
                      <br>
                      Lokasi Sablon : {{ $d->lokasi_sablon_join->nama_lokasi_sablon }}
                      <br>
                      Lengan/Manset: {{ $d->lengan_join->nama_lengan }}/{{ $d->manset_join->nama_manset }}
                      <br>
                      Bordir: {{ $d->lokasi_bordir_join->nama_lokasi_bordir }}
                      <br>
                      Ukuran: {{ $d->jenis_pakaian_join->nama_jenis_pakaian }}/{{ $d->jenis_ukuran_join->nama_jenis_ukuran }}
                      <br>
                      Jumlah : {{ $d->jumlah_produk }}
                    </td>
                    <td>{{ $d->harga }}</td>
                    <form method="POST" action="{{ route('order.destroy', $d->id)}}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                      <td><button onclick="return confirm('Apakah anda ingin menghapus pesanan ini?');" class="btn btn-xs btn-primary" type="submit">X</button></td>
                    </form>


                  </tr>
                  @endforeach

                  @else
                  <tr>
                  <td colspan="5"> <p> Belum ada pesanan </p> </td>
                  </tr>
                  @endif
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
                <a href="{{ url('/order')}}" class="btn btn-outline-primary btn-sm btn-block" >Continue Shopping</a>
            </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                @if($detail)
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  @php
                  $total=0
                  @endphp
                  @foreach ($detail as $h)

                  <div class="col-md-12 text-right">
                    <strong class="text-black">{{$h->harga}}</strong>
                  </div>
                  @php
                  $total +=$h->harga
                  @endphp

                  @endforeach
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">


                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-12 text-right">
                    <strong class="text-black">{{$total}}</strong>
                  </div>
                </div>
                @endif

                <div class="row">
                  <div class="col-md-12">
                  @if($detail)
                    <a href="{{ url('/checkout_alamat')}}" class="btn btn-primary btn-lg py-3 btn-block" >Proceed To Checkout</a>
                  @else
                  <button disabled class="btn btn-primary btn-lg py-3 btn-block" >Proceed To Checkout</button>
                  @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
