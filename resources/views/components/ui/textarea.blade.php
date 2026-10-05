@props([
    'name',
    'label' => null,
    'placeholder' => '',
    'rows' => 5,
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

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge([
            'class' => '
                w-full resize-none rounded-xl
                border border-white
                bg-[#F8FAFF]
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
    >{{ old($name) }}</textarea>

    @error($name)
        <span class="text-sm text-red-600">
            {{ $message }}
        </span>
    @enderror

</div>