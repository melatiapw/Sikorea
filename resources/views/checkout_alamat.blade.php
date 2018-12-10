@extends('layouts.layout-home')

@section('content')

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="index.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <ul class="stepper-container">
      <li class="stepper-container__item">
        <div class="stepper">
          <input class="stepper__input" id="stepper-3-0" name="stepper-3" type="radio" checked="checked"/>
          <div class="stepper__step">
            <label class="stepper__button" for="stepper-3-0">Pengiriman</label>
          </div>
          <input class="stepper__input" id="stepper-3-1" name="stepper-3" type="radio"/>
          <div class="stepper__step">
            <label class="stepper__button" for="stepper-3-1">Pembayaran</label>
          </div>
        </div>
      </li>
    </ul>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="col-md-12">
            <form action="#" method="post">
              <div class="form-group row">
                <label for="pelanggan" class="text-black">Nama Pelanggan</label>
                <input type="text" class="form-control" id="pelanggan" name="c_fname" disabled="">
              </div>
              <div class="form-group row">
                <label for="alamat" class="text-black">Alamat Tujuan</label>
                <textarea class="form-control" id="alamat" name="c_fname"></textarea>
              </div>
              <div class="form-group row">
                <label for="nohp" class="text-black">No Hp</label>
                <input type="text" class="form-control" id="nohp" name="c_fname">
              </div>
            </form>
            </div>
          </div>

          <div class="col-md-6">
          <br>
            <div class="col-md-12">
              <div class="col-md-12 text-right border-bottom mb-5">
                <h3 class="text-black h4 text-uppercase">Ringkasan Pembayaran</h3>
              </div>
              <div class="col-md-6">
                  <span class="text-black">Pesanan 1</span> <span>(100 pcs)</span>
              </div>
              <div class="col-md-12 text-right">
                  <strong class="text-black">$230.00</strong>
              </div>
              <div class="col-md-6">
                    <span class="text-black">Total</span>
              </div>
              <div class="col-md-12 text-right">
                    <strong class="text-black">$230.00</strong>
              </div>
                <button class="btn btn-outline-primary btn-sm btn-block">Pembayaran</button>
            </div>
          </div>

          </div>
        </div>
      </div>
@endsection
