## Requisitos
* PHP 8.2
* Composer

## Comando para criar um projeto laravel na pasta raiz
composer create-project laravel/laravel:^11.0 .

## Comando para iniciar o projeto / starta o server
php artisan serve

## Instalar dependências do php / projeto
composer install

## Geração de key variável de ambiente
php artisan key:generate

git clone --branch <branch_name> <repository_url>

## Migration controle de versão do banco de dados / portabilidade / rolback / 

Criação de tabela
```
php artisan make:migration create_courses_table
php artisan make:migration create_classes_table
```

Executa as migrations não executadas
```
php artisan migrate
```

Criar um controlador
```
php artisan make:controller CourseController
php artisan make:controller ClasseController
```

Criar view
```
php artisan make:view courses/show
```

Criar modelo
```
php artisan make:model Course
```

Criar seeder
```
php artisan make:seeder CourseSeeder
```

Execução da seed / cadastro de dados fake
```
php artisan db:seed
```

Criar request / validação da requisição
```
php artisan make:request StorePostRequest
```
Criar componente
```
php artisan make:component alert --view
```
Instalar pacote de auditoria do laravel
```
https://laravel-auditing.com/guide/installation.html
composer require owen-it/laravel-auditing
```
Publicar a configuração e as migratons para auditoria
```
php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="config"
```
php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="migrations"
```

Traduzir para o português

https://github.com/lucascudo/laravel-pt-BR-localization

```
php artisan lang:publish
```