<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class Image extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['produit_id','path'];


    public function produit(){

        return $this->belongsTo(Product::class,'produit_id','id');
    }
}


