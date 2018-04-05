<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Barang;

class BarangController extends Controller
{
    public function index(){
			$barangs = Barang::All();
			// return Barang::All();
			$data = array(
					'title' 	=> 'Data Barang',
					'barangs'	=> $barangs,
					'no'			=> 1
			);
			return view('barang.index',$data);
    }
    public function create(){
			$data = array('title'   => 'Tambah Barang');
			return view('barang.create',$data);
    }
    public function store(){
			Barang::create([
				'nama_barang'   => request('nama_barang'),
				'harga'         => request('harga'),
			]);
			return redirect('/barang');
		}
		public function edit(Barang $barang){
			$data = array(
				'title'  => 'edit barang',
				'barang' => $barang
				// 'categories'    => $categories
			);
			return view('barang.edit',$data);
		}
		public function update(Barang $barang)
    {   
        $barang->update([
            'nama_barang'=> request('nama_barang'),
            'harga'      => request('harga')
        ]);
        return redirect('/barang');
    }
    public function destroy(Barang $barang){
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
