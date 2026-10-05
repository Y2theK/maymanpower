<aside
    id="sidebar"
    class="
        fixed inset-y-0 left-0 z-50
        w-[246px]
        bg-sidebar
        border-r border-blue-200
        transition-[width,transform] duration-200
        -translate-x-full
        lg:translate-x-0
    "
>

    {{-- Header --}}
    <div
        class="
            h-[72px]
            flex items-center justify-between
            px-4
            border-b border-blue-200
        "
    >

        <a
            href="{{ route('dashboard') }}"
            class="flex items-center gap-2"
        >

            <img
                src="{{ asset('images/logo.png') }}"
                class="w-10 h-6 object-contain"
                alt="May Manpower"
            >

            <span
                class="
                    brand-text
                    font-poppins
                    text-[16px]
                    font-bold
                    text-primary
                    whitespace-nowrap
                "
            >
                May Manpower
            </span>

        </a>

        <button
            id="sidebarMenuButton"
            class="
                text-primary
                text-xl
                lg:block
            "
        >
            <i class="ri-menu-line"></i>
        </button>

    </div>


    {{-- Navigation --}}
    <nav class="p-3 space-y-2">

        <a
            href="{{ route('dashboard') }}"
            class="
                flex items-center gap-3
                h-11 px-4
                rounded-lg
                font-roboto
                text-primary
                text-sm
                transition

                {{ request()->routeIs('dashboard')
                    ? 'bg-blue-50 font-medium'
                    : 'hover:bg-white/30'
                }}
            "
        >
            <i class="ri-dashboard-line text-xl w-6"></i>

            <span>Dashboard</span>
        </a>


        <a
            href="{{ route('services.index') }}"
            class="
                flex items-center gap-3
                h-11 px-4
                rounded-lg
                font-roboto
                text-primary
                text-sm
                transition

                {{ request()->routeIs('services.*')
                    ? 'bg-blue-50 font-medium'
                    : 'hover:bg-white/30'
                }}
            "
        >
            <i class="ri-service-line text-xl w-6"></i>

            <span>Services</span>
        </a>


        <a
            href="{{ route('bookings.index') }}"
            class="
                flex items-center gap-3
                h-11 px-4
                rounded-lg
                font-roboto
                text-primary
                text-sm
                transition

                {{ request()->routeIs('bookings.*')
                    ? 'bg-blue-50 font-medium'
                    : 'hover:bg-white/30'
                }}
            "
        >
            <i class="ri-calendar-check-line text-xl w-6"></i>

            <span>Booking Management</span>
        </a>


        <a
            href="{{ route('maids.index') }}"
            class="
                flex items-center gap-3
                h-11 px-4
                rounded-lg
                font-roboto
                text-primary
                text-sm
                transition

                {{ request()->routeIs('maids.*')
                    ? 'bg-blue-50 font-medium'
                    : 'hover:bg-white/30'
                }}
            "
        >
            <i class="ri-user-search-line text-xl w-6"></i>

            <span>Maid Profile</span>
        </a>


        <a
            href="{{ route('staff.index') }}"
            class="
                flex items-center gap-3
                h-11 px-4
                rounded-lg
                font-roboto
                text-primary
                text-sm
                transition

                {{ request()->routeIs('staff.*')
                    ? 'bg-blue-50 font-medium'
                    : 'hover:bg-white/30'
                }}
            "
        >
            <i class="ri-user-settings-line text-xl w-6"></i>

            <span>Staff Management</span>
        </a>


        <a
            href="{{ route('customers.index') }}"
            class="
                flex items-center gap-3
                h-11 px-4
                rounded-lg
                font-roboto
                text-primary
                text-sm
                transition

                {{ request()->routeIs('customers.*')
                    ? 'bg-blue-50 font-medium'
                    : 'hover:bg-white/30'
                }}
            "
        >
            <i class="ri-group-line text-xl w-6"></i>

            <span>Customer Management</span>
        </a>


        <a
            href="{{ route('payments.index') }}"
            class="
                flex items-center gap-3
                h-11 px-4
                rounded-lg
                font-roboto
                text-primary
                text-sm
                transition

                {{ request()->routeIs('payments.*')
                    ? 'bg-blue-50 font-medium'
                    : 'hover:bg-white/30'
                }}
            "
        >
            <i class="ri-bank-card-line text-xl w-6"></i>

            <span>Payment</span>
        </a>


        <a
            href="{{ route('reports.index') }}"
            class="
                flex items-center gap-3
                h-11 px-4
                rounded-lg
                font-roboto
                text-primary
                text-sm
                transition

                {{ request()->routeIs('reports.*')
                    ? 'bg-blue-50 font-medium'
                    : 'hover:bg-white/30'
                }}
            "
        >
            <i class="ri-bar-chart-line text-xl w-6"></i>

            <span>Reports</span>
        </a>

    </nav>

</aside>