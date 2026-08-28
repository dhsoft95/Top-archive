<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tags', function (Blueprint $table) {
            $table->string('color')->nullable()->default('#94A3B8')->after('slug');
            $table->boolean('is_visible')->default(true)->after('color');
            $table->text('description')->nullable()->after('is_visible');
            $table->string('meta_title')->nullable()->after('description');
            $table->text('meta_description')->nullable()->after('meta_title');
        });
    }

    public function down(): void
    {
        Schema::table('tags', function (Blueprint $table) {
            $table->dropColumn(['color', 'is_visible', 'description', 'meta_title', 'meta_description']);
        });
    }
};
