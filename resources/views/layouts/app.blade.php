<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Proxicore CRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r">
        @livewire('layout.sidebar')
    </aside>

    <!-- Main -->
    <main class="flex-1 p-8">
        @if (session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
        {{ $slot ?? '' }}
    </main>
</div>

@livewireScripts
</body>
</html>