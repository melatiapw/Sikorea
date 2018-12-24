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
                                  <th>Desain</th>
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
                                      <td>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" data-toggle="modal" data-target="#desain{{$cart->id}}">Lihat</button>
                                      </td>
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

      <!-- Modal Desain -->
      @include('admin.modal-desain')
      <!-- Modal Detail-->
      @include('admin.modal-detail')

<!-- End Modal -->

@endsection
