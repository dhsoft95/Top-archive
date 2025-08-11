<!-- Recent Blog Posts Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-12">
            <div class="lg:w-7/12 mb-6 lg:mb-0">
                <div class="relative pb-4">
                    <span class="text-yellow-500 font-semibold mb-2 block uppercase text-sm tracking-wide">Our Latest Updates</span>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 leading-tight">Insights & News from Top Archive</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">Expert insights on document management, digital transformation, and industry best practices.</p>
                    <!-- Decorative line -->
                    <div class="absolute bottom-0 left-0 w-12 h-1 bg-yellow-500 rounded-full"></div>
                </div>
            </div>
            <div class="lg:w-5/12 lg:text-right">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-4 rounded-full font-semibold text-base transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                    Browse All Articles
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if($latestPosts && $latestPosts->count() > 0)
                @foreach($latestPosts as $post)
                    <article class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1 overflow-hidden group h-full border border-gray-100">
                        <!-- Image -->
                        <div class="relative overflow-hidden">
                            @if($post->featured_image)
                                <img src="{{ asset('storage/' . $post->featured_image) }}"
                                     class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-110"
                                     alt="{{ $post->title }}">
                            @else
                                <div class="w-full h-56 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                    </svg>
                                </div>
                            @endif
                            <!-- Category Badge -->
                            @if($post->category)
                                <a href="{{ route('blog.category', $post->category->slug) }}"
                                   class="absolute top-4 right-4 bg-white/95 backdrop-blur-sm text-yellow-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-white hover:-translate-y-1 transition-all duration-300 shadow-lg border border-yellow-100">
                                    <svg class="w-3 h-3 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                                    </svg>
                                    {{ $post->category->name }}
                                </a>
                            @endif
                            <!-- Read time badge -->
                            <div class="absolute top-4 left-4 bg-black/70 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-medium">
                                {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read
                            </div>
                        </div>

                        <div class="p-7">
                            <!-- Meta Info -->
                            <div class="flex items-center text-gray-500 text-sm mb-4">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    {{ $post->published_at->format('M d, Y') }}
                                </div>
                            </div>

                            <!-- Title -->
                            <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-yellow-600 transition-colors duration-300 leading-tight line-clamp-2">
                                <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-yellow-600">
                                    {{ $post->title }}
                                </a>
                            </h3>

                            <!-- Excerpt -->
                            <p class="text-gray-600 mb-6 leading-relaxed line-clamp-3">
                                {{ Str::limit($post->excerpt, 120) }}
                            </p>

                            <!-- Author -->
                            <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 via-yellow-500 to-yellow-600 rounded-full flex items-center justify-center text-white font-semibold shadow-lg ring-2 ring-yellow-100">
                                        <span class="text-sm">{{ substr($post->author->name, 0, 2) }}</span>
                                    </div>
                                    <div class="ml-3">
                                        <h6 class="font-semibold text-gray-900 text-sm">{{ $post->author->name }}</h6>
                                        <span class="text-gray-500 text-xs">Content Writer</span>
                                    </div>
                                </div>
                                <div class="text-yellow-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('blog.show', $post->slug) }}" class="absolute inset-0 z-10" aria-hidden="true"></a>
                    </article>
                @endforeach
            @else
                <div class="col-span-full">
                    <div class="text-center py-20">
                        <div class="bg-white rounded-3xl p-16 shadow-lg max-w-md mx-auto border border-gray-100">
                            <div class="w-20 h-20 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                                    <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V9a1 1 0 00-1-1h-1v1z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">No articles available at the moment</h3>
                            <p class="text-gray-500">Check back soon for new content and insights</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>