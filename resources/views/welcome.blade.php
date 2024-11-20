<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso Laravel 11</title>
       
    </head>
    <body>
        <h1>Curso de Laravel 11</h1>
        <a href="{{ route('course.index') }}">Listar cursos</a>
    </body>
</html>
