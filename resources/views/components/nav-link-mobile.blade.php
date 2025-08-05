@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'block pl-3 pr-4 py-2 rounded-md text-base font-semibold text-amber-700 bg-amber-50'
                : 'block pl-3 pr-4 py-2 rounded-md text-base font-medium text-gray-600 hover:text-amber-700 hover:bg-amber-50';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>