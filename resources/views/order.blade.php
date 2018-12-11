@extends('layouts.layout-home')

@section('content')
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Katalog</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Kaos</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <form action="{{ route('order.store')}}" method="post">
              {{ csrf_field() }}

            <div class="form-group row">
                <label for="c_fname" class="text-black">Jenis Pakaian</label>
                <select name="jenis_pakaian" class="form-control-sm form-control">
                      <option value="">--Select Jenis Pakaian--</option>
                      @foreach ($pak as $jenis_pakaian => $value)
                        <option value="{{ $jenis_pakaian }}"> {{ $value }}</option>
                      @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label for="Model" class="text-black">Model</label>
                <select name="model" class="form-control-sm form-control">
                      <option value="">--Select Model--</option>
                      @foreach ($mod as $model => $value)
                        <option value="{{ $model }}"> {{ $value }}</option>
                      @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Bahan</label>
                <select name="bahan" class="form-control-sm form-control">
                      <option value="">--Select Bahan--</option>
                      @foreach ($bah as $bahan => $value)
                        <option value="{{ $bahan }}"> {{ $value }}</option>
                      @endforeach
                </select>
            </div>


            <div class="form-group row">
                <label for="c_fname" class="text-black">Warna</label>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Jumlah Warna <span class="text-danger">*</span></label>
                  <select name="warna_bahan" class="form-control-sm form-control">
                      <option value="">--Select Jumlah Warna--</option>
                      @foreach ($wb as $wbahan => $value)
                        <option value="{{ $wbahan }}"> {{ $value }}</option>
                      @endforeach
                </select>
                </div>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Pilihan Warna</label>
                  <textarea name="pilihan_warna_bahan" id="pilihan_warna_bahan" cols="30" rows="7" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
            <label for="c_fname" class="text-black">Lengan dan Manset</label>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Lengan <span class="text-danger"></span></label>
                  <div class="col-md-6">
                    <input type="radio" id="radio1" name="lengan" value="1" class="form-check-input">Pendek
                  </div>
                  <div class="col-md-6">
                    <input type="radio" id="radio2" name="lengan" value="2" class="form-check-input">Panjang
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Manset <span class="text-danger"></span></label>
                  <div class="col-md-6">
                    <input type="radio" id="radio1" name="manset" value="2" class="form-check-input">Tidak
                  </div>
                  <div class="col-md-6">
                    <input type="radio" id="radio2" name="manset" value="1" class="form-check-input">Ya
                  </div>
                </div>
            </div>

            <div class="form-group row">
            <label for="c_fname" class="text-black">Sablon</label>
              <div class="col-md-12">
                <label for="c_fname" class="text-black">Jenis Sablon</label>
                <select name="sablon" class="form-control-sm form-control">
                      <option value="">--Select Sablon--</option>
                      @foreach ($sab as $sablon => $value)
                        <option value="{{ $sablon }}"> {{ $value }}</option>
                      @endforeach
                </select>
              </div>
              <div class="col-md-12">
                <label for="c_fname" class="text-black">Jumlah Warna Sablon</label>
                <select name="warna_sablon" class="form-control-sm form-control">
                      <option value="">--Select Jumlah Warna Sablon--</option>
                      @foreach ($ws as $warna_sablon => $value)
                        <option value="{{ $warna_sablon }}"> {{ $value }}</option>
                      @endforeach
                </select>
              </div>
              <div class="col-md-12">
                <label for="c_fname" class="text-black">Pilihan Warna Sablon</label>
                <textarea name="pilihan_warna_sablon" id="pilihan_warna_sablon" cols="30" rows="7" class="form-control"></textarea>
              </div>
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Jumlah Bordir</label>
                <select name="jumlah_bordir" class="form-control-sm form-control">
                      <option value="">--Select Jumlah Bordir--</option>
                      @foreach ($jb as $jumlah_bordir => $value)
                        <option value="{{ $jumlah_bordir }}"> {{ $value }}</option>
                      @endforeach
                </select>
              
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Ukuran</label>
                <select name="jenis_ukuran" class="form-control-sm form-control">
                      <option value="">--Select Ukuran--</option>
                      @foreach ($uk as $ukuran => $value)
                        <option value="{{ $ukuran }}"> {{ $value }}</option>
                      @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Unggah Desain</label>
                <input type="file" class="form-control" id="c_fname" name="c_fname">
            </div>



            
          </div>
          <div class="col-md-4">
            <h2 class="text-black">Estimasi Harga</h2>
            <img src="{{ asset('assets/shoppers/images/cloth_1.jpg') }}" alt="Image placeholder" class="img-fluid">
            <h5>Model</h5>
            <p>Nama Modelnya</p>
            <h5>Bahan</h5>
            <p>Nama Bahannya</p>
            <h5>Warna</h5>
            <p>Jumlah Warna: Detail Warna</p>
            <h5>Lengan dan Manset</h5>
            <p>Lengan, Manset</p>
            <h5>Estimasi Harga</h5>

            <p><strong class="text-primary h4">$50.00</strong></p>
            
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="12" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
 <!--            <p><a href="cart.html" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>
 -->
          <button class="btn btn-xs btn-primary" type="submit">Send</button>
                      </form>
          </div>
        </div>
      </div>
    </div>

@endsection
