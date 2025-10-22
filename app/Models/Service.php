<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'content',
        'icon',
        'image',
        'parent_id',
        'sort_order',
        'is_active',
        'is_featured'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];

    // Relationship: Service has many sub-services
    public function children(): HasMany
    {
        return $this->hasMany(Service::class, 'parent_id');
    }

    // Relationship: Service belongs to parent service
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'parent_id');
    }

    // Scope: Get only active services
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope: Get only featured services
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope: Get main services (no parent)
    public function scopeMain($query)
    {
        return $query->whereNull('parent_id');
    }

    // Scope: Get sub-services (has parent)
    public function scopeSub($query)
    {
        return $query->whereNotNull('parent_id');
    }
}
