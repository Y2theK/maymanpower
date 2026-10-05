@props([
    'active' => false,
])

<div class="flex flex-col gap-[6px]">

    <button
        type="button"
        role="switch"
        aria-checked="{{ $active ? 'true' : 'false' }}"
        class="
            relative h-[22px] w-[46px]
            rounded-full
            border
            transition
        "
        @class([
            'border-[#023DC5] bg-white' => $active,
            'border-[#C3C6D6] bg-white' => !$active,
        ])
    >
        <span
            @class([
                'absolute top-[2px] h-[16px] w-[16px] rounded-full transition',
                'left-[26px] bg-[#023DC5]' => $active,
                'left-[2px] bg-[#C3C6D6]' => !$active,
            ])
        ></span>
    </button>

    <span
        @class([
            "font-['JetBrains_Mono'] text-xs font-medium tracking-[0.6px]",
            'text-[#003D9B]' => $active,
            'text-[#737685]' => !$active,
        ])
    >
        {{ $active ? 'Active' : 'Inactive' }}
    </span>

</div>