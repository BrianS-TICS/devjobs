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
                        <a class="font-semibold" href="#">{{ $vacante->titulo }}</a>
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
                        <a class="bg-red-800 py-2 px-4 rounded-lg text-xs font-bold uppercase text-center text-white"
                            href="#">
                            Eliminar
                        </a>
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
