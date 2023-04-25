@extends('layouts.product')

@extends('layouts.navbar')

@section('title', 'Home')

@section('style')
    <style>
        .card-fix {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-card {
            position: relative;
            font-family: sans-serif;
        }

        .container-card::before,
        .container-card::after {
            content: "";
            background-color: #c3b3a34c;
            position: absolute;
        }

        .container-card::before {
            border-radius: 50%;
            width: 6rem;
            height: 6rem;
            top: 30%;
            right: 50px;
        }

        .container-card::after {
            content: "";
            position: absolute;
            height: 3rem;
            top: 8%;
            left: 17.50em;
            border: 1px solid;
            color: #fff;
        }

        .container-card .box-card {
            width: 18em;
            height: 20em;
            padding: 1rem;
            background-color: rgba(255, 255, 255, 0.074);
            border: 1px solid rgba(255, 255, 255, 0.222);
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            border-radius: .7rem;
            transition: all ease .3s;
        }

        .container-card .box-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .container-card .box-card .title {
            font-size: 2rem;
            font-weight: 500;
            letter-spacing: .1em;
            color: #fff;
        }

        .container-card .box-card div strong {
            display: block;
            margin-bottom: .5rem;
        }

        .container-card .box-card div p {
            margin: 0;
            font-size: .9em;
            font-weight: 300;
            letter-spacing: .1em;
            color: #fff
        }

        .container-card .box-card div span {
            font-size: .7rem;
            font-weight: 300;
        }

        .container-card .box-card div span:nth-child(3) {
            font-weight: 500;
            margin-right: .2rem;
        }

        .container-card .box-card:hover {
            box-shadow: 0px 0px 20px 1px #fff;
            border: 1px solid #fff;
        }

        .img-icon {
            width: 15px;
            height: 15px;
            padding-left: 3px;
            padding-bottom: 2px;
            filter: invert(1);
            transition: .5s;
            cursor: pointer;
        }

        .img-icon:hover {
            color: #999;
            transition: .5s;
        }

        .img-icon-edit {
            width: 19px;
            height: 19px;
            padding-top: 5px;
            padding-left: 1px;
            filter: invert(1);
            transition: .5s;
            cursor: pointer;
            background-size: cover;
        }

        .img-icon-edit:hover {
            color: #999;
            transition: .5s;
        }

        .img-icon-delete {
            width: 15px;
            height: 15px;
            padding-bottom: 2px;
            filter: invert(1);
            transition: .5s;
            cursor: pointer;
        }

        .img-icon-delete:hover {
            color: #999;
            transition: .5s;
        }

        .options {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }

        .button-fix {
            width: 44px;
            height: 43px;
            color: #fff;
            text-decoration: none;
            border: none;
            margin-left: 5px;
            background-color: #000;
            padding: 10px 12px;
            border-radius: 10px;
            transition: .5s;
        }

        .button-fix:hover {
            filter: brightness(60%);
            transition: .5s;
        }

        .options a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            margin-left: 5px;
            background-color: #000;
            padding-top: 2px;
            padding: 9px 12px;
            border-radius: 10px;
            transition: .5s;

        }

        .options a:hover {
            filter: brightness(60%);
            transition: .5s;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-4">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="grid-fix">
            <div class="card-fix">
                @foreach ($products as $product)
                    <div class="col-md-3 mt-4 mr-5">
                        <div class="container-card">
                            <div class="box-card">
                                <span class="title">{{ $product->modelo }}</span>
                                <img src="{{ $product->url }}">
                                <div>
                                    <form class="options" action="{{ route('products.destroy', $product->id) }}"
                                        method="POST">
                                        <a href="{{ route('products.show', $product->id) }}">Conocer Más...</a>
                                        @role('admin')
                                            <a class="button-fix" href="{{ route('products.edit', $product->id) }}">
                                                <img class="img-icon-edit"
                                                    src="https://cdn-icons-png.flaticon.com/512/1828/1828911.png">
                                            </a>
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="button-fix">
                                                <img class="img-icon-delete"
                                                    src="https://cdn-icons-png.flaticon.com/512/542/542724.png">
                                            </button>
                                        @endrole
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection
