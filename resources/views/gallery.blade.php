@extends('layouts.app')

@section('title', 'Top Archive - Activities Gallery')

@section('content')
    <!-- Header with background -->
    <div class="gallery-header position-relative" style="background-color: #FAF9F6; padding: 80px 0;" data-aos="fade-up">
        <div class="container">
            <h1 style="font-family: 'Inter', sans-serif; font-size: 48px; font-weight: 700; line-height: 1.2;">
                Top Archive<br>
                Activities Gallery
            </h1>
        </div>
    </div>
    <!-- Gallery with Sidebar -->
    <div class="gallery-content" style="padding: 40px 0;" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <!-- Sidebar with Categories -->
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="category-sidebar">
                        <div class="sidebar-header">
                            <h4>Categories</h4>
                        </div>

                        <div class="sidebar-categories">
                            <ul class="category-list">
                                <li class="category-item {{ !isset($selectedCategory) && !isset($category) ? 'active' : '' }}">
                                    <a href="{{ route('gallery.index') }}">
                                        <span class="category-name">All Images</span>
                                        <span class="category-count">{{ \App\Models\GalleryImage::where('is_active', true)->count() }}</span>
                                    </a>
                                </li>

                                @foreach($categories ?? [] as $categoryItem)
                                    <li class="category-item {{ (isset($selectedCategory) && $selectedCategory->id == $categoryItem->id) ||
                                        (isset($category) && $category->id == $categoryItem->id) ? 'active' : '' }}">
                                        <a href="{{ route('gallery.index', ['category' => $categoryItem->slug]) }}">
                                            <span class="category-name">{{ $categoryItem->name }}</span>
                                            <span class="category-count">{{ $categoryItem->galleryImages()->where('is_active', true)->count() }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        @if(isset($selectedCategory) || isset($category))
                            <div class="selected-category-info">
                                <h5>{{ isset($selectedCategory) ? $selectedCategory->name : $category->name }}</h5>
                                @if((isset($selectedCategory) && $selectedCategory->description) || (isset($category) && $category->description))
                                    <p>{{ isset($selectedCategory) ? $selectedCategory->description : $category->description }}</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Main Gallery Content -->
                <div class="col-lg-9">
                    @if($images->count() > 0)
                        <div class="gallery-grid">
                            <!-- First Two Images -->
                            @if($firstTwoImages->count() > 0)
                                <div class="row g-4">
                                    @foreach($firstTwoImages as $image)
                                        <div class="col-md-6">
                                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                                                 data-image-id="{{ $image->id }}"
                                                 data-image-title="{{ $image->title }}"
                                                 data-image-description="{{ $image->description }}"
                                                 data-image-path="{{ asset('storage/' . $image->image_path) }}"
                                                 data-image-categories="{{ $image->categories->pluck('name')->join(', ') }}">
                                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->title }}" class="gallery-img">
                                                <div class="gallery-overlay">
                                                    <div class="gallery-info">
                                                        <h5>{{ $image->title }}</h5>
                                                        <p>{{ $image->description }}</p>

                                                        <!-- Image categories -->
                                                        @if($image->categories->count() > 0)
                                                            <div class="image-categories mt-2">
                                                                @foreach($image->categories->take(3) as $cat)
                                                                    <span class="image-category-badge">{{ $cat->name }}</span>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <!-- Single Large Image -->
                            @if($largeImage)
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                                             data-image-id="{{ $largeImage->id }}"
                                             data-image-title="{{ $largeImage->title }}"
                                             data-image-description="{{ $largeImage->description }}"
                                             data-image-path="{{ asset('storage/' . $largeImage->image_path) }}"
                                             data-image-categories="{{ $largeImage->categories->pluck('name')->join(', ') }}">
                                            <img src="{{ asset('storage/' . $largeImage->image_path) }}" alt="{{ $largeImage->title }}" class="gallery-img gallery-img-large">
                                            <div class="gallery-overlay">
                                                <div class="gallery-info">
                                                    <h5>{{ $largeImage->title }}</h5>
                                                    <p>{{ $largeImage->description }}</p>

                                                    <!-- Image categories -->
                                                    @if($largeImage->categories->count() > 0)
                                                        <div class="image-categories mt-2">
                                                            @foreach($largeImage->categories as $cat)
                                                                <span class="image-category-badge">{{ $cat->name }}</span>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Two Medium Images -->
                            @if($middleTwoImages->count() > 0)
                                <div class="row g-4 mt-4">
                                    @foreach($middleTwoImages as $image)
                                        <div class="col-md-6">
                                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                                                 data-image-id="{{ $image->id }}"
                                                 data-image-title="{{ $image->title }}"
                                                 data-image-description="{{ $image->description }}"
                                                 data-image-path="{{ asset('storage/' . $image->image_path) }}"
                                                 data-image-categories="{{ $image->categories->pluck('name')->join(', ') }}">
                                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->title }}" class="gallery-img">
                                                <div class="gallery-overlay">
                                                    <div class="gallery-info">
                                                        <h5>{{ $image->title }}</h5>
                                                        <p>{{ $image->description }}</p>

                                                        <!-- Image categories -->
                                                        @if($image->categories->count() > 0)
                                                            <div class="image-categories mt-2">
                                                                @foreach($image->categories->take(3) as $cat)
                                                                    <span class="image-category-badge">{{ $cat->name }}</span>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <!-- Last Two Images -->
                            @if($lastTwoImages->count() > 0)
                                <div class="row g-4 mt-4">
                                    @foreach($lastTwoImages as $image)
                                        <div class="col-md-6">
                                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal"
                                                 data-image-id="{{ $image->id }}"
                                                 data-image-title="{{ $image->title }}"
                                                 data-image-description="{{ $image->description }}"
                                                 data-image-path="{{ asset('storage/' . $image->image_path) }}"
                                                 data-image-categories="{{ $image->categories->pluck('name')->join(', ') }}">
                                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->title }}" class="gallery-img">
                                                <div class="gallery-overlay">
                                                    <div class="gallery-info">
                                                        <h5>{{ $image->title }}</h5>
                                                        <p>{{ $image->description }}</p>

                                                        <!-- Image categories -->
                                                        @if($image->categories->count() > 0)
                                                            <div class="image-categories mt-2">
                                                                @foreach($image->categories->take(3) as $cat)
                                                                    <span class="image-category-badge">{{ $cat->name }}</span>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @else
                        <!-- Empty state -->
                        <div class="text-center py-5">
                            <div class="empty-state">
                                <i class="fas fa-images fa-3x mb-3 text-muted"></i>
                                <h4>No Images Found</h4>
                                <p class="text-muted">
                                    @if(isset($selectedCategory) || isset($category))
                                        There are no images in this category yet.
                                    @else
                                        The gallery is currently empty.
                                    @endif
                                </p>
                            </div>
                        </div>
                    @endif

                    <!-- Pagination -->
                    @if($images->count() > 0)
                        <div class="pagination-wrapper d-flex justify-content-center mt-5">
                            {{ $images->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal -->

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content bg-white shadow-lg border-0 rounded-4">
                <div class="modal-header bg-white border-0 rounded-top-4">
                    <h5 class="modal-title fw-semibold text-dark" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white px-4 py-4">
                    <div class="row g-4 align-items-start">
                        <div class="col-md-8">
                            <div class="modal-image-container border rounded-3 overflow-hidden shadow-sm">
                                <img src="" alt="Preview" id="modalImage" class="img-fluid w-100 h-auto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="modal-image-details">
                                <h4 id="modalTitle" class="fw-bold text-primary mb-3" style="color: #fec107 !important;"></h4>
                                <p id="modalDescription" class="text-muted mb-4"></p>

                                <div class="modal-image-categories">
                                    <h6 class="text-secondary">Categories</h6>
                                    <div id="modalCategories" class="d-flex flex-wrap gap-2 mt-2">
                                        <!-- Categories go here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-white border-0 rounded-bottom-4">
                    <button type="button" class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('styles')
    <style>
        /* Gallery Image Styles */
        .gallery-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .gallery-img-large {
            height: 450px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0) 100%);
            padding: 20px;
            transition: all 0.3s ease;
        }

        .gallery-info {
            color: white;
        }

        .gallery-info h5 {
            margin-bottom: 8px;
            font-size: 1.25rem;
            font-weight: 600;
        }

        .gallery-info p {
            margin: 0;
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* Image category badges */
        .image-categories {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .image-category-badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 20px;
            background-color: rgba(255,255,255,0.2);
            color: white;
            font-size: 0.75rem;
            font-weight: 500;
        }

        /* Sidebar Styles */
        .category-sidebar {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            padding: 20px;
            margin-bottom: 30px;
            position: sticky;
            top: 20px;
        }

        .sidebar-header {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .sidebar-header h4 {
            margin: 0;
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
        }

        .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .category-item {
            margin-bottom: 5px;
        }

        .category-item a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            border-radius: 6px;
            color: #495057;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .category-item a:hover {
            background-color: #f8f9fa;
        }

        .category-item.active a {
            background-color: #fec107;
            color: white;
        }

        .category-count {
            background-color: rgba(0,0,0,0.1);
            border-radius: 20px;
            padding: 2px 8px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .category-item.active .category-count {
            background-color: rgba(255,255,255,0.3);
        }

        .selected-category-info {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .selected-category-info h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        .selected-category-info p {
            font-size: 0.9rem;
            color: #6c757d;
            margin: 0;
        }

        /* Modal Styles */
        .modal-image-container {
            text-align: center;
            background-color: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .modal-image {
            max-width: 100%;
            max-height: 70vh;
            object-fit: contain;
        }

        .modal-image-details h4 {
            font-size: 1.6rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .modal-image-details p {
            font-size: 1rem;
            line-height: 1.6;
            color: #495057;
        }

        .modal-image-categories h6 {
            font-size: 1rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 0;
        }

        .modal-category-badge {
            display: inline-block;
            padding: 4px 10px;
            background-color: #e9ecef;
            color: #495057;
            font-size: 0.85rem;
            font-weight: 500;
            border-radius: 20px;
        }

        /* Empty state */
        .empty-state {
            padding: 60px 0;
        }

        /* Responsive styles */
        @media (max-width: 991px) {
            .category-sidebar {
                position: relative;p
            top: 0;
                margin-bottom: 30px;
            }

            .modal-dialog {
                max-width: 95%;
            }
        }

        @media (max-width: 767px) {
            .gallery-img {
                height: 250px;
            }

            .gallery-img-large {
                height: 350px;
            }

            .gallery-info h5 {
                font-size: 1.1rem;
            }

            .gallery-info p {
                font-size: 0.85rem;
            }

            .modal-body .row {
                flex-direction: column;
            }

            .modal-body .col-md-8,
            .modal-body .col-md-4 {
                width: 100%;
            }

            .modal-image-details {
                margin-top: 20px;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageModal = document.getElementById('imageModal');

            if (imageModal) {
                imageModal.addEventListener('show.bs.modal', function(event) {
                    // Button that triggered the modal
                    const button = event.relatedTarget;

                    // Extract info from data attributes
                    const imageId = button.getAttribute('data-image-id');
                    const imageTitle = button.getAttribute('data-image-title');
                    const imageDescription = button.getAttribute('data-image-description');
                    const imagePath = button.getAttribute('data-image-path');
                    const imageCategories = button.getAttribute('data-image-categories');

                    // Update the modal content
                    const modalTitle = imageModal.querySelector('.modal-title');
                    const modalImage = imageModal.querySelector('#modalImage');
                    const modalTitleText = imageModal.querySelector('#modalTitle');
                    const modalDescription = imageModal.querySelector('#modalDescription');
                    const modalCategories = imageModal.querySelector('#modalCategories');

                    modalTitle.textContent = imageTitle;
                    modalImage.src = imagePath;
                    modalImage.alt = imageTitle;
                    modalTitleText.textContent = imageTitle;
                    modalDescription.textContent = imageDescription;

                    // Clear existing categories
                    modalCategories.innerHTML = '';

                    // Add categories if they exist
                    if (imageCategories && imageCategories.length > 0) {
                        const categoriesArray = imageCategories.split(', ');
                        categoriesArray.forEach(category => {
                            const badge = document.createElement('span');
                            badge.className = 'modal-category-badge';
                            badge.textContent = category;
                            modalCategories.appendChild(badge);
                        });
                    } else {
                        modalCategories.innerHTML = '<span class="text-muted">No categories</span>';
                    }
                });
            }
        });
    </script>
@endpush