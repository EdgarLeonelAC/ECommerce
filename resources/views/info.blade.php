@extends('layouts.login-register')

@section('title', 'Más Información')

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
            <a class="none" href="{{ route('login') }}">
                <button class="btnLogin-popup">Inicia Sesión</button>
            </a>
            @endguest
        </nav>
    </header>

    <div class="wrapper-info">
        <div class="form-box login">
            <h3>Hecho Por<br>
                <hr class="divide">
                Edgar Leonel Acevedo Cuevas
            </h3><br>
            <h1>🪐</h1>
        </div>
    </div>
