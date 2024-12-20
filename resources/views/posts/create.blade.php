<x-app-layout meta-title="Create Blog" meta-description="Create description">

    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{__('Create new post')}}
        </h1>
    </x-slot>




    {{-- @dump($posts) --}}
    {{-- @dump($post->toArray()) --}}

    {{-- @dump($errors->all()) --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf

                        @include('posts.form-fields')

                        <button type="submit">{{__('Send')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <a href="{{ route('home') }}">{{__('Back')}}</a> --}}
</x-app-layout>