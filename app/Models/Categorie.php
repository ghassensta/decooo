<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable=['name','imagecat'];


    public function products()
{
    return $this->hasMany(Product::class, 'categorie_id', 'id');
}

}

