angular.module('UserController', []).controller('UserController', ['$scope', 'User', '$localStorage', '$location',
  function ($scope, User, $localStorage, $location) {
    $scope.login = function () {
      var user = new User({
        email: this.email,
        senha: this.senha
      });
      user.$login(function (user) {
        $localStorage.token = user.token;
        $scope.getAuthenticatedUser(user);
      }, function (err) {
        console.log(err);
      });
    };

    $scope.create = function () {
      if (this.senha != this.senhaConfirmation) {
        return alert('The senhas do not match.');
      }
      var user = new User({
        nome: this.nome,
        senha: this.senha,
        email: this.email
      });
      user.$save(function (user) {
        $localStorage.token = user.token;
        $scope.getAuthenticatedUser(user);
        $location.path('users/view/' + user.id);
      }, function (err) {
        console.log(err);
      });
    };

    $scope.findOne = function () {
      var splitPath = $location.path().split('/');
      var userId = splitPath[splitPath.length - 1];
      $scope.user = User.get({userId: userId});
    };
  }
]);
