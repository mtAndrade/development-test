<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="token" value="{{ csrf_token() }}">

    <title>Xtech-Test</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" >

    <!-- Angular Material style sheet --><!-- Latest compiled and minified CSS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

    <script src="https://unpkg.com/vue/dist/vue.js"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>
<body ng-app="app" ng-cloak>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{action("ProductController@index")}}">Produtos</a></li>
                    <li><a href="{{action("OrderController@index")}}">Ordens</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div id="main-content" class="content row">
        <div class="col s12 m12 l12">@yield('content')</div>
    </div>

    @yield("script")
</body>
</html>