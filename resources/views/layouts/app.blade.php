<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="flex h-screen bg-gray-200">
            @livewire('sidebar')
            <!-- Content -->
            <div class="flex-1 flex flex-col">
                <!-- Navbar -->
                @livewire('navigation-menu')
                <!-- Main Content -->
                <main class="flex-1 overflow-x-hidden overflow-y-auto">
                    <div class="py-6 px-6">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
{{--        <script src="{{ asset('js/app.js') }}"></script>--}}
        <script>
            document.getElementById('collapse-button').addEventListener('click', function () {
                let sidebar = document.getElementById('sidebar');
                let collapseIcon = document.getElementById('collapse-icon');
                let sidebarItems = document.querySelectorAll('#sidebar ul li a span');

                if (sidebar.classList.contains('w-64')) {
                    sidebar.classList.remove('w-64');
                    sidebar.classList.add('w-16');
                    collapseIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 6H4M20 12H4M20 18H13"></path>';

                    sidebarItems.forEach(item => item.classList.add('hidden'));
                } else {
                    sidebar.classList.remove('w-16');
                    sidebar.classList.add('w-64');
                    collapseIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6H20M4 12H20M4 18H11"></path>';

                    sidebarItems.forEach(item => item.classList.remove('hidden'));
                }
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    </body>
</html>
