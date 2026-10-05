@props([
    'placeholder' => 'Search...',
    'name' => 'search',
])

<div class="relative w-[443px]">

    <input
        type="text"
        name="{{ $name }}"
        value="{{ request($name) }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge([
            'class' => '
                h-[60px] w-full
                rounded-[12px]
                border border-white
                bg-white/40
                pl-[41px] pr-[17px]
                font-[Poppins]
                text-base font-medium
                text-[#011A53]
                outline-none
                placeholder:text-[#011A53]
                focus:border-[#023DC5]
            '
        ]) }}
    >

    <i
        class="ri-search-line absolute left-[15px] top-1/2 -translate-y-1/2 text-[18px] text-[#011A53]"
    ></i>

</div>