@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"><?=$title?></div>
          <div class="panel-body">
            <form action="{{ url('/penjualan/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Penjualan Detail ID</label>
                  <select name="penjualan" id="" class="form-control">
                  @foreach($penjualans as $p)
                  <option value="<?=$c->id?>"><?=$p->no_faktur?></option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="">ID Customer</label>
                    <input type="text" class="form-control" name="custumer_id" placeholder="Masukan Customer ID">
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