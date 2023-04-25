@extends('layouts.product')

@extends('layouts.navbar')

@section('title', 'Agregar Producto')

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
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card mt-4 mb-4">
                    <div class="card-header text-center">
                        <h2>Agregar Nuevo Producto</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Marca input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example1">Marca</label>
                                <input type="text" id="form4Example1" class="form-control" name="marca"
                                    autocomplete="off" />
                            </div>

                            <!-- Modelo input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">Modelo</label>
                                <input type="text" id="form4Example2" class="form-control" name="modelo"
                                    autocomplete="off" />
                            </div>

                            <!-- Descripción input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example3">Descripción</label>
                                <textarea class="form-control" id="form4Example3" rows="4" name="descripcion"></textarea>
                            </div>

                            <!-- Año input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">Año</label>
                                <input type="text" id="form4Example2" class="form-control" name="año"
                                    autocomplete="off" />
                            </div>

                            <!-- Precio input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">Precio</label>
                                <input type="text" id="form4Example2" class="form-control" name="precio"
                                    autocomplete="off" />
                            </div>

                            <!-- Img input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">Imágen</label>
                                <input type="file" id="form4Example2" class="form-control" accept="image/png"
                                    name="url" />
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-danger btn-block">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
