<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\ImgCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display the gallery with optional category filtering.
     */
    public function index(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        // Get all active categories for the sidebar
        $categories = ImgCategory::where('is_active', true)
            ->orderBy('name')
            ->get();

        // Start with base query for active images
        $query = GalleryImage::where('is_active', true);

        // Apply category filter if specified
        $selectedCategory = null;
        if ($request->has('category')) {
            $categorySlug = $request->category;
            $selectedCategory = ImgCategory::where('slug', $categorySlug)
                ->where('is_active', true)
                ->first();

            if ($selectedCategory) {
                $query->whereHas('categories', function ($q) use ($selectedCategory) {
                    $q->where('img_categories.id', $selectedCategory->id);
                });
            }
        }

        // Order and paginate results
        $images = $query->orderBy('order')->paginate(7);

        // Dynamically group images
        $firstTwoImages = $images->take(2);
        $remainingImages = $images->skip(2);
        $largeImage = $remainingImages->count() > 0 ? $remainingImages->shift() : null;
        $middleTwoImages = $remainingImages->take(2);
        $lastTwoImages = $remainingImages->skip(2);

        return view('gallery', compact(
            'images',
            'firstTwoImages',
            'largeImage',
            'middleTwoImages',
            'lastTwoImages',
            'categories',
            'selectedCategory'
        ));
    }

    /**
     * Display a specific gallery image with its categories.
     */
    public function show($id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $image = GalleryImage::where('is_active', true)->findOrFail($id);

        // Get all active categories for the sidebar
        $categories = ImgCategory::where('is_active', true)
            ->orderBy('name')
            ->get();

        // Get related images from the same categories, limit to 4
        $relatedImages = GalleryImage::where('id', '!=', $id)
            ->where('is_active', true)
            ->whereHas('categories', function ($query) use ($image) {
                $query->whereIn('img_categories.id', $image->categories->pluck('id'));
            })
            ->orderBy('order')
            ->limit(4)
            ->get();

        return view('gallery-detail', compact('image', 'relatedImages', 'categories'));
    }

    /**
     * Display gallery filtered by a specific category.
     */
    public function byCategory($categorySlug): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        // Get all active categories for the sidebar
        $categories = ImgCategory::where('is_active', true)
            ->orderBy('name')
            ->get();

        // Find the requested category
        $category = ImgCategory::where('slug', $categorySlug)
            ->where('is_active', true)
            ->firstOrFail();

        // Get images for this category
        $images = $category->galleryImages()
            ->where('is_active', true)
            ->orderBy('order')
            ->paginate(7);

        // Dynamically group images
        $firstTwoImages = $images->take(2);
        $remainingImages = $images->skip(2);
        $largeImage = $remainingImages->count() > 0 ? $remainingImages->shift() : null;
        $middleTwoImages = $remainingImages->take(2);
        $lastTwoImages = $remainingImages->skip(2);

        return view('gallery', compact(
            'images',
            'firstTwoImages',
            'largeImage',
            'middleTwoImages',
            'lastTwoImages',
            'categories',
            'category'
        ));
    }
}