<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Penjualan;
use App\Customer;
use DB;

class PenjualanController extends Controller
{
      public function index(){
			$penjualans = Penjualan::All();
			$data = array(
					'title' 	=> 'Data Penjualan',
					'penjualans'	=> $penjualans,
					'no'			=> 1
			);
			return view('penjualan.index',$data);
    }
    public function create(){
			$data = array('title'   => 'Tambah Penjualan');
			return view('penjualan.create',$data);
    }

     public function store(){
			penjualan::create([
				'penjualan_detail_id'   => request('penjualan_detail_id'),
				'customer_id'         => request('customer_id'),
			]);
			return redirect('/penjualan');
	}
}
