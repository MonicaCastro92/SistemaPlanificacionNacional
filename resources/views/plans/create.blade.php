@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Crear Plan</h4>

            <a href="{{ route('plans.index') }}" class="btn btn-light btn-sm">
                Volver
            </a>
        </div>

        <div class="card-body">

            <form action="{{ route('plans.store') }}" method="POST">
                @csrf

                <div class="row">

                    <!-- NOMBRE -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <!-- CÓDIGO -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Código del Plan</label>
                        <input type="text" name="id_plan" class="form-control" required>
                    </div>

                    <!-- ESTADO -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Estado</label>
                        <input type="text" name="estado" class="form-control" required>
                    </div>

                    <!-- FECHA INICIO -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Fecha Inicio</label>
                        <input type="date" name="fecha_inicio" class="form-control" required>
                    </div>

                    <!-- FECHA FIN -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Fecha Fin</label>
                        <input type="date" name="fecha_fin" class="form-control">
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="d-flex justify-content-end gap-2 mt-3">

                    <a href="{{ route('plans.index') }}" class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-success">
                        Guardar
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection