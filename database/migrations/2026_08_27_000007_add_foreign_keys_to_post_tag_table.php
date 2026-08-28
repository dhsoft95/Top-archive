<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('post_tag', function (Blueprint $table) {
            // Remove duplicate pivot rows before adding unique constraint
            // (safe no-op if table is empty or already clean)
            \DB::statement('
                DELETE pt1 FROM post_tag pt1
                INNER JOIN post_tag pt2
                WHERE pt1.id > pt2.id
                  AND pt1.post_id = pt2.post_id
                  AND pt1.tag_id = pt2.tag_id
            ');

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->unique(['post_id', 'tag_id']);
        });
    }

    public function down(): void
    {
        Schema::table('post_tag', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
            $table->dropForeign(['tag_id']);
            $table->dropUnique(['post_id', 'tag_id']);
        });
    }
};
