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
                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#jenis_pakaian" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Jenis Pakaian</span> </a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#model" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Model</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bahan" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Bahan</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#warna_bahan" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Warna Bahan</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#manset" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Manset Tangan</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#sablon" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Jenis Sablon</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#warna_sablon" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Warna Sablon</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#lokasi_sablon" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Lokasi Sablon</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bordir" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Bordir</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#lokasi_bordir" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Lokasi Bordir</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jenis_ukuran" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Jenis Ukuran</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jumlah_kaos" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Jumlah Kaos</span></a> </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">

                                            <div class="tab-pane active p-20" id="jenis_pakaian" role="tabpanel">
                                              <h5> Jenis Pakaian </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="jenispakaian" id="jenispakaian"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary">Save</button>
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
                                                                <tr>
                                                                    <td>Tea Shirt For Man</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="model" role="tabpanel">
                                              <h5> Model </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal1">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama-model" id="nama-model"/>

                                                                              <label for="harga-model">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga-model" id="harga-model"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary">Save</button>
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
                                                                <tr>
                                                                    <td>Tea Shirt For Man</td>
                                                                    <td class="color-primary">$21.56</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="bahan" role="tabpanel">
                                              <h5> Bahan </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal2">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama-bahan" id="nama-bahan"/>

                                                                              <label for="harga-bahan">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number" data-val="true" data-val-required="this is Required Field" class="form-control" name="harga-bahan" id="harga-bahan"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary">Save</button>
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
                                                                <tr>
                                                                    <td>Tea Shirt For Man</td>
                                                                    <td>5000</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane  p-20" id="warna_bahan" role="tabpanel">
                                              <h5> Warna Bahan </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal3"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal3">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama-warnaBahan" id="nama-warnaBahan"/>

                                                                              <label for="harga-warnaBahan">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga-warnaBahan" id="harga-warnaBahan"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary">Save</button>
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
                                                                <tr>
                                                                    <td>Tea Shirt For Man</td>
                                                                    <td>5000</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="manset" role="tabpanel">
                                              <h5> Manset </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal4"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal4">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama-manset" id="nama-manset"/>

                                                                              <label for="harga-manset">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga-manset" id="harga-manset"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Save</button>
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
                                                                <tr>
                                                                    <td>Tea Shirt For Man</td>
                                                                    <td>5000</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane  p-20" id="sablon" role="tabpanel">
                                              <h5> Sablon </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal5"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal5">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama-sablon" id="nama-sablon"/>

                                                                              <label for="harga-sablon">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga-sablon" id="harga-sablon"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary">Save</button>
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
                                                                <tr>
                                                                    <td>Tea Shirt For Man</td>
                                                                    <td>5000</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="warna_sablon" role="tabpanel">
                                              <h5> Warna Sablon </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal6"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal6">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama-warnaSablon" id="nama-warnaSablon"/>

                                                                              <label for="harga-warnaSablon">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga-warnaSablon" id="harga-warnaSablon"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary">Save</button>
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
                                                                <tr>
                                                                    <td>Tea Shirt For Man</td>
                                                                    <td>5000</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane  p-20" id="lokasi_sablon" role="tabpanel">
                                              <h5> Lokasi Sablon </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal7"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal7">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama-lokasiSablon" id="nama-lokasiSablon"/>

                                                                              <label for="harga-lokasiSablon">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga-lokasiSablon" id="harga-lokasiSablon"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary">Save</button>
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
                                                              <tr>
                                                                  <td>Tea Shirt For Man</td>
                                                                  <td>5000</td>
                                                                  <td>
                                                                    <div class="btn-group">
                                                                      <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                      <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                    </div>
                                                                  </td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="bordir" role="tabpanel">
                                              <h5> Bordir </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal8"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal8">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama-bordir" id="nama-bordir"/>

                                                                              <label for="harga-bordir">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga-bordir" id="harga-bordir"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary">Save</button>
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
                                                                <tr>
                                                                    <td>Tea Shirt For Man</td>
                                                                    <td>5000</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="lokasi_bordir" role="tabpanel">
                                              <h5> Lokasi Bordir </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal9"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal9">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama-lokasiBordir" id="nama-lokasiBordir"/>

                                                                              <label for="harga-lokasiBordir">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga-lokasiBordir" id="harga-lokasiBordir"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary">Save</button>
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
                                                              <tr>
                                                                  <td>Tea Shirt For Man</td>
                                                                  <td>5000</td>
                                                                  <td>
                                                                    <div class="btn-group">
                                                                      <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                      <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                    </div>
                                                                  </td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane  p-20" id="jenis_ukuran" role="tabpanel">
                                              <h5> Jenis Ukuran </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal10"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal10">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="text"  data-val="true" data-val-required="this is Required Field" class="form-control" name="nama-jenisUkuran" id="nama-jenisUkuran"/>

                                                                              <label for="harga-manset">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga-jenisUkuran" id="harga-jenisUkuran"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                  <button type="submit" class="btn btn-primary">Save</button>
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
                                                                <tr>
                                                                    <td>Tea Shirt For Man</td>
                                                                    <td>5000</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                      </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="tab-pane p-20" id="jumlah_kaos" role="tabpanel">
                                              <h5> Jumlah Kaos </h5>
                                              <div class="col-lg-12">
                                                <div class="card">
                                                  <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal11"> Tambah Data</button>
                                                    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="myModal11">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                              <form action="javascript:;" novalidate="novalidate">
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
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="jumlahProduk" id="jumlahProduk"/>

                                                                              <label for="harga-jumlahProduk">
                                                                                  Harga
                                                                              </label>
                                                                              <input type="number"  data-val="true" data-val-required="this is Required Field" class="form-control" name="harga-jumlahProduk" id="harga-jumlahProduk"/>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Save</button>
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
                                                                <tr>
                                                                    <td>Tea Shirt For Man</td>
                                                                    <td>5000</td>
                                                                    <td>
                                                                      <div class="btn-group">
                                                                        <button type="button" class="btn btn-info m-b-10 m-l-5">Edit</button>
                                                                        <button type="button" class="btn btn-danger m-b-10 m-l-5">Delete</button>
                                                                      </div>
                                                                    </td>
                                                                </tr>
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
