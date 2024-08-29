<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title', 'ingredients', 'instructions', 'image',
    ];

    protected $casts = [
        'ingredients' => 'array',
        'instructions' => 'array',
    ];

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
