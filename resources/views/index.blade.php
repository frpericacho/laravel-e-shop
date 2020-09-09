<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
    <nav class="navbar bg-custom" id="navbar">
        <a class="navbar-brand">My Shop</a>
        <form class="form-inline mr-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <a class="navbar-text">Authentication</a>
        <i class="fas fa-shopping-cart"></i>
    </nav>
    <body>

        <div class="row mt-10 mb-10 mx-auto" id="cuerpo">
            <div class="col-9" id="imagenes">
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
            </div>
            <div class="col-3" id="top_seller">
                <div class="col-11">
                    <br>
                    <h2>Lo mas vendido</h2>
                    <img class="img-fluid mt-2 mb-2" src="img/uno.png">
                    <img class="img-fluid mt-2 mb-2" src="img/dos.jpg">
                    <img class="img-fluid mt-2 mb-2" src="img/tres.jpg">
                    <button class="btn btn-primary">Ver mas de los mas vendidos</button>
                </div>
            </div>
        </div>



        <!-- Footer -->
        <footer class="page-footer font-small mt-auto pt-4" id="footer">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

            <!-- Content -->
            <h5 class="text-uppercase">Footer Content</h5>
            <p>Here you can use rows and columns to organize your footer content.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
                <li>
                <a href="#!">Link 1</a>
                </li>
                <li>
                <a href="#!">Link 2</a>
                </li>
                <li>
                <a href="#!">Link 3</a>
                </li>
                <li>
                <a href="#!">Link 4</a>
                </li>
            </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
                <li>
                <a href="#!">Link 1</a>
                </li>
                <li>
                <a href="#!">Link 2</a>
                </li>
                <li>
                <a href="#!">Link 3</a>
                </li>
                <li>
                <a href="#!">Link 4</a>
                </li>
            </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Links -->
        </footer>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>