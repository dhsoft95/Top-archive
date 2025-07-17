<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $query = Post::query()
            ->with(['category', 'author', 'tags'])
            ->where('status', 'published')
            ->where('published_at', '<=', now());

        // Category filter
        if ($request->has('category')) {
            $category = $request->query('category');
            if ($category !== 'all') {
                $query->whereHas('category', function($q) use ($category) {
                    $q->where('slug', $category);
                });
            }
        }



        // Get featured post
        $featuredPost = Post::where('is_featured', true)
            ->where('status', 'published')
            ->where('published_at', '<=', now())
            ->with(['category', 'author'])
            ->first();

        // Get main blog posts
        $blogPosts = $query->when($featuredPost, function($q) use ($featuredPost) {
            return $q->where('id', '!=', $featuredPost->id);
        })
            ->latest('published_at')
            ->paginate(6);

        return view('blog', compact('blogPosts', 'featuredPost'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', 'published')
            ->where('published_at', '<=', now())
            ->with(['category', 'author', 'tags'])
            ->firstOrFail();

        // Record view
        $post->views()->create([
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'viewed_at' => now(),
        ]);

        // Get related posts from same category
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('status', 'published')
            ->where('published_at', '<=', now())
            ->with(['category', 'author'])
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }

    public function category($slug)
    {

        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = Post::whereHas('category', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
            ->where('status', 'published')
            ->where('published_at', '<=', now())
            ->with(['author', 'tags'])
            ->latest('published_at')
            ->paginate(6);
        return view('blog.category', compact('category', 'posts'));
    }
    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();

        $posts = Post::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
            ->where('status', 'published')
            ->where('published_at', '<=', now())
            ->with(['category', 'author'])
            ->latest('published_at')
            ->paginate(9);

        return view('blog.tag', compact('tag', 'posts'));
    }
}