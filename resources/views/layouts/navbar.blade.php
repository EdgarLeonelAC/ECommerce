<header class="header-app">
    <img class="img-logo" src="https://cdn-icons-png.flaticon.com/512/2359/2359659.png">
    <nav class="navigation">
        <a class="a-app" href="/">Home</a>
        <a class="a-app" href="/info">Más Información</a>
        <a class="a-app" href="{{ route('products.index') }}">Productos</a>

        {{-- ADMIN --}}
        @role('admin')
        <a class="a-app" href="{{ route('products.create') }}">Agregar Producto</a>
        @endrole

        <a class="none" href="{{ route('logout') }}">
            <button class="btnClose">Cerrar Sesión</button>
        </a>
    </nav>
</header>