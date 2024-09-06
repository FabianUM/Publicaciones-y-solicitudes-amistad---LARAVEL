<x-app-layout>
    <x-container>
        @if (!auth()->user()->isRelated($user))
        <form action="{{ route('friends.store', $user) }}" class="px-4 mb-8" method="POST">
            @csrf
            <x-submit-button>Agregar amigo</x-submit-button>
        </form>
        @endif

        @foreach($posts as $post)
        <x-card class="mb-4">
            {{ $post->body }}
            <div class="text-xs text-slate-500 mt-2">
                {{ $post->created_at->diffForHumans() }}
            </div>
        </x-card>
        @endforeach
    </x-container>
</x-app-layout>
