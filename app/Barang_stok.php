<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang_stok extends Model
{
    protected $table = 'barang_stok';
    protected $fillable = [
        'stok'
    ];
    public function stok_out()
    {
        return $this->hasMany('App\Stok_out', 'barang_id', 'id');
    }
}
