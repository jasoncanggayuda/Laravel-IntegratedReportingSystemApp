<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <style>
            body {
            margin: 0;
            font-family: "Lato", sans-serif;
            }

            .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
            }

            .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
            }
            
            .sidebar a.active {
            background-color: #04AA6D;
            color: white;
            }

            .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
            }

            div.content {
            margin-left: 200px;
            padding: 1px 16px;
            }

            @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            div.content {margin-left: 0;}
            }

            @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
            }
        
            .mytable tbody tr td{
                max-width:250px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
        </style>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            
            @include('layouts.navigation')
            
            <div class="content">
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        </div>
    </body>
    <footer>
            ini footer
    </footer>
</html>
