<!doctype html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <title>Pokemons Test</title>
    <script type="application/javascript" src="{{ elixir('js/all.js') }}"></script>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}"/>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}"/>
</head>
<body ng-app="todoApp" ng-controller="MainController" ng-init="getAuthenticatedUser()">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Pokemons</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li ng-class="{active:isActive('/pokemons')}">
                    <a href="/pokemons">
                        Listar  Pokemos
                    </a>
                </li>
                <li ng-class="{active:isActive('/pokemons/create')}">
                    <a href="/pokemons/create">
                        Criar Pokemon
                    </a>
                </li>
                <li ng-if="authenticatedUser == null" ng-class="{active:isActive('/auth/signup')}">
                    <a href="/auth/signup">
                        Cadastro
                    </a>
                </li>
                <li ng-if="authenticatedUser == null" ng-class="{active:isActive('/auth/login')}">
                    <a href="/auth/login">
                        Login
                    </a>
                </li>
                <li ng-if="authenticatedUser != null" ng-class="{active:isActive('/users/view/' + authenticatedUser.id)}">
                    <a ng-href="/users/view/@{{authenticatedUser.id}}">
                        @{{authenticatedUser.nome}}
                    </a>
                </li>
                <li ng-if="authenticatedUser != null" ng-click="logout()">
                    <a ng-href="#">
                        Sair
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div ng-view>
    </div>
</div>

</body>
</html>
