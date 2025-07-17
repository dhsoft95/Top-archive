<!-- Recent Blog Posts Section -->
<section class="blog-section py-5 bg-light">
    <div class="container">
        <!-- Section Header -->
        <div class="row mb-5">
            <div class="col-lg-7">
                <div class="section-header">
                    <span class="text-warning fw-semibold mb-2 d-block text-uppercase small">Our Latest Updates</span>
                    <h2 class="h1 fw-bold mb-3">Insights & News from Top Archive</h2>
                    <p class="lead text-muted">Expert insights on document management, digital transformation, and industry best practices.</p>
                </div>
            </div>
            <div class="col-lg-5 text-lg-end align-self-center">
                <a href="{{ route('blog.index') }}" class="btn btn-warning btn-lg rounded-pill">
                    Browse All Articles <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
        <!-- Blog Posts Grid -->
        <div class="row g-4">
            @if($latestPosts && $latestPosts->count() > 0)
                @foreach($latestPosts as $post)
                    <div class="col-md-6 col-lg-4">
                        <article class="card blog-card h-100 border-0">
                            <!-- Image -->
                            <div class="position-relative overflow-hidden">
                                @if($post->featured_image)
                                    <img src="{{ asset('storage/' . $post->featured_image) }}"
                                         class="card-img-top blog-card-image"
                                         alt="{{ $post->title }}">
                                @endif
                                <!-- Category Badge -->
                                @if($post->category)
                                    <a href="{{ route('blog.category', $post->category->slug) }}"
                                       class="category-badge">
                                        <i class="fas fa-folder-open me-1"></i>
                                        {{ $post->category->name }}
                                    </a>
                                @endif
                            </div>

                            <div class="card-body p-4">
                                <!-- Meta Info -->
                                <div class="d-flex align-items-center text-muted small mb-2">
                                    <div class="me-3">
                                        <i class="far fa-calendar-alt me-1"></i>
                                        {{ $post->published_at->format('M d, Y') }}
                                    </div>
                                    <div>
                                        <i class="far fa-clock me-1"></i>
                                        {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read
                                    </div>
                                </div>

                                <!-- Title -->
                                <h3 class="card-title h4 mb-3">
                                    <a href="{{ route('blog.show', $post->slug) }}"
                                       class="text-dark text-decoration-none blog-title-link">
                                        {{ $post->title }}
                                    </a>
                                </h3>

                                <!-- Excerpt -->
                                <p class="card-text text-muted mb-4">
                                    {{ Str::limit($post->excerpt, 120) }}
                                </p>

                                <!-- Author -->
                                <div class="blog-author d-flex align-items-center">
                                    <div class="author-avatar">
                                        <div class="author-avatar-placeholder">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="author-name mb-0">{{ $post->author->name }}</h6>
                                        <span class="author-title small text-muted">Content Writer</span>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('blog.show', $post->slug) }}" class="stretched-link" aria-hidden="true"></a>
                        </article>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <div class="text-center py-5">
                        <div class="empty-state">
                            <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                            <h3 class="h5 fw-normal text-muted">No articles available at the moment</h3>
                            <p class="text-muted small">Check back soon for new content</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<style>
    .blog-section {
        background-color: #f8f9fa;
    }

    .blog-card {
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .blog-card-image {
        height: 240px;
        object-fit: cover;
        transition: all 0.5s ease;
    }

    .blog-card:hover .blog-card-image {
        transform: scale(1.05);
    }

    .category-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: rgba(255, 255, 255, 0.95);
        color: #FBA504;
        padding: 0.5rem 1rem;
        border-radius: 30px;
        font-size: 0.85rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .category-badge:hover {
        background: #fff;
        color: #FBA504;
        transform: translateY(-2px);
    }

    .blog-title-link {
        color: #212529;
        transition: color 0.3s ease;
        font-weight: 600;
        line-height: 1.4;
    }

    .blog-title-link:hover {
        color: #FBA504;
    }

    .author-avatar {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        overflow: hidden;
        background: #f8f9fa;
    }

    .author-avatar-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(45deg, #FBA504, #b6882e);
        color: white;
    }

    .author-name {
        font-size: 0.95rem;
        font-weight: 600;
    }

    .section-header {
        position: relative;
        padding-bottom: 1rem;
    }

    .section-header:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: #FBA504;
        border-radius: 2px;
    }

    .btn-lg {
        padding: 0.8rem 1.8rem;
        font-weight: 500;
    }

    .empty-state {
        padding: 3rem;
        background: white;
        border-radius: 1rem;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
    }
</style>