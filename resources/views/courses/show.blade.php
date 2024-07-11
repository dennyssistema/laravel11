@extends('layouts.admin')

@section('content')
    <h2>Detalhes do curso</h2>
        <a href="{{ route('courses.index') }}">Listar</a><br>
    <a href="{{ route('courses.edit') }}">Editar</a>

    ID: {{ $course->id }}<br>
    Nome: {{ $course->name }}<br>
    Criação: {{ $course->created_at }}<br>
    Alteração: {{ $course->updated_at }}<br>

@endsection

