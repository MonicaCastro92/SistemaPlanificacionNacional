<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div style="display:flex">

    <!-- Sidebar -->
    <div style="width:200px; background:yellow; padding:10px;">
        <h3>Menu</h3>
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li>
    <strong>Roles</strong>
    <ul>
        <li><a href="/roles/create">Registrar Rol</a></li>
        <li><a href="/roles">Consultar Roles</a></li>
   
    </ul>
    <strong>Usuarios</strong>
    <ul>
        <li><a href="/users/create">Registrar Usuario</a></li>
        <li><a href="/users">Consultar Usuario</a></li>
   
    </ul>
</li>
        </ul>
    </div>

    <!-- Content -->
    <div style="flex:1; padding:20px;">
        {{ $slot }}
    </div>

</div>
            </main>
        </div>
    </body>
</html>
