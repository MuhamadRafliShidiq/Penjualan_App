<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'no_pelanggan';
    public $timestamps = false;

    protected $fillable = ['no_pelanggan', 'nama_pelanggan', 'alamat'];
}