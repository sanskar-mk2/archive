<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('character_tag_media', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\CharacterTag::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Media::class)->constrained()->cascadeOnDelete();
            $table->unique(['character_tag_id', 'media_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('character_tag_media', function (Blueprint $table) {
            //
        });
    }
};
