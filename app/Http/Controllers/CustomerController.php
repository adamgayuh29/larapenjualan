<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;

class CustomerController extends Controller
{
     public function index(){
			$customers = Customer::All();
			// return Customer::All();
			$data = array(
					'title' 	=> 'Data Customer',
					'customers'	=> $customers,
					'no'			=> 1
			);
			return view('customer.index',$data);
    }
    public function create(){
			$data = array('title'   => 'Tambah Customer');
			return view('customer.create',$data);
    }

     public function store(){
			Customer::create([
				'nama_customer'   => request('nama_customer'),
				'no_hp'         => request('no_hp'),
			]);
			return redirect('/customer');
		}
		public function edit(Customer $customer){
			$data = array(
				'title'  => 'edit customer',
				'customer' => $customer
				// 'categories'    => $categories
			);
			return view('customer.edit',$data);
		}
		public function update(Customer $customer)
    {   
        $customer->update([
            'nama_customer'=> request('nama_customer'),
            'no_hp'      => request('no_hp')
        ]);
        return redirect('/customer');
    }
    public function destroy(Customer $customer){
        $customer->delete();
        return redirect()->route('customer.index');
    } 
}
