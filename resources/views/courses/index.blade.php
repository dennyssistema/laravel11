@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4">
    <div class="mb-1 hstack gap-2">
        <h2 class="mt-4=3">Cursos</h2>
        <ol class="breadcrumb mb-3 mt-3 ms-auto">
            <li class="breadcrumb-item">
                <a href="#" class="text-decoration-none">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Cursos</li>
        </ol>
    </div>    

    <div class="card mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Lista</span>
            
            <span class="ms-auto">
                <a href="{{ route('course.create') }}" class="btn btn-success btn-sm">
                    <i class="fa-solid fa-plus"></i> Cadastrar
                </a>                
            </span>
        </div>  
        
        <div class="card-body">

            <x-alert />

            <table class="table table-striped table-hover">                
                <thead>
                    <tr>
                        <th class="d-none d-md-table-cell">ID</th>
                        <th >Nome</th>
                        <th class="d-none d-md-table-cell">Preço</th>
                        <th >Data de cadastro</th>
                        <th >Data de atualização</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>                

                <tbody>

                    @forelse ($courses as $course)
                        <tr>
                            <th class="d-none d-md-table-cell">{{ $course->id }}</th>
                            <td>{{ $course->name }}</td>
                            <td class="d-none d-md-table-cell">{{ 'R$ ' . number_format($course->price, 2, ',', '.') }}</td>
                            <td>{{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}</td>
                            <td>{{ \Carbon\Carbon::parse($course->update_at)->format('d/m/Y H:i:s') }}</td>
                            <td class="d-md-flex flex-row justify-content-center">
                                <a href="{{ route('classe.index', ['course' => $course->id]) }}" class="btn btn-info btn-sm me-1 mt-1 mt-md-0"><i class="fa-solid fa-bars"></i> Aulas</a>                        
                                <a href="{{ route('course.show', ['course' => $course->id]) }}" class="btn btn-primary btn-sm me-1 mt-1 mt-md-0"><i class="fa-solid fa-eye"></i> Visualizar</a>
                                <a href="{{ route('course.edit', ['course' => $course->id]) }}" class="btn btn-warning btn-sm me-1 mt-1 mt-md-0"><i class="fa-solid fa-pencil"></i> Editar</a>
                                <form action="{{ route('course.destroy', ['course' => $course->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm me-1 mt-1 mt-md-0" onclick="return confirm('Tem certeza que deseja apagar esse registro?')"><i class="fa-solid fa-trash-can"></i> Apagar</button>
                                </form>
                            </td>
                        </tr>

                    @empty

                        <div class="alert alert-danger" role="alert">
                            Nenhum curso encontrado
                        </div>                        
                    @endforelse

                </tbody>
            </table>

            {{ $courses->links() }}

        </div>

    </div>    

</div>     

@endsection

