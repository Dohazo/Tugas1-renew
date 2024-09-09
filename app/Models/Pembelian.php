<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $connecton = "mysql";
    protected $table = "pembelian";
    protected $fillable = [
        "nomor_pembelian",
        "tanggal",
        "pelanggan_id"
    ];

    public function pembelian_detail(){
        return $this->hasMany(Pembelian_Detail::class,"pembelian_id","id");
    }
    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class,"pelanggan_id","id");
    }
    use HasFactory;
}
