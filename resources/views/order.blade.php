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
                <select name="jenis_pakaian" class="form-control-sm form-control" id="jenis_pakaian" required="">
                      <option value="">--Select Jenis Pakaian--</option>
                      @foreach ($pak as $jenis_pakaian)
                        <option value="{{ $jenis_pakaian->id }},{{ $jenis_pakaian->harga }}"> {{ $jenis_pakaian->nama_jenis_pakaian }}</option>
                      @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label for="Model" class="text-black">Model</label>
                <select name="model" class="form-control-sm form-control" id="model" required="">
                      <option value="">--Select Model--</option>
                      @foreach ($mod as $model)
                        <option value="{{ $model->id }},{{ $model->harga }}"> {{ $model->nama_model }}</option>
                      @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Bahan</label>
                <select name="bahan" class="form-control-sm form-control" id="bahan" required="">
                      <option value="">--Select Bahan--</option>
                      @foreach ($bah as $bahan)
                        <option value="{{ $bahan->id }},{{ $bahan->harga }}"> {{ $bahan->nama_bahan }}</option>
                      @endforeach
                </select>
            </div>


            <div class="form-group row">
                <label for="c_fname" class="text-black">Warna</label>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Jumlah Warna <span class="text-danger">
                  <select name="warna_bahan" class="form-control-sm form-control" id="warna_bahan" required="">
                      <option value="">--Select Jumlah Warna--</option>
                      @foreach ($wb as $wbahan)
                        <option value="{{ $wbahan->id }},{{ $wbahan->harga }}"> {{ $wbahan->nama_warna_bahan }}</option>
                      @endforeach
                </select>
                </div>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Pilihan Warna</label>
                  <textarea name="pilihan_warna_bahan" id="pilihan_warna_bahan" cols="30" rows="7" class="form-control" required=""></textarea>
                </div>
            </div>

            <div class="form-group row">
            <label for="c_fname" class="text-black">Lengan dan Manset</label>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Lengan <span class="text-danger"></span></label>
                  <select name="lengan" class="form-control-sm form-control" id="lengan" required="">
                      <option value="">--Select Tipe Lengan--</option>
                      @foreach ($len as $lengan)
                        <option value="{{ $lengan->id }},{{ $lengan->harga }}"> {{ $lengan->nama_lengan }}</option>
                      @endforeach
                </select>
                </div>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Manset <span class="text-danger"></span></label>
                  <select name="manset" class="form-control-sm form-control" id="manset" required="">
                      <option value="">--Select Tipe Manset--</option>
                      @foreach ($man as $manset)
                        <option value="{{ $manset->id }},{{ $manset->harga }}"> {{ $manset->nama_manset }}</option>
                      @endforeach
                </select>
                </div>
            </div>

            <div class="form-group row">
            <label for="c_fname" class="text-black">Sablon</label>
              <div class="col-md-12">
                <label for="c_fname" class="text-black">Jenis Sablon</label>
                <select name="sablon" class="form-control-sm form-control" id="sablon" required="">
                      <option value="">--Select Sablon--</option>
                      @foreach ($sab as $sablon)
                        <option value="{{ $sablon->id }},{{ $sablon->harga }}"> {{ $sablon->nama_sablon }}</option>
                      @endforeach
                </select>
              </div>
              <div class="col-md-12">
                <label for="c_fname" class="text-black">Lokasi Sablon</label>
                <select name="lokasi_sablon" class="form-control-sm form-control" id="lokasi_sablon" required="">
                      <option value="">--Select Lokasi Sablon--</option>
                      @foreach ($ls as $lokasi_sablon)
                        <option value="{{ $lokasi_sablon->id }},{{ $lokasi_sablon->harga }}"> {{ $lokasi_sablon->nama_lokasi_sablon }}</option>
                      @endforeach
                </select>
            </div>
              <div class="col-md-12">
                <label for="c_fname" class="text-black">Jumlah Warna Sablon</label>
                <select name="warna_sablon" class="form-control-sm form-control" id="warna_sablon" required="">
                      <option value="">--Select Jumlah Warna Sablon--</option>
                      @foreach ($ws as $warna_sablon)
                        <option value="{{ $warna_sablon->id }},{{ $warna_sablon->harga }}"> {{ $warna_sablon->nama_warna_sablon }}</option>
                      @endforeach
                </select>
              </div>
              <div class="col-md-12">
                <label for="c_fname" class="text-black">Pilihan Warna Sablon</label>
                <textarea name="pilihan_warna_sablon" id="pilihan_warna_sablon" cols="30" rows="7" class="form-control" required=""></textarea>
              </div>
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Lokasi Bordir</label>
                <select name="lokasi_bordir" class="form-control-sm form-control" id="lokasi_bordir" required="">
                      <option value="">--Select Lokasi Bordir--</option>
                      @foreach ($lb as $lokasi_bordir)
                        <option value="{{ $lokasi_bordir->id }},{{ $lokasi_bordir->harga }}"> {{ $lokasi_bordir->nama_lokasi_bordir }}</option>
                      @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Ukuran</label>
                <select name="jenis_ukuran" class="form-control-sm form-control" id="jenis_ukuran" required="">
                      <option value="">--Select Ukuran--</option>
                      @foreach ($uk as $ukuran)
                        <option value="{{ $ukuran->id }},{{ $ukuran->harga }}"> {{ $ukuran->nama_jenis_ukuran }}</option>
                      @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Unggah Desain</label>
                <input type="file" class="form-control" id="c_fname" name="c_fname" >
            </div>

            <div class="form-group row" style="display: none;" >
                <input type="number" class="form-control" id="harga" name="harga">
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

            <p id='estimasi'>Lengkapi form terlebih dahulu!</p>
            
            <div class="mb-5">
            <h5>Jumlah</h5>
              <div class="input-group mb-3" style="max-width: 120px;">
<!--               <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div> -->
              <input name="jumlah" type="number" class="form-control text-center" min="12" value="12" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" id = 'jumlah'>
              <!-- <div class="input-group-append"> -->
<!--                 <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button> -->
              <!-- </div> -->
            </div>

            </div>
 <!--            <p><a href="cart.html" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>
 -->
          <button class="btn btn-xs btn-primary" type="submit">Masukkan ke Keranjang</button>
                      </form>
          </div>
        </div>
      </div>
    </div>

@endsection
