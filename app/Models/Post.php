<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'featured_image',
        'is_featured',
        'status',
        'published_at',
        'category_id',
        'author_id',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'comments_enabled',
        'pin_to_top',
        'country' // Added country field
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
        'deleted_at' => 'datetime',
        'meta_keywords' => 'json',
        'comments_enabled' => 'boolean',
        'pin_to_top' => 'boolean'
    ];

    // Country constants
    const COUNTRIES = [
        'tanzania' => 'Tanzania',
        'ghana' => 'Ghana',
        'nigeria' => 'Nigeria'
    ];

    // Relationships
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function views(): HasMany
    {
        return $this->hasMany(PostView::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // Accessors
    public function getFeaturedImageUrlAttribute(): ?string
    {
        return $this->featured_image ? asset('storage/' . $this->featured_image) : null;
    }

    public function getReadTimeAttribute(): int
    {
        $words = str_word_count(strip_tags($this->content));
        return ceil($words / 200);
    }

    public function getCountryNameAttribute(): ?string
    {
        return $this->country ? self::COUNTRIES[$this->country] ?? $this->country : null;
    }

    public function getCountryFlagAttribute(): ?string
    {
        $flags = [
            'tanzania' => '🇹🇿',
            'ghana' => '🇬🇭',
            'nigeria' => '🇳🇬'
        ];

        return $this->country ? $flags[$this->country] ?? null : null;
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
            ->where('published_at', '<=', now());
    }

    public function scopeScheduled($query)
    {
        return $query->where('status', 'scheduled')
            ->where('published_at', '>', now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopePinned($query)
    {
        return $query->where('pin_to_top', true);
    }

    public function scopePopular($query)
    {
        return $query->withCount('views')
            ->orderByDesc('views_count');
    }

    public function scopeFromCountry($query, $country)
    {
        return $query->where('country', $country);
    }

    public function scopeTanzania($query)
    {
        return $query->where('country', 'tanzania');
    }

    public function scopeGhana($query)
    {
        return $query->where('country', 'ghana');
    }

    public function scopeNigeria($query)
    {
        return $query->where('country', 'nigeria');
    }

    // Methods
    public function recordView($request): PostView
    {
        return $this->views()->create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'user_id' => auth()->id()
        ]);
    }

    // Static helper methods
    public static function getCountriesList(): array
    {
        return self::COUNTRIES;
    }

    public static function getCountryOptions(): array
    {
        return collect(self::COUNTRIES)->map(function ($name, $code) {
            return ['value' => $code, 'label' => $name];
        })->values()->toArray();
    }
}