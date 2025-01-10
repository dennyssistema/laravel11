@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4">
    <div class="mb-1 hstack gap-2">
        <h2 class="mt-4=3">Cadastro de usuário</h2>
        <ol class="breadcrumb mb-3 mt-3 ms-auto">
            <li class="breadcrumb-item">
                <a href="#" class="text-decoration-none">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('user.index') }}" class="text-decoration-none">Usuários</a>
            </li>
            <li class="breadcrumb-item active">Curso</li>
        </ol>
    </div>    

    <div class="card mb-4">
        <div class="card-header hstack gap-2">
            <span>Cadastrar</span>
            
            <span class="ms-auto d-md-flex flex-row">                

                <a href="{{ route('user.index') }}" class="btn btn-info btn-sm me-1 mt-1 mt-md-0">Listar</a>

            </span>
        </div>  
        
        <div class="card-body">

            <x-alert />   
            
            <form class="row g-3" action="{{ route('user.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="col-12">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Curso" value="{{ old('name') }}" >
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" value="{{ old('email') }}" >
                </div>

                <div class="col-12">
                    <label for="passwd" class="form-label">Senha</label>
                    <input type="password" name="passwd" class="form-control" id="passwd" placeholder="Senha" value="{{ old('email') }}" >
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </div>

            </form>

        </div>

    </div>            

</div>  

 

@endsection

