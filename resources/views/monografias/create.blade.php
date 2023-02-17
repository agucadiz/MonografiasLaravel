<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Añadir Monografía
        </h1>
    </x-slot>

    <div class="py-6 sm:px-6">
        <div
            class="p-6 bg-white border-gray-200 flex flex-col items-center max-w-7xl mx-auto px-10 shadow-sm sm:rounded-lg">
            <form action="{{ route('monografias.store') }}" method="POST">
                @csrf

                <div class="mb-6">
                    <label class="block  mt-2 mb-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                        Título:
                        <input type="text" name="titulo" placeholder="El programador pragmático" value="{{ old('titulo') }}"
                            class="px-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required="">
                    </label>
                    @error('titulo')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror

                    <label class="block  mt-2 mb-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                        Año:
                        <input type="text" name="anyo" placeholder="2002" value="{{ old('anyo') }}"
                            class="px-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required="">
                    </label>
                    @error('anyo')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit"
                    class="mt-5 py-1 px-4 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded text-sm text-center mr-2 mb-2">
                    Añadir Monografía
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
