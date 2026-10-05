@props([
    'editUrl',
    'deleteUrl',
])

<div class="flex items-start gap-2">

    <a
        href="{{ $editUrl }}"
        class="flex items-center justify-center p-2"
    >
        <i class="ri-edit-line text-[18px] text-[#023DC5]"></i>
    </a>

    <form
        action="{{ $deleteUrl }}"
        method="POST"
        onsubmit="return confirm('Are you sure?')"
    >
        @csrf
        @method('DELETE')

        <button
            type="submit"
            class="flex items-center justify-center p-2"
        >
            <i class="ri-delete-bin-line text-[18px] text-[#FC2925]"></i>
        </button>
    </form>

</div>