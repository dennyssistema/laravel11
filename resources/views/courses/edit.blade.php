@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4">
    <div class="mb-1 hstack gap-2">
        <h2 class="mt-4=3">Curso</h2>
        <ol class="breadcrumb mb-3 mt-3 ms-auto">
            <li class="breadcrumb-item">
                <a href="#" class="text-decoration-none">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('course.index') }}" class="text-decoration-none">Cursos</a>
            </li>
            <li class="breadcrumb-item active">Curso</li>
        </ol>
    </div>    

    <div class="card mb-4">
        <div class="card-header hstack gap-2">
            <span>Editar</span>
            
            <span class="ms-auto d-md-flex flex-row">                

                <a href="{{ route('course.index') }}" class="btn btn-info btn-sm me-1 mt-1 mt-md-0">Listar</a>

            </span>
        </div>  
        
        <div class="card-body">

            <x-alert />   
            
            <form class="row g-3" action="{{ route('course.update', ['course' => $course->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="col-12">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Curso" value="{{ old('name', $course->name) }}" >
                </div>

                <div class="col-12">
                    <label for="price" class="form-label">Preço</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Preço" value="{{ old('price', $course->price) }}" >
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                </div>

            </form>

        </div>

    </div>    

</div>     

@endsection

