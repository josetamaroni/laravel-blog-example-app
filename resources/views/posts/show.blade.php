<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <div class="container m-auto">

        <h1 class="mt-4 mb-9 text-center text-green-600 text-4xl font-bold">{{ $post->title }}</h1>
        <p class="mt-4 mb-9 text-center text-gray-800 text-2xl">{{ $post->body }}</p>
        
        <a href="{{ route('posts.index') }}" class="flex">
            <svg class="w-4 h-4 text-gray-800 dark:text-green-600 my-auto mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
            </svg>
            {{__('Back')}}
        </a>
    </div>
</x-layout>