<form name="loginForm" ng-controller="UserController" ng-submit="login()"
      class="form-horizontal" novalidate>
    <div class="form-group">
        <div class="col-md-3">
            <input type="email" id="email" ng-model="email"
                   class="form-control" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="senha" id="senha" ng-model="senha"
                   class="form-control" placeholder="Senha">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
</form>
