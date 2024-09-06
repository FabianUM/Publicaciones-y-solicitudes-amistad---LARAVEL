<x-app-layout>
    <x-container>
        <form action="" class="px-4 mb-8">
            <textarea 
                name="body" 
                rows="2" 
                class="w-full mb-2 p-0 text-white bg-transparent border-0 border-b-2 border-slate-800 focus:border-b-slate-400 focus:ring-0 resize-none overflow-hidden"
                placeholder="Tu comentario ..."
            ></textarea>

            <input 
                type="submit"
                class="px-4 py-2 bg-yellow-400 text-gray-800 font-semibold sm:rounded-lg text-xs"
            >
        </form>

        @foreach($posts as $post)
        <a href="" class="px-6 mb-2 flex items-center gap-2 font-medium text-slate-100">
        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
            <path d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
        </svg>

            {{ $post->user->name }}
        </a>
        <x-card class="mb-4">
            {{ $post->body }}
            <div class="text-xs text-slate-500 mt-2">
                {{ $post->created_at->diffForHumans() }}
            </div>
        </x-card>
        @endforeach
    </x-container>
</x-app-layout>
