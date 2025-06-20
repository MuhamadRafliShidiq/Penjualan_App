<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'kd_barang';
    public $timestamps = false;

    protected $fillable = [
        'kd_barang',
        'nama_barang',
        'harga_barang'
    ];
}
