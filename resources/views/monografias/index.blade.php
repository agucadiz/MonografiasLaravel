<x-app-layout>
    <x-slot name="header">
        <h1 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            Monografías
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

            <!-- Tabla -->
            @if ($monografias->isNotEmpty())
                <div class="border border-gray-200 shadow">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Título
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Año
                                </th>
                                <th class="relative px-6 py-3">
                                    <span class="sr-only">Edit/Delete</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($monografias as $monografia)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            <a href=" {{-- {{ route('monografias.show', $monografia) }} --}} ">
                                                {{ $monografia->titulo }}
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            <a href=" {{-- {{ route('monografias.show', $monografia) }} --}} ">
                                                {{ $monografia->anyo }}
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 inline-flex">
                                        <form action=" {{-- {{ route('monografias.edit', $monografia) }} --}} " method="GET">
                                            <button
                                                class="py-1 px-4 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded text-sm text-center mr-2 mb-2">
                                                Editar
                                            </button>
                                        </form>
                                        <form action="{{-- {{ route('monografias.destroy', $monografia) }} --}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="py-1 px-4 text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm text-center mr-2 mb-2">
                                                Borrar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="border border-gray-200 shadow">
                    <div class="bg-green-100 rounded-lg p-4 mt-4 mb-4 text-sm text-green-700 w-96 text-center"
                        role="alert">
                        No hay álbumes.
                    </div>
                </div>
            @endif
            <div class="flex justify-center">
                <a href="{{-- {{ route('monografias.create') }} --}}">
                    <button
                        class="mt-5 py-1 px-4 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded text-sm text-center mr-2 mb-2">
                        Añadir Álbum
                    </button>
                </a>
            </div>
        </div>
        <div class="mt-3">
            {{-- {{ $monografias->links() }} --}}
        </div>
    </div>
</x-app-layout>
