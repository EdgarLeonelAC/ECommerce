@extends('layouts.product')

@section('title', 'Detalles')

@section('style')
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #e9e7e7;
        }

        .container {
            width: 600px;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            overflow: hidden;
        }

        .item {
            position: relative;
            width: 350px;
            height: 600px;
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.1);
        }

        .item-inner {
            width: 100%;
            height: 100%;
        }

        .top-section {
            width: 100%;
            height: 60%;
            background-color: #000;
            padding: 30px;
            border-radius: 30px;
            color: #fff;
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
        }


        .top-section h3 {
            font-weight: 500;
        }

        .top-section h1 {
            font-weight: 600;
        }

        .top-section h5 {
            font-weight: 400;
        }

        .bottom-section {
            padding: 30px;
        }

        .bottom-section h3 {
            font-size: 20px;
            font-weight: 200;
            margin-bottom: 10px;
        }

        .options {
            margin-top: 25px;
        }

        .options a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            margin-left: 10px;
            background-color: #000;
            padding: 10px 12px;
            border-radius: 10px;
            transition: .5s;
        }

        .options a:hover {
            color: red;
            transition: .5s;
        }

        .link {
            color: #fff;
            text-decoration: none;
            font-size: 1em;
            transition: .5s;
        }

        .link:hover {
            color: red;
            transition: .5s;
            text-decoration: none;
        }

        #firstShoe {
            width: 450px;
            position: absolute;
            top: 160px;
            left: -50px;
            transition: 1s;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="item">
            <img src="{{ $product->url }}" id="firstShoe">
            <div class="item-inner">
                <div class="top-section">
                    <div class="navigation">
                        <a href="{{ route('products.index') }}" class="link">
                            Volver
                        </a>
                    </div>
                    <h3>{{ $product->marca }}</h3>
                    <h1>{{ $product->modelo }}</h1>
                    <h6>{{ $product->año }}</h6>
                </div>
                <div class="bottom-section">
                    <h3>Descripción</h3>
                    <p>
                        {{ $product->descripcion }}
                    </p>
                    <div class="options">
                        <a href="#">$ {{ $product->precio }} M  Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
