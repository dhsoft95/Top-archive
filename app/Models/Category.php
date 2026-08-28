<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'color',
        'is_visible',
        'thumbnail',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
        'meta_keywords' => 'array',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
