<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Bakuna Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <nav class="bg-emerald-700 text-white">
        <div class="max-w-6xl mx-auto px-4 py-3 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
            <a href="/dashboard" class="font-bold text-lg">Bakuna Tracker</a>
            <div class="flex items-center gap-4 text-sm">
                @auth
                    <a href="/dashboard" class="hover:underline">Dashboard</a>
                    <a href="/schedule" class="hover:underline">Schedule</a>
                    <span>Hi, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button class="underline">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="hover:underline">Sign in</a>
                @endguest
            </div>
        </div>
    </nav>

    <main class="flex-1 w-full max-w-6xl mx-auto px-4 py-6">
        @yield('content')
    </main>

    <footer class="bg-white border-t text-center text-sm text-gray-500 py-4">
        Barangay Matina Crossing Health Center · Davao City
    </footer>
</body>
</html>