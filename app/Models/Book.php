<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(App\Models\Category::class);
    }

    public function image()
    {
        return $this->morphOne(App\Models\Image::class, 'imageable');
    }

    public function reviews()
    {
        return $this->hasMany(App\Models\Review::class);
    }
}
