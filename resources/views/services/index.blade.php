@extends('layouts.app')

@section('title', 'Create New Service')

@section('content')

    <div class="mx-auto flex w-full max-w-[1200px] flex-col gap-6 p-8">

        {{-- Header --}}
        <x-ui.page-header
            title="Service Management"
            description="Configure and monitor your professional cleaning service offerings."
        >
            <x-slot:actions>
                <x-ui.gradient-button
                    href="{{ route('services.create') }}"
                >
                    <i class="ri-add-line text-[16px]"></i>

                    Create New Service
                </x-ui.gradient-button>
            </x-slot:actions>
        </x-ui.page-header>


        {{-- Search --}}
        <x-ui.search-input
            name="search"
            placeholder="Find service by name..."
        />


        {{-- Table --}}
        <x-ui.glass-table>

            <thead>
                <tr class="bg-white/30">

                    <th class="px-8 py-8 text-left">
                        SERVICE NAME
                    </th>

                    <th class="px-8 py-8 text-left">
                        DESCRIPTION
                    </th>

                    <th class="px-8 py-8 text-left">
                        BASE<br>PRICE
                    </th>

                    <th class="px-8 py-8 text-left">
                        DURATION
                    </th>

                    <th class="px-8 py-8 text-left">
                        STATUS
                    </th>

                    <th class="px-8 py-8 text-right">
                        ACTIONS
                    </th>

                </tr>
            </thead>

            <tbody>

                {{-- @foreach ($services as $service)
                    <x-ui.service-row
                        :service="$service"
                    />
                @endforeach --}}

            </tbody>

        </x-ui.glass-table>

    </div>

@endsection