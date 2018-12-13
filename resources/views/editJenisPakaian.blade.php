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


                                <form method="post" action="{{route('jenis_pakaian.update', $jenis_pakaian->id)}}">
                                    {{ csrf_field() }}
                                    <div class="form-body">
                                        <h3 class="card-title m-t-15">Edit Data Jenis Pakaian</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Jenis Pakaian</label>
                                                    <input type="text" class="form-control" name="nama_jenis_pakaian" value="<?php echo $jenis_pakaian->nama_jenis_pakaian ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" onclick="window.location='{{ route('katalog', $jenis_pakaian->id) }}'"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button"  class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>

</div>
@endsection
