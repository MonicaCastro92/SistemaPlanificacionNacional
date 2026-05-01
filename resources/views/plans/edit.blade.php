<x-app-layout>
    <h1>Editar Plan</h1>

    <form action="{{ route('plans.update', $plan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="nombre" value="{{ $plan->nombre }}">
        <br><br>

        <input type="text" name="id_plan" value="{{ $plan->id_plan }}">
        <br><br>

         <input type="text" name="estado" value="{{ $plan->estado }}">
        <br><br>

        <input type="date" name="fecha_inicio" value="{{ $plan->fecha_inicio }}">
        <br><br>

        <input type="date" name="fecha_fin" value="{{ $plan->fecha_fin }}">
        <br><br>

        <button type="submit">Actualizar</button>
    </form>
</x-app-layout>