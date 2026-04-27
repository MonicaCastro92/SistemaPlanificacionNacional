<h1>Listado de Roles</h1>

<a href="{{ route('roles.create') }}">Crear Rol</a>

<br><br>

<!-- 🔍 BUSCADOR -->
<form method="GET" action="{{ route('roles.index') }}">
    <input type="text" name="buscar" value="{{ request('buscar') }}" placeholder="Buscar rol...">
    <button type="submit">Buscar</button>
</form>

<br>

<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Permiso</th>
            <th>Acciones</th>
            
          
        </tr>
    </thead>

    <tbody>
        @foreach($roles as $role)
        <tr>
            <td>{{ $role->nombre }}</td>
            <td>{{ $role->descripcion }}</td>
            <td>{{$role->permiso}}</td>

            <td>
                <!-- ✏️ EDITAR -->
                <a href="{{ route('roles.edit', $role->id) }}">Editar</a>

                <!-- 🗑️ ELIMINAR -->
                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar este rol?')">
                        Eliminar
                    </button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>