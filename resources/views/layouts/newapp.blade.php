<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Agencyfy is a html template for agency and business consulting" />

        <meta name="keywords" content="Agency, Landing, Business, Onepage, Html" />

        <title>{{ config('app.name', 'OWN CMS') }}</title>
        
        @include('elements.head')

        @yield('head_scripts')
    </head>

    <body class="home-alt" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

        @include('elements.navbar')

        @yield("content")

        @include('elements.footer')

        @yield('foot_scripts')

    </body>

</html>