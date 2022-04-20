<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(User::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // relacion de muchos a muchos
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    //relacion polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
