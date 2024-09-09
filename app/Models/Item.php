<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $connecton = "mysql";
    protected $table = "item";
    protected $fillable = [
        "nama_item",
        "link",
        "description"
    ];
    use HasFactory;
}
