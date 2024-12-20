<x-layout meta-title="Blog title" meta-description="Blog description">
    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="mt-4 mb-9 text-center text-green-600 text-4xl font-bold">{{__('Blog')}}</h1>
    

        {{-- @dump($posts) --}}
        {{-- <a href="{{ route('posts.create') }}" class="py-3 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-2 border-green-400 text-green-500 hover:border-green-600 hover:text-green-600 focus:outline-none focus:border-green-600 active:border-green-600 focus:text-green-600 disabled:pointer-events-none dark:border-neutral-700 dark:text-green-400 dark:hover:text-green-500 dark:hover:border-green-600 dark:focus:text-green-500 dark:focus:border-green-600 dark:active:text-green-500 dark:active:border-green-600">
            {{__('Create new post')}}
        </a> --}}

        {{-- //! Se muestra el botón cuando el usuario esté logeado --}}
        @auth
            <a href="{{ route('posts.create') }}" class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-green-600 decoration-2 hover:text-green-700 hover:underline focus:underline focus:outline-none focus:text-green-700 disabled:opacity-50 disabled:pointer-events-none dark:text-green-500 dark:hover:text-green-600 dark:focus:text-green-600">
                {{__('Create new post')}}
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        @endauth
        

        <div class="flex  justify-between">
            @foreach ($posts as $post)
        
            <div class="m-2 max-w-xs flex flex-col bg-white border border-t-4 border-t-green-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-green-500 dark:shadow-neutral-700/70">
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        <a href="{{ route('posts.show', $post->id) }}" class="text-green-600 dark:text-green-600">
                            {{$post->id}} - {{ $post->title }}
                        </a>
                    </h3>
                    <p class="mt-2 text-gray-500 dark:text-neutral-400">
                        {{ $post->body }}
                    </p>

                    
                    <div class="flex justify-between">

                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="py-1 px-1 items-center rounded-lg border border-2 border-green-400 text-green-500">
                                {{__('Delete')}}
                            </button>
                        </form>

                        <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-green-600 decoration-2 hover:text-green-700 hover:underline focus:underline focus:outline-none focus:text-green-700 disabled:opacity-50 disabled:pointer-events-none dark:text-green-500 dark:hover:text-green-600 dark:focus:text-green-600" 
                            href="{{ route('posts.edit', $post->id) }}"
                        >
                            {{__('Edit')}}
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>