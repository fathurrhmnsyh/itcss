<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $table = "printer";
    protected $fillable = [
        'purc_date',
        'purc_ppb',
        'printer_name',
        'fa_code',
        'type',
        'code',
        'status',
        'info',

    ];
}
