<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeArtwork extends Model
{
    protected $fillable = [
        'slot',
        'image',
        'alt_text',
        'is_active',
    ];

    protected $casts = [
        'slot' => 'integer',
        'is_active' => 'boolean',
    ];
}
