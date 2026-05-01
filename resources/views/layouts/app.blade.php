<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de planificacion Nacional</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        /* SIDEBAR */
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin: 5px 10px;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .sidebar a.active {
            background-color: #0d6efd;
        }

        /* CONTENIDO */
        .content {
            padding: 20px;
        }

        /* NAVBAR */
        .navbar {
            background-color: #0d6efd !important;
        }
    </style>
</head>

<body>

<!-- NAVBAR SUPERIOR -->
<nav class="navbar navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            Sistema de planificacion Nacional
        </a>
    </div>
</nav>

<!-- CONTENIDO GENERAL -->
<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR IZQUIERDO -->
        <div class="col-md-2 sidebar">

            <a href="{{ route('roles.index') }}">Roles</a>
            <a href="{{ route('users.index') }}">Usuarios</a>
            <a href="{{ route('plans.index') }}">Planes nacionales</a>

        </div>

        <!-- CONTENIDO -->
        <div class="col-md-10 content">

            @yield('content')

        </div>

    </div>
</div>

</body>
</html>