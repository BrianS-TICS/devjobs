<form action="" class="md:w-1/2">

    <!-- titulo -->
    <div class="mt-4">
        <x-input-label for="titulo" :value="__('Titulo de vacante')" />

        <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"
            placeholder="Titulo vacante" />

        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <!-- Salario -->
    <div class="mt-4">
        <x-input-label for="salario" :value="__('Salario mensual')" />

        <select class="w-full mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            name="salario" id="salario">
            <option value="">-- Selecciona un el rango salarial --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    <!-- Salario -->
    <div class="mt-4">
        <x-input-label for="categoria" :value="__('Categoria')" />

        <select class="w-full mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            name="categoria" id="categoria">
            <option value="">-- Selecciona una categoria --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <!-- empresa -->
    <div class="mt-4">
        <x-input-label for="empresa" :value="__('Empresa proporcionadora de vacante')" />

        <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify" />

        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>

    <!-- ultimo dia -->
    <div class="mt-4">
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia de postulación')" />

        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')" />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <!-- descripcion -->
    <div class="mt-4">
        <x-input-label for="descripcion" :value="__('Descripción')" />

        <textarea class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            name="descripcion" id="descripcion" cols="20" rows="5"
            placeholder="Decripción general del puesto, experiencia, requisitos, deberes, prestaciones..."></textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    <!-- Imagen -->
    <div class="mt-4">
        <x-input-label for="imagen" :value="__('Imagen')" />

        <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" />

        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>

    <x-primary-button class="mt-4 w-full justify-center">
        {{ __('Crear vacante') }}
    </x-primary-button>
</form>
