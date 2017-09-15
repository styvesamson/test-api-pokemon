<div ng-controller="PokemonController" ng-init="find()">
    <p ng-if="!pokemons.length">
        Não há pokémons por aqui, <a href="/pokemons/create">Criar um!</a>
    </p>

    <div class="row" ng-repeat="pokemon in pokemons">
        <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-addon">
                    <input type="checkbox" ng-click="remove(pokemon)">
                </span>
                <input type="text" class="form-control" ng-model="pokemon.nome"
                       ng-blur="update(pokemon)" enter-stroke="update(pokemon)">
            </div>
        </div>
    </div>
</div>


