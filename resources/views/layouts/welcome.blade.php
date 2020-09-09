@extends('masters.master-welcome')

@section('ofertas')
    <h1>Ofertas del dia</h1>
    <div class="row text-center" id="primera">
        <div class="col-4">
            <div class="card border-light">
                <img class="card-img-top" src="img/uno.png">
                <div class="card-body">
                    <h5 class="card-title">300€</h5>
                    <br>
                    <p>500€</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card border-light">
                <img class="card-img-top" src="img/dos.jpg">
                <div class="card-body">
                    <h5 class="card-title">300€</h5>
                    <br>
                    <p>500€</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card border-light">
                <img class="card-img-top" src="img/tres.jpg">
                <div class="card-body">
                    <h5 class="card-title">300€</h5>
                    <br>
                    <p>500€</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('nuevos')
<h1>Nuevos productos</h1>
    <div class="row text-center" id="segunda">
        <div class="col-4">
            <div class="card border-light">
                <img class="card-img-top" src="img/dos.jpg">
                <div class="card-body">
                    <h5 class="card-title">300€</h5>
                    <br>
                    <p>500€</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card border-light">
                <img class="card-img-top" src="img/tres.jpg">
                <div class="card-body">
                    <h5 class="card-title">300€</h5>
                    <br>
                    <p>500€</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card border-light">
                <img class="card-img-top" src="img/uno.png">
                <div class="card-body">
                    <h5 class="card-title">300€</h5>
                    <br>
                    <p>500€</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('top_sellers')
    <h2>Lo mas vendido</h2>
    <img class="img-fluid mt-2 mb-2" src="img/uno.png">
    <img class="img-fluid mt-2 mb-2" src="img/dos.jpg">
    <img class="img-fluid mt-2 mb-2" src="img/tres.jpg">
    <a href="sellers" class="btn btn-primary" role="button">Los mas vendidos</a>
@endsection