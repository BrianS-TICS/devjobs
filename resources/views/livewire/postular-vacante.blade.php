<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-xl font-bold my-4">Postularme a esta vacante</h3>
    <form wire:submit.prevent='postularme' class="md:w-96 mt-5">
        @csrf
        <div class="mb-4">
            <div>
                <x-input-label for="cv" :value="__('Curriculum u Hoja de vida (PDF)')" />
                <x-text-input id="cv" wire:model="cv" type="file" accept=".pdf" class="block mt-1 w-full" />

                @error('cv')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror

                <x-primary-button class="my-5 w-full justify-center">
                    {{ __('Postularme') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</div>
