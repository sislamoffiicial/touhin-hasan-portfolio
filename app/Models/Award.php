<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable = [
        'title',
        'year',
        'city',
        'country',
        'image',
        'sort_order',
        'is_published',
    ];

    protected $casts = [
        'year' => 'integer',
        'sort_order' => 'integer',
        'is_published' => 'boolean',
    ];
}
