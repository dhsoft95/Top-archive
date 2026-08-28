<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes — v1
|--------------------------------------------------------------------------
|
| The 'api' middleware group (throttle:api, SubstituteBindings) is applied
| automatically by bootstrap/app.php. All routes are prefixed with /api.
|
*/

Route::prefix('v1')->middleware('throttle:api')->group(function () {

    // --- Blog ---
    Route::get('/posts',          [PostController::class, 'index']);
    Route::get('/posts/{slug}',   [PostController::class, 'show']);

    // --- Taxonomy ---
    Route::get('/categories',     [CategoryController::class, 'index']);
    Route::get('/tags',           [TagController::class, 'index']);

    // --- Gallery ---
    Route::get('/gallery',                       [GalleryController::class, 'index']);
    Route::get('/gallery/{id}',                  [GalleryController::class, 'show']);

    // --- Protected (future Next.js write actions) ---
    Route::middleware('auth:api')->group(function () {
        // Reserved for authenticated endpoints (e.g. submit comment, user profile)
    });
});
