<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GalleryImage extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * The categories that belong to the gallery image.
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(ImgCategory::class, 'gallery_image_img_category');
    }

    /**
     * The categories that belong to the gallery image.
     * This is an alias method to maintain compatibility with form relationship names.
     */
    public function ImgCategory(): BelongsToMany
    {
        return $this->belongsToMany(ImgCategory::class, 'gallery_image_img_category');
    }
}