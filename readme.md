💁 *Teste  API  Pokemon - Backend

# Documentaçao do API 
Api URL  (http://test.yvestoupe.com/api)

Para testar o API usar Postman ou Advenced Rest Client

Login

=> Cadastro: passa como parametro nome, email e senha para se cadastrar na aplicação

http://test.yvestoupe.com/api/cadastro
Method POST

Exemplo de dado [{"nome":"john","email":"john@me.com","senha":"1234"}]

=> Login: Passar como parametro email e senha para se logar e gerar o token de acesso

http://test.yvestoupe.com/api/login
Method POST

Exemplo de dado [{"email":"john@me.com","senha":"1234"}]

Pokemon
=> Lista todos os pokemons do banco de dados

http://test.yvestoupe.com/api/pokemons
Method GET

=> Mostrar os detalhes de um pokemon

http://test.yvestoupe.com/api/pokemon/id
Method GET

=> Cadastrar um novo pokemon com nome, tipo do pokemon, poder de ataque, poder de defesa e agilidade

http://test.yvestoupe.com/api/pokemon/add
Method POST

Exemplo de dado [{"nome":"paka","tipo":"agua","poder_ataque":"zip","poder_defesa":"zap","agilidade":"zop"}]

=> Alterar os dados do pokemon;

http://test.yvestoupe.com/api/pokemon/id
Method PUT

=> Remover um pokemon

http://test.yvestoupe.com/api/pokemon/id
Method DELETE

## Features!

- Laravel API
  - User singUp & Login
  - Full CRUD (Create, Update, Delete, List  Pokemons )
   
   
- Authentication!
  - Flexible, extensible, clean
  - Token-based ([tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth))
  - Persistent local storage
- Laravel Elixir readily configured
  - Versioning of CSS and JS files (cache busting)
  - CSS and JS files will be included automatically
- A whole ready CRUD architecture
- Comes with Bootstrap and AngularJS configured to work together at their best
- And more... have a try!

## Installation
```
git clone https://github.com/Zemke/starter-laravel-angular.git
```
```
composer install --prefer-dist
```
```npm 
npm install
```

### Database setup


Run these commands to create the tables within the database you have already created.

```
php artisan migrate:install
```
```
php artisan migrate:refresh
```

If you get an error like a `PDOException` try editing your `.env` file and change `DB_HOST=localhost` to `DB_HOST=127.0.0.1`. If that doesn’t work, file an issue on GitHub, I will be glad to help.
Source: http://stackoverflow.com/a/20733001

## Run

To provide the JS and CSS files and to keep track of changes to these files:
```
gulp && gulp watch
```

To start the PHP built-in server:
```
php -S localhost:8080 -t public/
```

Now you can browse the site  [http://localhost:8080](http://localhost:8080). 🙌

## Requirements

- PHP >= 5.4
- Composer
- Gulp
- NPM
- MySQL

