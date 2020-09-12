@extends('masters.master-seller')

@section('center')

<div class="container my-3">
    <div class="row align-items-center my-5 justify-content-center">
        <div class="card border-light my-3 col-md-6">
            <div class="card-body">
                <a href="/product/{{$product->id}}"><img class="card-img-top img1" src="../{{$product->imgurl}}" alt="Card image cap"></a>
            </div>
        </div>
        <div class="card-body col-md-6 text-center">
            <p><h3>{{$product->name}}</h2></p>
            <p><h5><strong> Código del artículo:</strong> {{$product->id}}</h5></p>
            <p><strong>Precio:</strong>

            @if($product->HasDiscount())
                <strong> {{$product->price - ($product->price * ($product->discountPercent / 100))}} €</strong>
                <span>{{$product->price, 2}} €</span> - {{$product->discountPercent}}% Dcto
            @else
                <strong>{{$product->price}} €</strong>
            @endif
            </p>
            <p><span><strong>Compañía:</strong> {{$product->Company()}}</span></p>
            <p><span><strong>Descripción:</strong>
                <br>
                {{$product->description}}
            </span></p>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-warning">Añadir a la compra</button>
            </div>
        </div>
    </div>
</div>


@endsection