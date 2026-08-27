@extends('layouts.app')
@section('title', 'Top Archive - Privacy Policy')
@section('content')

    <div class="min-h-screen bg-white">

        {{-- Hero --}}
        <section class="relative pt-32 pb-16 lg:pt-40 lg:pb-20 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white overflow-hidden">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 via-transparent to-yellow-400/10"></div>
                <div class="absolute top-0 left-1/4 w-64 h-64 bg-yellow-400/20 rounded-full blur-3xl animate-pulse"></div>
                <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-yellow-400/15 rounded-full blur-3xl animate-pulse"></div>
            </div>

            <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl text-center">
                <div class="inline-flex items-center gap-2 bg-yellow-400/20 text-yellow-400 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <i class="fas fa-shield-halved"></i>
                    <span>Legal</span>
                </div>
                <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-6">
                    Our <span class="text-yellow-400">Policies</span>
                </h1>
                <p class="text-lg text-gray-300 leading-relaxed max-w-2xl mx-auto">
                    Top Archive EA Limited recognizes and accepts its responsibilities laid down under workplace law and in particular, the health and safety legislation.
                </p>
            </div>
        </section>

        {{-- Policies Content --}}
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">

                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-2 bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-medium mb-4">
                        <i class="fas fa-list-check"></i>
                        <span>What We Stand By</span>
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">Company Policy Commitments</h2>
                    <p class="text-gray-500 mt-3 max-w-xl mx-auto text-sm">
                        The following are the specific policies Top Archive EA Limited adheres to in all its operations.
                    </p>
                </div>

                @php
                    $policies = [
                        [
                            'icon' => 'fa-coins',
                            'text' => 'Provide a service which represents best value and makes best use of the available funding.',
                        ],
                        [
                            'icon' => 'fa-building',
                            'text' => 'Protect the asset value of the buildings owned by Top Archive EA Limited by carrying out repairs in a manner which is consistent with the intended use of the facility and which optimizes the life of components.',
                        ],
                        [
                            'icon' => 'fa-triangle-exclamation',
                            'text' => 'Minimize the risk of unforeseen major defects which might adversely affect the core work of the company.',
                        ],
                        [
                            'icon' => 'fa-clipboard-list',
                            'text' => 'Establish robust planning processes that produce effective maintenance programmes to enable the organisation to anticipate the cost of future maintenance expenditure.',
                        ],
                        [
                            'icon' => 'fa-scale-balanced',
                            'text' => 'Ensure that Top Archive complies with relevant legislation and that all work is carried out in accordance with the company\'s health and safety procedures.',
                        ],
                        [
                            'icon' => 'fa-bolt',
                            'text' => 'Secure the best prices for utility contracts.',
                        ],
                        [
                            'icon' => 'fa-file-shield',
                            'text' => 'Procure property insurance that protects the true value of the company\'s assets.',
                        ],
                        [
                            'icon' => 'fa-chart-line',
                            'text' => 'Long term planning of estates.',
                        ],
                    ];
                @endphp

                <div class="grid sm:grid-cols-2 gap-6">
                    @foreach($policies as $index => $policy)
                        <div class="flex gap-4 bg-gray-50 border border-gray-200 rounded-2xl p-6 hover:shadow-md transition-shadow duration-300">
                            <div class="flex-shrink-0">
                                <div class="w-11 h-11 bg-yellow-100 text-yellow-700 rounded-xl flex items-center justify-center">
                                    <i class="fas {{ $policy['icon'] }}"></i>
                                </div>
                            </div>
                            <div>
                                <span class="inline-block text-xs font-bold text-yellow-600 bg-yellow-50 border border-yellow-200 rounded-full px-2 py-0.5 mb-2">
                                    0{{ $index + 1 }}
                                </span>
                                <p class="text-gray-700 text-sm leading-relaxed">{{ $policy['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        {{-- Closing note --}}
        <section class="py-10 bg-gray-50 border-t border-gray-200">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl text-center">
                <p class="text-gray-500 text-sm leading-relaxed">
                    These policies reflect Top Archive EA Limited's commitment to excellence, compliance, and the responsible management of all its assets and operations.
                    For any enquiries, please <a href="{{ route('contact') }}" class="text-yellow-600 hover:text-yellow-700 font-medium underline underline-offset-2">contact us</a>.
                </p>
            </div>
        </section>

    </div>

    @include('partials.cta')
    @include('partials.footer')

@endsection
