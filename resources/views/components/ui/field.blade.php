@props([
    'label',
])

<div class="flex w-full flex-col gap-2">

    <label
        class="font-poppins text-base font-medium leading-6 text-text-secondary"
    >
        {{ $label }}
    </label>

    {{ $slot }}

</div>