@extends('layouts.layout-home')

@section('content')
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
<<<<<<< HEAD
          <div class="col-md-12 mb-0">
            <a>Katalog</a>
            <span class="mx-2 mb-0">/</span> <strong class="text-black">Kaos</strong>
          </div>
        </div>
      </div>
    </div>
=======
          <div class="col-md-12 mb-0"><a href="index.html">Katalog</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Kaos</strong></div>
        </div>
      </div>
    </div>  
>>>>>>> pipitbaru

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <form action="#" method="post">

            <div class="form-group row">
                <label for="Model" class="text-black">Model</label>
                <select name="model" id="model" class="form-control-sm form-control">
                      <option value="0">Please select</option>
                      <option value="1">Option #1</option>
                      <option value="2">Option #2</option>
                      <option value="3">Option #3</option>
                </select>
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Bahan</label>
                <select name="bahan" id="bahan" class="form-control-sm form-control">
                      <option value="0">Please select</option>
                      <option value="1">Option #1</option>
                      <option value="2">Option #2</option>
                      <option value="3">Option #3</option>
                </select>
            </div>


            <div class="form-group row">
                <label for="c_fname" class="text-black">Warna</label>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Jumlah Warna <span class="text-danger">*</span></label>
                  <select name="warna_bahan" id="warna_bahan" class="form-control-sm form-control">
                      <option value="0">Please select</option>
                      <option value="1">Option #1</option>
                      <option value="2">Option #2</option>
                      <option value="3">Option #3</option>
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
                    <input type="radio" id="radio1" name="lengan" value="Pendek" class="form-check-input">Pendek
                  </div>
                  <div class="col-md-6">
                    <input type="radio" id="radio2" name="lengan" value="Panjang" class="form-check-input">Panjang
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Manset <span class="text-danger"></span></label>
                  <div class="col-md-6">
                    <input type="radio" id="radio1" name="manset" value="Tidak" class="form-check-input">Tidak
                  </div>
                  <div class="col-md-6">
                    <input type="radio" id="radio2" name="manset" value="Ya" class="form-check-input">Ya
                  </div>
                </div>
            </div>

            <div class="form-group row">
            <label for="c_fname" class="text-black">Sablon</label>
              <div class="col-md-12">
                <label for="c_fname" class="text-black">Jenis Sablon</label>
                <select name="warna_bahan" id="warna_bahan" class="form-control-sm form-control">
                      <option value="0">Please select</option>
                      <option value="1">Option #1</option>
                      <option value="2">Option #2</option>
                      <option value="3">Option #3</option>
                </select>
              </div>
              <div class="col-md-12">
                <label for="c_fname" class="text-black">Jumlah Warna Sablon</label>
                <select name="warna_bahan" id="warna_bahan" class="form-control-sm form-control">
                      <option value="0">Please select</option>
                      <option value="1">Option #1</option>
                      <option value="2">Option #2</option>
                      <option value="3">Option #3</option>
                  </select>
              </div>
              <div class="col-md-12">
                <label for="c_fname" class="text-black">Pilihan Warna Sablon</label>
                <textarea name="pilihan_warna_bahan" id="pilihan_warna_bahan" cols="30" rows="7" class="form-control"></textarea>
              </div>
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Jumlah Bordir</label>
                <select name="warna_bahan" id="warna_bahan" class="form-control-sm form-control">
                      <option value="0">Please select</option>
                      <option value="1">Option #1</option>
                      <option value="2">Option #2</option>
                      <option value="3">Option #3</option>
                  </select>
<<<<<<< HEAD

=======
              
>>>>>>> pipitbaru
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Ukuran</label>
                <select name="warna_bahan" id="warna_bahan" class="form-control-sm form-control">
                      <option value="0">Please select</option>
                      <option value="1">Option #1</option>
                      <option value="2">Option #2</option>
                      <option value="3">Option #3</option>
                  </select>
            </div>

            <div class="form-group row">
                <label for="c_fname" class="text-black">Unggah Desain</label>
                <input type="file" class="form-control" id="c_fname" name="c_fname">
            </div>


            </form>
<<<<<<< HEAD

=======
            
>>>>>>> pipitbaru
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
<<<<<<< HEAD

=======
            
>>>>>>> pipitbaru
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
<<<<<<< HEAD
            <p><a href="{{ url('/cart')}}" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>
=======
            <p><a href="cart.html" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>
>>>>>>> pipitbaru

          </div>
        </div>
      </div>
    </div>

@endsection
