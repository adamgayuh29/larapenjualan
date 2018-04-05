@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"><?=$title?></div>
          <div class="panel-body">
            <form action="{{ route('customer.update',$customer) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
                <div class="form-group">
                  <label for="">Nama Customer</label>
                  <input type="text" class="form-control" name="nama_customer" placeholder="Masukan Nama Customer" value="{{$customer->nama_customer}}">
                </div>
                <div class="form-group">
                    <label for="">No Handphone</label>
                    <input type="text" class="form-control" name="no_hp" placeholder="Masukan No Handphone" value="{{$customer->no_hp}}">
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