<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GalleryItem extends Model
{
    protected $fillable = [
        'category',
        'gallery_period_id',
        'title',
        'image',
        'note',
        'sort_order',
        'is_published',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'is_published' => 'boolean',
    ];

    public function galleryPeriod(): BelongsTo
    {
        return $this->belongsTo(GalleryPeriod::class);
    }
}
