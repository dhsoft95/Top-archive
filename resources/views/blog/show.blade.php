@extends('layouts.app')

@section('title', isset($post) ? $post->title . ' - Top Archive' : 'Blog Post - Top Archive')

@section('content')
    @if(isset($post))
        <!-- Hero Section -->
        <div class="relative min-h-[600px] bg-black overflow-hidden">
            @if($post->featured_image)
                <img src="{{ asset('storage/' . $post->featured_image) }}"
                     alt="{{ $post->title }}"
                     class="absolute inset-0 w-full h-full object-cover opacity-60">
            @endif
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/50 to-black/80"></div>

            <div class="relative container mx-auto px-4 py-20 flex items-center min-h-[600px]">
                <div class="max-w-4xl mx-auto text-center text-white">
                    <a href="{{ route('blog.category', $post->category->slug) }}"
                       class="inline-block px-6 py-3 bg-white/90 text-black rounded-full font-semibold text-sm mb-6 hover:bg-white hover:-translate-y-1 transition-all duration-300 shadow-lg">
                        {{ $post->category->name }}
                    </a>

                    @if($post->country)
                        <span class="inline-block px-4 py-2 bg-yellow-500/90 text-white rounded-full text-sm font-semibold ml-3 mb-6 backdrop-blur-sm shadow-lg">
                            {{ $post->country_flag }} {{ $post->country_name }}
                        </span>
                    @endif

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 leading-tight">
                        {{ $post->title }}
                    </h1>

                    <div class="flex flex-wrap justify-center items-center gap-6 text-white/90">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm font-bold">{{ strtoupper(substr($post->author->name, 0, 1)) }}</span>
                            </div>
                            <div class="text-left">
                                <div class="font-semibold">{{ $post->author->name }}</div>
                                <div class="text-sm text-white/70">Content Writer</div>
                            </div>
                        </div>

                        <div class="hidden md:block w-px h-10 bg-white/25"></div>

                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>{{ $post->published_at->format('F d, Y') }}</span>
                        </div>

                        <div class="hidden md:block w-px h-10 bg-white/25"></div>

                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-gray-50 py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    <div class="grid lg:grid-cols-4 gap-12">
                        <!-- Article Content -->
                        <div class="lg:col-span-3">
                            <article class="bg-white rounded-3xl shadow-xl p-8 md:p-12 mb-12">
                                <!-- Article Body -->
                                <div class="prose prose-lg max-w-none">
                                    <div class="text-gray-700 leading-relaxed text-lg">
                                        {!! $post->content !!}
                                    </div>
                                </div>

                                <!-- Tags -->
                                @if($post->tags->count() > 0)
                                    <div class="border-t border-gray-200 pt-8 mt-12">
                                        <h4 class="text-lg font-bold text-gray-900 mb-4">Tags</h4>
                                        <div class="flex flex-wrap gap-3">
                                            @foreach($post->tags as $tag)
                                                <a href="{{ route('blog.tag', $tag->slug) }}"
                                                   class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-yellow-100 text-gray-700 hover:text-amber-800 rounded-full text-sm font-medium transition-all duration-300 hover:-translate-y-1 shadow-sm hover:shadow-md">
                                                    #{{ $tag->name }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <!-- Share Buttons -->
                                <div class="border-t border-gray-200 pt-8 mt-8">
                                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                                        <h4 class="text-lg font-bold text-gray-900">Share this article</h4>
                                        <div class="flex gap-3">
                                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}"
                                               target="_blank"
                                               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl font-semibold text-sm hover:from-blue-600 hover:to-blue-700 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                                </svg>
                                                Tweet
                                            </a>
                                            <a href="https://www.linkedin.com/shareArticle?url={{ urlencode(request()->url()) }}"
                                               target="_blank"
                                               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl font-semibold text-sm hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                                </svg>
                                                Share
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Related Posts -->
                            @if(isset($relatedPosts) && $relatedPosts->count() > 0)
                                <div class="mb-12">
                                    <h3 class="text-3xl font-black text-gray-900 mb-8">Related Articles</h3>
                                    <div class="grid md:grid-cols-2 gap-8">
                                        @foreach($relatedPosts as $relatedPost)
                                            <article class="group">
                                                <a href="{{ route('blog.show', $relatedPost->slug) }}" class="block">
                                                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2">
                                                        @if($relatedPost->featured_image)
                                                            <div class="relative overflow-hidden h-48">
                                                                <img src="{{ asset('storage/' . $relatedPost->featured_image) }}"
                                                                     alt="{{ $relatedPost->title }}"
                                                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                                                            </div>
                                                        @endif
                                                        <div class="p-6">
                                                            <h4 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-yellow-600 transition-colors duration-300 line-clamp-2">
                                                                {{ $relatedPost->title }}
                                                            </h4>
                                                            <div class="text-sm text-gray-600">
                                                                {{ $relatedPost->published_at->format('M d, Y') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </article>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Sidebar -->
                        <div class="lg:col-span-1">
                            <div class="sticky top-8 space-y-8">
                                <!-- Categories -->
                                <div class="bg-white rounded-2xl shadow-lg p-6">
                                    <h3 class="text-xl font-black text-gray-900 mb-6">Categories</h3>
                                    <div class="space-y-2">
                                        @foreach(\App\Models\Category::withCount('posts')->get() as $category)
                                            <a href="{{ route('blog.category', $category->slug) }}"
                                               class="flex items-center justify-between p-3 rounded-xl hover:bg-gray-50 transition-all duration-300 hover:translate-x-2 group">
                                                <span class="font-medium text-gray-700 group-hover:text-gray-900">{{ $category->name }}</span>
                                                <span class="inline-flex items-center justify-center w-6 h-6 bg-yellow-100 text-yellow-800 text-xs font-bold rounded-full">
                                                    {{ $category->posts_count }}
                                                </span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Recent Posts Widget (Optional) -->
                                <div class="bg-white rounded-2xl shadow-lg p-6">
                                    <h3 class="text-xl font-black text-gray-900 mb-6">Recent Posts</h3>
                                    <div class="space-y-4">
                                        <!-- You can add recent posts here if available -->
                                        <div class="text-sm text-gray-600">
                                            Recent posts coming soon...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
        <!-- Not Found -->
        <div class="min-h-screen bg-gray-50 flex items-center justify-center py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-2xl mx-auto text-center">
                    <div class="bg-white rounded-3xl shadow-xl p-12">
                        <div class="text-8xl mb-8">🤔</div>
                        <h2 class="text-3xl font-black text-gray-900 mb-6">Post Not Found</h2>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            The blog post you're looking for doesn't exist or has been removed.
                        </p>
                        <a href="{{ route('blog.index') }}"
                           class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-yellow-500 to-amber-500 text-white font-bold rounded-xl hover:from-yellow-600 hover:to-amber-600 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Return to Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection