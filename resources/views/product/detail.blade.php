@extends('masters.master-welcome')

@section('center')

<div class="row">
    <div class="card border-light mb-3">
    <div class="card-body col-sm-3">
        <a href="/product/{{$product->id}}"><img class="card-img-top img1" src="../{{$product->imgurl}}" alt="Card image cap"></a>
    </div>
</div>
    <div class="card-body col-sm-3">
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
            <a href={{route('cart.add', $product->id)}}"> <button class="btn btn-primary" type="submit" >Añadir al carrito</button></a>
        </div>
    </div>
</div>
 <div class="card-body col-sm-1"></div>
</div>
@endsection
