<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PostController extends Controller
{
    private const DEFAULT_PER_PAGE = 12;
    private const MAX_PER_PAGE = 50;

    public function index(Request $request): AnonymousResourceCollection
    {
        $perPage = min((int) ($request->query('per_page', self::DEFAULT_PER_PAGE)), self::MAX_PER_PAGE);

        $posts = Post::published()
            ->with(['category', 'tags', 'author'])
            ->when($request->query('category'), function ($query, $slug) {
                $query->whereHas('category', fn ($q) => $q->where('slug', $slug));
            })
            ->when($request->query('tag'), function ($query, $slug) {
                $query->whereHas('tags', fn ($q) => $q->where('slug', $slug));
            })
            ->when($request->boolean('featured'), fn ($query) => $query->featured())
            ->latest('published_at')
            ->paginate($perPage);

        return PostResource::collection($posts);
    }

    public function show(Request $request, string $slug): PostResource
    {
        $post = Post::published()
            ->with(['category', 'tags', 'author'])
            ->where('slug', $slug)
            ->firstOrFail();

        $post->recordView($request);

        return new PostResource($post);
    }
}
