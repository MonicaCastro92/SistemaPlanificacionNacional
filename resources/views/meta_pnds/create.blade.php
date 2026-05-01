<form action="{{ route('meta_pnds.store') }}" method="POST">
    @csrf

    <label>Objetivo PND:</label>
    <select name="objetivo_pnd_id" required>
        @foreach($objetivos as $obj)
            <option value="{{ $obj->id }}">
                {{ $obj->nombre }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Año:</label>
    <input type="number" name="anio" required>

    <br><br>

    <label>Valor (%):</label>
    <input type="number" step="0.01" name="valor" required>

    <br><br>

    <button type="submit">Guardar</button>
</form>