<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <h3>Opciones del Sistema</h3>

                    <br>

                    <a href="{{ route('users.index') }}">👤 Usuarios</a>
                    <br><br>

                    <a href="{{ route('roles.index') }}">🛠️ Roles</a>
                    <br><br>

                    <a href="{{ route('plans.create') }}">📄 Crear Plan</a>
                    <br><br>

                    <a href="{{ route('plans.index') }}">📋 Ver Planes</a>
                    <br></br>

                    <a href="{{ route('institucions.index') }}">🏢 Instituciones</a>
                    <br><br>
                    <a href="{{ route('ejes.index') }}">listar Ejes</a>
                    <a href="{{ route('ejes.create') }}">📄 Crear ejesss</a>
                    <br><br>
                    <a href="{{ route('objetivo_pnds.index') }}">objetivoPnd</a>
                    <a href="{{ route('objetivo_pnds.create') }}">📄 Crear Objetivo Pnd</a>
                    <br><br>
                    
                    <a href="{{ route('proyectos.index') }}">📋 Ver Proyecto</a>
                    <a href="{{ route('proyectos.create') }}">📄 Crear Proyecto</a>
                    <br><br>
                    <br></br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>