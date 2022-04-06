<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $table = 'laptop';
    protected $fillable = [
        'kode_fa',
        'tanggal_beli',
        'ppb_pembelian',
        'ppb_pembelian',
        'serial_number',
        'lp_merk',
        'lp_tipe',
        'p_merk',
        'p_jenis',
        'p_tipe',
        'p_kecepatan',
        'r_kapasitas',
        'r_tipe',
        'r_slot',
        'hd_merk',
        'hd_tipe',
        'hd_kapasitas',
        'vga_merk',
        'vga_tipe',
        'vga_kapasitas',
        'eth_name',
        'eth_mac',
        'wireless_name',
        'wireless_mac',
        'bluetooth_name',
        'bluetooth_mac',
        'optical_drive',
        'ssd_merk',
        'ssd_tipe',
        'ssd_kapasitas'
    ];
}
