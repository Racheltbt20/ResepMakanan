<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function galleries(){
        return $this->hasMany(Gallery::class);
    }

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }
}
