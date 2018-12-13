@extends('layouts.layout-admin')

@section('content')

            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title p-20">Katalog Konveksi Area</h4>
                                    <!-- Nav tabs -->

                                        <ul class="nav nav-tabs customtab2" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#Jenis_pakaian" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Jenis Pakaian</span> </a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Model" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Model</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Bahan" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Bahan</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Warna_bahan" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Warna Bahan</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Manset" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Manset Tangan</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Sablon" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Jenis Sablon</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Warna_sablon" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Warna Sablon</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Lokasi_sablon" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Lokasi Sablon</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Bordir" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Bordir</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Lokasi_bordir" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Lokasi Bordir</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Jenis_ukuran" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Jenis Ukuran</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Jumlah_kaos" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Jumlah Kaos</span></a> </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">

                                            <div class="tab-pane active p-20" id="Jenis_pakaian" role="tabpanel">
                                              <h3> Jenis Pakaian </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('jenis_pakaian.store')}}">
                                                                  {{ csrf_field() }}

                                                                  <div class="modal-header">
                                                                  <h5 class="modal-title">Tambah Jenis Pakaian</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="jenispakaian">
                                                                                  Jenis Pakaian
                                                                              </label>
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_jenis_pakaian" id="jenispakaian"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                        <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Jenis Pakaian</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                              <?php foreach ($details as $jenis_pakaian): ?>
                                                                <tr>
                                                                    <td>{{ $jenis_pakaian->nama_jenis_pakaian }}</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5"> Edit</button>
                                                                         <!-- data-toggle="modal" data-target="#Modal1" -->
                                                                          <!-- <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="Modal1">
                                                                            <div class="modal-dialog" role="document">
                                                                              <div class="modal-content">
                                                                                    <form method="post">


                                                                                        <div class="modal-header">
                                                                                        <h5 class="modal-title">Edit Jenis Pakaian</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div class="">
                                                                                                <div class="form-group">
                                                                                                    <label for="jenispakaian">
                                                                                                        Jenis Pakaian
                                                                                                    </label>
                                                                                                    <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_jenis_pakaian" id="jenispakaian" required/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                        <button type="submit" class="btn btn-success">Save</button>
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        </div>
                                                                                    </form>
                                                                              </div>
                                                                            </div>
                                                                          </div> -->
                                                                        <a href = 'deleteJP/{{ $jenis_pakaian->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                              <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="Model" role="tabpanel">
                                              <h3> Model </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal1">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('Model.store')}}">
                                                                  {{ csrf_field() }}
                                                                  <div class="modal-header">
                                                                  <h5 class="modal-title">Tambah Model</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="nama-model">
                                                                                  Model
                                                                              </label>
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_model" id="nama-model"/>

                                                                              <label for="harga-model">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga" id="harga-model"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary"  onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                        <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Model</th>
                                                                    <th>Harga</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                              <?php foreach ($models as $model): ?>
                                                                <tr>
                                                                    <td>{{ $model->nama_model }}</td>
                                                                    <td class="color-primary">{{ $model->harga }}</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <a href = 'deleteMO/{{ $model->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                              <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="Bahan" role="tabpanel">
                                              <h3> Bahan </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal2">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('Bahan.store')}}">
                                                                  {{ csrf_field() }}
                                                                  <div class="modal-header">
                                                                  <h5 class="modal-title">Tambah Bahan</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="nama-bahan">
                                                                                  Nama Bahan
                                                                              </label>
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_bahan" id="nama-bahan"/>

                                                                              <label for="harga-bahan">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number" data-val="true" data-val-required="this is Required Field" class="form-control" name="harga" id="harga-bahan"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                        <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Bahan</th>
                                                                    <th>Harga</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                              <?php foreach ($bahans as $bahan): ?>
                                                                <tr>
                                                                    <td>{{ $bahan->nama_bahan }}</td>
                                                                    <td class="color-primary">{{ $bahan->harga }}</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <a href = 'deleteBA/{{ $bahan->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                              <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane  p-20" id="Warna_bahan" role="tabpanel">
                                              <h3> Warna Bahan </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal3"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal3">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('WarnaBahan.store')}}">
                                                                  {{ csrf_field() }}
                                                                  <div class="modal-header">
                                                                  <h5 class="modal-title">Tambah Warna Bahan</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="nama-warnaBahan">
                                                                                  Warna Bahan
                                                                              </label>
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_warna_bahan" id="nama-warnaBahan"/>

                                                                              <label for="harga-warnaBahan">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga" id="harga-warnaBahan"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                        <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Warna Bahan</th>
                                                                    <th>Harga</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                              <?php foreach ($warnaBahans as $warna_bahan): ?>
                                                                <tr>
                                                                    <td>{{ $warna_bahan->nama_warna_bahan }}</td>
                                                                    <td class="color-primary">{{ $warna_bahan->harga }}</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <a href = 'deleteWBA/{{ $warna_bahan->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                              <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="Manset" role="tabpanel">
                                              <h3> Manset </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal4"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal4">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('Manset.store')}}">
                                                                  {{ csrf_field() }}
                                                                  <div class="modal-header">
                                                                    <h5 class="modal-title">Tambah Manset</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="nama-manset">
                                                                                  Manset
                                                                              </label>
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_manset" id="nama-manset"/>

                                                                              <label for="harga-manset">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga" id="harga-manset"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                        <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Manset</th>
                                                                    <th>Harga</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                              <?php foreach ($mansets as $manset): ?>
                                                                <tr>
                                                                    <td>{{ $manset->nama_manset }}</td>
                                                                    <td class="color-primary">{{ $manset->harga }}</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <a href = 'deleteMA/{{ $manset->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                              <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane  p-20" id="Sablon" role="tabpanel">
                                              <h3> Sablon </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal5"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal5">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('Sablon.store')}}">
                                                                  {{ csrf_field() }}
                                                                  <div class="modal-header">
                                                                  <h5 class="modal-title">Tambah Jenis Sablon</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="nama-sablon">
                                                                                  Nama Sablon
                                                                              </label>
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_sablon" id="nama-sablon"/>

                                                                              <label for="harga-sablon">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga" id="harga-sablon"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                        <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Sablon</th>
                                                                    <th>Harga</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                              <?php foreach ($sablons as $sablon): ?>
                                                                <tr>
                                                                    <td>{{ $sablon->nama_sablon }}</td>
                                                                    <td class="color-primary">{{ $sablon->harga }}</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <a href = 'deleteSA/{{ $sablon->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                              <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="Warna_sablon" role="tabpanel">
                                              <h3> Warna Sablon </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal6"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal6">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('WarnaSablon.store')}}">
                                                                  {{ csrf_field() }}
                                                                  <div class="modal-header">
                                                                  <h5 class="modal-title">Tambah Warna Sablon</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="nama-warnaSablon">
                                                                                  Warna Sablon
                                                                              </label>
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_warna_sablon" id="nama-warnaSablon"/>

                                                                              <label for="harga-warnaSablon">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga" id="harga-warnaSablon"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                        <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Warna Sablon</th>
                                                                    <th>Harga</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                              <?php foreach ($warnaSablons as $warna_sablon): ?>
                                                                <tr>
                                                                    <td>{{ $warna_sablon->nama_warna_sablon }}</td>
                                                                    <td class="color-primary">{{ $warna_sablon->harga }}</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <a href = 'deleteWSA/{{ $warna_sablon->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                              <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane  p-20" id="Lokasi_sablon" role="tabpanel">
                                              <h3> Lokasi Sablon </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal7"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal7">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('LokasiSablon.store')}}">
                                                                  {{ csrf_field() }}
                                                                  <div class="modal-header">
                                                                  <h5 class="modal-title">Tambah Lokasi Sablon</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="nama-lokasiSablon">
                                                                                  Lokasi Sablon
                                                                              </label>
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_lokasi_sablon" id="nama-lokasiSablon"/>

                                                                              <label for="harga-lokasiSablon">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga" id="harga-lokasiSablon"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                      <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                          <thead>
                                                              <tr>
                                                                  <th>Lokasi Sablon</th>
                                                                  <th>Harga</th>
                                                                  <th>Aksi</th>
                                                              </tr>
                                                          </thead>
                                                          <tbody>
                                                            <?php foreach ($lokasiSablons as $lokasi_sablon): ?>
                                                              <tr>
                                                                  <td>{{ $lokasi_sablon->nama_lokasi_sablon }}</td>
                                                                  <td class="color-primary">{{ $lokasi_sablon->harga }}</td>
                                                                  <td>
                                                                    <div class="btn-group">
                                                                      <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                      <a href = 'deleteLSA/{{ $lokasi_sablon->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                    </div>
                                                                  </td>
                                                              </tr>
                                                            <?php endforeach; ?>
                                                          </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="Bordir" role="tabpanel">
                                              <h3> Bordir </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal8"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal8">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('Bordir.store')}}">
                                                                  {{ csrf_field() }}
                                                                  <div class="modal-header">
                                                                  <h5 class="modal-title">Tambah Bordir</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="nama-bordir">
                                                                                  Bordir
                                                                              </label>
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_bordir" id="nama-bordir"/>

                                                                              <label for="harga-bordir">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga" id="harga-bordir"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                        <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Bordir</th>
                                                                    <th>Harga</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                              <?php foreach ($bordirs as $bordir): ?>
                                                                <tr>
                                                                    <td>{{ $bordir->nama_bordir }}</td>
                                                                    <td class="color-primary">{{ $bordir->harga }}</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <a href = 'deleteBOR/{{ $bordir->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                              <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="Lokasi_bordir" role="tabpanel">
                                              <h3> Lokasi Bordir </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal9"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal9">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('LokasiBordir.store')}}">
                                                                  {{ csrf_field() }}
                                                                  <div class="modal-header">
                                                                  <h5 class="modal-title">Tambah Lokasi Bordir</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="nama-lokasiBordir">
                                                                                  Lokasi Bordir
                                                                              </label>
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_lokasi_bordir" id="nama-lokasiBordir"/>

                                                                              <label for="harga-lokasiBordir">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga" id="harga-lokasiBordir"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                      <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                          <thead>
                                                              <tr>
                                                                  <th>Lokasi Bordir</th>
                                                                  <th>Harga</th>
                                                                  <th>Aksi</th>
                                                              </tr>
                                                          </thead>
                                                          <tbody>
                                                            <?php foreach ($lokasiBordirs as $lokasi_bordir): ?>
                                                              <tr>
                                                                  <td>{{ $lokasi_bordir->nama_lokasi_bordir }}</td>
                                                                  <td class="color-primary">{{ $lokasi_bordir->harga }}</td>
                                                                  <td>
                                                                    <div class="btn-group">
                                                                      <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                      <a href = 'deleteLBOR/{{ $lokasi_bordir->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                    </div>
                                                                  </td>
                                                              </tr>
                                                            <?php endforeach; ?>
                                                          </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane  p-20" id="Jenis_ukuran" role="tabpanel">
                                              <h3> Jenis Ukuran </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal10"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal10">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('JenisUkuran.store')}}">
                                                                  {{ csrf_field() }}
                                                                  <div class="modal-header">
                                                                  <h5 class="modal-title">Tambah Jenis Ukuran</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="nama-jenisUkuran">
                                                                                  Jenis Ukuran
                                                                              </label>
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_jenis_ukuran" id="nama-jenisUkuran"/>

                                                                              <label for="harga-manset">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga" id="harga-jenisUkuran"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                        <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Jenis Ukuran</th>
                                                                    <th>Harga</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                              <?php foreach ($jenisUkurans as $jenis_ukuran): ?>
                                                                <tr>
                                                                    <td>{{ $jenis_ukuran->nama_jenis_ukuran }}</td>
                                                                    <td class="color-primary">{{ $jenis_ukuran->harga }}</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <a href = 'deleteJU/{{ $jenis_ukuran->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                              <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="Jumlah_kaos" role="tabpanel">
                                              <h3> Jumlah Kaos </h3>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal11"><i class="ti-plus"></i> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal11">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form method="post" action="{{route('JumlahKaos.store')}}">
                                                                  {{ csrf_field() }}
                                                                  <div class="modal-header">
                                                                    <h5 class="modal-title">Tambah Jumlah Kaos</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="">
                                                                          <div class="form-group">
                                                                              <label for="jumlahProduk">
                                                                                  Jumlah Produk
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama_jumlah_produk" id="jumlahProduk"/>

                                                                              <label for="harga-jumlahProduk">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga" id="harga-jumlahProduk"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('katalog') }}'"><i class="fa fa-check"></i> Save</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="table-responsive m-b-20 m-t-25">
                                                        <table class="table table-hover table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Jumlah Produk</th>
                                                                    <th>Harga</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                              <?php foreach ($jumlahKaoss as $jumlah_kaos): ?>
                                                                <tr>
                                                                    <td>{{ $jumlah_kaos->nama_jumlah_produk }}</td>
                                                                    <td class="color-primary">{{ $jumlah_kaos->harga }}</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <a href = 'deleteJK/{{ $jumlah_kaos->id }}' class="btn btn-danger m-b-10 m-l-5">Delete</a>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                              <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->

@endsection
