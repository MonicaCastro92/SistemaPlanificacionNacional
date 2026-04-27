<h1>Listado de Usuarios</h1>

<a href="{{ route('users.create') }}">Crear Usuario</a>

<br><br>

<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cédula</th>
            <th>Dirección</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->apellido }}</td>
            <td>{{ $user->cedula }}</td>
            <td>{{ $user->direccion }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role->nombre ?? 'Sin rol' }}</td>

            <td>
                <!-- ✏️ EDITAR -->
                <a href="{{ route('users.edit', $user->id) }}">Editar</a>

                <!-- 🗑️ ELIMINAR -->
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('¿Eliminar usuario?')">
                        Eliminar
                    </button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>