@extends('layouts.login-register')

@section('title', 'Regístrate')

@section('contenido')
    <header>
        <img class="img-logo" src="https://cdn-icons-png.flaticon.com/512/2359/2359659.png">
        <nav class="navigation">
            <a class="a-sesion" href="/">Home</a>
            <a class="a-sesion" href="/info">Más Información</a>
            @auth
                <a class="none" href="{{ route('products.index') }}">
                    <button class="btnClose">Productos</button>
                </a>
            @endauth
            @guest
                <button class="btnLogin-popup">Regístrate</button>
            @endguest
        </nav>
    </header>
    <div class="wrapper fix">
        <span class="icon-close">
            <img class="img-icon-close" src="https://cdn-icons-png.flaticon.com/512/1828/1828778.png">
        </span>
        <div class="form-box register">
            <h2>Regístrate</h2>
            <form method="post" action="{{ route('validar-registro') }}">
                @csrf

                <div class="input-box">
                    <span class="icon">
                        <img class="img-icon" src="https://cdn-icons-png.flaticon.com/512/6089/6089108.png">
                    </span>
                    <input type="text" name="name" required="required" autocomplete="off">
                    <label>Nombre</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <img class="img-icon" src="https://cdn-icons-png.flaticon.com/512/2099/2099199.png">
                    </span>
                    <input type="email" name="email" required="required" autocomplete="off">
                    <label>Correo Electrónico</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <img class="img-icon" src="https://cdn-icons-png.flaticon.com/512/483/483408.png">
                    </span>
                    <input type="password" name="password" required="required">
                    <label>Contraseña</label>
                </div>

                <button type="submit" class="btn-form">Registrar</button>
                <div class="login-register">
                    <p>¿Ya Tienes Una Cuenta?
                        <a class="login-link" href="{{ route('login') }}">Inicia Sesión</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
