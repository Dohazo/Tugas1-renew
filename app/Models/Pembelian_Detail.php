<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian_Detail extends Model
{
    protected $connecton = "mysql";
    protected $table = "pembelian_detail";
    protected $fillable = [
        "nama_barang",
        "kuantitas",
        "harga",
        "pembelian_id"
    ];

    public function pembelian(){
        return $this->belongsTo(Pembelian::class,"pembelian_id","id");
    }
    use HasFactory;
}
