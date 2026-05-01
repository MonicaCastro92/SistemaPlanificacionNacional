<x-app-layout>
    <x-slot name="header">
        <h2>Listado de Objetivos PND</h2>
    </x-slot>

    <div class="p-6">

        <a href="{{ route('objetivo_pnds.create') }}">
            ➕ Crear Objetivo
        </a>

        <br><br>

        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Eje</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @forelse($objetivos as $obj)
                    <tr>
                        <td>{{ $obj->codigo }}</td>
                        <td>{{ $obj->nombre }}</td>
                        <td>{{ $obj->descripcion }}</td>
                        <td>{{ $obj->eje->nombre ?? 'Sin eje' }}</td>

                        <td>
                            <!-- EDITAR -->
                            <a href="{{ route('objetivo_pnds.edit', $obj->id) }}">
                                ✏️ Editar
                            </a>

                            <br>

                            <!-- ELIMINAR -->
                            <form action="{{ route('objetivo_pnds.destroy', $obj->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" onclick="return confirm('¿Eliminar?')">
                                    🗑️ Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay objetivos</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</x-app-layout>