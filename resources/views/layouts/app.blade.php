<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'May Manpower')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
   <link
    rel="preconnect"
    href="https://fonts.googleapis.com"
>

<link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
>

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet"
>
    @stack('styles')
</head>

<body>

<div class="min-h-screen bg-background">

    @include('layouts.partials.sidebar')

    <div
        id="sidebarScrim"
        class="fixed inset-0 z-40 hidden bg-black/40 lg:hidden"
    ></div>

    <div id="appShell" class="lg:ml-[246px] min-h-screen transition-[margin-left]">

        @include('layouts.partials.navbar')

        <main class="p-8 max-w-[1400px] mx-auto">
            @yield('content')
        </main>

    </div>

</div>


@stack('scripts')

</body>
</html>