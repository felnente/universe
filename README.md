# Universo 2100

## Dependências

- [Docker](http://docs.docker.com/engine/installation/)
- [Docker-compose](https://docs.docker.com/compose/)

## Iniciando o Projeto

- Clone o projeto do repositório
 
``
- Acesse o diretório do projeto e rode o comando:

`docker-compose up -d`

- Acesse o container da aplicação:

`docker-compose exec php bash`

- Rode o composer install para instalar as dependências

`composer install`

- Crie o arquivo .env do projeto:

`cp .env.example .env`

- Crie a chave do laravel:

`php artisan key:generate`

- Crie o banco de dados:

`php artisan migrate`

- Acesse o diretório do projeto Front-end:

`cd universe-front`

- Instale o npm:

`npm install`

- Inicie o servidor Front-end:

`npm run serve`

- Acesse a aplicação pelo Browser:

[Universe](http://localhost:8080)

 