@extends('layouts.app')

@section('title', 'Top Archive - Home')

@section('content')
    @include('includes.Hero')
    @include('components.home.services')
    @include('components.home.benefits')
    @include('components.home.faq')
    @include('includes.whatsAppModal')
    @include('includes.serviceModal')
    @include('includes.cta')
    @include('includes.latest')
    @include('Certifications')

@endsection

@push('styles')
    <style>
        .service-item {
            transition: all 0.3s ease;
        }

        .benefit-card {
            padding: 2rem;
            border-radius: 8px;
            background: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #ffc107;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .icon-circle i {
            font-size: 24px;
            color: white;
        }

        .benefit-title {
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .faq-container {
            padding: 4rem 0;
        }

        .get-in-touch {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 8px;
            margin-top: 3rem;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.swiper-container', {
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                        enabled: false,
                    },
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        enabled: true,
                    },
                },
            });
        });
    </script>
@endpush

