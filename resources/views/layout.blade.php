<!DOCTYPE html>
<html class="w-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PLW49476');</script>
        <!-- End Google Tag Manager -->

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
            </style> 
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="w-full bg-black dark:bg-[#0a0a0a] text-[#1b1b18] flex items-center min-h-screen flex-col pb-12">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLW49476"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
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

        <!-- Seccion Ventas -->
        <section class="w-full bg-[#d9d9d9] flex flex-col items-center gap-8 lg:gap-0 justify-center mt-12 py-12">
            @yield('ventas')
        </section>
        <!-- Seccion Inversion -->
        <section class="w-full bg-[#d9d9d9] flex flex-col items-center gap-8 lg:gap-0 justify-center py-12 overflow-x-hidden">
            @yield('inversion')
        </section>

        <!-- Seccion 3 pasos -->
        <section class="w-full px-4 flex md:flex-row items-center gap-8 lg:gap-0 justify-center py-12">
            @yield('3pasos')
        </section>
        <!-- Seccion Contacto -->
        <section
        id="contacto"
        class="w-full mx-auto flex flex-col items-center gap-12 mb-12 min-h-screen"
        >
            @yield('contacto')
        </section>
    </body>
</html>
