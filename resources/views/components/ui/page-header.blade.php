@props([
    'title',
    'description',
])

<div class="flex w-full items-center justify-between">

    <div class="flex flex-col gap-1">

        <h1
            class="font-['Poppins'] text-[28px] font-semibold leading-9 text-[#191C1E]"
        >
            {{ $title }}
        </h1>

        <p
            class="font-['Poppins'] text-base font-medium leading-6 text-[#434654]"
        >
            {{ $description }}
        </p>

    </div>

    <div>
        {{ $actions ?? '' }}
    </div>

</div>