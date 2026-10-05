@props([
    'variant' => 'primary',
    'type' => 'button',
])

@php
    $base = 'inline-flex items-center justify-center rounded-lg px-8 py-3 font-poppins text-base font-medium leading-6 transition';

    $variants = [
        'primary' => 'text-white shadow-[0_4px_6px_-1px_rgba(0,61,155,0.1),0_2px_4px_-2px_rgba(0,61,155,0.1)]',
        'secondary' => 'border border-white bg-white/40 text-text-secondary',
    ];
@endphp

@if($variant === 'primary')

    <button
        type="{{ $type }}"
        {{ $attributes->merge([
            'class' => "$base {$variants[$variant]} bg-gradient-to-r from-[#FC2925] to-[#343BFF]"
        ]) }}
    >
        {{ $slot }}
    </button>

@else

    <button
        type="{{ $type }}"
        {{ $attributes->merge([
            'class' => "$base {$variants[$variant]}"
        ]) }}
    >
        {{ $slot }}
    </button>

@endif