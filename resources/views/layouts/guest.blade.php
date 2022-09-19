<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="css/app.css">
        <script src="js/app.js" defer></script>
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">

            <div class="">
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @foreach (Config::get('languages') as $lang => $language)
                            <a href="{{ route('lang.switch', $lang) }}" style="@if (App::getLocale() == $lang)
                            font-weight:bold
                        @else
                        @endif" class="text-sm text-gray-700 dark:text-gray-500 underline">{{$language}}</a>
                        @endforeach
                </div>
        </div>

            {{ $slot }}
        </div>
    </body>
</html>
