<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Relacion 1 a n inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacion 1 a n inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relacion n a n 
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // Relacion 1 a 1 polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
