<h1 ng-if="authenticatedUser">
   Olá {{authenticatedUser.nome}}, Bem vindo !
</h1>
<h1 ng-if="!authenticatedUser">
   olá, Bem vindo !
</h1>


<h2>Para testar o API usar Postman ou Advenced Rest Client</h2>

<h3> Login</h3>
<div>
    <h4> => Cadastro:  passa como parametro nome, email e senha para se cadastrar na aplicação</h4>
    <strong>http://test.yvestoupe.com/api/cadastro</strong>
    <p>Method POST</p>
    <p>Exemplo de dado  [{"nome":"john","email":"john@me.com","senha":"1234"}]</p>
</div>
<div>
    <h4> => Login:   Passar como parametro email e senha para se logar e gerar o token de acesso</h4>
    <strong>http://test.yvestoupe.com/api/login</strong>
    <p>Method POST</p>
    <p>Exemplo de dado  [{"email":"john@me.com","senha":"1234"}]</p>
</div>


<h3> Pokemon</h3>
<div>
    <h4> => Lista todos os pokemons do banco de dados</h4>
    <strong>http://test.yvestoupe.com/api/pokemons</strong>
    <p>Method GET</p>
</div>
<div>
    <h4> => Mostrar os detalhes de um pokemon</h4>
    <strong>http://test.yvestoupe.com/api/pokemon/id</strong>
    <p>Method GET</p>
</div>

<div>
    <h4> => Cadastrar um novo pokemon com nome, tipo do pokemon, poder de ataque, poder de defesa e agilidade</h4>
    <strong>http://test.yvestoupe.com/api/pokemon/add</strong>
    <p>Method POST</p>
    <p>Exemplo de dado  [{"nome":"paka","tipo":"agua","poder_ataque":"zip","poder_defesa":"zap","agilidade":"zop"}]</p>
</div>

<div>
    <h4> => Alterar os dados do pokemon;</h4>
    <strong>http://test.yvestoupe.com/api/pokemon/id</strong>
    <p>Method PUT</p>
</div>
<div>
    <h4> => Remover um pokemon</h4>
    <strong>http://test.yvestoupe.com/api/pokemon/id</strong>
    <p>Method DELETE</p>
</div>







