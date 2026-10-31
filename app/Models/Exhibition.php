<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    protected $fillable = [
        'type',
        'title',
        'year',
        'city',
        'country',
        'sort_order',
        'is_published',
    ];

    protected $casts = [
        'year' => 'integer',
        'sort_order' => 'integer',
        'is_published' => 'boolean',
    ];
}
