<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Tailwind via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="min-h-screen bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] antialiased flex flex-col">

    <!-- Header -->
    <header class="w-full px-6 py-4 flex justify-between items-center max-w-6xl mx-auto">
        <h1 class="font-semibold text-lg tracking-tight">
            Laravel App
        </h1>

        @if (Route::has('login'))
            <nav class="flex items-center gap-3 text-sm">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="px-4 py-1.5 rounded-md border border-zinc-200 dark:border-zinc-700 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="px-4 py-1.5 rounded-md text-zinc-600 dark:text-zinc-400 hover:text-black dark:hover:text-white transition">
                        Log in
                    </a>
                @endauth
            </nav>
        @endif
    </header>

    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center px-6">
        <div
            class="w-full max-w-md bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-xl shadow-sm p-8 text-center space-y-4">
            <h2 class="text-2xl font-semibold leading-tight">
                Welcome to Laravel
            </h2>

            <p class="text-sm text-zinc-600 dark:text-zinc-400">
                A clean starting point for your next awesome project.
            </p>

            <div class="pt-4 flex justify-center gap-3">
                <a href="{{ route('login') }}"
                    class="px-5 py-2 rounded-md border border-zinc-300 dark:border-zinc-700 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition text-sm">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="px-5 py-2 rounded-md bg-black text-white dark:bg-white dark:text-black hover:opacity-90 transition text-sm">
                        Get Started
                    </a>
                @endif
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-6 text-center text-xs text-zinc-500">
        © {{ date('Y') }} Laravel • Built with ❤️
    </footer>

</body>

</html>
