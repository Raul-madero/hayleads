@extends('layout')
@section('button')
    @include('button')
@endsection
@section('main')
    <div class="flex flex-col md:flex-row gap-4 items-center justify-center w-full md:max-w-10/12 pl-4">
        <div class="w-full flex flex-col items-center justify-center gap-4 lg:gap-8">
            <h1 class="w-full font-black text-left text-xl md:text-2xl lg:text-4xl text-[#83d040]">Más leads Calificados <br> Más ventas para tu desarrollo. </h1>
            <p class="w-full mt-4 text-left text-white text-sm md:text-xl lg:text-2xl">No generamos leads por volumen.
            Creamos un flujo constante de prospectos que sí pueden comprar y que tu equipo de ventas sí va a poder cerrar.
            Nos enfocamos en alcanzar tus objetivos de ventas y no en generar más leads</p>
        </div>
        <div class="text-center w-full flex justify-center items-center">
            <img src="{{ asset('img/hero.png') }}" class="w-full max-w-60 mx-auto h-60 md:h-full lg:w-90 rounded-3xl" alt="Sistemas Computacionales Hay Leads">
        </div>
    </div>
    <div id="agenda_demo" class="fixed bottom-0 left-0 w-full bg-[#83d040] h-12 flex items-center justify-center z-50 hover:cursor-pointer hover:scale-125">
        <a href="#contacto" class="text-black font-bold text-lg text-center uppercase w-full">
            Agenda tu demo
        </a>
    </div>
