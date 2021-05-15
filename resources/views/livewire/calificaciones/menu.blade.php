<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Menú
    </h2>
</x-slot>



<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Módulo de Calificaciones</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Control de Alumnos, Profesores, Materias y Calificaciones
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">

            </p>
        </div>

        <div class="mt-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">

                @foreach ($navLinks as $item)

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <a href="{{ route($item['routerName']) }}">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: outline/globe-alt -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                {{ $item['name'] }}
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                {{ $item['text'] }}
                            </dd>
                        </div>

                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
