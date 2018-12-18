@extends('layouts.layout-admin')

@section('content')
<!-- Container fluid  -->
<div class="container-fluid">
      <!-- Start Page Content -->
      <div class="row">
          <div class="col-lg-12">
              <div class="card p-30">
                  <div class="media">
                      <div class="media-body media-text-left">
                          <h2>Welcome back Fanani!</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Start Page Content -->
      <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tabel Permintaan Pesanan</h4>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-basic">
                            <thead>
                                <tr>
                                  <th>ID Cart</th>
                                  <th>Pemesan</th>
                                  <th>Nomor HP</th>
                                  <th>Alamat</th>
                                  <th>Harga</th>
                                  <th>Detail Pesanan</th>
                                  <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($keranjang as $cart): ?>
                                <?php if ($cart->status == 2): ?>
                                  <tr>
                                      <td>{{ $cart->id }}</td>
                                      <td>{{ $cart->name }}</td>
                                      <td>{{ $cart->no_cp }}</td>
                                      <td>{{ $cart->alamat_cp }}</td>
                                      <td>{{ $cart->total_harga }}</td>
                                      <td>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" data-toggle="modal" data-target="#detailPesananModal{{$cart->id}}">Detail Pesanan</button>
                                      </td>
                                      <td>
                                        <button type="button" onclick="window.location='{{ route('cart_terima', $cart->id) }}'" class="btn btn-success m-b-10 m-l-5">Terima</button>
                                        <button type="button" onclick="window.location='{{ route('cart_tolak', $cart->id) }}'" class="btn btn-danger m-b-10 m-l-5">Tolak</button>
                                      </td>
                                  </tr>
                                <?php endif; ?>

                              <?php endforeach; ?>


                            </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>

      </div>


      <!-- Modal -->
      <?php foreach ($keranjang as $cart): ?>
        <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="detailPesananModal{{$cart->id}}">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                    <form action="javascript:;" novalidate="novalidate">
                        <div class="modal-header">
                        <h5 class="modal-title">Detail Pesanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <?php $index = -1; ?>
                                    <?php foreach ($pesanan as $order): ?>
                                      <?php if ($order->cart_id == $cart->id): ?>
                                        <?php $index++; ?>
                                        <?php if ($index==0): ?>
                                          <div class="carousel-item active">
                                              <div class="card-body">
                                                <h4 class="card-title">Barang ke-{{$index+1}}</h4>
                                                <table id="myTable" class="table table-bordered table-basic">
                                                  <li><b>Jenis Pakaian :</b> {{$order->nama_jenis_pakaian}}</li>
                                                  <li><b>Model Pakaian :</b> {{$order->nama_model}}</li>
                                                  <li><b>Bahan Pakaian :</b> {{$order->nama_bahan}}</li>
                                                  <li><b>Kombinasi Warna :</b> {{$order->nama_warna_bahan}}, {{$order->pilihan_warna_bahan}}</li>
                                                  <li><b>Manset Tangan :</b> {{$order->nama_manset}}</li>
                                                  <li><b>Lengan :</b> {{$order->nama_lengan}}</li>
                                                  <li><b>Sablon :</b> {{$order->nama_sablon}}</li>
                                                  <li><b>Jumlah Warna Sablon :</b> {{$order->nama_warna_sablon}}, {{$order->pilihan_warna_sablon}}</li>
                                                  <li><b>Lokasi Sablon :</b> {{$order->nama_lokasi_sablon}}</li>
                                                  <li><b>Lokasi Bordir :</b> {{$order->nama_lokasi_bordir}}</li>
                                                  <li><b>Ukuran Kaos :</b> {{$order->nama_jenis_ukuran}}</li>
                                                  <li><b>Jumlah Kaos :</b> {{$order->jumlah_produk}}</li>
                                                  <li><b>Harga :</b> {{$order->harga}}</li>
                                                </table>
                                              </div>
                                          </div>
                                        <?php else: ?>
                                          <div class="carousel-item">
                                              <div class="card-body">
                                                <h4 class="card-title">Barang ke-{{$index+1}}</h4>
                                                <table id="myTable" class="table table-bordered table-basic">
                                                  <li><b>Jenis Pakaian :</b> {{$order->nama_jenis_pakaian}}</li>
                                                  <li><b>Model Pakaian :</b> {{$order->nama_model}}</li>
                                                  <li><b>Bahan Pakaian :</b> {{$order->nama_bahan}}</li>
                                                  <li><b>Kombinasi Warna :</b> {{$order->nama_warna_bahan}}, {{$order->pilihan_warna_bahan}}</li>
                                                  <li><b>Manset Tangan :</b> {{$order->nama_manset}}</li>
                                                  <li><b>Lengan :</b> {{$order->nama_lengan}}</li>
                                                  <li><b>Sablon :</b> {{$order->nama_sablon}}</li>
                                                  <li><b>Jumlah Warna Sablon :</b> {{$order->nama_warna_sablon}}, {{$order->pilihan_warna_sablon}}</li>
                                                  <li><b>Lokasi Sablon :</b> {{$order->nama_lokasi_sablon}}</li>
                                                  <li><b>Lokasi Bordir :</b> {{$order->nama_lokasi_bordir}}</li>
                                                  <li><b>Ukuran Kaos :</b> {{$order->nama_jenis_ukuran}}</li>
                                                  <li><b>Jumlah Kaos :</b> {{$order->jumlah_produk}}</li>
                                                  <li><b>Harga :</b> {{$order->harga}}</li>
                                                </table>
                                              </div>
                                          </div>
                                        <?php endif; ?>

                                      <?php endif; ?>

                                    <?php endforeach; ?>


                                  </div>

                                  </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only"> Previous </span>
                            </a>
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" >
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <p>Next</p>
                            <span class="sr-only"> Next </span>
                          </a>


                              </div>
                            </div>
                        </div>
                    </form>
              </div>
            </div>
          </div>
      <?php endforeach; ?>

<!-- End Modal -->
@endsection
