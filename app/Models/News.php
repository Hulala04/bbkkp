<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'author',
        'type',
        'is_published',
        'is_featured',
        'published_at'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
    ];

    // Scope: Get only published news
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Scope: Get only featured news
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope: Get news by type
    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }
}
