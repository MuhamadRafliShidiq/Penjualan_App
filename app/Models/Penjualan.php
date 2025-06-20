<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'faktur';
    public $timestamps = false;

    protected $fillable = ['faktur', 'no_pelanggan', 'tanggal_penjualan'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'no_pelanggan', 'no_pelanggan');
    }
}