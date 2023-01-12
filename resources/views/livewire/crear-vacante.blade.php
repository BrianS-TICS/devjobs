<form class="md:w-1/2" wire:submit.prevent='crearVacante'>

    <!-- titulo -->
    <div class="mt-4">
        <x-input-label for="titulo" :value="__('Titulo de vacante')" />

        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')"
            placeholder="Titulo vacante" />

        @error('titulo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <!-- Salario -->
    <div class="mt-4">
        <x-input-label for="salario" :value="__('Salario mensual')" />

        <select class="w-full mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            wire:model="salario" id="salario">
            <option value="">-- Selecciona un el rango salarial --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>

        @error('salario')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <!-- Salario -->
    <div class="mt-4">
        <x-input-label for="categoria" :value="__('Categoria')" />

        <select class="w-full mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            wire:model="categoria" id="categoria">
            <option value="">-- Selecciona una categoria --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>

        @error('categoria')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <!-- empresa -->
    <div class="mt-4">
        <x-input-label for="empresa" :value="__('Empresa proporcionadora de vacante')" />

        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify" />

        @error('empresa')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <!-- ultimo dia -->
    <div class="mt-4">
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia de postulación')" />

        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia"
            :value="old('ultimo_dia')" />

        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <!-- descripcion -->
    <div class="mt-4">
        <x-input-label for="descripcion" :value="__('Descripción')" />

        <textarea class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            wire:model="descripcion" id="descripcion" cols="20" rows="5"
            placeholder="Decripción general del puesto, experiencia, requisitos, deberes, prestaciones..."></textarea>
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <!-- Imagen -->
    <div class="mt-4">
        <x-input-label for="imagen" :value="__('Imagen')" />

        <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen" accept="image/*" />

        <div class="my-5 w-80 mx-auto" >
            @if ($imagen)
                <img src="{{ $imagen->temporaryUrl() }}" alt="">
            @endif
        </div>

        @error('imagen')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-primary-button class="mt-4 w-full justify-center">
        {{ __('Crear vacante') }}
    </x-primary-button>
</form>
