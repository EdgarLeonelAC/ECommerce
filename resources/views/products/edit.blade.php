@extends('layouts.product')

@extends('layouts.navbar')

@section('title', 'Editar Producto')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="page-fix">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops! </strong> Hay problemas con los datos que ingresaste.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row mt-4">
            <div class="col-md-4 mx-auto">
                <div class="card mt-4 mb-4">
                    <div class="card-header">
                        <h2>Editar Producto</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- Marca input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Marca</label>
                                <input type="text" id="form4Example1" class="form-control" name="marca"
                                    value="{{ $product->marca }}" />
                            </div>

                            <!-- Modelo input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">Modelo</label>
                                <input type="text" id="form4Example2" class="form-control" name="modelo"
                                    value="{{ $product->modelo }}" />
                            </div>

                            <!-- Descripción input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example3">Descripción</label>
                                <textarea class="form-control" id="form4Example3" rows="4" name="descripcion">{{ $product->descripcion }}</textarea>
                            </div>

                            <!-- Año input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">Año</label>
                                <input type="text" id="form4Example2" class="form-control" name="año"
                                    value="{{ $product->año }}" />
                            </div>

                            <!-- Precio input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">Precio</label>
                                <input type="text" id="form4Example2" class="form-control" name="precio"
                                    value="{{ $product->precio }}" />
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-danger btn-block">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
