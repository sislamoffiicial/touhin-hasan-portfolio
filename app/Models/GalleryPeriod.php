<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GalleryPeriod extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'sort_order',
        'is_published',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'is_published' => 'boolean',
    ];

    public function galleryItems(): HasMany
    {
        return $this->hasMany(GalleryItem::class);
    }
}
