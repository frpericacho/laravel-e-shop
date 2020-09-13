@extends('masters.master-cart')

@section('center')

<div class="row ml-5 mt-3 mx-auto">
    <h1 class="ml-3"> Lista de la compra </h1>
</div>
    <div class="row mt-3 mx-auto justify-content-center">
        @php
            $actualCart = session()->get('cart', null);
            $totalItems = $actualCart->iTotalItems;

        @endphp
        <ul class="list-group text-center">
            @foreach($actualCart->aItem as $product)
            <div class="row justify-content-center">
                <div class="col-7 my-4">
                    <li style="text-transform: uppercase; font-weight: 700; font-size: 1.5rem"> {{$product['name']}}</li>
                    <span class="badge">{{$product['price']}}€</span>
                    <img class="card-img-top img1" src="/{{$product['imgurl']}}" alt="Card image cap">
                    <a class="btn btn-primary" type="submit" href={{route('cart.operation', ['operation' => 'add','product' => $product['id']])}}>+</a>
                    <span class="badge badge-secondary">{{$product['iAmountItem']}}</span>
                    <a class="btn btn-danger" type="submit" href={{route('cart.operation', ['operation' => 'remove','product' => $product['id']])}}>-</a>
                    <a class="btn btn-warning" type="submit" href={{route('cart.operation', ['operation' => 'removeAll','product' => $product['id']])}}>Eliminar</a>
                </div>
            </div>
            @endforeach
        </ul>
    </div>


@endsection
