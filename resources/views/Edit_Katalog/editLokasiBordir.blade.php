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


                                <form method="post" action="{{route('lokasi_bordir.update', $lokasi_bordir->id)}}">
                                    {{ csrf_field() }}
                                    <div class="form-body">
                                        <h3 class="card-title m-t-15">Edit Data Lokasi Bordir</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Lokasi Bordir</label>
                                                    <input type="text" class="form-control" name="nama_lokasi_bordir" value="<?php echo $lokasi_bordir->nama_lokasi_bordir ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Harga</label>
                                                    <input type="number" class="form-control" name="harga" value="<?php echo $lokasi_bordir->harga ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" onclick="window.location='{{ route('katalog', $lokasi_bordir->id) }}'"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" onclick="window.location='{{ route('katalog', $lokasi_bordir->id) }}'" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>

</div>
@endsection
