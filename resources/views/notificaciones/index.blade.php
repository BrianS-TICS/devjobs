<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-center mt-5">Mis notificaciones</h1>
                    <div class="md:flex md:justify-center p-5">
                        @forelse ($notificaciones as $notificacion)
                            <div class="p-5 border border-gray-200 md:flex md:justify-between w-full lg:items-center">
                                <div>
                                    <p>Tienes un nuevo candidato en
                                        <span class="font-bold"> {{ $notificacion->data['nombre_vacante'] }}</span>
                                    </p>
                                    <p>Hace
                                        <span class="font-bold"> {{ $notificacion->created_at->diffForHumans() }}</span>
                                    </p>
                                </div>
                                <div class="mt-5 md:mt-0">
                                    <a class= "bg-teal-500 hover:bg-teal-400 rounded-xl uppercase font-bold text-white p-3" href="#">Ver candidatos</a>
                                </div>
                            </div>
                        @empty
                            <p class="text-center text-gray-600 p-3">No tienes notificaciones</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
