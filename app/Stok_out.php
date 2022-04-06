<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok_out extends Model
{
    protected $table = 'stok_out';
    protected $fillable = ['barang_id', 'jumlah', 'name', 'no_perm', 'section', 'date', 'input_by'];
    public function barang_stok()
    {
        return $this->belongsTo('App\Barang_stok', 'barang_id', 'id');
    }
}
