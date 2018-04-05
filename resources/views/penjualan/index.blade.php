@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1 class="text-center">Penjualan</h1>
      <a href="{{ url('/penjualan/create') }}" class="btn btn-primary btn-sm">Tambah Penjualan <i class="fa fa-plus"></i></a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">ID Penjualan Detail</th>
            <th scope="col">ID Customer</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($penjualans as $penjualans)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$penjualans->no_faktur}}</td>
            <td>{{$penjualans->customer_id}}</td>
            <td>
               
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection()