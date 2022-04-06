<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    
    protected $fillable = [
        'supp_name', 
        'supp_address',
        'supp_phone',
        'supp_email',
    ];
    public function barang()
    {
        return $this->hasOne('App\Barang');
    }
}
