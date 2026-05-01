<h1>Crear Plan</h1>

<a href="{{ route('plans.index') }}">Volver</a>

<br><br>

<form action="{{ route('plans.store') }}" method="POST">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <br><br>

    <label>Código del Plan:</label>
    <input type="text" name="id_plan" required>
    <br><br>

    <label>Estado:</label>
    <input type="text" name="estado" required>
    <br><br>

    <label>Fecha Inicio:</label>
    <input type="date" name="fecha_inicio" required>
    <br><br>

    <label>Fecha Fin:</label>
    <input type="date" name="fecha_fin">
    <br><br>

    

    <button type="submit">Guardar</button>
</form>