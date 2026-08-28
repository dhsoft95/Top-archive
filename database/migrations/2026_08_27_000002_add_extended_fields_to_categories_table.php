<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('color')->nullable()->default('#94A3B8')->after('description');
            $table->boolean('is_visible')->default(true)->after('color');
            $table->string('thumbnail')->nullable()->after('is_visible');
            $table->string('meta_title')->nullable()->after('thumbnail');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->json('meta_keywords')->nullable()->after('meta_description');

            // Widen description to text so MarkdownEditor content fits
            $table->text('description')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn(['color', 'is_visible', 'thumbnail', 'meta_title', 'meta_description', 'meta_keywords']);
            $table->string('description')->nullable()->change();
        });
    }
};
