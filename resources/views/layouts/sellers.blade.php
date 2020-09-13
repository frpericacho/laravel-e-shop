@extends('masters.master-seller')

@section('center')
    
    <h1>Productos destacados</h1>
    <div class="row text-center mx-auto" id="primera">
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