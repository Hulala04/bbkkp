<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'file_path',
        'cover_image',
        'author',
        'published_date',
        'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_date' => 'date',
    ];

    // Scope: Get only published publications
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
