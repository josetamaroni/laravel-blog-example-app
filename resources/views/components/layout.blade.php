<!DOCTYPE html>
<html lang="es" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('partials.navigation')

    @session('status')
        <div>{{ session('status') }}</div>    
    @endsession
    
    <main class="flex-1 p-4">
        {{ $slot }}
    </main>
{{-- 
    @isset($sidebar)
        <div>
            <h3>Sidebar</h3>
            <div>{{ $sidebar }}</div>
        </div>
    @endisset --}}
</body>
</html>