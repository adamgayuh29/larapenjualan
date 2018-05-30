@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"><?=$title?></div>
          <div class="panel-body">
            <form action="{{ url('/barang/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Nama Barang</label>
                  <input type="text" class="form-control" name="nama_barang" placeholder="Masukan Nama Barang">
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" class="form-control" name="harga" placeholder="Masukan Harga Barang">
                  </div>
                  <div class="form-group">
                    <label for="">Stock</label>
                    <input type="text" class="form-control" name="stock" placeholder="Masukan Stock Barang">
                  </div>
                <div class="form-group">
                  <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()