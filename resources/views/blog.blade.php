@extends('layouts.app')

@section('title', 'Top Archive - News and Blogs')

@section('content')

    <!-- Hero Header -->
    <div class="relative bg-gradient-to-br from-slate-900 via-gray-900 to-black overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>

    <div class="relative container mx-auto px-4 py-20 lg:py-28">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                Top Archive
                <span class="block bg-gradient-to-r from-yellow-400 via-amber-400 to-orange-400 bg-clip-text text-transparent">
                        News & Blogs
                    </span>
            </h1>
            <p class="text-xl text-yellow-100 mb-12 max-w-2xl mx-auto leading-relaxed">
                Discover the latest stories, insights, and perspectives from across Africa and beyond
            </p>

            <!-- Enhanced Country Navigation -->
            <nav class="flex flex-wrap justify-center gap-3">
                <a class="group relative inline-flex items-center px-6 py-3 rounded-full font-semibold text-sm transition-all duration-300 transform hover:scale-105 {{ request()->query('country') === null ? 'bg-white text-slate-900 shadow-lg' : 'bg-white/10 text-white hover:bg-white/20 backdrop-blur-sm border border-white/20' }}"
                   href="{{ route('blog.index') }}">
                    <span class="relative z-10">All Countries</span>
                    @if(request()->query('country') === null)
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-amber-400 rounded-full opacity-20"></div>
                    @endif
                </a>
                @foreach(['tanzania' => 'Tanzania', 'ghana' => 'Ghana', 'nigeria' => 'Nigeria'] as $slug => $name)
                    <a class="group relative inline-flex items-center px-6 py-3 rounded-full font-semibold text-sm transition-all duration-300 transform hover:scale-105 {{ request()->query('country') === $slug ? 'bg-white text-slate-900 shadow-lg' : 'bg-white/10 text-white hover:bg-white/20 backdrop-blur-sm border border-white/20' }}"
                       href="{{ route('blog.index', ['country' => $slug]) }}">
                        <span class="relative z-10">{{ $name }}</span>
                        @if(request()->query('country') === $slug)
                            <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-amber-400 rounded-full opacity-20"></div>
                        @endif
                    </a>
                @endforeach
            </nav>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-yellow-400/20 to-transparent rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-amber-400/20 to-transparent rounded-full blur-3xl"></div>
    </div>

    <div class="bg-gray-50 min-h-screen">
        <div class="container mx-auto px-4 py-16">
            <!-- Featured Article -->
            @if($featuredPost)
                <div class="mb-20">
                    <div class="text-center mb-8">
                        <span class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-yellow-500 to-amber-500 text-white text-sm font-semibold shadow-lg">
                            ⭐ Featured Story
                        </span>
                    </div>

                    <a href="{{ route('blog.show', $featuredPost->slug) }}" class="group block">
                        <article class="relative bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2">
                            <div class="grid lg:grid-cols-2 gap-0">
                                <div class="p-8 lg:p-12 flex flex-col justify-center">
                                    <div class="flex flex-wrap gap-3 mb-6">
                                        <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gradient-to-r from-gray-100 to-gray-200 text-gray-800 shadow-sm">
                                            {{ $featuredPost->category->name }}
                                        </span>
                                        @if($featuredPost->country)
                                            <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-gradient-to-r from-yellow-100 to-amber-100 text-amber-800 shadow-sm">
                                                {{ $featuredPost->country_flag }} {{ $featuredPost->country_name }}
                                            </span>
                                        @endif
                                    </div>

                                    <h2 class="text-3xl lg:text-4xl font-black text-gray-900 mb-6 leading-tight group-hover:text-yellow-600 transition-colors duration-300">
                                        {{ $featuredPost->title }}
                                    </h2>

                                    <div class="flex items-center text-gray-600 mb-6 space-x-4">
                                        <div class="flex items-center space-x-2">
                                            <div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-full flex items-center justify-center">
                                                <span class="text-white text-xs font-bold">{{ strtoupper(substr($featuredPost->author->name, 0, 1)) }}</span>
                                            </div>
                                            <span class="font-medium">{{ $featuredPost->author->name }}</span>
                                        </div>
                                        <span class="w-1 h-1 bg-gray-400 rounded-full"></span>
                                        <span>{{ $featuredPost->published_at->format('M d, Y') }}</span>
                                    </div>

                                    <p class="text-lg text-gray-600 leading-relaxed mb-8">{{ $featuredPost->excerpt }}</p>

                                    <div class="inline-flex items-center text-yellow-600 font-semibold group-hover:text-yellow-700 transition-colors">
                                        Read Full Story
                                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                                </div>

                                <div class="relative overflow-hidden">
                                    @if($featuredPost->featured_image)
                                        <img src="{{ Storage::url($featuredPost->featured_image) }}"
                                             alt="{{ $featuredPost->title }}"
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                                    @endif
                                </div>
                            </div>
                        </article>
                    </a>
                </div>
            @endif

            <!-- Articles Grid -->
            <div class="mb-12">
                <h3 class="text-3xl font-black text-gray-900 mb-8 text-center">Latest Articles</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($blogPosts as $post)
                        <article class="group">
                            <a href="{{ route('blog.show', $post->slug) }}" class="block h-full">
                                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 overflow-hidden h-full flex flex-col transform hover:-translate-y-1">
                                    @if($post->featured_image)
                                        <div class="relative overflow-hidden h-48">
                                            <img src="{{ Storage::url($post->featured_image) }}"
                                                 alt="{{ $post->title }}"
                                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>

                                            <!-- Floating badges -->
                                            <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/90 text-gray-800 backdrop-blur-sm shadow-sm">
                                                    {{ $post->category->name }}
                                                </span>
                                                @if($post->country)
                                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-yellow-500/90 text-white backdrop-blur-sm shadow-sm">
                                                        {{ $post->country_flag }} {{ $post->country_name }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    @else
                                        <div class="p-6 pb-4">
                                            <div class="flex flex-wrap gap-2 mb-4">
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-800">
                                                    {{ $post->category->name }}
                                                </span>
                                                @if($post->country)
                                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-amber-800">
                                                        {{ $post->country_flag }} {{ $post->country_name }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    @endif

                                    <div class="p-6 flex-1 flex flex-col {{ $post->featured_image ? '' : 'pt-2' }}">
                                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-yellow-600 transition-colors duration-300 line-clamp-2 leading-tight">
                                            {{ $post->title }}
                                        </h3>

                                        <div class="flex items-center text-sm text-gray-600 mb-4 space-x-3">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-6 h-6 bg-gradient-to-br from-gray-400 to-gray-600 rounded-full flex items-center justify-center">
                                                    <span class="text-white text-xs font-bold">{{ strtoupper(substr($post->author->name, 0, 1)) }}</span>
                                                </div>
                                                <span>{{ $post->author->name }}</span>
                                            </div>
                                            <span class="w-1 h-1 bg-gray-400 rounded-full"></span>
                                            <span>{{ $post->published_at->format('M d') }}</span>
                                        </div>

                                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 flex-1">
                                            {{ Str::limit($post->excerpt, 120) }}
                                        </p>

                                        <div class="mt-4 pt-4 border-t border-gray-100">
                                            <span class="inline-flex items-center text-yellow-600 text-sm font-semibold group-hover:text-yellow-700 transition-colors">
                                                Read More
                                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                {{--            {{ $blogPosts->links() }}--}}
            </div>
        </div>
    </div>

        @include('partials.footer')
@endsection