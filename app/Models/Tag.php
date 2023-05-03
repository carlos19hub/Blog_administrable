<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Asignacion masiva
    protected $fillable = ['name', 'slug', 'color'];

    // Metodo para que aparesca el slug en el link
    public function getRouteKeyName()
    {
        return "slug";
    }


    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
