angular.module('PokemonController', []).controller('PokemonController', ['$scope', '$location', '$routeParams', 'Pokemon',
  function ($scope, $location, $routeParams, Pokemon) {
    $scope.create = function () {
      var pokemon = new Pokemon({
        nome: this.nome,
        tipo: this.tipo,
        poder_ataque: this.poder_ataque,
        poder_defesa: this.poder_defesa,
        agilidade: this.agilidade
      });
      pokemon.$save(function (res) {
        $location.path('pokemons/view/' + res.id);
        $scope.nome = '';
      }, function (err) {
        console.log(err);
      });
    };

    $scope.find = function () {
      $scope.pokemons = Pokemon.query();
    };

    $scope.remove = function (pokemon) {
      pokemon.$remove(function (res) {
        if (res) {
          for (var i in $scope.pokemons) {
            if ($scope.pokemons[i] === pokemon) {
              $scope.pokemons.splice(i, 1);
            }
          }
        }
      }, function (err) {
        console.log(err);
      })
    };

    $scope.update = function (pokemon) {
      pokemon.$update(function (res) {
      }, function (err) {
        console.log(err);
      });
    };

    $scope.findOne = function () {
      var splitPath = $location.path().split('/');
      var pokemonId = splitPath[splitPath.length - 1];
      $scope.pokemon = Pokemon.get({pokemonId: pokemonId});
    };
  }
]);
