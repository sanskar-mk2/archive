<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sfw extends Model
{
    use HasFactory;

    protected $fillable = [
        'media_id',
        'is_sfw',
    ];

    public function media(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }
}
