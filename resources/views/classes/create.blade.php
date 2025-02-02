@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4">
    <div class="mb-1 hstack gap-2">
        <h2 class="mt-4=3">Aula</h2>
        <ol class="breadcrumb mb-3 mt-3 ms-auto">
            <li class="breadcrumb-item">
                <a href="#" class="text-decoration-none">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('classe.index', ['course' => $course->id]) }}" class="text-decoration-none">Aulas</a>
            </li>
            <li class="breadcrumb-item active">Aula</li>
        </ol>
    </div>    

    <div class="card mb-4">
        <div class="card-header hstack gap-2">
            <span>Cadastrar</span>
            
            <span class="ms-auto d-md-flex flex-row">                

                <a href="{{ route('classe.index', ['course' => $course->id]) }}" class="btn btn-info btn-sm me-1 mt-1 mt-md-0">Listar</a>

            </span>
        </div>  
        
        <div class="card-body">

            <x-alert />   
            
            <form class="row g-3" action="{{ route('classe.store') }}" method="POST">
                @csrf
                @method('POST')

                <input type="hidden" name="course_id" id="course_id" value="{{ $course->id }}">

                <div class="col-12">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Curso" value="{{ old('name') }}" >
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Descrição</label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Preço" value="{{ old('description') }}" >
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </div>

            </form>

        </div>

    </div>    

</div>     

@endsection

