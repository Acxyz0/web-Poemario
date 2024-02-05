<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="sm:bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg p-6 lg:px-20 lg:py-12">
                <form action="" class="bg-gray-400 py-8 px-5 rounded-xl">
                    <div class="mb-4">
                        <label for="nombre" class="text-gray-700 text-xl font-bold mb-4 pl-3">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="rounded-md shadow-sm mt-1 w-full"
                            placeholder="Escriba su nombre">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="text-gray-700 text-xl font-bold mb-4 pl-3">Email:</label>
                        <input type="email" name="email" id="email"
                            class="rounded-md shadow-sm mt-1 block w-full" placeholder="Escriba su email">
                    </div>
                    <div class="mb-4">
                        <label for="mensaje" class="text-gray-700 text-xl font-bold mb-4 pl-3">Mensaje:</label>
                        <textarea name="mensaje" id="mensaje" class="rounded-md shadow-sm mt-1 block w-full h-36 sm:h-56"
                            placeholder="Escriba su mensaje"></textarea>
                    </div>
                    <div class="mb-4">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">Enviar
                            mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
