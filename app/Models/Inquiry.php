<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'first_name',
        'last_name',
        'email',
        'phone',
        'message',
        'target_office',
        'processed'
    ];

    protected $casts = [
        'processed' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the full name attribute
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * Scope a query to only include processed inquiries.
     */
    public function scopeProcessed(Builder $query): Builder
    {
        return $query->where('processed', true);
    }

    /**
     * Scope a query to only include pending inquiries.
     */
    public function scopePending(Builder $query): Builder
    {
        return $query->where('processed', false);
    }

    /**
     * Scope a query to only include inquiries for a specific office.
     */
    public function scopeForOffice(Builder $query, string $office): Builder
    {
        return $query->where('target_office', $office);
    }

    /**
     * Scope a query to only include inquiries created today.
     */
    public function scopeToday(Builder $query): Builder
    {
        return $query->whereDate('created_at', now()->toDateString());
    }

    /**
     * Get the formatted office name
     */
    public function getOfficeNameAttribute(): string
    {
        return match ($this->target_office) {
            'info.tz@top-archive.com' => 'Tanzania Office',
            'info@top-archive.com' => 'Ghana Office',
            'info.ng@top-archive.com' => 'Nigeria Office',
            default => $this->target_office,
        };
    }
}
