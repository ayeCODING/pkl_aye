<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

     protected $fillable = ['name_brand'];
    protected $visible = ['name_brand'];

    public function Product(){
        return $this->hasMany(Product::class, 'id_band');
    }
}
