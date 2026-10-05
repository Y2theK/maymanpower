@props([
    'href' => null,
    'type' => 'button',
])

@php
    $classes = '
        inline-flex items-center justify-center
        gap-2
        rounded-[20px]
        border border-white
        px-4 py-3
        font-["Inter"]
        text-sm font-normal
        leading-5 text-white
        transition
        hover:opacity-90
    ';
@endphp

@if($href)
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => $classes]) }}
        style="background: linear-gradient(103deg, #FC2925 2%, #343BFF 86%)"
    >
        {{ $slot }}
    </a>
@else
    <button
        type="{{ $type }}"
        {{ $attributes->merge(['class' => $classes]) }}
        style="background: linear-gradient(103deg, #FC2925 2%, #343BFF 86%)"
    >
        {{ $slot }}
    </button>
@endif