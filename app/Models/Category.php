<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // activamos la agnacion masiva
    protected $fillable = ['name', 'slug'];

    // Metodo para que aparesca el slug en el link
    public function getRouteKeyName()
    {
        return "slug";
    }



    // Relacion 1 a n
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
