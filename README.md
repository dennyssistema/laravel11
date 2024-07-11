## Requisitos
* PHP 8.2
* Composer

## Comando para criar um projeto laravel na pasta raiz
composer create-project laravel/laravel:^11.0 .

## Comando para iniciar o projeto / starta o server
php artisan serve

## Instalar dependências do php
composer install

## Geração de key variável de ambiente
php artisan key:generate

git clone --branch <branch_name> <repository_url>

## Migration controle de versão do banco de dados / portabilidade / rolback / 

## Criação de tabela
php artisan make:migration create_courses_table

## Executa as migrations não executadas
php artisan migrate

## Criar um controlador
php artisan make:controller CourseController

## Criar view
php artisan make:view courses/show

## Criar modelo
php artisan make:model Course