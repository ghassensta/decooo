<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Adresse extends Model
{
    use HasFactory;


     protected $fillable = ['user_id', 'street', 'city', 'state', 'country', 'postal_code'];


        public function user()
        {
            return $this->belongsTo(User::class);
        }

}
