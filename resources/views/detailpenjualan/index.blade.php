@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1 class="text-center">Transaksi</h1>
      <a href="{{ url('/detailpenjualan/create') }}" class="btn btn-primary btn-sm">Tambah Penjualan <i class="fa fa-plus"></i></a>
      

      <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">No Faktur</th>
            <th scope="col">ID Customer</th>
            <th scope="col">ID barang</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jumlah</th>
          </tr>
        </thead>
        
        <tbody>
          @foreach($detailpenjualans as $detailpenjualans)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>ADM{{$detailpenjualans->id_faktur}}</td>
            <td>{{$detailpenjualans->nama_customer}}</td>
            <td>{{$detailpenjualans->nama_barang}}</td>
            <td>{{$detailpenjualans->created_at}}</td>
            <td>{{$detailpenjualans->jumlah}}</td>
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