@extends('layouts.app')

@section('title', $category->name . ' - News and Blogs')

@section('content')
    <!-- Header -->
    <div class="blog-header">
        <div class="container">
            <h1 class="display-4 fw-bold">{{ $category->name }}<br>News and Blogs</h1>

            <!-- Category Navigation -->
            <ul class="nav blog-categories">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog.index') }}">
                        All Countries
                    </a>
                </li>
                @foreach(['tanzania' => 'Tanzania', 'ghana' => 'Ghana', 'nigeria' => 'Nigeria'] as $slug => $name)
                    <li class="nav-item">
                        <a class="nav-link {{ $category->slug === $slug ? 'active' : '' }}"
                           href="{{ route('blog.category', $slug) }}">
                            {{ $name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Main Content Area -->
            <div class="col-lg-9">
                <!-- Blog Grid -->
                <div class="row g-4">
                    @foreach($posts as $post)
                        <div class="col-md-6 col-lg-4">
                            <a href="{{ route('blog.show', $post->slug) }}" class="blog-card">
                                <span class="badge bg-light text-dark">{{ $category->name }}</span>
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
                    {{ $posts->links() }}
                </div>
            </div>

            <!-- Sidebar Area -->
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

    @include('includes.cta')
@endsection