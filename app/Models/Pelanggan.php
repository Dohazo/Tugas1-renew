<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $connecton = "mysql";
    protected $table = "pelanggan";
    protected $fillable = [
        "nama",
        "tahun_masuk",
        "tgl_lahir",
        "alamt",
        "notelp",
        "is_aktif"
    ];
    public function pembelian(){
        return $this->hasMany(Pembelian::class,"pelanggan_id","id");
    }
    use HasFactory;
}
