<footer x-data="{ open: false }" class="bg-slate-500 border-gray-100 w-full block bottom-0 top-0 z-10 text-white">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <p class="font-bold text-lg sm:text-2xl pt-5 pb-8 text-center">
            <a href="{{ route('inicio') }}">web Poemario</a>
        </p>
        <ul class="w-auto sm:flex sm:justify-center sm:space-x-12 lg:space-x-20 text-center [&>li]:py-1 sm:[&>li]:py-0">
            <li class="sm:border-2 sm:border-transparent sm:hover:border-b-white">
                <a href="{{ route('inicio') }}" class="nav-footer inline-block sm:block">Quienes Somos</a>
            </li>
            <li class="sm:border-2 sm:border-transparent sm:hover:border-b-white">
                <a href="{{ route('contacto') }}" class="nav-footer inline-block sm:block">Escríbenos</a>
            </li>
            <li class="sm:border-2 sm:border-transparent sm:hover:border-b-white">
                <a href="{{ route('contacto') }}" class="nav-footer inline-block sm:block">Mi Cuenta - Registrate</a>
            </li>
            <li class="sm:border-2 sm:border-transparent sm:hover:border-b-white">
                <a href="{{ route('contacto') }}" class="nav-footer inline-block sm:block">Formas de Pago</a>
            </li>
        </ul>

        <p class="text-white py-5 text-center font-bold">
            © 2024 - webPoemario - Todos los derechos reservados.
        </p>
    </div>
</footer>
