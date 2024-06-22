<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name_product', 'stok', 'price', 'deskription', 'id_brand'];
    protected $visible = ['name_product', 'stok', 'price', 'deskription', 'id_brand'];

    public function Brand(){
        return $this->belongsTo(Brand::class, 'id_brand');
    }
}
