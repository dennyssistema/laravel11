@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4">
    <div class="mb-1 hstack gap-2">
        <h2 class="mt-4=3">Aula do curso de {{ $course->name }}</h2>
        <ol class="breadcrumb mb-3 mt-3 ms-auto">
            <li class="breadcrumb-item">
                <a href="{{ route('course.index') }}" class="text-decoration-none">Cursos</a>
            </li>
            <li class="breadcrumb-item active">Aulas</li>
        </ol>
    </div>    

    <div class="card mb-4">
        <div class="card-header hstack gap-2">
            <span>Lista de aulas</span>
                        
            <span class="ms-auto">                
                <a href="{{ route('classe.create', ['course' => $course]) }}" class="btn btn-success btn-sm">Cadastrar</a>                
            </span>
        </div>  
        
        <div class="card-body">

            <x-alert />

            <table class="table table-striped table-hover">                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Ordem</th>
                        <th>Descrição</th>                                                
                        <th>Data de cadastro</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>                

                <tbody>

                    @forelse ($classes as $classe)
                        <tr>
                            <th>{{ $classe->id }}</th>
                            <th>{{ $classe->name }}</th>
                            <th>{{ $classe->ordem }}</th>
                            <th>{{ $classe->description }}</th>                            
                            <th>{{ \Carbon\Carbon::parse($classe->created_at)->format('d/m/Y H:i:s') }}</th>
                            <th class="d-md-flex flex-row justify-content-center">                                
                                <a href="{{ route('classe.show', ['classe' => $classe->id]) }}" class="btn btn-primary btn-sm me-1 mt-1 mt-md-0">Visualizar</a>
                                <a href="{{ route('classe.edit', ['classe' => $classe->id]) }}" class="btn btn-warning btn-sm me-1 mt-1 mt-md-0">Editar</a>
                                <form action="{{ route('classe.destroy', ['classe' => $classe->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm me-1 mt-1 mt-md-0" onclick="return confirm('Tem certeza que deseja apagar esse registro?')">Apagar</button>
                                </form>
                            </th>
                        </tr>

                    @empty

                        <div class="alert alert-danger" role="alert">
                            Nenhuma aula encontrada
                        </div>                        
                    @endforelse

                </tbody>
            </table>

        </div>

    </div>    

</div>     

@endsection

