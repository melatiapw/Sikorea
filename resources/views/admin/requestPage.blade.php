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
                                    <th>ID Order</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pemesan</th>
                                    <th>Nomor HP</th>
                                    <th>Desain</th>
                                    <th>Harga</th>
                                    <th>Detail Pesanan</th>
                                    <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
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
                                        <button type="button" class="btn btn-success m-b-10 m-l-5">Terima</button>
                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Tolak</button>
                                      </td>
                                  </tr>

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- End PAge Content -->
      <!-- Modal -->
      <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="detailPesananModal">
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

                      </div>
                  </form>
            </div>
          </div>
        </div>
<!-- End Modal -->
<!-- End Container fluid  -->
@endsection
