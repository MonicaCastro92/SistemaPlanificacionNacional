<h1>Editar Usuario</h1>

<a href="{{ route('users.index') }}">Volver</a>

<br><br>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="name" value="{{ $user->name }}" required>

    <br><br>

    <label>Apellido:</label>
    <input type="text" name="apellido" value="{{ $user->apellido }}" required>

    <br><br>

    <label>Cédula:</label>
    <input type="text" name="cedula" value="{{ $user->cedula }}">

    <br><br>

    <label>Dirección:</label>
    <input type="text" name="direccion" value="{{ $user->direccion }}">

    <br><br>

    <label>Rol:</label>
    <select name="role_id" required>
        @foreach($roles as $role)
            <option value="{{ $role->id }}"
                {{ $user->role_id == $role->id ? 'selected' : '' }}>
                {{ $role->nombre }}
            </option>
        @endforeach
    </select>

    <br><br>

    <button type="submit">Actualizar</button>
</form>