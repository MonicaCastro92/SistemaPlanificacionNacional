<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Listado de Instituciones
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <a href="{{ route('institucions.create') }}">
                        ➕ Crear Institución
                    </a>

                    <br><br>

                    <table border="1" width="100%">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Subsector</th>
                                <th>Nivel de Gobierno</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($instituciones as $institucion)
                                <tr>
                                    <td>{{ $institucion->codigo }}</td>
                                    <td>{{ $institucion->subsector }}</td>
                                    <td>{{ $institucion->nivel_gobierno }}</td>
                                    <td>{{ $institucion->estado }}</td>

                                    <td>
                                        <!-- ✏️ EDITAR -->
                                        <a href="{{ route('institucions.edit', $institucion->id) }}">
                                            ✏️ Editar
                                        </a>

                                        <br>

                                        <!-- 🗑️ ELIMINAR -->
                                        <form action="{{ route('institucions.destroy', $institucion->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" onclick="return confirm('¿Eliminar esta institución?')">
                                                🗑️ Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No hay instituciones registradas</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>