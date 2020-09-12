@extends('masters.master-welcome')
<!-- LAYOUT: CENTER -->
@section('ofertas')
    @php
        $iCount1 = 0;
    @endphp
    @foreach($aProduct_offering as $Product_offering)
    @if(($iCount1 % 4) == 0)
    <div class="row">
    @endif


    @php
        $ProductDiscountPrice = $Product_offering->price;
    @endphp
    @if($Product_offering->hasDiscount())
        @php
            $ProductDiscountPrice -= $Product_offering->price * $Product_offering->discountPercent/100;
        @endphp
    @endif

        <div class="col text-center">
                <div class="card border-light mb-3">

            <a href="/product/{{"$Product_offering->id"}}"><img class="card-img-top img1" src="../{{"$Product_offering->imgurl"}}" alt="Card image cap"></a>
            <div class="card-body">
            <h5 class="card-title"> <b>{{"$ProductDiscountPrice"}} €</b></h5>
            @if($Product_offering->hasDiscount())
            <p class="card-text"><s>{{"$Product_offering->price"}}</s><br><small>{{"$Product_offering->discountPercent%"}}</small></p>
                @endif
            </div>
        </div>
        @if(($iCount1 % 4) == 3)
        </div>
        @endif
        @php ($iCount1++)
    </div>
    @endforeach
    </div>
@endsection
  <!------------------------------------------------------------------------>
@section('nuevos')
    @php($iCount2=0)
    @foreach($aProduct_new as $Product_new)
        @if(($iCount2 % 4) == 0)
            <div class="row">
        @endif
    <div class="text-center col">
        <div class="card border-light mb-3">
            <a href="/product/{{"$Product_new->id"}}"><img class="card-img-top img1" src="../{{"$Product_new->imgurl"}}" alt="Card image cap"></a>
            <div class="card-body">
            <h5 class="card-title"><b>{{"$Product_new->price"}}€</b></h5>
            </div>
        </div>
        @if(($iCount2 % 4) == 3)
        </div>
        @endif
        @php ($iCount2++)
    </div>
        @endforeach

    </div>
    </div>
@endsection
@section('top_sellers')
    <h2>Producto destacados</h2>
    <img class="img-fluid mt-2 mb-2" src="img/uno.png">
    <img class="img-fluid mt-2 mb-2" src="img/dos.jpg">
    <img class="img-fluid mt-2 mb-2" src="img/tres.jpg">
    <a href="sellers" class="btn btn-primary" role="button">Los mas vendidos</a>
@endsection