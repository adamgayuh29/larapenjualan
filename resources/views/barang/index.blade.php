@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-9 col-md-offset-1">
      <h1 class="text-center">Barang</h1>
      <a href="{{ url('/barang/create') }}" class="btn btn-primary btn-sm">Tambah Barang <i class="fa fa-plus"></i></a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Stock</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($barangs as $barang)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$barang->nama_barang}}</td>
            <td>{{$barang->harga}}</td>
            <td>{{$barang->stock}}</td>
            <td scope="row">
                <a href="{{ route('barang.edit', $barang) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('barang.destroy',$barang) }}" method="post">
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