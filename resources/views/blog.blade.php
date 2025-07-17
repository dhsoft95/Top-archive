@extends('layouts.app')

@section('title', 'Top Archive - News and Blogs')

@section('content')

    <!-- Header -->
    <div class="blog-header">
        <div class="container">
            <h1 class="display-4 fw-bold">Top Archive<br>News and Blogs</h1>

            <!-- Country Navigation -->
            <ul class="nav blog-categories">
                <li class="nav-item">
                    <a class="nav-link {{ request()->query('country') === null ? 'active' : '' }}"
                       href="{{ route('blog.index') }}">
                        All Countries
                    </a>
                </li>
                @foreach(['tanzania' => 'Tanzania', 'ghana' => 'Ghana', 'nigeria' => 'Nigeria'] as $slug => $name)
                    <li class="nav-item">
                        <a class="nav-link {{ request()->query('country') === $slug ? 'active' : '' }}"
                           href="{{ route('blog.index', ['country' => $slug]) }}">
                            {{ $name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        <!-- Featured Blog -->
        @if($featuredPost)
            <a href="{{ route('blog.show', $featuredPost->slug) }}" class="featured-blog-link">
                <div class="featured-blog mb-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <span class="badge bg-light text-dark mb-2">{{ $featuredPost->category->name }}</span>
                            @if($featuredPost->country)
                                <span class="badge bg-primary text-white mb-2 ms-2">{{ $featuredPost->country_flag }} {{ $featuredPost->country_name }}</span>
                            @endif
                            <h2 class="h3 mb-3">{{ $featuredPost->title }}</h2>
                            <div class="blog-meta mb-3">
                                <span>{{ $featuredPost->published_at->format('d M Y') }}</span>
                                <span class="mx-2">by</span>
                                <span>{{ $featuredPost->author->name }}</span>
                            </div>
                            <p class="text-muted">{{ $featuredPost->excerpt }}</p>
                        </div>
                        <div class="col-lg-6">
                            @if($featuredPost->featured_image)
                                <img src="{{ Storage::url($featuredPost->featured_image) }}"
                                     alt="{{ $featuredPost->title }}"
                                     class="featured-img">
                            @endif
                        </div>
                    </div>
                </div>
            </a>
        @endif

        <!-- Blog Grid -->
        <div class="row g-4">
            @foreach($blogPosts as $post)
                <div class="col-lg-4">
                    <a href="{{ route('blog.show', $post->slug) }}" class="blog-card">
                        <span class="badge bg-light text-dark">{{ $post->category->name }}</span>
                        @if($post->country)
                            <span class="badge bg-primary text-white ms-2">{{ $post->country_flag }} {{ $post->country_name }}</span>
                        @endif
                        @if($post->featured_image)
                            <img src="{{ Storage::url($post->featured_image) }}"
                                 alt="{{ $post->title }}"
                                 class="blog-img">
                        @endif
                        <h3 class="blog-title">{{ $post->title }}</h3>
                        <div class="blog-meta">
                            <span>{{ $post->published_at->format('d M Y') }}</span>
                            <span class="mx-2">by</span>
                            <span>{{ $post->author->name }}</span>
                        </div>
                        <p class="blog-excerpt text-muted">{{ Str::limit($post->excerpt, 120) }}</p>
                    </a>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-5">
            {{--            {{ $blogPosts->links() }}--}}
        </div>
    </div>

    @include('includes.cta')
@endsection