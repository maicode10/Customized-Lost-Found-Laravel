<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Lost & Found Management System') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 font-sans text-gray-900 antialiased">

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">

            {{-- TASK 3: Small Logo Above Login Form --}}
            <div class="mb-4">
                <a href="/">
                    <img 
                        src="{{ asset('images/welcome-image.png') }}" 
                        alt="Lost and Found Logo"
                        class="w-16 h-16 object-cover rounded-md shadow-md"
                    >
                </a>
            </div>

            <!-- Login Form Box -->
            <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>

            <!-- Back to Home -->
            <div class="mt-4">
                <a href="{{ url('/') }}" class="text-sm text-gray-500 hover:text-gray-900 underline underline-offset-4">
                    ← Back to Home
                </a>
            </div>

        </div>

    </body>
</html>