<x-app-layout>
    <x-slot name="header">
        <h1 class="text-center font-semibold text-xl text-gray-800 leading-tight">Bienvenido a la monografía de
            {{ $monografia->titulo }}
        </h1>
    </x-slot>

    <div class="py-6 sm:px-6">
        <div
            class="p-6 bg-white border-gray-200 flex flex-col items-center max-w-7xl mx-auto px-10 shadow-sm sm:rounded-lg">
            <!-- Sesiones -->
            @if (session()->has('error'))
                <div class="bg-red-100 p-4 mb-4 text-sm text-red-700" role="alert">
                    <span class="font-semibold">{{ session('error') }}</span>
                </div>
            @endif

            @if (session()->has('success'))
                <div class="bg-green-100 p-4 mb-4 text-sm text-green-700" role="alert">
                    <span class="font-semibold">{{ session('success') }}</span>
                </div>
            @endif
            <div class="p-6 bg-white flex flex-row max-w-7xl mx-auto px-10">

                <!-- Buttons -->
                <a href="{{ route('monografias.edit', $monografia) }}"
                    class="py-1 px-4 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded text-sm text-center mr-2 mb-2">
                    Editar
                </a>

                <form action="{{ route('monografias.destroy', $monografia) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"
                        class="py-1 px-4 text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm text-center mr-2 mb-2">Eliminar</button>
                </form>

                <a href="{{ route('monografias.index') }}"
                    class="py-1 px-4 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded text-sm text-center mr-2 mb-2">
                    Volver a monografías
                </a>
            </div>

            <!-- Show -->
            <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $monografia->titulo }}</h1>
            <p class="mb-3 font-normal text-gray-700">{{ $monografia->anyo }}</p>
        </div>
    </div>
</x-app-layout>
