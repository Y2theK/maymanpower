@props([
    'name',
    'value',
    'label',
    'description' => null,
    'checked' => false,
])

<label
    class="
        flex cursor-pointer items-center gap-3 rounded-xl
        border px-4 py-3
        transition
        has-[:checked]:border-primary
        has-[:checked]:bg-[#DAE2FF]/30
    "
>

    <input
        type="radio"
        name="{{ $name }}"
        value="{{ $value }}"
        @checked($checked)
        class="peer sr-only"
    >

    <span
        class="
            flex size-[18px] shrink-0 items-center justify-center
            rounded-full border border-[#6B7280] bg-white
            peer-checked:border-[#003D9B]
            peer-checked:bg-[#003D9B]
        "
    >
        <span class="hidden size-2 rounded-full bg-white peer-checked:block"></span>
    </span>

    <span class="flex flex-col">

        <span class="font-poppins text-base font-medium leading-6 text-text">
            {{ $label }}
        </span>

        @if($description)
            <span class="font-poppins text-xs font-medium leading-4 tracking-[0.6px] text-text-muted">
                {{ $description }}
            </span>
        @endif

    </span>

</label>