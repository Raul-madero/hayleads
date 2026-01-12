@extends('agradecimiento.layout_gracias')

@section('main')
    <section class="w-full flex  items-center justify-center px-6">
        <div class="w-full max-w-2xl text-center">
            <h1 class="text-xl md:text-2xl lg:text-4xl text-[#83d040] font-extrabold">
            ¡Gracias por dejarnos tus datos! 🎉
            </h1>

            <p class="mt-6 text-gray-200 text-sm md:text-xl lg:text-2xl">
            Hemos recibido tu información correctamente.
            </p>

            <p class="mt-4 text-gray-200 text-sm md:text-xl lg:text-2xl">
            En breve, uno de nuestros especialistas se pondrá en contacto contigo para conocer tu negocio
            y ayudarte a generar <span class="font-semibold">leads con intención real</span>, enfocados en resultados medibles.
            </p>

            <div class="mt-8 text-left border-4 border-[#83d040] rounded-2xl p-6">
                <p class="text-[#83d040] font-semibold mb-3 text-sm md:text-xl lg:text-2xl">Mientras tanto, te invitamos a:</p>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li class="text-gray-200 text-sm md:text-xl lg:text-2xl">Tener a la mano información básica de tu negocio</li>
                    <li class="text-gray-200 text-sm md:text-xl lg:text-2xl">Pensar en tus objetivos comerciales a corto y mediano plazo</li>
                </ul>
            </div>

            <p class="mt-8 text-gray-200 text-sm md:text-xl lg:text-2xl">
            Estamos listos para ayudarte a escalar tu captación de clientes 🚀
            </p>

            <p class="mt-6 text-[#83d040] font-semibold text-sm md:text-xl lg:text-2xl">
            Equipo Hay Leads
            </p>
        </div>
    </section>
    <a href="{{ url('/') }}" class="bg-[#83d040] w-46 text-center font-black uppercase p-4 rounded-4xl lg:rounded-full text-sm md:text-md hover:scale-125 mt-4">
        Volver al Inicio
    </a>
@endsection