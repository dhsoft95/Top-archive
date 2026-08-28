<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\GalleryImageResource;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GalleryController extends Controller
{
    private const DEFAULT_PER_PAGE = 12;
    private const MAX_PER_PAGE = 50;

    public function index(Request $request): AnonymousResourceCollection
    {
        $perPage = min((int) ($request->query('per_page', self::DEFAULT_PER_PAGE)), self::MAX_PER_PAGE);

        $images = GalleryImage::where('is_active', true)
            ->with('categories')
            ->when($request->query('category'), function ($query, $slug) {
                $query->whereHas('categories', fn ($q) => $q->where('slug', $slug));
            })
            ->orderBy('order')
            ->paginate($perPage);

        return GalleryImageResource::collection($images);
    }

    public function show(int $id): GalleryImageResource
    {
        $image = GalleryImage::where('is_active', true)
            ->with('categories')
            ->findOrFail($id);

        return new GalleryImageResource($image);
    }
}
