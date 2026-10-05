@extends('layouts.app')

@section('title', 'Create New Service')

@section('content')

<div class="mx-auto max-w-[1200px]">

    {{-- Breadcrumb --}}
    <x-ui.breadcrumb
        :items="[
            'Service Management',
            'Add New Service'
        ]"
    />

    {{-- Header --}}
    <div class="mt-4 flex flex-col gap-1">

        <h1 class="font-poppins text-[28px] font-semibold leading-9 text-text">
            Create New Service
        </h1>

        <p class="font-poppins text-base font-medium leading-6 text-text-secondary">
            Configure your new professional cleaning offering with detailed operational parameters.
        </p>

    </div>

    {{-- Search --}}
    <div class="mt-4 max-w-[443px]">

        <div
            class="
                flex h-[60px] items-center
                rounded-xl border border-white
                bg-white/40
                px-[17px]
            "
        >

            <input
                type="text"
                placeholder="Find service by name..."
                class="
                    w-full bg-transparent
                    font-poppins text-base font-medium
                    text-blue-dark
                    outline-none
                    placeholder:text-blue-dark
                "
            >

        </div>

    </div>

    {{-- Main form --}}
    <x-ui.glass-card class="mt-4 p-8">

        <form
            method="POST"
            action="{{ route('services.store') }}"
            enctype="multipart/form-data"
            class="space-y-8"
        >

            @csrf

            {{-- Basic Information --}}
            <div class="grid grid-cols-2 gap-6">

                <x-ui.input
                    name="name"
                    label="SERVICE NAME"
                    placeholder="e.g., Deep Residential Cleaning"
                />

                <x-ui.field label="SERVICE CATEGORY">

                    <div class="flex gap-4">

                        <x-ui.radio-card
                            name="category"
                            value="home"
                            label="Home"
                            :checked="true"
                        />

                        <x-ui.radio-card
                            name="category"
                            value="office"
                            label="Office"
                        />

                        <x-ui.radio-card
                            name="category"
                            value="others"
                            label="Others"
                        />

                    </div>

                </x-ui.field>

            </div>


            {{-- Pricing --}}
            <div class="grid grid-cols-2 gap-6">

                <x-ui.field label="PRICING TYPE">

                    <div class="flex flex-col gap-2">

                        <x-ui.radio-card
                            name="pricing_type"
                            value="hourly"
                            label="Hourly Rate"
                            description="Charge based on time taken"
                            :checked="true"
                        />

                        <x-ui.radio-card
                            name="pricing_type"
                            value="fixed"
                            label="Fixed Package Price"
                            description="Flat fee for the entire service"
                        />

                    </div>

                </x-ui.field>


                <div class="flex flex-col gap-6">

                    <x-ui.field label="SERVICE TYPE">

                        <div class="flex gap-4">

                            <x-ui.radio-card
                                name="service_type"
                                value="maid"
                                label="Maid service"
                                :checked="true"
                            />

                            <x-ui.radio-card
                                name="service_type"
                                value="others"
                                label="Others"
                            />

                        </div>

                    </x-ui.field>


                    <x-ui.field label="SERVICE DURATION">

                        <select
                            name="duration"
                            class="
                                w-full rounded-xl
                                border border-white
                                bg-white/40
                                px-[17px] py-[13px]
                                font-poppins text-base font-medium
                                text-text
                                outline-none
                            "
                        >
                            <option value="1">1 hour</option>
                            <option value="2">2 hours</option>
                            <option value="3">3 hours</option>
                            <option value="4">4 hours</option>
                        </select>

                    </x-ui.field>

                </div>

            </div>


            {{-- Description --}}
            <x-ui.textarea
                name="description"
                label="SERVICE DESCRIPTION"
                placeholder="Detailed description of what the service includes, equipment used, and general expectations..."
                rows="4"
            />


            {{-- Images --}}
            <x-ui.field label="SERVICE IMAGES">

                <div class="grid grid-cols-4 gap-6">

                    <x-ui.image-upload name="images" />

                    {{-- Existing image preview slots --}}
                    <div class="h-[174px] rounded-lg border border-white bg-white/40"></div>

                    <div class="h-[174px] rounded-lg border border-white bg-white/40"></div>

                    <div class="h-[174px] rounded-lg border border-white bg-white/40"></div>

                </div>

            </x-ui.field>


            {{-- T&C --}}
            <x-ui.textarea
                name="terms"
                label="TERMS & CONDITIONS"
                placeholder="Define the legal parameters, cancellation policies, and service limitations..."
                rows="5"
            />


            {{-- Actions --}}
            <div class="flex justify-end gap-6 border-t border-[#C3C6D6] pt-8">

                <x-ui.button
                    variant="secondary"
                    type="button"
                    onclick="history.back()"
                >
                    Cancel
                </x-ui.button>

                <x-ui.button type="submit">
                    Save Service
                </x-ui.button>

            </div>

        </form>

    </x-ui.glass-card>

</div>

@endsection