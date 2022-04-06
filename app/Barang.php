<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = [
        'barang_name', 
        'kategori_id',
        'supplier_id',
    ];
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }
    public function transaksi()
    {
        return $this->hasOne('App\Transaksi');
    }
   
}
