@props([
    'rounded' => 'rounded-3xl',
])

<div
    {{ $attributes->merge([
        'class' => "
            border border-white
            bg-white/30
            {$rounded}
        "
    ]) }}
>
    {{ $slot }}
</div>