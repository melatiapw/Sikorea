@extends('layouts.layout-admin')

@section('content')
<div class="home-wrapper">
  <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-body">

                              @if(session()->has('message'))
                                <div class="alert alert-success">
                                  {{ session()->get('message') }}
                                </div>
                               @endif
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif


                                <form method="post" action="{{route('jumlah_kaos.update', $jumlah_kaos->id)}}">
                                    {{ csrf_field() }}
                                    <div class="form-body">
                                        <h3 class="card-title m-t-15">Edit Data Jumlah Kaos</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Jumlah Kaos</label>
                                                    <input type="text" class="form-control" name="nama_jumlah_produk" value="<?php echo $jumlah_kaos->nama_jumlah_produk ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Harga</label>
                                                    <input type="number" class="form-control" name="harga" value="<?php echo $jumlah_kaos->harga ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" onclick="window.location='{{ route('katalog', $jumlah_kaos->id) }}'"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" onclick="window.location='{{ route('katalog', $jumlah_kaos->id) }}'" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>

</div>
@endsection
