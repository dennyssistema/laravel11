@extends('layouts.admin')

@section('content')
    <h2>Listar os cursos</h2>    
    <a href="{{ route('courses.create') }}">Cadastrar</a><br>

    @forelse ($courses as $course)
        {{ $course->id }}<br>
        {{ $course->name }}<br>
        {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}<br>
        {{ $course->updated_at }}<br>

        <a href="{{ route('courses.show', ['course' => $course->id]) }}">Visualizar</a>
        <hr>
    @empty
        <p style="color: #f00">Nenhum curso encontrado</p>
        
    @endforelse

    {{-- Paginação --}}
    {{-- {{ $courses->links() }} --}}

@endsection

