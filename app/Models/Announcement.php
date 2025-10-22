<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'file_path',
        'start_date',
        'end_date',
        'is_published',
        'is_urgent'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_urgent' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    // Scope: Get only published announcements
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Scope: Get urgent announcements
    public function scopeUrgent($query)
    {
        return $query->where('is_urgent', true);
    }
}
