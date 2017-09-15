<form name="loginForm" ng-controller="UserController" ng-submit="create()"
      class="form-horizontal" novalidate>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="nome" ng-model="nome"
                   class="form-control" placeholder="Nome">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="email" ng-model="email"
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
        <div class="col-md-3">
            <input type="senha" id="senhaConfirmation" ng-model="senhaConfirmation"
                   class="form-control" placeholder="Confirmar senha">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>
