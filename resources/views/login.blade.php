@extends('layouts.login-register')

@section('title', 'Inicia Sesión')

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
                <button class="btnLogin-popup">Inicia Sesión</button>
            @endguest
        </nav>
    </header>
    <div class="wrapper">
        <span class="icon-close">
            <img class="img-icon-close" src="https://cdn-icons-png.flaticon.com/512/1828/1828778.png">
        </span>
        <div class="form-box login">
            <h2>Inicia Sesión</h2>
            <form method="post" action="{{ route('inicia-sesion') }}">
                @csrf

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

                <button type="submit" class="btn-form">Ingresar</button>
                <div class="login-register">
                    <p>¿No Tienes Una Cuenta?
                        <a class="register-link" href="{{ route('registro') }}">Regístrate</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
