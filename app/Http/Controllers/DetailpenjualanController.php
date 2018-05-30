<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Detailpenjualan;
use App\Penjualan;
use App\Barang;
use App\Customer;
use DB;
use App\Crud;


class DetailpenjualanController extends Controller
{
     public function index(){
			$detailpenjualans = Detailpenjualan::All();
			$detailpenjualans = DB::table('detailpenjualans')
				->join('customers','customers.id','=','detailpenjualans.customer_id')
				->join('barangs','barangs.id','=','detailpenjualans.barang_id')
				->get();
			// return Customer::All();
			$data = array(
					'title' 			=> 'Data Penjualan Detail',
					'detailpenjualans'	=> $detailpenjualans,
					'no'				=> 1
			);
			return view('detailpenjualan.index',$data);
    }
    public function create(){
    		$penjualans = Penjualan::All();
    		$barangs = Barang::All();
    		$customers = Customer::All();
			$data = array(
				'title'   => 'Tambah Detail Penjualan',
				'penjualans' => $penjualans,
				'barangs' => $barangs,
				'customers' => $customers,
			);
			return view('detailpenjualan.create',$data);
    }

     public function store(Request $request){
     	// return $request->all();
			Detailpenjualan::create([
				'penjualan_id'   => $request->penjualan_id,
				'customer_id'    => $request->customer_id,
				'barang_id'		=> $request->barang_id,
				'jumlah'		=> $request->jumlah,
			]);
			return redirect('/detailpenjualan');
		}

		public function edit(Detailpenjualan $detailpenjualan){
			$data = array(
				'title'  => 'edit detailpenjualan',
				'detailpenjualan' => $detailpenjualan
				// 'categories'    => $categories
			);
			return view('detailpenjualan.edit',$data);
		}
		public function update(Detailpenjualan $detailpenjualan)
    {   
        $detailpenjualan->update([
            'penjualan_id'=> request('penjualan_id'),
            'customer_id'      => request('customer_id')
        ]);
        return redirect('/detailpenjualan');
    }
    public function destroy(Detailpenjualan $detailpenjualan){
        $detailpenjualan->delete();
        return redirect()->route('detailpenjualan.index');
    } 
    public function harga()
	{
		$input = Input::get('cari');
		$name = \App\Orang::where('Name', 'LIKE', '%'.$input.'%')->get();
		return view('result', compact('name'));
	}

	public function json(){
        return Datatables::of(transaksi::all())->make(true);
    }

     public function loadData(Request $request)
    {
    	 $query = $request->get('q');
        $hasil = Crud::where('nama_customer', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('index', compact('hasil', 'query'));
    }
}
