@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'relative px-3 py-2 text-sm font-semibold text-amber-600 transition-colors duration-200'
                : 'relative px-3 py-2 text-sm font-medium text-gray-500 hover:text-amber-600 transition-colors duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    @if ($active)
        <span class="absolute inset-x-1 -bottom-px h-0.5 bg-amber-600 rounded-full"></span>
    @endif
</a>