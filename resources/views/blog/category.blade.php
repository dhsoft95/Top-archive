@extends('layouts.app')

@section('title', $category->name . ' - News and Blogs')

@section('content')

    <!-- Hero Header -->
    <div class="relative bg-gradient-to-br from-slate-900 via-gray-900 to-black overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>

    <div class="relative container mx-auto px-4 py-20 lg:py-28">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
                {{ $category->name }}
                <span class="block bg-gradient-to-r from-yellow-400 via-amber-400 to-orange-400 bg-clip-text text-transparent">
                        News & Blogs
                    </span>
            </h1>

            @if($category->description)
                <p class="text-xl text-yellow-100 mb-12 max-w-2xl mx-auto leading-relaxed">
                    {{ $category->description }}
                </p>
            @endif

            <!-- Enhanced Country Navigation -->
            <nav class="flex flex-wrap justify-center gap-3">
                <a class="group relative inline-flex items-center px-6 py-3 rounded-full font-semibold text-sm transition-all duration-300 transform hover:scale-105 bg-white/10 text-white hover:bg-white/20 backdrop-blur-sm border border-white/20"
                   href="{{ route('blog.index') }}">
                    <span class="relative z-10">All Countries</span>
                </a>
                @foreach(['tanzania' => 'Tanzania', 'ghana' => 'Ghana', 'nigeria' => 'Nigeria'] as $slug => $name)
                    <a class="group relative inline-flex items-center px-6 py-3 rounded-full font-semibold text-sm transition-all duration-300 transform hover:scale-105 {{ $category->slug === $slug ? 'bg-white text-slate-900 shadow-lg' : 'bg-white/10 text-white hover:bg-white/20 backdrop-blur-sm border border-white/20' }}"
                       href="{{ route('blog.category', $slug) }}">
                        <span class="relative z-10">{{ $name }}</span>
                        @if($category->slug === $slug)
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
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-4 gap-12">
                    <!-- Main Content Area -->
                    <div class="lg:col-span-3">
                        <!-- Category Info -->
                        <div class="mb-12">
                            <div class="flex items-center justify-between flex-wrap gap-4 mb-8">
                                <div>
                                    <h2 class="text-3xl font-black text-gray-900 mb-2">{{ $category->name }} Articles</h2>
                                    <p class="text-gray-600">{{ $posts->total() }} {{ Str::plural('article', $posts->total()) }} found</p>
                                </div>

                                <!-- Breadcrumb -->
                                <nav class="flex items-center space-x-2 text-sm">
                                    <a href="{{ route('blog.index') }}" class="text-gray-500 hover:text-yellow-600 transition-colors">
                                        All Posts
                                    </a>
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span class="text-yellow-600 font-medium">{{ $category->name }}</span>
                                </nav>
                            </div>
                        </div>

                        <!-- Blog Grid -->
                        @if($posts->count() > 0)
                            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mb-12">
                                @foreach($posts as $post)
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
                                                                {{ $category->name }}
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
                                                                {{ $category->name }}
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

                            <!-- Pagination -->
                            <div class="flex justify-center">
                                {{ $posts->links() }}
                            </div>
                        @else
                            <!-- No Posts Found -->
                            <div class="text-center py-16">
                                <div class="bg-white rounded-3xl shadow-lg p-12 max-w-2xl mx-auto">
                                    <div class="text-6xl mb-6">📝</div>
                                    <h3 class="text-2xl font-black text-gray-900 mb-4">No Articles Found</h3>
                                    <p class="text-gray-600 mb-8 leading-relaxed">
                                        We couldn't find any articles in the {{ $category->name }} category.
                                        Check back later or explore other categories.
                                    </p>
                                    <a href="{{ route('blog.index') }}"
                                       class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-yellow-500 to-amber-500 text-white font-bold rounded-xl hover:from-yellow-600 hover:to-amber-600 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                        </svg>
                                        View All Articles
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Sidebar Area -->
                    <div class="lg:col-span-1">
                        <div class="sticky top-8 space-y-8">
                            <!-- Categories -->
                            <div class="bg-white rounded-2xl shadow-lg p-6">
                                <h3 class="text-xl font-black text-gray-900 mb-6">All Categories</h3>
                                <div class="space-y-2">
                                    @foreach(\App\Models\Category::withCount('posts')->get() as $cat)
                                        <a href="{{ route('blog.category', $cat->slug) }}"
                                           class="flex items-center justify-between p-3 rounded-xl transition-all duration-300 hover:translate-x-2 group {{ $cat->id === $category->id ? 'bg-yellow-50 border-l-4 border-yellow-500' : 'hover:bg-gray-50' }}">
                                            <span class="font-medium {{ $cat->id === $category->id ? 'text-yellow-700' : 'text-gray-700 group-hover:text-gray-900' }}">
                                                {{ $cat->name }}
                                            </span>
                                            <span class="inline-flex items-center justify-center w-6 h-6 text-xs font-bold rounded-full {{ $cat->id === $category->id ? 'bg-yellow-200 text-yellow-800' : 'bg-yellow-100 text-yellow-800' }}">
                                                {{ $cat->posts_count }}
                                            </span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Category Stats (Optional) -->
                            <div class="bg-white rounded-2xl shadow-lg p-6">
                                <h3 class="text-xl font-black text-gray-900 mb-6">Category Stats</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-600">Total Articles</span>
                                        <span class="font-bold text-yellow-600">{{ $posts->total() }}</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-600">Latest Post</span>
                                        <span class="font-medium text-gray-900">
                                            {{ $posts->first() ? $posts->first()->published_at->format('M d') : 'N/A' }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Back to All Posts -->
                            <div class="bg-gradient-to-br from-yellow-50 to-amber-50 rounded-2xl p-6 border border-yellow-200">
                                <h4 class="font-bold text-gray-900 mb-3">Explore More</h4>
                                <p class="text-gray-600 text-sm mb-4">
                                    Browse all our articles across different categories and countries.
                                </p>
                                <a href="{{ route('blog.index') }}"
                                   class="inline-flex items-center text-yellow-700 font-semibold text-sm hover:text-yellow-800 transition-colors">
                                    View All Posts
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.cta')
@endsection