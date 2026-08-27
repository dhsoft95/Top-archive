@extends('layouts.app')

@section('title', 'Top Archive - Activities Gallery')

@section('content')
    {{-- Header --}}
    <div class="relative bg-gray-900 pt-32 pb-24 lg:pt-40 lg:pb-32 overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 left-1/4 w-64 h-64 bg-amber-400/10 rounded-full blur-3xl"></div>
        </div>
        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl text-center">
            <div class="space-y-6">
                <div class="inline-flex items-center gap-2 bg-amber-400/10 text-amber-400 px-4 py-2 rounded-full text-sm font-medium border border-amber-400/20">
                    <i class="fas fa-camera"></i>
                    <span>Visual Stories</span>
                </div>
                <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight">
                    Activities
                    <span class="block text-amber-400">Gallery</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
                    Explore our professional document management solutions in action
                </p>
            </div>
        </div>
    </div>

    {{-- Main Gallery Section --}}
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid lg:grid-cols-4 gap-12">

                {{-- Sidebar --}}
                <div class="lg:col-span-1">
                    @php
                        $allImagesCount = \App\Models\GalleryImage::where('is_active', true)->count();
                        $currentSelectedCategory = $selectedCategory ?? null;
                        $isAllSelected = !$currentSelectedCategory && request()->routeIs('gallery.index') && !request()->has('category');
                    @endphp
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 sticky top-8">
                        {{-- Sidebar Header --}}
                        <div class="pb-5 mb-5 border-b border-gray-200">
                            <h3 class="text-2xl font-bold text-gray-900 flex items-center gap-3">
                                <div class="w-1.5 h-7 bg-amber-400 rounded-full"></div>
                                Categories
                            </h3>
                        </div>

                        {{-- Categories List --}}
                        <ul class="space-y-2">
                            {{-- All Images Link --}}
                            <li>
                                <a href="{{ route('gallery.index') }}"
                                   class="group flex items-center justify-between p-3 rounded-xl transition-colors duration-200 {{ $isAllSelected ? 'bg-amber-400 text-gray-900 font-bold' : 'text-gray-600 hover:bg-amber-50 hover:text-amber-700' }}">
                                    <span class="flex items-center gap-3">
                                        <i class="fa-fw {{ $isAllSelected ? 'fas fa-images' : 'far fa-images' }}"></i>
                                        <span>All Images</span>
                                    </span>
                                    <span class="text-xs font-semibold px-2.5 py-1 rounded-full min-w-[24px] text-center {{ $isAllSelected ? 'bg-white/30' : 'bg-gray-100 group-hover:bg-amber-100' }}">
                                        {{ $allImagesCount }}
                                    </span>
                                </a>
                            </li>

                            {{-- Individual Category Links --}}
                            @foreach($categories as $category)
                                @php
                                    $isSelected = $currentSelectedCategory && $currentSelectedCategory->id == $category->id;
                                @endphp
                                <li>
                                    <a href="{{ route('gallery.index', ['category' => $category->slug]) }}"
                                       class="group flex items-center justify-between p-3 rounded-xl transition-colors duration-200 {{ $isSelected ? 'bg-amber-400 text-gray-900 font-bold' : 'text-gray-600 hover:bg-amber-50 hover:text-amber-700' }}">
                                        <span class="flex items-center gap-3">
                                            <i class="fa-fw {{ $isSelected ? 'fas fa-folder-open' : 'far fa-folder' }}"></i>
                                            <span>{{ $category->name }}</span>
                                        </span>
                                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full min-w-[24px] text-center {{ $isSelected ? 'bg-white/30' : 'bg-gray-100 group-hover:bg-amber-100' }}">
                                            {{ $category->gallery_images_count }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        {{-- Selected Category Description --}}
                        @if($currentSelectedCategory && $currentSelectedCategory->description)
                            <div class="mt-6 pt-6 border-t border-gray-200">
                                <div class="bg-amber-50 border border-amber-200 rounded-xl p-4">
                                    <h5 class="text-base font-bold text-amber-900 mb-2">{{ $currentSelectedCategory->name }}</h5>
                                    <p class="text-amber-800 text-sm leading-relaxed">
                                        {{ $currentSelectedCategory->description }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Gallery Grid & Pagination --}}
                <div class="lg:col-span-3">
                    @if($images->isNotEmpty())
                        <div id="galleryGrid" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            @foreach($images as $image)
                                {{-- Image Card --}}
                                <div class="js-gallery-item group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 cursor-pointer"
                                     data-path="{{ asset('storage/' . $image->image_path) }}"
                                     data-title="{{ $image->title }}"
                                     data-description="{{ $image->description }}"
                                     data-categories="{{ $image->categories->pluck('name')->join(', ') }}">

                                    <div class="aspect-w-4 aspect-h-3">
                                        <img src="{{ asset('storage/' . $image->image_path) }}"
                                             alt="{{ $image->title }}"
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy">
                                    </div>

                                    <div class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end">
                                        <div class="p-6 space-y-3">
                                            <h5 class="text-xl font-bold text-white">{{ $image->title }}</h5>

                                            @if($image->categories->isNotEmpty())
                                                <div class="flex flex-wrap gap-2">
                                                    @foreach($image->categories->take(3) as $cat)
                                                        <span class="bg-white/10 text-amber-300 text-xs font-semibold px-2.5 py-1 rounded-full border border-white/10">
                                                            {{ $cat->name }}
                                                        </span>
                                                    @endforeach
                                                </div>
                                            @endif

                                            <div class="pt-1">
                                                <span class="inline-flex items-center gap-2 text-amber-400 text-sm font-semibold">
                                                    View Details
                                                    <i class="fas fa-arrow-right"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- Pagination --}}
                        <div class="flex justify-center mt-16">
                            <div class="bg-white rounded-xl p-2 shadow-sm border border-gray-100">
                                {{ $images->links() }}
                            </div>
                        </div>
                    @else
                        {{-- Empty State --}}
                        <div class="flex items-center justify-center h-full">
                            <div class="text-center bg-white rounded-2xl p-12 shadow-sm border border-gray-100 max-w-md mx-auto">
                                <div class="w-20 h-20 bg-amber-50 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i class="fas fa-images text-3xl text-amber-500"></i>
                                </div>
                                <h4 class="text-2xl font-bold text-gray-900 mb-4">No Images Found</h4>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ isset($selectedCategory) ? 'There are no images in this category yet.' : 'The gallery is currently empty.' }}
                                </p>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>

    {{-- Image Modal --}}
    <div id="imageModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center p-4 z-50 opacity-0 invisible transition-opacity duration-300">
        <div id="modalContent" class="relative bg-white rounded-2xl w-full max-w-6xl max-h-[90vh] overflow-hidden shadow-2xl transform scale-95 transition-transform duration-300">
            {{-- Modal Header --}}
            <div class="flex items-center justify-between p-5 border-b border-gray-200 bg-gray-50">
                <h5 class="text-xl font-bold text-gray-800 flex items-center gap-3">
                    <i class="fas fa-image text-amber-500"></i>
                    <span>Image Details</span>
                </h5>
                <button id="closeModalButton" class="w-10 h-10 bg-gray-200 hover:bg-red-500 hover:text-white rounded-full flex items-center justify-center transition-colors duration-200 text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Modal Body --}}
            <div class="max-h-[calc(90vh-70px)] overflow-y-auto">
                <div class="grid lg:grid-cols-5 gap-8 p-8">
                    <div class="lg:col-span-3">
                        <div class="rounded-xl overflow-hidden border border-gray-100">
                            <img src="" alt="Preview" id="modalImage" class="w-full h-auto object-contain">
                        </div>
                    </div>
                    <div class="lg:col-span-2 space-y-6">
                        <div>
                            <h4 id="modalTitle" class="text-3xl font-bold text-gray-900 mb-3"></h4>
                            <p id="modalDescription" class="text-gray-600 text-base leading-relaxed"></p>
                        </div>

                        <div>
                            <h6 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <i class="fas fa-folder-open text-amber-500"></i>
                                Categories
                            </h6>
                            <div id="modalCategories" class="flex flex-wrap gap-2">
                                {{-- JS will populate this --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('imageModal');
            const modalContent = document.getElementById('modalContent');
            const closeModalButton = document.getElementById('closeModalButton');
            const galleryGrid = document.getElementById('galleryGrid');

            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');
            const modalCategories = document.getElementById('modalCategories');

            const openModal = (card) => {
                const { title, description, path, categories } = card.dataset;

                modalImage.src = path;
                modalImage.alt = title;
                modalTitle.textContent = title;
                modalDescription.textContent = description || 'No description provided.';

                modalCategories.innerHTML = '';
                if (categories) {
                    categories.split(', ').forEach(categoryName => {
                        const badge = document.createElement('span');
                        badge.className = 'bg-amber-100 text-amber-800 text-xs font-semibold px-3 py-1.5 rounded-full border border-amber-200';
                        badge.textContent = categoryName;
                        modalCategories.appendChild(badge);
                    });
                } else {
                    modalCategories.innerHTML = '<span class="text-gray-500 italic text-sm">No categories assigned</span>';
                }

                modal.classList.remove('invisible');
                modal.classList.add('opacity-100');
                modal.classList.remove('opacity-0');
                modalContent.classList.add('scale-100');
                modalContent.classList.remove('scale-95');
                document.body.style.overflow = 'hidden';
            };

            const closeModal = () => {
                modal.classList.add('opacity-0');
                modal.classList.remove('opacity-100');
                modalContent.classList.add('scale-95');
                modalContent.classList.remove('scale-100');

                setTimeout(() => {
                    modal.classList.add('invisible');
                    document.body.style.overflow = '';
                }, 300);
            };

            if (galleryGrid) {
                galleryGrid.addEventListener('click', (e) => {
                    const card = e.target.closest('.js-gallery-item');
                    if (card) {
                        openModal(card);
                    }
                });
            }

            closeModalButton.addEventListener('click', closeModal);
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModal();
                }
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    closeModal();
                }
            });
        });
    </script>
@endpush