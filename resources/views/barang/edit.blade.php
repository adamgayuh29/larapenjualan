@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"><?=$title?></div>
          <div class="panel-body">
            <form action="{{ route('barang.update',$barang) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
                <div class="form-group">
                  <label for="">Nama Barang</label>
                  <input type="text" class="form-control" name="nama_barang" placeholder="Masukan Nama Barang" value="{{$barang->nama_barang}}">
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" class="form-control" name="harga" placeholder="Masukan Harga Barang" value="{{$barang->harga}}">
                  </div>
                  <div class="form-group">
                    <label for="">Stock</label>
                    <input type="text" class="form-control" name="stock" placeholder="Masukan Stock Barang" value="{{$barang->stock}}">
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