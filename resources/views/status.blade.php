<x-app-layout>
    <x-container>
        <h2 class="text-lg mb-4 text-gray-200">Solicitudes de amistad</h2>

        @foreach($requests as $user)
        <x-card class="mb-4">
            <div class="flex justify-between">
                {{ $user->name }}

                <x-submit-button>Confirmar Solicitud</x-submit-button>
            </div>
            
        </x-card>
        @endforeach

        <h2 class="text-lg mb-4 text-gray-200">Solicitudes enviadas</h2>

        @foreach($sent as $user)
        <x-card class="mb-4">
            {{ $user->name }}
        </x-card>
        @endforeach
    </x-container>
</x-app-layout>
