<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">    <title>E-shop</title>
    <link rel="stylesheet" href="css/master-welcome.css">
</head>
<body>
    <div id="navbar">
        @include('layouts.header')
    </div>

    <div class="row mt-3 mb-3 mx-auto">
        <div class="col-9">
            <h2>Ofertas</h2>
            @yield('ofertas')
            <h2>Nuevos</h2>
            @yield('nuevos')
            <div class="col-3 my-auto top">
                @yield('top_sellers')
            </div>
        </div>
    </div>


    <div id="footer">
        @include('layouts.footer')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>