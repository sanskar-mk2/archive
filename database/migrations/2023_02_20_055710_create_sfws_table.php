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
        Schema::create('sfws', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Media::class)->constrained()->cascadeOnDelete();
            $table->boolean('is_sfw')->default(false);
            $table->unique('media_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sfws');
    }
};
