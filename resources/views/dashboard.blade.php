<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Planificacion Nacional</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* FONDO GENERAL */
        body {
            background-image: url('/img/fondo.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        /* CONTENEDOR CON TRANSPARENCIA */
        .contenido {
            background: rgba(255, 255, 255, 0.85);
            padding: 20px;
            border-radius: 12px;
        }

        /* BOTONES DEL MENÚ */
        .menu-card {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 120px;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            color: white;
            transition: 0.2s ease-in-out;
        }

        .menu-card:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Sistema de planificacion Nacional</a>
    </div>
</nav>

<!-- CONTENIDO -->
<div class="container mt-4 contenido">

    <!-- MENÚ -->
    <div class="menu-grid mb-4">
        
        <a href="{{ route('roles.index') }}" class="menu-card bg-dark">Roles</a>
        <a href="{{ route('users.index') }}" class="menu-card bg-primary">Usuarios</a>
        <a href="{{ route('plans.index') }}" class="menu-card bg-success">Planes</a>
        <a href="#" class="menu-card bg-primary">Proyectos</a>
        <a href="#" class="menu-card bg-success">Indicadores</a>
        <a href="#" class="menu-card bg-warning text-dark">ODS</a>
        <a href="#" class="menu-card bg-danger">Auditoría</a>

    </div>

    <!-- VISTAS -->
    @yield('content')

</div>

</body>
</html>