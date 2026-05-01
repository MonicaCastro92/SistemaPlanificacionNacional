<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Objetivo PND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Crear Objetivo PND</h2>

    {{-- Mensajes de error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- FORMULARIO --}}
    <form action="{{ route('objetivo_pnds.store') }}" method="POST">
        @csrf

        {{-- Código --}}
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" name="codigo" id="codigo"
                   class="form-control" value="{{ old('codigo') }}" required>
        </div>

        {{-- Nombre --}}
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre"
                   class="form-control" value="{{ old('nombre') }}" required>
        </div>

        {{-- Descripcion --}}
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion"
                   class="form-control" value="{{ old('descripcion') }}" required>
        </div>

        {{-- Eje --}}
        <div class="mb-3">
            <label for="eje_id" class="form-label">Eje</label>
            <select name="eje_id" id="eje_id" class="form-control" required>
                <option value="">-- Seleccione un eje --</option>
                @foreach ($ejes as $eje)
                    <option value="{{ $eje->id }}"
                        {{ old('eje_id') == $eje->id ? 'selected' : '' }}>
                        {{ $eje->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
         <label><strong>ODS relacionados</strong></label><br>

        @foreach ($ods as $item)
            <label>
                <input type="checkbox" name="ods[]" value="{{ $item->id }}">
                {{ $item->numero }} - {{ $item->nombre }}
            </label><br>
        @endforeach
    </div>

        {{-- Botón --}}
        <button type="submit" class="btn btn-primary">
            Guardar
        </button>

        <a href="{{ route('objetivo_pnds.index') }}" class="btn btn-secondary">
            Cancelar
        </a>

    </form>

</div>

</body>
</html>