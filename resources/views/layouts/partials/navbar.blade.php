<header
    class="
        h-[72px]
        flex items-center justify-between
        px-6
        bg-background
        border-b border-white
    "
>

    {{-- Left --}}
    <div class="flex items-center gap-4">

        {{-- Mobile menu --}}
        <button
            type="button"
            id="mobileMenuButton"
            class="
                lg:hidden
                flex items-center justify-center
                w-9 h-9
                text-primary
                text-xl
            "
        >
            <i class="ri-menu-line"></i>
        </button>


        {{-- Page Navigation --}}
        <div class="flex items-center gap-4">

            {{-- Page Icon --}}
            <div
                class="
                    w-8 h-8
                    flex items-center justify-center
                    rounded-[4px]
                    bg-gradient-to-r
                    from-[#FC2925]
                    to-[#343BFF]
                    text-white
                    text-lg
                "
            >
                <i class="ri-add-line"></i>
            </div>


            {{-- Current Page --}}
            <div
                class="
                    h-10
                    flex items-center
                    border-b-2 border-primary
                    font-poppins
                    text-[16px]
                    font-medium
                    text-primary
                "
            >
                @yield('page-name', 'Dashboard')
            </div>

        </div>

    </div>


    {{-- Right --}}
    <div class="flex items-center gap-6">

        {{-- Notification --}}
        <button
            type="button"
            class="
                relative
                w-10 h-10
                flex items-center justify-center
                rounded-full
                bg-gradient-to-r
                from-[#FC2925]
                to-[#343BFF]
                text-white
                text-xl
            "
        >

            <i class="ri-notification-3-fill"></i>

            {{-- Notification dot --}}
            <span
                class="
                    absolute
                    top-1 right-1
                    w-2 h-2
                    rounded-full
                    bg-[#FC2925]
                "
            ></span>

        </button>


        {{-- User --}}
        <div class="relative">

        <button
            type="button"
            id="adminMenuButton"
            class="
                flex items-center
                gap-2
                text-primary
            "
            aria-haspopup="true"
            aria-expanded="false"
        >

            {{-- Avatar --}}
            <div
                class="
                    w-10 h-10
                    flex items-center justify-center
                    rounded-full
                    bg-gradient-to-r
                    from-[#FC2925]
                    to-[#343BFF]
                    text-white
                    text-[10px]
                    font-medium
                "
            >
                {{ strtoupper(substr(auth()->user()->name ?? 'AU', 0, 2)) }}
            </div>


            {{-- Name --}}
            <span
                class="
                    hidden sm:block
                    font-roboto
                    text-sm
                    font-medium
                "
            >
                {{ auth()->user()->name ?? 'Admin' }}
            </span>


            {{-- Dropdown --}}
            <i
                id="adminChevron"
                class="ri-arrow-down-s-line text-lg transition-transform duration-200"
            ></i>

        </button>

        {{-- Dropdown Panel --}}
        <div
            id="adminDropdown"
            class="
                absolute right-0 top-full z-50 mt-2
                hidden w-56
                overflow-hidden rounded-2xl
                border border-white
                bg-white/90
                p-2
                shadow-xl backdrop-blur
            "
            role="menu"
        >
            <a
                href="#"
                class="
                    flex items-center gap-3
                    rounded-xl px-3 py-2.5
                    text-sm font-medium
                    text-text
                    hover:bg-[#EFEFFF]
                "
                role="menuitem"
            >
                <i class="ri-user-line text-base text-primary"></i>

                My Profile
            </a>

            <a
                href="#"
                class="
                    flex items-center gap-3
                    rounded-xl px-3 py-2.5
                    text-sm font-medium
                    text-text
                    hover:bg-[#EFEFFF]
                "
                role="menuitem"
            >
                <i class="ri-settings-3-line text-base text-primary"></i>

                Settings
            </a>

            <div class="my-1 border-t border-white"></div>

            <form method="POST" action="#">
                @csrf

                <button
                    type="submit"
                    class="
                        flex w-full items-center gap-3
                        rounded-xl px-3 py-2.5
                        text-sm font-medium
                        text-[#FC2925]
                        hover:bg-[#fff2f2]
                    "
                    role="menuitem"
                >
                    <i class="ri-logout-box-r-line text-base"></i>

                    Logout
                </button>
            </form>
        </div>

        </div>

    </div>

</header>