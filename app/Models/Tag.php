<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'color',
        'is_visible',
        'description',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