@endsection
    @section('ventas')
        <div class="w-full mb-4">
            <h2 class="font-black text-center text-lg md:text-2xl lg:text-3xl w-full text-[#9795fa]">No necesitas más volumen. <br> Necesitas Leads que puedan comprar.</h2>
        </div>
        <div class="w-full flex justify-center mb-8">
            <p class="text-center text-sm md:text-xl lg:text-2xl w-full md:w-7/12 mx-auto px-2">Con más de 8 años de experiencia en marketing digital inmobiliario, hemos ayudado a más de 50 desarrollos a generar un volumen constante de citas calificadas al mes. Implementamos un proceso simple y sencillo que funciona</p>
        </div>
        <div class="w-full px-6 md:px-12 lg:px-48">
            <!-- ===== MOBILE ===== -->
            <div class="flex gap-4 items-center justify-center md:hidden">
                <div class="flex flex-col items-center justify-center gap-4">
                    <div class="flex items-center justify-center gap-4">
                        <img src="{{ asset('img/vineta.svg') }}" alt="Vineta morada" class="w-6 h-6">
                        <button class="bullet-title hover:cursor-pointer" data-content="campanas">
                            <span class="font-extrabold">Campañas </span>
                            {{-- <span class="text-xs font-bold text-[#83d040]">(Ver Mas)</span> --}}
                        </button>
                        <div id="campanas" class="bullet-content hidden">
                            en canales digitales (Google, Meta, LinkedIn, TikTok) enfocadas en intención real.
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-4">
                        <img src="{{ asset('img/vineta.svg') }}" alt="Vineta morada" class="w-6 h-6">
                        <button class="bullet-title hover:cursor-pointer" data-content="filtros">
                            <span class="font-extrabold">Filtros </span>
                            {{-- <span class="text-xs font-bold text-[#83d040]">(Ver Mas)</span> --}}
                        </button>
                        <div id="filtros" class="bullet-content hidden">
                            y nurturing de leads con apoyo de IA para diferenciar curiosos de compradores.
                        </div>
                    </div>

                    <div class="flex items-center justify-center gap-4">
                        <img src="{{ asset('img/vineta.svg') }}" alt="Vineta morada" class="w-6 h-6">
                        <button class="bullet-title hover:cursor-pointer" data-content="optimizacion">
                            <span class="font-extrabold">Optimización </span>
                            {{-- <span class="text-xs font-bold text-[#83d040]">(Ver Mas)</span> --}}
                        </button>
                        <div id="optimizacion" class="bullet-content hidden">
                            continua junto al equipo de ventas para alinear resultados y alcanzar metas.
                        </div>
                    </div>

                    <div class="flex items-center justify-center gap-4">
                        <img src="{{ asset('img/vineta.svg') }}" alt="Vineta morada" class="w-6 h-6">
                        <button class="bullet-title hover:cursor-pointer" data-content="inversion">
                            <span class="font-extrabold">Inversión </span>
                            {{-- <span class="text-xs font-bold text-[#83d040]">(Ver Mas)</span> --}}
                        </button>
                        <div id="inversion" class="bullet-content hidden">
                            enfocada en generar y medir tu retorno de inversión. No medimos clics.
                        </div>
                    </div>
                </div>
            </div>

            <!-- ===== DESKTOP ===== -->
            <div class="hidden md:grid md:grid-cols-2 gap-8">

                <div class="flex gap-4">
                <img src="{{ asset('img/vineta.svg') }}" alt="Vineta morada" class="w-6 h-6">
                <p><strong>Campañas</strong> en canales digitales (Google, Meta, LinkedIn, TikTok) enfocadas en intención real.</p>
                </div>

                <div class="flex gap-4">
                <img src="{{ asset('img/vineta.svg') }}" alt="Vineta morada" class="w-6 h-6">
                <p><strong>Optimización</strong> continua junto al equipo de ventas para alinear resultados y alcanzar metas.</p>
                </div>

                <div class="flex gap-4">
                <img src="{{ asset('img/vineta.svg') }}" alt="Vineta morada" class="w-6 h-6">
                <p><strong>Filtros</strong> y nurturing de leads con apoyo de IA para diferenciar curiosos de compradores.</p>
                </div>

                <div class="flex gap-4">
                <img src="{{ asset('img/vineta.svg') }}" alt="Vineta morada" class="w-6 h-6">
                <p><strong>Inversión</strong> enfocada en generar y medir tu retorno de inversión. No medimos clics.</p>
                </div>

            </div>
            </div>

        <div class="w-full flex justify-center mt-8">
            <p class="text-center text-sm md:text-xl lg:text-2xl w-full px-2">El resultado es simple:
            <br>Ventas cerradas en los primeros 3 meses de trabajo para el 90% de nuestros clientes. 
            </p>
        </div>
    @endsection
    @section('inversion')
        <h2 class="font-black text-center text-lg md:text-2xl lg:text-3xl w-full text-[#83d040]">Transforma tu inversión publicitaria en Ventas</h2>
        <p class="text-center text-sm md:text-xl lg:text-2xl w-full px-4 mt-4">Nuestro enfoque prioriza los prospectos con intención de compra real, seguimiento claro y decisiones basadas en datos.</p>
        <div class="w-full mx-auto mt-20 relative px-10">
            
            <!-- TRACK -->
            <div
                id="carouselTrack"
                class="flex transition-transform duration-500 ease-in-out md:flex-row md:translate-x-0"
            >

                <!-- ITEM 1 Mas Calidad-->
                <div class="min-w-full md:min-w-0 md:w-1/3 flex justify-center px-8">
                    <div class="relative w-full flex justify-center">

                        <!-- CARD -->
                        <div class="bg-[#9795fa] w-full p-4 flex flex-col items-center text-center gap-8 rounded-2xl relative z-10">
                        <h6 class="font-black text-lg">Más Calidad</h6>
                        <p class="text-sm md:text-xl lg:text-2xl">
                            Seguimos cada lead desde el primer click hasta la venta.
                            <br><br>
                            Si no puede comprar no entra al funnel
                        </p>
                        </div>

                        <!-- IMAGEN -->
                        <img
                        src="{{ asset('img/etiqueta1.svg') }}"
                        class="absolute w-40 h-40 -right-16 -top-20 rotate-36 z-20 pointer-events-none"
                        alt="Más Calidad"
                        />

                    </div>
                </div>

                <!-- ITEM 2 Mas Control-->
                <div class="min-w-full md:min-w-0 md:w-1/3 flex justify-center px-8">
                    <div class="relative w-full flex justify-center">

                        <!-- CARD -->
                        <div class="bg-[#83d040] w-full p-4 flex flex-col items-center text-center gap-8 rounded-2xl relative z-10">
                            <h6 class="font-black text-lg">Más Control</h6>
                            <p class="text-sm md:text-xl lg:text-2xl">
                                Dashboards claros con lo que te importa:
                                <br><br>
                                Leads, citas, cierres y retorno de la inversión
                            </p>
                        </div>

                        <!-- IMAGEN -->
                        <img
                            src="{{ asset('img/etiqueta2.svg') }}"
                            class="absolute w-64 h-64 -right-24 -top-32 rotate-36 z-20 pointer-events-none"
                            alt="Más Control"
                        />

                    </div>
                </div>

                <!-- ITEM 3 MAs Ventas-->
                <div class="min-w-full md:min-w-0 md:w-1/3 flex justify-center px-8">
                    <div class="relative w-full flex justify-center">

                        <!-- CARD -->
                        <div class="bg-[#9795fa] w-full p-4 flex flex-col items-center text-center gap-8 rounded-2xl relative z-10">
                            <h6 class="font-black text-lg">Más Ventas</h6>
                            <p class="text-sm md:text-xl lg:text-2xl">
                                Trabajamos de la mano con tu equipo de ventas para optimizar:
                                <br><br>
                                Mensajes, tiempo de respuesta y seguimiento en tiempo real
                            </p>
                        </div>

                        <!-- IMAGEN -->
                        <img
                            src="{{ asset('img/etiqueta3.svg') }}"
                            class="absolute w-60 h-60 -right-30 -top-30 rotate-36 z-20 pointer-events-none"
                            alt="Más Ventas"
                        />

                    </div>
                </div>
            </div>

            <!-- CONTROLES (solo mobile) -->
            <div class="flex justify-center gap-4 mt-6 md:hidden">
                <button onclick="prevSlide()" class="w-8 h-8 bg-[#83d040] text-white font-bold rounded-full opacity-50"><</button>
                <button onclick="nextSlide()" class="w-8 h-8 bg-[#83d040] text-white font-bold rounded-full opacity-50">></button>
            </div>
        </div>
    @endsection
    @section('3pasos')
        <div class="w-full flex flex-col">
            <!-- TÍTULO -->
            <h2 class="font-black text-center text-lg md:text-2xl lg:text-3xl w-full text-[#83d040]">
                Nuestro sistema en 3 pasos
            </h2>

            <!-- NUMERACIÓN (SOLO MOBILE) -->
            <div class="flex items-center justify-between md:flex-col w-full gap-10">
                <div class="flex flex-col justify-start items-start gap-4 mt-6 md:hidden">
                    <button onclick="showStep(1)" class="step-btn hover:cursor-pointer">1</button>
                    <button onclick="showStep(2)" class="step-btn hover:cursor-pointer">2</button>
                    <button onclick="showStep(3)" class="step-btn hover:cursor-pointer">3</button>
                </div>

                <!-- PASO 1 -->
                <div class="step mt-8 hidden md:flex" data-step="1">
                    <img src="{{ asset('img/vinetalogo.svg') }}" class="w-8 mr-4 mb-2 hidden md:flex">
                    <p class="text-white font-light">
                    <span class="font-bold text-xl">Atraemos compradores con capacidad</span><br>
                    Diseñamos campañas enfocadas en la intención y el perfil financiero, no en el volumen de contactos.
                    </p>
                </div>

                <!-- PASO 2 -->
                <div class="step mt-8 hidden md:flex" data-step="2">
                    <img src="{{ asset('img/vinetalogo.svg') }}" class="w-8 mr-4 mb-2 hidden md:flex">
                    <p class="text-white font-light">
                    <span class="font-bold text-xl">Cualificamos y filtramos con IA</span><br>
                    Automatizamos el primer contacto para que tu equipo solo hable con prospectos serios.
                    </p>
                </div>

                <!-- PASO 3 -->
                <div class="step mt-8 hidden md:flex" data-step="3">
                    <img src="{{ asset('img/vinetalogo.svg') }}" class="w-8 mr-4 mb-2 hidden md:flex">
                    <p class="text-white font-light">
                    <span class="font-bold text-xl">Medimos, optimizamos y escalamos</span><br>
                    Seguimos cada lead hasta el cierre y optimizamos constantemente para que vendas más.
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full md:grid-rows-4 md:grid-cols-3 hidden md:grid">
            <h6 class="font-black text-[#83d040] justify-self-end self-end text-xs md:text-md lg:text-lg  text-end">Ads</h6>
            <div></div>
            <h6 class="font-black text-[#83d040] justify-self-start self-end text-xs md:text-md lg:text-lg  text-start">Leads Calificados</h6>
            <img src="{{ asset('img/ads.svg') }}" alt="Ads Hay Leads" class="w-30 h-30 justify-self-end self-center">
            <img src="{{ asset('img/flecha.svg') }}" alt="Flecha a la derecha" class="w-10 h-10 self-center justify-self-start">
            <img src="{{ asset('img/leads.svg') }}" alt="Leads Calificados Hay Leads" class="w-30 h-30 justify-self-start self-center">
            <h6 class="font-black text-[#83d040] justify-self-end self-end md:text-md lg:text-lg  text-xs text-center">Citas</h6>
            <div></div>
            <h6 class="font-black text-[#83d040] justify-self-start self-end md:text-md lg:text-lg text-xs  text-center">Ventas</h6>
            <img src="{{ asset('img/citas.svg') }}" alt="Flecha a la derecha" class="w-30 h-30 self-center justify-self-end">
            <img src="{{ asset('img/flecha.svg') }}" alt="Leads Calificados Hay Leads" class="w-10 h-10 self-center justify-self-start">
            <img src="{{ asset('img/ventas.svg') }}" alt="Leads Calificados Hay Leads" class="w-30 h-30 justify-self-start self-center">
        </div>
    @endsection
    @section('contacto')
        <!-- TEXTO -->
        <div class="max-w-5xl">
            <h2 class="font-black text-center text-lg md:text-2xl lg:text-3xl text-[#83d040]">
            Si tus ventas dependen de leads, dependen de nosotros
            </h2>

            <p class="text-white text-center text-sm md:text-xl lg:text-2xl mt-12">
            Descubre cómo llenar tu pipeline con citas reales, reducir el desgaste de tu equipo de ventas y empezar a cerrar más con una estrategia digital integral
            </p>

            <p class="text-white text-center text-sm md:text-xl lg:text-2xl mt-14">
            Déjanos tus datos y comienza a vender más
            </p>
        </div>

        <!-- FORM -->
        <div class="w-full flex justify-center">
            <iframe
            class="w-full min-h-[650px] lg:min-h-[800px] border-none"
            src="https://api.leadconnectorhq.com/widget/form/wjx6D6c2C7d1h3UanacQ"
            id="inline-wjx6D6c2C7d1h3UanacQ"
            title="Hay Leads"
            loading="lazy"
            ></iframe>
        </div>
    @endsection

<script src="https://link.msgsndr.com/js/form_embed.js"></script>
    </body>
</html>
