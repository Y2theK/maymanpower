@props([
    'name' => 'images',
    'multiple' => true,
])

<label
    class="
        flex h-[174px] cursor-pointer
        flex-col items-center justify-center
        rounded-lg
        border-2 border-dashed border-[#C3C6D6]
        bg-white/10
        transition
        hover:bg-white/30
    "
>

    <input
        type="file"
        name="{{ $multiple ? $name . '[]' : $name }}"
        accept="image/*"
        @if($multiple) multiple @endif
        class="sr-only"
    >

    <svg
        class="mb-2 size-5 text-text-muted"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="M12 5v14m-7-7h14"
        />
    </svg>

    <span class="font-poppins text-xs font-medium tracking-[0.6px] text-text-muted">
        Upload
    </span>

</label>