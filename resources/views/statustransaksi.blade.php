@extends('layouts.layout-home')

@section('content')

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a><span class="mx-2 mb-0">/</span>
                                      <a href="index.html">Cart</a> <span class="mx-2 mb-0">/</span>
                                      <a href="checkout-alamat">Checkout</a> <span class="mx-2 mb-0">/</span>
                                      <strong class="text-black">Status Transaksi</strong></div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
                <div class="col-md-12 text-left border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Status Transaksi</h3>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row col-md-12">
                          <div class="col-md-4 ">
                    <?php foreach ($keranjang as $cart): ?>



                              <h5 class="text-black">Nomor Transaksi</h5>
                              <span><strong>AREA 0000 000{{ $cart->id }}</strong></span>
                          <br>
                              <span class="text-black">20 Desember 2018 11.30 WIB </span>
                          </div>
                          <div class="col-md-4 text-center">
                                <h5 class="text-black">Total Tagihan</h5>
                                <span>{{ $cart->total_harga }}</span>
                          </div>
                          <div class="col-md-4 text-right">
                                <h5 class="text-black">Status Transaksi</h5>
                                <span>
                                  @if ($cart->status == '5')
                                      Selesai
                                  @elseif ($cart->status == '4')
                                      Dalam Proses
                                  @else
                                      Belum Bayar
                                  @endif
                                </span>

                          </div>
                        </div>
                    </div>
                  </div>
                <?php if ($cart->status < 4): ?>
                  <div class="col-md-12">
                    <h5 class="text-black">Upload Bukti Pembayaran</h5>
                    <div class="alert alert-warning">
                        Mohon untuk tidak menggunggah berkas sensitif atau krusial ke dalam contoh aplikasi.
                    </div>

                    <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                    <div class="form-group">
                        <input type="file" name="file">
                        <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                        @if (session('sukses'))
                          <div class="alert alert-success">
                              {{ session('sukses') }}
                          </div>
                          @elseif(session('gagal'))
                            <div class="alert alert-warning">
                                {{ session('gagal') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                  </form>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
                </div>


            </div>
          </div>
    </div>
@endsection