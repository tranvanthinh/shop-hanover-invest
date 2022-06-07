<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function thumbs()
    {
        return $this->morphMany(Media::class, 'mediaable');
    }

    public function getPriceUsdFormatAttribute()
    {
        return '$' . number_format($this->attributes['price'], 2);
    }
}
