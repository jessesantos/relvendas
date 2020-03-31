<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="300"></p>
<p align="center">RELATÓRIO DE VENDAS</p>
<p align="center"><a href="#">v0.01</a></p>

## Sobre o Código

Esse é um teste de códificação para uma entrevista de emprego.
Tecnologias empregas:

- [Docker](https://docs.docker.com).
- [Docker - Containers Bitnami](https://bitnami.com/stacks/containers).
- [PHP](https://laravel.com/docs/container).
- [MariaDB](https://mariadb.org).
- [Laravel 6](https://laravel.com/docs/6.x/).
- [SB Admin - Template para o Blade](https://startbootstrap.com/templates/sb-admin/).

## Instalação

 - Clone o projeto: git clone https://github.com/jessesantos/relvendas.git Relvendas
 - Instale o Docker e use o comando dentro da pasta do projeto: docker-compose up -d
    Isso vai baixar os containers da Bitname e subir um projeto Laravel
 - Execute o comando no container: docker exec relvendas_myapp_1 composer install
    Isso vai instalar as dependências
 - Execute o comando no container: docker exec relvendas_myapp_1 php artisan migrate
    Isso vai criar as tabelas necessárias para o uso do sistema no banco de dados MariaDB

## Uso

Utilize o endereço http://localhost:3000 para acessar o projeto