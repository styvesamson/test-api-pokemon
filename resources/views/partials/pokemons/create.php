<h2>Cadastrar um novo pokemon</h2>
<div ng-controller="PokemonController">
    <form class="form-horizontal" ng-submit="create()" novalidate>
        <fieldset>
            <div class="form-group">
                <div class="col-md-5">
                    <input id="nome" name="nome" type="text" placeholder="Nome do seu Pokemon" class="form-control input-md"
                           ng-model="nome" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-5">
                    <input id="tipo" name="tipo" type="text" placeholder="Tipo do pokemon" class="form-control input-md"
                           ng-model="tipo">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-5">
                    <input id="poder_ataque" name="poder_ataque" type="text" placeholder="Poder de ataque" class="form-control input-md"
                           ng-model="poder_ataque">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-5">
                    <input id="poder_defesa" name="poder_defesa" type="text" placeholder="Poder de defesa" class="form-control input-md"
                           ng-model="poder_defesa">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-5">
                    <input id="agilidade" name="agilidade" type="text" placeholder="Agilidade" class="form-control input-md"
                           ng-model="agilidade">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-5">
                    <input type="submit" id="submit" name="submit" class="btn btn-primary"/>
                </div>
            </div>
        </fieldset>
    </form>
</div>

