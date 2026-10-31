<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    protected $fillable = [
        'location',
        'email',
        'studio_label',
        'studio_address',
        'phone',
        'google_map_embed_url',
    ];
}
