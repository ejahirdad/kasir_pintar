<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tBarang extends Model
{
    protected $table = 't_barangs';
    protected $fillable = ['kode_barang ','nama_barang','stok','harga_jual','harga_beli'];
    
}
