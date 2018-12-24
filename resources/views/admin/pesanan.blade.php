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
                                    <th>Status</th>
                                    <th>Nama Pemesan</th>
                                    <th>Nomor HP</th>
                                    <th>Alamat</th>
                                    <th>Desain</th>
                                    <th>Harga</th>
                                    <th>Detail Pesanan</th>
                                    <th>Bukti Bayar</th>
                                    <th>Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($keranjang as $cart): ?>
                                  <?php if ($cart->status > 2): ?>
                                    <tr id="cart">
                                        <td>{{ $cart->id }}</td>
                                        <td>{{ $cart->status }}</td>
                                        <td>{{ $cart->name }}</td>
                                        <td>{{ $cart->no_cp }}</td>
                                        <td>{{ $cart->alamat_cp }}</td>
                                        <td>
                                          <button type="button" class="btn btn-info m-b-10 m-l-5" data-toggle="modal" data-target="#desain{{$cart->id}}">Lihat</button>
                                        </td>
                                        <td name="harga" id="harga">{{ $cart->total_harga }}</td>
                                        <td>
                                          <button type="button" class="btn btn-info m-b-10 m-l-5" data-toggle="modal" data-target="#detailPesananModal{{$cart->id}}">Detail Pesanan</button>
                                        </td>

                                        <td>
                                          <button type="button" class="btn btn-warning m-b-10 m-l-5" data-toggle="modal" data-target="#buktiBayar{{$cart->id}}">Lihat</button>
                                        </td>
                                        <td>
                                          <form action="{{ route('updateStatus', $cart->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <select class="form-control form-control-line" name="status">
                                              <option value="3" @if($cart->status == '3') selected="selected" @endif>Belum Bayar</option>
                                              <option value="4" @if($cart->status == '4') selected="selected" @endif>Ongoing</option>
                                              <option value="5"@if($cart->status == '5') selected="selected" @endif>Selesai</option>
                                            </select>
                                            <input type="submit" value="submit" class="btn btn-warning m-b-10 m-l-5">

                                        </td>
                                    </tr>
                                    </form>
                                  <?php endif; ?>

                                <?php endforeach; ?>


                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- End PAge Content -->
        <!-- Modal Desain-->
        @include('admin.modal-desain')
        <!-- End Modal Desain-->
        <!-- Modal Detail Pesanan -->
        @include('admin.modal-detail')
        <!-- End Modal Detail Pesanan -->
        <!-- Modal Bukti Pembayaran -->
        @include('admin.modal-buktibayar')
        <!-- End Modal Bukti Pembayaran -->
<!-- End Container fluid  -->

@endsection
