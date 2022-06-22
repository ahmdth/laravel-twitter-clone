<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-[Inter]">
    <div id="app">
        <x-navbar />
        <main class="pb-8">
            <div class="container mx-auto">
                <div class="flex justify-between">
                    <div class="w-32 hidden lg:block" style="max-width: 700px;">
                        <x-sidebar-links></x-sidebar-links>
                    </div>
                    <div class="flex-1 lg:flex-auto lg:m-4 lg:mx-10">
                        @yield("content")
                    </div>
                    <div class="w-1/6 bg-blue-100 border border-blue-200 rounded-lg p-4 h-fit hidden lg:block">
                        <x-friends-list></x-friends-list>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
