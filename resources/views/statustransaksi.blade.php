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
                              <h5 class="text-black">Nomor Transaksi</h5>
                              <span><strong>AREA836000007646400010</strong></span>
                          <br>
                              <span class="text-black">20 Desember 2018 11.30 WIB </span>
                          </div>
                          <div class="col-md-4 text-center">
                                <h5 class="text-black">Total Tagihan</h5>
                                <span>Rp 25.006.000</span>
                          </div>
                          <div class="col-md-4 text-right">
                                <h5 class="text-black">Status Transaksi</h5>
                                <span>BELUM LUNAS</span>

                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <h5 class="text-black">Upload Bukti Pembayaran</h5>
                  <form action="#" method="post">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                  </form>
                </div>
                </div>


            </div>
          </div>
    </div>
@endsection
