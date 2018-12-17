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
                                    <th>Keterangan</th>
                                    <th>Pemesan</th>
                                    <th>Nomor HP</th>
                                    <th>Alamat</th>
                                    <th>Harga</th>
                                    <th>Detail Pesanan</th>
                                    <th>Bukti Bayar</th>
                                    <th>Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($keranjang as $cart): ?>
                                  <?php if ($cart->status > 2): ?>
                                    <tr>
                                        <td>{{ $cart->id }}</td>
                                        <td>{{ $cart->subject }}</td>
                                        <td>{{ $cart->name }}</td>
                                        <td>{{ $cart->no_cp }}</td>
                                        <td>{{ $cart->alamat_cp }}</td>
                                        <td>{{ $cart->total_harga }}</td>
                                        <td>
                                          <button type="button" class="btn btn-info m-b-10 m-l-5" data-toggle="modal" data-target="#detailPesananModal{{$cart->id}}">Detail Pesanan</button>
                                        </td>

                                        <td>
                                          <button type="button" class="btn btn-warning m-b-10 m-l-5" data-toggle="modal" data-target="#buktiBayar{{$cart->id}}">Lihat</button>
                                        </td>
                                        <td>
                                          kosong
                                        </td>
                                    </tr>
                                  <?php endif; ?>

                                <?php endforeach; ?>


                              </tbody>
                              <!-- <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>23/11/2018</td>
                                      <td>Riski Retnosuro</td>
                                      <td>089765543219</td>
                                      <td>
                                        <a href="{{url('/')}}/{{ Storage::disk('local')->url('file.txt')}}">Download File</a>
                                      </td>
                                      <td>$320,800</td>
                                      <td>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" data-toggle="modal" data-target="#detailPesananModal">Detail Pesanan</button>
                                      </td>
                                      <td>
                                        <button type="button" class="btn btn-warning m-b-10 m-l-5" data-toggle="modal" data-target="#buktiBayar">Lihat</button>
                                      </td>
                                      <td>
                                        <button type="button" class="btn btn-success m-b-10 m-l-5">Terima</button>
                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Tolak</button>
                                      </td>
                                  </tr>
                              </tbody> -->
                          </table>
                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- End PAge Content -->
      <!-- Modal Detail Pesanan -->
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
                                                    <li><b>Jumlah Kaos :</b> {{$order->nama_jumlah_produk}}</li>
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
                                                  <li><b>Jumlah Kaos :</b> {{$order->nama_jumlah_produk}}</li>
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
        <!-- Modal Bukti Pembayaran -->
      <?php foreach ($keranjang as $cart): ?>
        <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="buktiBayar{{$cart->id}}">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                      <form action="javascript:;" novalidate="novalidate">
                          <div class="modal-header">
                          <h5 class="modal-title">Bukti Pembayaran {{$cart->name}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                            <img src="{{ asset('assets/ElaAdmin/images/card/c1.jpg') }}" alt="Image placeholder" class="img-fluid">
                          </div>
                      </form>
                </div>
              </div>
            </div>
  <!-- End Modal -->
      <?php endforeach; ?>

<!-- End Container fluid  -->
@endsection
