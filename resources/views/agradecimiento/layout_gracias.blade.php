<!DOCTYPE html>
<html class="w-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}" type="image/x-icon">

        <title>{{ config('app.name', 'Hay Leads') }}</title>
        <!-- Styles / Scripts -->
        <style>
            .step-btn {
                width: 40px;
                height: 40px;
                border-radius: 9999px;
                background: #83d040;
                color: black;
                font-weight: bold;
            }
            .step-btn.active {
                background: white;
            }
            .bullet-title {
                @apply flex items-center gap-4 text-left text-base font-semibold cursor-pointer;
            }

            .bullet-content {
                @apply absolute top-0 left-0 w-full text-sm
                    opacity-0 translate-x-6
                    transition-all duration-300;
            }

            .bullet-content.show {
                @apply opacity-100 translate-x-0;
            }
            </style> @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="w-full bg-black dark:bg-[#0a0a0a] text-[#1b1b18] flex items-center min-h-screen flex-col pb-12">
        <header class="w-full text-sm not-has-[nav]:hidden pr-12">
            <nav class="flex justify-around lg:justify-between gap-4 items-center lg:w-9/12 lg:mx-auto">
                <img src="{{ asset('img/logo.svg') }}" alt="Logotipo Hay Leads" class="md:w-56 md:h-40 w-40 h-36">
                @yield('button')
            </nav>
        </header>

        <!-- Seccion Principal -->
        <main class="w-full flex flex-col items-center justify-center">
            @yield('main')
        </main>
    </body>
</html>