<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailpenjualan extends Model
{
        protected $fillable = ['penjualan_id','customer_id','barang_id'];

}
