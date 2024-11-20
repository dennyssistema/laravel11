@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4">
    <div class="mb-1 hstack gap-2">
        <h2 class="mt-4=3">Curso</h2>
        <ol class="breadcrumb mb-3 mt-3 ms-auto">
            <li class="breadcrumb-item">
                <a href="#" class="text-decoration-none">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Curso</li>
        </ol>
    </div>    

    <div class="card mb-4">
        <div class="card-header hstack gap-2">
            <span>Visualizar</span>
            
            <span class="ms-auto d-md-flex flex-row">

                <a href="{{ route('classe.index', ['course' => $course->id]) }}" class="btn btn-info btn-sm me-1 mt-1 mt-md-0">Aulas</a>                

                <a href="{{ route('course.index') }}" class="btn btn-info btn-sm me-1 mt-1 mt-md-0">Listar</a>

                <a href="{{ route('course.edit', ['course' => $course->id] ) }}" class="btn btn-warning btn-sm me-1 mt-1 mt-md-0">Editar</a>

                <form action="{{ route('course.destroy', ['course' => $course->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm me-1 mt-1 mt-md-0" onclick="return confirm('Tem certeza que deseja apagar esse registro?')">Apagar</button>
                </form>

            </span>
        </div>  
        
        <div class="card-body">

            <x-alert />

            <dl class="row">
                <dt class="col-sm-3">ID: </dt>     
                <dd class="col-sm-9">{{ $course->id }}</dd>
           
                <dt class="col-sm-3">Curso: </dt>
                <dd class="col-sm-9">{{ $course->name }}</dd>  

                <dt class="col-sm-3">Preço:  </dt>                
                <dd class="col-sm-9">{{ 'R$ ' . number_format($course->price, 2, ',', '.') }}</dd>  

                <dt class="col-sm-3">Data de cadastro: </dt>                
                <dd class="col-sm-9">{{ $course->created_at }}</dd>  

                <dt class="col-sm-3">Data de alteração: </dt>                                 
                <dd class="col-sm-9">{{ $course->updated_at }}</dd>  
            </dl>

        </div>

    </div>    

</div>     

@endsection

