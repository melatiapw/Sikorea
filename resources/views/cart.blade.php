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
                @foreach ($detail as $d)
                  <tr>
                    <td class="product-thumbnail">
                      <img src="{{ asset('assets/shoppers/images/cloth_1.jpg') }}" alt="Image placeholder" class="img-fluid">
                    </td>

                    <td class="product-name">
                      <h2 class="h5 text-black">Kaos</h2>
                    </td>
                    <td>
                      Bahan : {{ $d->jenis_bahan }}
                      <br>
                      Warna : {{ $d->warna_bahan }}/{{ $d->detail_warna_bahan }}
                      <br>
                      Lengan/Manset: {{ $d->Lengan }}/{{ $d->Manset }}
                      <br>
                      Ukuran: {{ $d->jenis_pakaian }}/{{ $d->jenis_ukuran }}
                      <br>
                      Jumlah : {{ $d->jumlah_pakaian }}
                    </td>
                    <td>{{ $d->total_harga }}</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
            </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
