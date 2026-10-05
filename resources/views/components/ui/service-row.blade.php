@props([
    'service',
])

<tr class="border-t border-white">

    {{-- Service --}}
    <td class="px-8 py-8">

        <div class="flex items-center gap-4">

            <div
                @class([
                    'flex h-10 items-center justify-center rounded-[4px]',
                    'w-[31px] bg-[rgba(0,82,204,0.2)]' =>
                        $service->type === 'deep',
                    'w-[25px] bg-[rgba(106,225,255,0.2)]' =>
                        $service->type === 'standard',
                    'w-[27px] bg-[#E7E8EA]' =>
                        $service->type === 'window',
                ])
            >
                <i
                    @class([
                        'text-[20px]',
                        'text-[#023DC5]' => $service->type === 'deep',
                        'text-[#0C8CE9]' => $service->type === 'standard',
                        'text-[#434654]' => $service->type === 'window',
                        'ri-sun-line' => $service->type === 'deep',
                        'ri-home-smile-line' => $service->type === 'standard',
                        'ri-window-line' => $service->type === 'window',
                    ])
                >
            </div>

            <span
                class="
                    font-['Manrope']
                    text-xl font-semibold
                    leading-7
                    text-[#191C1E]
                "
            >
                {{ $service->name }}
            </span>

        </div>

    </td>

    {{-- Description --}}
    <td class="px-8 py-8">

        <p
            class="
                max-w-[150px]
                font-['Inter']
                text-sm
                leading-5
                text-[#434654]
            "
        >
            {{ $service->description }}
        </p>

    </td>

    {{-- Price --}}
    <td class="px-8 py-8">

        <div
            class="
                font-['Manrope']
                text-base
                leading-6
                text-[#191C1E]
            "
        >
            <div>{{ number_format($service->base_price) }}</div>
            <div>MMK</div>
        </div>

    </td>

    {{-- Duration --}}
    <td class="px-8 py-8">

        <div class="flex items-center gap-2">

            <i class="ri-time-line text-[15px] text-[#434654]"></i>

            <span
                class="font-['Inter'] text-sm leading-5 text-[#434654]"
            >
                {{ $service->duration }} hrs
            </span>

        </div>

    </td>

    {{-- Status --}}
    <td class="px-8 py-8">

        <x-ui.status-switch
            :active="$service->is_active"
        />

    </td>

    {{-- Actions --}}
    <td class="px-8 py-8">

        <x-ui.action-buttons
            :edit-url="route('services.edit', $service)"
            :delete-url="route('services.destroy', $service)"
        />

    </td>

</tr>