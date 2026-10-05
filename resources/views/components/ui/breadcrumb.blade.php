@props([
    'items' => [],
])

<nav class="flex items-center gap-2">

    @foreach($items as $index => $item)

        @if($index > 0)
            <span class="text-text-muted">
                ›
            </span>
        @endif

        <span
            class="
                font-poppins text-xs font-medium
                leading-4 tracking-[0.6px]
                {{ $loop->last ? 'text-text' : 'text-text-muted' }}
            "
        >
            {{ $item }}
        </span>

    @endforeach

</nav>