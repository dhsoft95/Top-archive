<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class ImgCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Boot function to add model event listeners
     */
    protected static function boot()
    {
        parent::boot();

        // Auto-generate slug from name if not provided
        static::creating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);

                // Ensure slug is unique
                $count = 1;
                $originalSlug = $category->slug;

                while (static::where('slug', $category->slug)->exists()) {
                    $category->slug = $originalSlug . '-' . $count++;
                }
            }
        });
    }

    /**
     * The gallery images that belong to the image category.
     */
    public function galleryImages(): BelongsToMany
    {
        return $this->belongsToMany(GalleryImage::class, 'gallery_image_img_category');
    }
}