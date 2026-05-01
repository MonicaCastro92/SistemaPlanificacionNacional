<x-app-layout>
    <h1>Editar Objetivo PND</h1>

    <a href="{{ route('objetivo_pnds.index') }}">⬅️ Volver</a>

    <br><br>

    <form action="{{ route('objetivo_pnds.update', $objetivo->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- CÓDIGO --}}
        <label>Código:</label>
        <input type="text" name="codigo" value="{{ $objetivo->codigo }}" required>
        <br><br>

        {{-- NOMBRE --}}
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $objetivo->nombre }}" required>
        <br><br>

        {{-- DESCRIPCIÓN --}}
        <label>Descripción:</label>
        <textarea name="descripcion">{{ $objetivo->descripcion }}</textarea>
        <br><br>

        {{-- EJE --}}
        <label>Eje:</label>
        <select name="eje_id" required>
            @foreach($ejes as $eje)
                <option value="{{ $eje->id }}"
                    {{ $objetivo->eje_id == $eje->id ? 'selected' : '' }}>
                    {{ $eje->nombre }}
                </option>
            @endforeach
        </select>

        <br><br>

        {{-- 🌍 ODS (NUEVO) --}}
        <label><strong>ODS relacionados:</strong></label>
        <br>

        @php
            $seleccionados = $objetivo->ods->pluck('id')->toArray();
        @endphp

        @foreach ($ods as $item)
            <label>
                <input type="checkbox" name="ods[]" value="{{ $item->id }}"
                    {{ in_array($item->id, $seleccionados) ? 'checked' : '' }}>
                {{ $item->numero }} - {{ $item->nombre }}
            </label>
            <br>
        @endforeach

        <br>

        {{-- BOTÓN --}}
        <button type="submit">Actualizar</button>

    </form>
</x-app-layout>