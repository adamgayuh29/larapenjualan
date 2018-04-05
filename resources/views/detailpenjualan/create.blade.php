@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"><?=$title?></div>
          <div class="panel-body">
            <form action="{{ url('/detailpenjualan/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Penjualan Detail ID</label>
                  <select name="penjualan_id" id="" class="form-control">
                  @foreach($penjualans as $p)
                  <option value="<?=$p->id?>"><?=$p->no_faktur?></option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Penjualan Detail ID</label>
                  <select name="customer_id" id="" class="form-control">
                  @foreach($customers as $c)
                  <option value="<?=$c->id?>"><?=$c->nama_customer?></option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Barang</label>
                  <select name="barang_id" id="" class="form-control">
                  @foreach($barangs as $b)
                  <option value="<?=$b->id?>"><?=$b->nama_barang?></option>
                  @endforeach
                  </select>
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