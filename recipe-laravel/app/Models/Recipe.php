<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    //Relationship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    // protected $fillable = ['title', 'category', 'ingredient', 'instruction'];
}
