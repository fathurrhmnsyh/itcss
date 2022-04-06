<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = [
        'kategori_name',
    ];

    public function barang()
    {
        return $this->hasOne('App\Barang');
    }
}
