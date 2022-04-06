<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komputer extends Model
{
    protected $table = 'komputer';
    protected $fillable = [
        'kode_fa',
        'tanggal_beli', 
        'ppb_pembelian', 
        'p_merk', 
        'p_jenis', 
        'p_tipe', 
        'p_kecepatan', 
        'm_merk',
        'm_tipe',
        'r_kapasitas',
        'r_tipe',
        'r_slot',
        'hd1_merk',
        'hd1_tipe',
        'hd1_kapasitas',
        'hd2_merk',
        'hd2_tipe',
        'hd2_kapasitas',
        'vga_external',
        'lan_nama',
        'lan_mac',
        'ssd_merk',
        'ssd_tipe',
        'ssd_kapasitas'
    ];
}
