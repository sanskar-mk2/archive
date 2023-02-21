<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function sfw(): HasOne
    {
        return $this->hasOne(Sfw::class);
    }

    public function characterTags(): BelongsToMany
    {
        return $this->belongsToMany(CharacterTag::class, 'character_tag_media', 'media_id', 'character_tag_id');
    }
}
