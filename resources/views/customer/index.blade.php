@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1 class="text-center">Customer</h1>
      <a href="{{ url('/customer/create') }}" class="btn btn-primary btn-sm">Tambah Customer <i class="fa fa-plus"></i></a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">No Handphone</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$customer->nama_customer}}</td>
            <td>{{$customer->no_hp}}</td>
            <td>
                <a href="{{ route('customer.edit', $customer) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('customer.destroy',$customer) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection()