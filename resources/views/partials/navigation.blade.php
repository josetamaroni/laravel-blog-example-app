

<header class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm py-3 dark:bg-neutral-800">
    <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap basis-full items-center justify-between">
      <a class="sm:order-1 flex-none text-xl font-semibold text-green-500 focus:outline-none focus:opacity-80" href="{{ route('home') }}">Blog</a>
      <div class="sm:order-3 flex items-center gap-x-2">
        <button type="button" class="sm:hidden hs-collapse-toggle relative size-7 flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10" id="hs-navbar-alignment-collapse" aria-expanded="false" aria-controls="hs-navbar-alignment" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-alignment">
          <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          <span class="sr-only">Toggle</span>
        </button>
        {{-- <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
          Button
        </button> --}}
      </div>
      <div id="hs-navbar-alignment" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:grow-0 sm:basis-auto sm:block sm:order-2" aria-labelledby="hs-navbar-alignment-collapse">
        <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
          <a class="font-medium {{ request()->routeIs('home') ? 'text-green-500' : 'text-gray-600'}} focus:outline-none" href="{{ route('home') }}" aria-current="page">{{__('Home')}}</a>
          <a class="font-medium {{ request()->routeIs('posts.*') ? 'text-green-500' : 'text-gray-600'}} hover:text-gray-400 focus:outline-none focus:text-gray-400  dark:hover:text-neutral-500" href="{{ route('posts.index') }}">{{__('Blog')}}</a>
          <a class="font-medium {{ request()->routeIs('contact') ? 'text-green-500' : 'text-gray-600'}} hover:text-gray-400 focus:outline-none focus:text-gray-400  dark:hover:text-neutral-500" href="{{ route('contact') }}">{{__('Contact')}}</a>
          <a class="font-medium {{ request()->routeIs('about') ? 'text-green-500' : 'text-gray-600'}} hover:text-gray-400 focus:outline-none focus:text-gray-400  dark:hover:text-neutral-500" href="{{ route('about') }}">{{__('About')}}</a>
        </div>
      </div>
    </nav>
  </header>