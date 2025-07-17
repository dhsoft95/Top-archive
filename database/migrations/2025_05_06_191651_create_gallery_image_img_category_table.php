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
        Schema::create('gallery_image_img_category', function (Blueprint $table) {
            // Only use one id column
            $table->id();
            $table->foreignId('gallery_image_id')->constrained()->onDelete('cascade');
            $table->foreignId('img_category_id')->constrained('img_categories')->onDelete('cascade');
            $table->timestamps();

            // Use a shorter name for the unique constraint
            $table->unique(['gallery_image_id', 'img_category_id'], 'img_cat_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_image_img_category');
    }
};
