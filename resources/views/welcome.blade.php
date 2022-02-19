<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        
    </head>
    <body class="">
        <livewire:client.nav />
        <hr>
        <div class="container py-5 mt-5">
            <livewire:admin.v-actu />
        </div>
        @livewireScripts
    </body>
</html>
