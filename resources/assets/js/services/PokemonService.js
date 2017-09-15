angular.module('PokemonService', []).factory('Pokemon', ['$resource',
  function ($resource) {
    return $resource('/api/pokemon/:pokemonId', {
      pokemonId: '@id'
    }, {
      update: {
        method: 'PUT'
      }
    });
  }
]);