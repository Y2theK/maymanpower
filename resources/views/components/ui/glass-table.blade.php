<div
    {{ $attributes->merge([
        'class' => '
            overflow-hidden
            rounded-[24px]
            border border-white
            bg-white/40
        '
    ]) }}
>

    <div class="overflow-x-auto">

        <table class="w-full min-w-[1050px]">

            {{ $slot }}

        </table>

    </div>

</div>