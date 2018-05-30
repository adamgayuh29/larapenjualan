<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailpenjualan extends Model
{
        protected $fillable = ['customer_id','barang_id','jumlah'];

}
