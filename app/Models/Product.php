<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Categorie;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['images','user_id','categorie_id','name', 'description','statut', 'prix', 'quantite'];

   public function user() {

        return $this->belongsTo(User::class,'user_id');
    }

    public function categorie() {

       return $this->belongsTo(Categorie::class,'categorie_id','id');
   }

   public function image() {

       return $this->hasMany(Image::class,'produit_id','id');
   }

}


