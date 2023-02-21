<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CharacterTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
    ];

    public function media(): BelongsToMany
    {
        return $this->belongsToMany(Media::class, 'character_tag_media', 'character_tag_id', 'media_id');
    }
}
