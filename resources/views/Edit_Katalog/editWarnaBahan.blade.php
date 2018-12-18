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


                                <form method="post" action="{{route('warna_bahan.update', $warna_bahan->id)}}">
                                    {{ csrf_field() }}
                                    <div class="form-body">
                                        <h3 class="card-title m-t-15">Edit Data Warna Bahan</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Warna Bahan</label>
                                                    <input type="text" class="form-control" name="nama_warna_bahan" value="<?php echo $warna_bahan->nama_warna_bahan ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Harga</label>
                                                    <input type="number" class="form-control" name="harga" value="<?php echo $warna_bahan->harga ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" onclick="window.location='{{ route('katalog', $warna_bahan->id) }}'"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" onclick="window.location='{{ route('katalog', $warna_bahan->id) }}'" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>

</div>
@endsection
