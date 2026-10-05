@props([
    'name',
    'label' => null,
    'placeholder' => '',
    'value' => null,
])

<div class="flex w-full flex-col gap-2">

    @if($label)
        <label
            for="{{ $name }}"
            class="font-poppins text-base font-medium leading-6 text-text-secondary"
        >
            {{ $label }}
        </label>
    @endif

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge([
            'class' => '
                w-full rounded-xl
                border border-white
                bg-white/40
                px-[17px] py-[13px]
                font-poppins text-base font-medium
                leading-6 text-text
                placeholder:text-[#6B7280]
                outline-none
                focus:border-primary
                focus:ring-2
                focus:ring-primary/10
            '
        ]) }}
    >

    @error($name)
        <span class="text-sm text-red-600">
            {{ $message }}
        </span>
    @enderror

</div>