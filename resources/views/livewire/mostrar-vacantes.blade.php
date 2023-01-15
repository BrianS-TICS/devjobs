<div>
    <div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3 p-5">
            {{ __('Bienvenido a devJobs ' . auth()->user()->name) }}
        </div>
        {{-- Tambien podemos usar un @forelse para iterar vacantes --}}
        @if (count($vacantes) > 0)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($vacantes as $vacante)
                    <div class="space-y-2 p-5 border border-gray-200 md:flex md:justify-between">
                        <div>
                            <a class="font-semibold"
                                href="{{ route('vacantes.show', $vacante->id) }}">{{ $vacante->titulo }}</a>
                            <p class="text-sm text-gray-600">{{ $vacante->empresa }}</p>
                            <p class="text-sm text-gray-500">Último dia: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
                        </div>
                        <div class="flex flex-col md:p-0  items-stretch gap-2 md:flex-row md:items-center  mt-3 ">
                            <a class="bg-slate-800 py-2 px-4 rounded-lg text-xs font-bold uppercase text-center text-white"
                                href="#">
                                Candidatos
                            </a>
                            <a class="bg-blue-800 py-2 px-4 rounded-lg text-xs font-bold uppercase text-center text-white"
                                href="{{ route('vacantes.edit', $vacante->id) }}">
                                Editar
                            </a>
                            <button
                                class="bg-red-800 py-2 px-4 rounded-lg text-xs font-bold uppercase text-center text-white"
                                wire:click="$emit('mostrarAlerta', {{ $vacante->id }})">
                                Eliminar
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <p class="p-5 text-gray-600 font-semibold text-sm text-center">Aún no hay vacantes para mostrar</p>
            </div>
        @endif
    </div>

    <div class="mt-10 p-3">
        {{ $vacantes->links() }}
    </div>
</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        Livewire.on('mostrarAlerta', vacanteId => {
            Swal.fire({
                title: '¿Deseas eliminar la vacante?',
                text: "No podras revertir esto",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {

                    // Eliminar vacante
                    Livewire.emit('eliminarVacante', vacanteId);

                    Swal.fire(
                        'Eliminada!',
                        'La vacante ha sido elimanda',
                        'success'
                    )

                }
            })
        });
    </script>
@endpush
