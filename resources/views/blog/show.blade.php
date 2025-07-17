@extends('layouts.app')

@section('title', isset($post) ? $post->title . ' - Top Archive' : 'Blog Post - Top Archive')

@push('styles')
    <style>
        /* Modern styling for the blog post */
        .hero-section {
            position: relative;
            min-height: 600px;
            background-color: #0a0a0a;
        }

        .hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.6;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.8));
        }

        .category-badge {
            padding: 8px 16px;
            background-color: rgba(255, 255, 255, 0.9);
            color: #000;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .category-badge:hover {
            background-color: #fff;
            transform: translateY(-2px);
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .blog-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #2c3e50;
        }

        .blog-content p {
            margin-bottom: 1.8rem;
        }

        .blog-content h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-top: 2.5rem;
            margin-bottom: 1.2rem;
        }

        .blog-content img {
            max-width: 100%;
            border-radius: 12px;
            margin: 2.5rem 0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .tag-badge {
            padding: 6px 14px;
            border-radius: 20px;
            background-color: #f8f9fa;
            color: #495057;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .tag-badge:hover {
            background-color: #e9ecef;
            color: #212529;
            transform: translateY(-2px);
        }

        .share-button {
            padding: 8px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .share-button:hover {
            transform: translateY(-2px);
        }

        .twitter-share {
            background-color: #1DA1F2;
            border-color: #1DA1F2;
        }

        .linkedin-share {
            background-color: #0A66C2;
            border-color: #0A66C2;
        }

        .related-post-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }

        .related-post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .related-post-image {
            height: 200px;
            object-fit: cover;
        }

        .category-list-item {
            transition: all 0.3s ease;
            border: none;
            padding: 12px 20px;
        }

        .category-list-item:hover {
            background-color: #f8f9fa;
            transform: translateX(5px);
        }
    </style>
@endpush

@section('content')
    @if(isset($post))
        <!-- Hero Section -->
        <div class="hero-section">
            <img src="{{ asset('storage/' . $post->featured_image) }}"
                 alt="{{ $post->title }}"
                 class="hero-image">
            <div class="hero-overlay"></div>

            <div class="container position-relative py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center text-white my-5">
                        <a href="{{ route('blog.category', $post->category->slug) }}"
                           class="category-badge text-decoration-none mb-4 d-inline-block">
                            {{ $post->category->name }}
                        </a>

                        <h1 class="display-4 fw-bold mb-4 lh-sm">{{ $post->title }}</h1>

                        <div class="d-flex justify-content-center align-items-center gap-4">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('path/to/author/avatar.jpg') }}"
                                     alt="{{ $post->author->name }}"
                                     class="author-avatar">
                                <div class="ms-3 text-start">
                                    <div class="fw-medium">{{ $post->author->name }}</div>
                                    <small class="text-light opacity-75">Content Writer</small>
                                </div>
                            </div>
                            <div class="vr bg-white opacity-25 d-none d-md-block" style="height: 40px;"></div>
                            <div>
                                <i class="far fa-calendar-alt me-2"></i>
                                {{ $post->published_at->format('F d, Y') }}
                            </div>
                            <div class="vr bg-white opacity-25 d-none d-md-block" style="height: 40px;"></div>
                            <div>
                                <i class="far fa-clock me-2"></i>
                                {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-light py-5">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <!-- Article Card -->
                        <div class="bg-white rounded-4 shadow-sm p-4 p-md-5 mb-5">
                            <!-- Article Content -->
                            <div class="blog-content">
                                {!! $post->content !!}
                            </div>

                            <!-- Tags -->
                            @if($post->tags->count() > 0)
                                <div class="border-top pt-4 mt-5">
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach($post->tags as $tag)
                                            <a href="{{ route('blog.tag', $tag->slug) }}"
                                               class="tag-badge">
                                                #{{ $tag->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Share Buttons -->
                            <div class="border-top pt-4 mt-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-semibold text-dark">Share this article</span>
                                    <div class="d-flex gap-2">
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}"
                                           target="_blank"
                                           class="btn btn-warning share-button twitter-share">
                                            <i class="fab fa-twitter me-2"></i>Tweet
                                        </a>
                                        <a href="https://www.linkedin.com/shareArticle?url={{ urlencode(request()->url()) }}"
                                           target="_blank"
                                           class="btn btn-warning share-button linkedin-share">
                                            <i class="fab fa-linkedin me-2"></i>Share
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Related Posts -->
                        @if(isset($relatedPosts) && $relatedPosts->count() > 0)
                            <h3 class="h4 mb-4">Related Articles</h3>
                            <div class="row g-4">
                                @foreach($relatedPosts as $relatedPost)
                                    <div class="col-md-6">
                                        <div class="card related-post-card h-100">
                                            <img src="{{ asset('storage/' . $relatedPost->featured_image) }}"
                                                 alt="{{ $relatedPost->title }}"
                                                 class="related-post-image">
                                            <div class="card-body">
                                                <h4 class="h6 card-title mb-2">
                                                    <a href="{{ route('blog.show', $relatedPost->slug) }}"
                                                       class="text-dark text-decoration-none stretched-link">
                                                        {{ $relatedPost->title }}
                                                    </a>
                                                </h4>
                                                <small class="text-muted">
                                                    {{ $relatedPost->published_at->format('M d, Y') }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-3">
                        <div class="position-sticky" style="top: 2rem;">
                            <!-- Categories -->
                            <div class="bg-white rounded-4 shadow-sm p-4">
                                <h3 class="h5 mb-4">Categories</h3>
                                <div class="list-group list-group-flush">
                                    @foreach(\App\Models\Category::withCount('posts')->get() as $category)
                                        <a href="{{ route('blog.category', $category->slug) }}"
                                           class="list-group-item category-list-item d-flex justify-content-between align-items-center">
                                            {{ $category->name }}
                                            <span class="badge bg-warning rounded-pill">
                                                {{ $category->posts_count }}
                                            </span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
        <!-- Not Found -->
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="py-5">
                        <div class="display-1 mb-4">🤔</div>
                        <h2 class="h3 mb-4">Post Not Found</h2>
                        <p class="text-muted mb-4">
                            The blog post you're looking for doesn't exist or has been removed.
                        </p>
                        <a href="{{ route('blog.index') }}"
                           class="btn btn-primary btn-lg">
                            <i class="fas fa-arrow-left me-2"></i>
                            Return to Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection