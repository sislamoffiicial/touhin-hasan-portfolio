<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Press extends Model
{
    protected $fillable = [
        'publication_name',
        'year',
        'image',
        'press_text',
        'sort_order',
        'is_published',
    ];

    protected $casts = [
        'year' => 'integer',
        'sort_order' => 'integer',
        'is_published' => 'boolean',
    ];
}
