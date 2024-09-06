<x-app-layout>
    <x-container>
        <h2 class="text-lg mb-4 text-gray-200">Solicitudes de amistad</h2>

        @foreach($requests as $user)
        <x-card class="mb-4">
            <div class="flex justify-between">
                {{ $user->name }}

                <form action="{{ route('friends.update', $user) }}" method="POST">
                @csrf
                @method('PUT')
                    <x-submit-button>Confirmar Solicitud</x-submit-button>
                </form>
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
